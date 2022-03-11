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
                    component: '',
                    props: {}
                },
                {
                    name: 'შეკვეთების ისტორია',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
