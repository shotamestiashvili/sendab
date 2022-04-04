<template>
    <div class="create-road">
        <CustomSection title="მიუთითე მარშრუტი">
            <DoubleInput v-if="data.source" :title="data.source" :body="data.source"/>
            <DoubleInput v-if="data.route1" :title="data.route1" :body="data.route1"/>
            <DoubleInput v-if="data.route2" :title="data.route2" :body="data.route2"/>
            <DoubleInput v-if="data.route3" :title="data.route3" :body="data.route3"/>
            <DoubleInput v-if="data.route4" :title="data.route4" :body="data.route4"/>
            <DoubleInput v-if="data.route5" :title="data.route5" :body="data.route5"/>
            <DoubleInput v-if="data.route6" :title="data.route6" :body="data.route6"/>
            <DoubleInput v-if="data.destination" :title="data.destination" :body="data.destination"/>
            <div class="add-road" @click="addRoad"><p>+</p></div>
        </CustomSection>
        <CustomSection title="აირჩიე სატრანსპორტო საშუალება">
            <CustomInput @input="inputAirplane" :value="data.airplane" :compVal="true" title="თვითმფრინავი"/>
            <CustomInput @input="inputCar" :value="data.car" :compVal="true" title="ავტომობილი"/>
            <CustomInput @input="inputMinibus" :value="data.minibus" :compVal="true" title="ფურგონი"/>
            <CustomInput @input="inputRailway" :value="data.railway" :compVal="true" title="მატარებელი"/>
            <CustomInput @input="inputShip" :value="data.ship" :compVal="true" title="გემი"/>
            <CustomInput @input="inputMotorcycle" :value="data.motorcycle" :compVal="true" title="მოტოციკლეტი"/>
            <CustomInput @input="inputBicycle" :value="data.bicycle" :compVal="true" title="ველოსიპედი"/>
            <CustomInput @input="inputBus" :value="data.bus" :compVal="true" title="ავტობუსი"/>
            <CustomInput @input="inputTaxi" :value="data.taxi" :compVal="true" title="ტაქსი"/>
            <CustomInput @input="inputTruck" :value="data.truck" :compVal="true" title="ტრაილერი"/>
        </CustomSection>
        <CustomSection title="შეიყვანეთ ავტომობილის მონაცემები" v-if="data.car">
            <TitledInput @input="inputPlateNumber" :value="data.plate_number" title="სანომრე ნიშანი"/>
            <TitledInput @input="inputComment" :value="data.comment" title="მანქანის მოდელი"/>
        </CustomSection>
    </div>

</template>

<script>
import CustomSection from "./CustomSection";
import DoubleInput from "./DoubleInput";
import CustomInput from "./CustomInput";
import TitledInput from "./TitledInput";

export default {
    name: 'createRoad',
    components: {
        CustomSection,
        DoubleInput,
        CustomInput,
        TitledInput
    },
    props: {
        data: {
            type: Object,
            default() {
                return {
                    source: null,
                    route1: null,
                    route2: null,
                    route3: null,
                    route4: null,
                    route5: null,
                    route6: null,
                    destination: null,
                    airplane: false,
                    car: false,
                    minibus: false,
                    railway: false,
                    ship: false,
                    motorcycle: false,
                    bicycle: false,
                    bus: false,
                    taxi: false,
                    truck: false,
                    plate_number: null,
                    comment: null
                }
            }
        }
    },
    methods: {
        inputAirplane(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: value, car: false, minibus: false, railway: false, ship: false,
                motorcycle: false, bicycle: false, bus: false, taxi: false, truck: false
            })
        },
        inputCar(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: value, minibus: false, railway: false, ship: false,
                motorcycle: false, bicycle: false, bus: false, taxi: false, truck: false
            })
        },
        inputMinibus(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: value, railway: false, ship: false,
                motorcycle: false, bicycle: false, bus: false, taxi: false, truck: false
            })
        },
        inputRailway(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: value, ship: false,
                motorcycle: false, bicycle: false, bus: false, taxi: false, truck: false
            })
        },
        inputShip(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: false, ship: value,
                motorcycle: false, bicycle: false, bus: false, taxi: false, truck: false
            })
        },
        inputMotorcycle(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: false, ship: false,
                motorcycle: value, bicycle: false, bus: false, taxi: false, truck: false
            })
        },
        inputBicycle(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: false, ship: false,
                motorcycle: false, bicycle: value, bus: false, taxi: false, truck: false
            })
        },
        inputBus(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: false, ship: false,
                motorcycle: false, bicycle: false, bus: value, taxi: false, truck: false
            })
        },
        inputTaxi(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: false, ship: false,
                motorcycle: false, bicycle: false, bus: false, taxi: value, truck: false
            })
        },
        inputTruck(value) {
            this.$emit('update:data', {
                ...this.data,
                airplane: false, car: false, minibus: false, railway: false, ship: false,
                motorcycle: false, bicycle: false, bus: false, taxi: false, truck: value
            })
        },
        addRoad() {
            this.$emit('roadSelector')
        },
        inputPlateNumber(value) {
            this.$emit('update:data', {...this.data, plate_number: value})
        },
        inputComment(value) {
            this.$emit('update:data', {...this.data, comment: value})
        }
    }
}
</script>

<style scoped lang="scss">
.create-road {
    .add-road {
        height: 63px;
        width: 68px;
        background: #FFFFFF;
        border: 2px solid #C2DDE4;
        box-sizing: border-box;
        cursor: pointer;
        display: inline-block;
        margin: 0 10px 10px 0;
        position: relative;
        border-radius: 15px;
        line-height: 59px;
        vertical-align: top;

        p {
            font-weight: 700;
            font-size: 30px;
            color: #1D519A;
            position: absolute;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        &:hover {
            border-color: #00D1FF;
        }
    }
}
</style>
