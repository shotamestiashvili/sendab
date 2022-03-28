<template>
    <div class="create-road">
        <CustomSection title="მიუთითე მარშრუტი">

        </CustomSection>
        <CustomSection title="აირჩიე სატრანსპორტო საშუალება">
            <CustomInput @input="inputAirplane" :value="data.airplane" :compVal="true" title="თვითმფრინავი"/>
            <CustomInput @input="inputCar" :value="data.car" :compVal="true" title="ავტომობილი"/>
            <CustomInput @input="inputMinibus" :value="data.minibus" :compVal="true" title="ფურგონი"/>
            <CustomInput @input="inputRailway" :value="data.railway" :compVal="true" title="მატარებელი"/>
        </CustomSection>
        <CustomSection title="შეიყვანეთ ავტომობილის მონაცემები" v-if="data.car">
            <TitledInput title="სანომრე ნიშანი"/>
            <TitledInput title="მანქანის მოდელი"/>
        </CustomSection>
    </div>

</template>

<script>
import CustomSection from "./CustomSection";
import CustomInput from "./CustomInput";
import TitledInput from "./TitledInput";

export default {
    name: 'createRoad',
    components: {
        CustomSection,
        CustomInput,
        TitledInput
    },
    props: {
        data: {
            type: Object,
            default() {
                return {
                    airplane: false,
                    car: false,
                    minibus: false,
                    railway: false
                }
            }
        }
    },
    methods: {
        inputAirplane(value) {
            this.$emit('update:data', {...this.data, airplane: value, car: false, minibus: false, railway: false})
        },
        inputCar(value) {
            this.$emit('update:data', {...this.data, airplane: false, car: value, minibus: false, railway: false})
        },
        inputMinibus(value) {
            this.$emit('update:data', {...this.data, airplane: false, car: false, minibus: value, railway: false})
        },
        inputRailway(value) {
            this.$emit('update:data', {...this.data, airplane: false, car: false, minibus: false, railway: value})
        }
    }
}
</script>

<style scoped lang="scss">
.create-road {

}
</style>
