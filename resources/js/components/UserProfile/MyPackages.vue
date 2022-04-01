<template>
    <DefaultGrid :data="data" v-model="active" @input="changeSlide"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";
import CurrentOffers from "./MyPackages/CurrentOffers";
import OfferHistory from "./MyPackages/OfferHistory";

export default {
    name: 'myPackages',
    components: {
        DefaultGrid
    },
    data() {
        return {
            active: null,
            data: [
                {
                    name: 'მიმდინარე შეკვეთები',
                    key: '1',
                    component: CurrentOffers,
                    props: {}
                },
                {
                    name: 'შეკვეთების ისტორია',
                    key: '2',
                    component: OfferHistory,
                    props: {}
                }
            ]
        }
    },
    mounted() {
        this.active = this.$route.query.active || '1'
    },
    methods: {
        changeSlide(key) {
            this.$router.replace({query: {...this.$route.query, active: key}})
        }
    }
}
</script>
