<template>
    <DefaultGrid :data="data"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";

export default {
    name: 'billingInfo',
    components: {
        DefaultGrid
    },
    data() {
        return {
            data: [
                {
                    name: 'ჩემი ბალანსი',
                    component: '',
                    props: {}
                },
                {
                    name: 'ბალანსის შევსება',
                    component: '',
                    props: {}
                },
                {
                    name: 'თანხის გატანა',
                    component: '',
                    props: {}
                },
                {
                    name: 'ტრანზაქციების ისტორია',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
