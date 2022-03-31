<template>
    <main :style="{'background-color': $route.meta.backgroundColor}">
        <main-header :headerStyle="$route.meta.headerStyle"/>
        <router-view/>
        <main-footer/>
    </main>

</template>

<script>
import header from "../components/UI/Header";
import footer from "../components/UI/Footer";

export default {
    name: 'website',
    components: {
        mainHeader: header,
        mainFooter: footer
    }
}
</script>

<style scoped lang="scss">
main {
    position: relative;
    cursor: default;
    min-height: 100vh;
    padding: 0 0 330px;
    background-color: #DDEFF3;
}

@media only screen and (max-width: 1000px) {

    main {
        padding: 0 0 510px;
    }
}
</style>
