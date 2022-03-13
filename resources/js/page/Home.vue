<template>
    <div class="home-page">
        <intro-component/>
        <popular-roads/>
        <div class="divider">
            <img src="/images/divider-wave.png" alt="">
        </div>
        <how-it-works/>
        <client-rating/>
    </div>

</template>

<script>
import introComponent from '../components/Home/introComponent'
import popularRoads from "../components/Home/popularRoads";
import howItWorks from "../components/Home/howItWorks";
import clientRating from "../components/Home/clientRating";

export default {
    name: 'Home',
    components: {
        introComponent,
        popularRoads,
        howItWorks,
        clientRating
    }
}
</script>

<style scoped lang="scss">
.home-page {
    .divider {
        padding: 60px 0 0;
        height: fit-content;

        img {
            width: 100%;
            margin: 0 0 -10px;
        }
    }
}
</style>
