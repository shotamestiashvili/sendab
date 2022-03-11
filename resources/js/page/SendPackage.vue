<template>
    <div class="send-package">
        <FilterSection></FilterSection>
        <section class="results-section">
            <div class="results-list">
                <PackageCard v-for="(result, i) in searchResults" :data="result" :key="`result${i}`"/>
            </div>
        </section>
    </div>

</template>

<script>
import FilterSection from "../components/SendPackage/FilterSection";
import PackageCard from "../components/SendPackage/PackageCard";

export default {
    name: 'SendPackage',
    components: {
        FilterSection,
        PackageCard
    },
    data() {
        return {
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
