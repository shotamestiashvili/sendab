<template>
    <router-view></router-view>

</template>

<script>
import {ajax, apiUrls} from "./store/urls";
import tokens from "./utils/tokens";

export default {
    name: "App",
    mounted() {
        const meta = document.createElement('meta');
        meta.name = "viewport";
        meta.content = "width=device-width, initial-scale=1";
        document.head.appendChild(meta);

        ajax.get(apiUrls.sanctumToken).catch(() => {}).finally(() => {
            if (tokens.isAuthorized) {
                this.$store.dispatch('user/getUserData')
            }
        })

        this.$i18n.locale = ['ge', 'en', 'de'].includes(localStorage.getItem('lang')) ? localStorage.getItem('lang') : 'ge'
    }
};
</script>

<style lang="scss">
* {
    font-family: Myriad GEO, Source Sans Pro, Arial, Helvetica, sans-serif !important;
}
</style>

