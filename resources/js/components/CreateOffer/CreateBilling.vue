<template>
    <div class="create-billing">
        <CustomSection title="მიუთითე კილოგრამის საშუალო ღირებულება">
            <TitledInput title="მიუთითე ფასი" type="number" />
            <CustomInput v-model="price" :compVal="1" title="1 ლარი" />
            <CustomInput v-model="price" :compVal="5" title="5 ლარი" />
            <CustomInput v-model="price" :compVal="10" title="10 ლარი" />
        </CustomSection>
        <CustomSection title="შეკვეთის მიახლოებითი ფასი">
            <TitledInput title="მიუთითე ფასი" type="number" />
            <CustomInput v-model="weightPrice" :compVal="1" title="1 ლარი" />
            <CustomInput v-model="weightPrice" :compVal="5" title="5 ლარი" />
            <CustomInput v-model="weightPrice" :compVal="10" title="10 ლარი" />
        </CustomSection>
        <CustomSection title="გსურს თუ არა მომხმარებელთან ფასზე მორიგება?">
            <CustomInput v-model="boarder" :compVal="1" title="დიახ" />
            <CustomInput v-model="boarder" :compVal="2" title="არა" />
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
    data() {
        return {
            price: 1,
            weightPrice: 1,
            boarder: 1
        }
    }
}
</script>

<style scoped lang="scss">
.create-billing {

}
</style>
