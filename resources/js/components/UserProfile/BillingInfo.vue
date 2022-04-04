<template>
    <DefaultGrid :data="data" v-model="active" @input="changeSlide"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";
import MyBalance from "./BillingInfo/MyBalance";
import InputBalance from "./BillingInfo/InputBalance";
import OutputBalance from "./BillingInfo/OutputBalance";
import BillingHistory from "./BillingInfo/BillingHistory";

export default {
    name: 'billingInfo',
    components: {
        DefaultGrid
    },
    data() {
        return {
            active: null,
            data: [
                {
                    name: 'ჩემი ბალანსი',
                    key: '1',
                    component: MyBalance,
                    props: {}
                },
                {
                    name: 'ბალანსის შევსება',
                    key: '2',
                    component: InputBalance,
                    props: {}
                },
                {
                    name: 'თანხის გატანა',
                    key: '3',
                    component: OutputBalance,
                    props: {}
                },
                {
                    name: 'ტრანზაქციების ისტორია',
                    key: '4',
                    component: BillingHistory,
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
