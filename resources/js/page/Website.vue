<template>
    <main>
        <main-header :style="{'background-color': $route.meta.headerColor}"/>
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
</style>
