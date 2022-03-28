<template>
    <div class="create-billing">
        <CustomSection title="მიუთითე კილოგრამის საშუალო ღირებულება">
            <TitledInput @input="inputPriceSum" :value="data.price_sum" title="მიუთითე ფასი" type="number"/>
            <CustomInput @input="inputPriceSum" :value="data.price_sum" compVal="1" title="1 ლარი"/>
            <CustomInput @input="inputPriceSum" :value="data.price_sum" compVal="5" title="5 ლარი"/>
            <CustomInput @input="inputPriceSum" :value="data.price_sum" compVal="10" title="10 ლარი"/>
        </CustomSection>
        <CustomSection title="შეკვეთის მიახლოებითი ფასი">
            <TitledInput @input="inputPriceKG" :value="data.price_kg" title="მიუთითე ფასი" type="number"/>
            <CustomInput @input="inputPriceKG" :value="data.price_kg" compVal="1" title="1 ლარი"/>
            <CustomInput @input="inputPriceKG" :value="data.price_kg" compVal="5" title="5 ლარი"/>
            <CustomInput @input="inputPriceKG" :value="data.price_kg" compVal="10" title="10 ლარი"/>
        </CustomSection>
        <CustomSection title="გსურს თუ არა მომხმარებელთან ფასზე მორიგება?">
            <CustomInput v-model="boarder" :compVal="1" title="დიახ"/>
            <CustomInput v-model="boarder" :compVal="2" title="არა"/>
        </CustomSection>
    </div>

</template>

<script>
import CustomSection from "./CustomSection";
import CustomInput from "./CustomInput";
import TitledInput from "./TitledInput";

export default {
    name: 'createBilling',
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
                    price_sum: null,
                    price_kg: null
                }
            }
        }
    },
    data() {
        return {
            boarder: 1
        }
    },
    methods: {
        inputPriceSum(value) {
            this.$emit('update:data', {...this.data, price_sum: value})
        },
        inputPriceKG(value) {
            this.$emit('update:data', {...this.data, price_kg: value})
        }
    }
}
</script>

<style scoped lang="scss">
.create-billing {

}
</style>
