<template>
    <DefaultGrid :data="data"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";

export default {
    name: 'accountSettings',
    components: {
        DefaultGrid
    },
    data() {
        return {
            data: [
                {
                    name: 'პაროლის შეცვლა',
                    component: '',
                    props: {}
                },
                {
                    name: 'ელ. ფოსტის შეტყობინებები',
                    component: '',
                    props: {}
                },
                {
                    name: 'ანგარიშის დახურვა',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
