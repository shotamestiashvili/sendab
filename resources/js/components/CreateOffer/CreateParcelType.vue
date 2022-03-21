<template>
    <div class="create-parcel-type">
        <CustomSection title="მონიშნე ბარგის სახეობა, რომლის წაღებაც შეგიძლია">
            <CustomInput v-model="lagType" :compVal="1" title="არ აქვს მნიშვნელობა" />
            <CustomInput v-model="lagType" :compVal="2" title="ლეპტოპი" />
            <CustomInput v-model="lagType" :compVal="3" title="სმარტფონი" />
            <CustomInput v-model="lagType" :compVal="4" title="ტანსაცმელი" />
        </CustomSection>
        <CustomSection title="მონიშნე, დაახლოებით რამდენი კილოგრამის წაღებას შეძლებ">
            <CustomInput v-model="weight" :compVal="1" title="1კგ" />
            <CustomInput v-model="weight" :compVal="2" title="2კგ" />
            <CustomInput v-model="weight" :compVal="3" title="5კგ" />
            <CustomInput v-model="weight" :compVal="4" title="10კგ" />
            <CustomInput v-model="weight" :compVal="5" title="20კგ" />
            <CustomInput v-model="weight" :compVal="6" title="20კგ+" />
        </CustomSection>
        <CustomSection title="მიუთითე სავარაუდო სივრცე, რისი შეთავაზებაც შეგიძლია">
            <TitledInput title="სიგრძე" />
            <TitledInput title="სიგანე" />
            <TitledInput title="სიმაღლე" />
        </CustomSection>
        <CustomSection title="აირჩიეთ ბარგის მიღების ფორმა">
            <CustomInput v-model="getType" :compVal="1" title="საწყობიდან გატანა" />
            <CustomInput v-model="getType" :compVal="2" title="ხელზე გამორთმევა" />
        </CustomSection>
        <CustomSection title="აირჩიე, რომელი ფილიალებიდან შეგიძლია ბარგის აღება" v-if="getType === 1">

        </CustomSection>
        <CustomSection title="აირჩიე ბარგის  მიტანის ადგილი" v-if="getType === 1">

        </CustomSection>
        <CustomSection title="სად გირჩევნია შეხვედრა" v-if="getType === 2">
            <CustomInput v-model="locType" :compVal="1" title="ადგილზე მისვლა" />
            <CustomInput v-model="locType" :compVal="2" title="ლოკაციის შეთანხმება" />
        </CustomSection>
        <CustomSection title="აირჩიე სავარაუდო ადგილმდებარეობა" v-if="getType === 2">
            <CustomInput v-model="location" :compVal="1" title="თბილისი" />
            <CustomInput v-model="location" :compVal="2" title="რუსთავი" />
            <CustomInput v-model="location" :compVal="3" title="ბათუმი" />
            <CustomInput v-model="location" :compVal="4" title="ქუთაისი" />
            <CustomInput v-model="location" :compVal="5" title="რუსთავი" />
            <CustomInput v-model="location" :compVal="6" title="+" />
        </CustomSection>
    </div>

</template>

<script>
import CustomSection from "./CustomSection";
import CustomInput from "./CustomInput";
import TitledInput from "./TitledInput";

export default {
    name: 'createParcelType',
    components: {
        CustomSection,
        CustomInput,
        TitledInput
    },
    data() {
        return {
            lagType: 1,
            weight: 1,
            getType: 1,
            locType: 1,
            location: 1,
        }
    }
}
</script>

<style scoped lang="scss">
.create-parcel-type {

}
</style>
