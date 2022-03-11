<template>
    <DefaultGrid :data="data"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";

export default {
    name: 'myProfile',
    components: {
        DefaultGrid
    },
    data() {
        return {
            data: [
                {
                    name: 'ზოგადი ინფორმაცია',
                    component: '',
                    props: {}
                },
                {
                    name: 'პროფილის რედაქტირება',
                    component: '',
                    props: {}
                },
                {
                    name: 'შეფასებები',
                    component: '',
                    props: {}
                },
                {
                    name: 'ვერიფიკაცია',
                    component: '',
                    props: {}
                }
            ]
        }
    }
}
</script>
