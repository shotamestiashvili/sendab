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
            searchResults: [
                {
                    user: {
                        name: 'ირაკლი კურტანიძე',
                        stars: 4
                    },
                    price: {
                        value: '14,59',
                        type: 'lari'
                    },
                    road: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'}
                    ],
                    tags: [
                        {type: 1, name: 'თვითმფრინავი'},
                        {type: 2, name: '1,5 კილოგრამი'},
                        {type: 3, name: 'მოცულობა'}
                    ]
                },
                {
                    user: {
                        name: 'ჯუბა კამკამიძე',
                        stars: 4
                    },
                    price: {
                        value: '14,59',
                        type: 'lari'
                    },
                    road: [
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'დუსელდორფი'}
                    ],
                    tags: [
                        {type: 1, name: 'თვითმფრინავი'},
                        {type: 3, name: 'ჩემოდნის წაღება'}
                    ]
                },
                {
                    user: {
                        name: 'ჯუბა კამკამიძე',
                        stars: 4
                    },
                    price: {
                        value: '14,59',
                        type: 'dollar'
                    },
                    road: [
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ტალინი'},
                        {name: 'ვარშავა'}
                    ],
                    tags: [
                        {type: 1, name: 'თვითმფრინავი'},
                        {type: 2, name: '3,5 კილოგრამი'}
                    ]
                },
                {
                    user: {
                        name: 'ირაკლი კურტანიძე',
                        stars: 4
                    },
                    price: {
                        value: '14,59',
                        type: 'lari'
                    },
                    road: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'}
                    ],
                    tags: [
                        {type: 1, name: 'თვითმფრინავი'},
                        {type: 2, name: '3,5 კილოგრამი'}
                    ]
                }
            ]
        }
    },
    computed: {
        ...mapGetters({apiConnected: 'login/apiConnected'}),
        filteredList() {
            return this.searchResults
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
                    id: 1, name: 'თვითმფრინავი', count: 0, active: this.selectedTransport === 1
                },
                {
                    id: 2, name: 'ავტომობილი', count: 0, active: this.selectedTransport === 2
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
