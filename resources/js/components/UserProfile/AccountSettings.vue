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
                    key: '1',
                    component: '',
                    props: {}
                },
                {
                    name: 'ელ. ფოსტის შეტყობინებები',
                    key: '2',
                    component: '',
                    props: {}
                },
                {
                    name: 'ანგარიშის დახურვა',
                    key: '3',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
