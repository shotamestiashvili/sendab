<template>
    <DefaultGrid :data="data" v-model="active" @input="changeSlide"/>

</template>

<script>
import DefaultGrid from "./DefaultGrid";
import GeneralInfo from "./MyProfile/GeneralInfo";
import EditProfile from "./MyProfile/EditProfile";
import UserRating from "./MyProfile/UserRating";
import UserVerify from "./MyProfile/UserVerify";

export default {
    name: 'myProfile',
    components: {
        DefaultGrid
    },
    data() {
        return {
            active: null,
            data: [
                {
                    name: 'ზოგადი ინფორმაცია',
                    key: '1',
                    component: GeneralInfo,
                    props: {}
                },
                {
                    name: 'პროფილის რედაქტირება',
                    key: '2',
                    component: EditProfile,
                    props: {}
                },
                {
                    name: 'შეფასებები',
                    key: '3',
                    component: UserRating,
                    props: {}
                },
                {
                    name: 'ვერიფიკაცია',
                    key: '4',
                    component: UserVerify,
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
