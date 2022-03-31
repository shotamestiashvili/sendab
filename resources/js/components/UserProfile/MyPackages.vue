<template>
    <DefaultGrid :data="data"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";

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
                    component: '',
                    props: {}
                },
                {
                    name: 'შეკვეთების ისტორია',
                    key: '2',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
