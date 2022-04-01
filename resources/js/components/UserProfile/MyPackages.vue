<template>
    <DefaultGrid :data="data"/>

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
    }
}
</script>
