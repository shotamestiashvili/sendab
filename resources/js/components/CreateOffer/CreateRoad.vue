<template>
    <div class="create-road">
        <CustomSection title="მიუთითე მარშრუტი">
            <DoubleInput v-if="data.road1" :title="data.road1" :body="data.road1"/>
            <DoubleInput v-if="data.road2" :title="data.road2" :body="data.road2"/>
            <DoubleInput v-if="data.road3" :title="data.road3" :body="data.road3"/>
            <DoubleInput v-if="data.road4" :title="data.road4" :body="data.road4"/>
            <DoubleInput v-if="data.road5" :title="data.road5" :body="data.road5"/>
            <DoubleInput v-if="data.road6" :title="data.road6" :body="data.road6"/>
            <DoubleInput v-if="data.road7" :title="data.road7" :body="data.road7"/>
            <DoubleInput v-if="data.road8" :title="data.road8" :body="data.road8"/>
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
                    road1: null,
                    road2: null,
                    road3: null,
                    road4: null,
                    road5: null,
                    road6: null,
                    road7: null,
                    road8: null,
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
