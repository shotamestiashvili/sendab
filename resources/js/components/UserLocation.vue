<template>
    <section class="ui two column centered grid">
        <div class="column">
            <form class="ui segment large form">
                <div class="field">
                    <div class="ui right icon input large">
                        <input
                            type="text"
                            placeholder="Enter your address"
                            v-model="address"
                            ref="autocomplete"
                        />
                        <i class="dot circle link icon" @click="locatorButtonPressed"></i>
                    </div>
                </div>
            </form>
        </div>
    </section>
</template>

<script>
export default {
    data() {
        return {
            address: "",
        };
    },
    methods: {
        locatorButtonPressed() {
            navigator.geolocation.getCurrentPosition(
                position => {
                    this.getStreetAddressFrom(position.coords.latitude, position.coords.longitude)
                },
                error => {
                    console.log(error.message);
                }
            );
        },


        async getStreetAddressFrom(lat, long) {
            try {
                var {
                    data
                } = await axios.get(
                    "https://maps.googleapis.com/maps/api/geocode/json?latlng=" +
                    lat +
                    "," +
                    long +
                    "&key={AIzaSyAib6sRndjTMRdvdcvPc4zxcQHcW1J84nY}"
                );
                if (data.error_message) {
                    console.log(data.error_message)
                } else {
                    this.address = data.results[0].formatted_address;
                }
            } catch (error) {
                console.log(error.message);
            }
        }
    }
};
</script>
