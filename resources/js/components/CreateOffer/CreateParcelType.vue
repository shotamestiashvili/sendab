<template>
    <div class="create-parcel-type">
        <CustomSection title="მონიშნე ბარგის სახეობა, რომლის წაღებაც შეგიძლია">
            <CustomInput
                @input="inputItem($t('არ აქვს მნიშვნელობა'))"
                :value="items.includes($t('არ აქვს მნიშვნელობა'))"
                :compVal="true"
                title="არ აქვს მნიშვნელობა"
            />
            <CustomInput
                @input="inputItem($t('ლეპტოპი'))"
                :value="items.includes($t('ლეპტოპი'))"
                :compVal="true"
                title="ლეპტოპი"
            />
            <CustomInput
                @input="inputItem($t('სმარტფონი'))"
                :value="items.includes($t('სმარტფონი'))"
                :compVal="true"
                title="სმარტფონი"
            />
            <CustomInput
                @input="inputItem($t('ტანსაცმელი'))"
                :value="items.includes($t('ტანსაცმელი'))"
                :compVal="true"
                title="ტანსაცმელი"
            />
        </CustomSection>
        <CustomSection title="მონიშნე, დაახლოებით რამდენი კილოგრამის წაღებას შეძლებ">
            <TitledInput @input="inputWeight" :value="data.weight" title="შეიყვანე წონა" type="number"/>
            <CustomInput @input="inputWeight" :value="data.weight" compVal="1" title="1კგ"/>
            <CustomInput @input="inputWeight" :value="data.weight" compVal="2" title="2კგ"/>
            <CustomInput @input="inputWeight" :value="data.weight" compVal="5" title="5კგ"/>
            <CustomInput @input="inputWeight" :value="data.weight" compVal="10" title="10კგ"/>
            <CustomInput @input="inputWeight" :value="data.weight" compVal="20" title="20კგ"/>
        </CustomSection>
        <CustomSection title="მიუთითე სავარაუდო სივრცე, რისი შეთავაზებაც შეგიძლია">
            <TitledInput @input="inputWidth" :value="data.width" title="სიგრძე"/>
            <TitledInput @input="inputLength" :value="data.length" title="სიგანე"/>
            <TitledInput @input="inputHeight" :value="data.height" title="სიმაღლე"/>
        </CustomSection>
        <CustomSection title="აირჩიეთ ბარგის მიღების ფორმა">
            <CustomInput @input="inputStore" :value="data.store" :compVal="true" title="საწყობიდან გატანა"/>
            <CustomInput @input="inputHand" :value="data.hand" :compVal="true" title="ხელზე გამორთმევა"/>
        </CustomSection>
        <CustomSection title="აირჩიე, რომელი ფილიალებიდან შეგიძლია ბარგის აღება" v-if="data.store">

        </CustomSection>
        <CustomSection title="აირჩიე ბარგის  მიტანის ადგილი" v-if="data.store">

        </CustomSection>
        <CustomSection title="სად გირჩევნია შეხვედრა" v-if="data.hand">
            <CustomInput v-model="locType" :compVal="1" title="ადგილზე მისვლა"/>
            <CustomInput v-model="locType" :compVal="2" title="ლოკაციის შეთანხმება"/>
        </CustomSection>
        <CustomSection title="აირჩიე სავარაუდო ადგილმდებარეობა" v-if="data.hand">
            <CustomInput v-model="location" :compVal="1" title="თბილისი"/>
            <CustomInput v-model="location" :compVal="2" title="რუსთავი"/>
            <CustomInput v-model="location" :compVal="3" title="ბათუმი"/>
            <CustomInput v-model="location" :compVal="4" title="ქუთაისი"/>
            <CustomInput v-model="location" :compVal="5" title="რუსთავი"/>
            <CustomInput v-model="location" :compVal="6" title="+"/>
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
    props: {
        data: {
            type: Object,
            default() {
                return {
                    item1: null,
                    item2: null,
                    item3: null,
                    item4: null,
                    item5: null,
                    item6: null,
                    item7: null,
                    item8: null,
                    weight: null,
                    width: null,
                    length: null,
                    height: null,
                    store: false,
                    hand: false
                }
            }
        }
    },
    data() {
        return {
            lagType: 1,
            getType: 1,
            locType: 1,
            location: 1,
        }
    },
    computed: {
        items() {
            return [
                this.data.item1, this.data.item2, this.data.item3, this.data.item4,
                this.data.item5, this.data.item6, this.data.item7, this.data.item8
            ]
        }
    },
    methods: {
        inputWeight(value) {
            this.$emit('update:data', {...this.data, weight: value})
        },
        inputWidth(value) {
            this.$emit('update:data', {...this.data, width: value})
        },
        inputLength(value) {
            this.$emit('update:data', {...this.data, length: value})
        },
        inputHeight(value) {
            this.$emit('update:data', {...this.data, height: value})
        },
        inputStore(value) {
            this.$emit('update:data', {...this.data, store: value, hand: false})
        },
        inputHand(value) {
            this.$emit('update:data', {...this.data, store: false, hand: value})
        },
        inputItem(value) {
            this.$emit('inputItem', value)
        }
    }
}
</script>

<style scoped lang="scss">
.create-parcel-type {

}
</style>
