<template>
    <div class="send-package">
        <FilterSection :transportFilters="transportFilters" @selectedTransportFilter="selectedTransportFilter"/>
        <section class="results-section">
            <div class="results-list">
                <PackageCard v-for="(result, i) in filteredList" :data="result" :key="`result${i}`"/>
            </div>
        </section>
    </div>

</template>

<script>
import FilterSection from "../components/SendPackage/FilterSection";
import PackageCard from "../components/SendPackage/PackageCard";
import {authAjax, apiUrls} from "../store/urls";
import {mapGetters} from "vuex";

export default {
    name: 'SendPackage',
    components: {
        FilterSection,
        PackageCard
    },
    data() {
        return {
            selectedTransport: null,
            searchResults: []
        }
    },
    computed: {
        ...mapGetters({apiConnected: 'login/apiConnected'}),
        filteredList() {
            return this.selectedTransport ? this.searchResults.filter(offer => offer[this.selectedTransport][0]) : this.searchResults
        },
        transportFilters() {
            return [
                {
                    id: null,
                    name: 'სატრასპორტო საშუალებები',
                    count: this.searchResults.length,
                    active: this.selectedTransport === null
                },
                {
                    id: 'airplane',
                    name: 'თვითმფრინავი',
                    count: this.searchResults.filter(offer => offer.airplane[0]).length,
                    active: this.selectedTransport === 1
                },
                {
                    id: 'car',
                    name: 'ავტომობილი',
                    count: this.searchResults.filter(offer => offer.car[0]).length,
                    active: this.selectedTransport === 2
                },
            ]
        }
    },
    watch: {
        apiConnected() {
            this.mount()
        }
    },
    mounted() {
        if (this.apiConnected) {
            this.mount()
        }
    },
    methods: {
        mount() {
            authAjax()
                .get(apiUrls.getAllOffers)
                .then(response => {
                    this.searchResults = response.data.data
                })
                .catch(() => {

                })
        },
        selectedTransportFilter(id) {
            this.selectedTransport = id
        }
    }
}
</script>

<style scoped lang="scss">
.send-package {

    section.results-section {
        width: 100%;
        padding: 60px 0 110px;

        .results-list {
            max-width: 900px;
            padding: 0 25px;
            margin: 0 auto;
        }
    }
}
</style>
