<template>
    <div class="current-offers">
        <div class="offer-filters">
            <p>{{ $t('საიდან') }}</p>
            <p>{{ $t('სადამდე') }}</p>
            <Datepicker class="date-picker" :placeholder="$t('აირჩიე')"/>
            <Datepicker class="date-picker" :placeholder="$t('აირჩიე')"/>
        </div>
        <OfferCard v-for="(result, i) in searchResults" :data="result" :key="`result${i}`"/>
    </div>

</template>

<script>
import Datepicker from 'vuejs-datepicker';
import OfferCard from "./OfferCard";

export default {
    name: 'currentOffers',
    components: {
        Datepicker,
        OfferCard
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
                }
            ]
        }
    }
}
</script>

<style lang="scss">
.date-picker {

    input {
        height: 40px;
        width: 100%;
        background: #FAFDFE;
        border: 1px solid #D1EAF1;
        box-sizing: border-box;
        box-shadow: 0 2px 1px rgba(209, 234, 241, 0.25);
        border-radius: 40px;
        margin: 0 0 10px;
        padding: 2px 18px;
        font-weight: 500;
        font-size: 16px;
        color: #889CB9;
    }

    input:focus, input:focus-visible {
        border-color: #1D519A;
        outline: none;
    }

    .vdp-datepicker__calendar {
        border: 5px solid #00D1FF;
        box-sizing: border-box;
        border-radius: 20px;
        padding: 10px;
        color: #1D519A;

        header {

            span {
                border-bottom: 1px solid #DDEFF3 !important;
                margin-bottom: 5px;
            }
        }

        .prev:after {
            content: '';
            background-image: url("/images/date-picker-arrow-left.png");
            background-size: cover;
            width: 34px;
            height: 24px;
            border: none;
            border-left: 10px solid transparent;
        }

        .next:after {
            content: '';
            background-image: url("/images/date-picker-arrow-right.png");
            background-size: cover;
            width: 34px;
            height: 24px;
            border: none;
            border-right: 10px solid transparent;
        }
    }
}
</style>

<style scoped lang="scss">
.current-offers {
    .offer-filters {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-template-rows: auto auto;
        grid-gap: 18px;
        width: 320px;
        margin: 0 0 45px;

        p {
            font-weight: 500;
            font-size: 16px;
            line-height: 16px;
            color: #000000;
        }
    }
}
</style>
