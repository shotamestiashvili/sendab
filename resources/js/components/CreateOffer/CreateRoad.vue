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
        </CustomSection>
        <CustomSection title="შეიყვანეთ ავტომობილის მონაცემები" v-if="data.car">
            <TitledInput title="სანომრე ნიშანი"/>
            <TitledInput title="მანქანის მოდელი"/>
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
        },
        addRoad() {
            this.$emit('roadSelector')
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
