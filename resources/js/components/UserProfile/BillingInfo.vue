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
                    key: '1',
                    component: '',
                    props: {}
                },
                {
                    name: 'ბალანსის შევსება',
                    key: '2',
                    component: '',
                    props: {}
                },
                {
                    name: 'თანხის გატანა',
                    key: '3',
                    component: '',
                    props: {}
                },
                {
                    name: 'ტრანზაქციების ისტორია',
                    key: '4',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
