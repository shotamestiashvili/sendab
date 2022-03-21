<template>
    <div class="create-road">
        <CustomSection title="მიუთითე მარშრუტი">

        </CustomSection>
        <CustomSection title="აირჩიე სატრანსპორტო საშუალება">
            <CustomInput v-model="transportType" :compVal="1" title="თვითმფრინავი" />
            <CustomInput v-model="transportType" :compVal="2" title="ავტომობილი" />
            <CustomInput v-model="transportType" :compVal="3" title="ფურგონი" />
            <CustomInput v-model="transportType" :compVal="4" title="მატარებელი" />
        </CustomSection>
        <CustomSection title="შეიყვანეთ ავტომობილის მონაცემები" v-if="transportType === 2">
            <TitledInput title="სანომრე ნიშანი" />
            <TitledInput title="მანქანის მოდელი" />
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
    data() {
        return {
            transportType: 1,
        }
    }
}
</script>

<style scoped lang="scss">
.create-road {

}
</style>
