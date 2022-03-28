<template>
    <div class="create-offer">
        <section>
            <div class="navigation">
                <div class="navigation-item active" @click="stage = 1">
                    <div class="number">01</div>
                    <p>{{ $t('განსაზღვრე შენი მარშუტი') }}</p>
                </div>
                <div class="navigation-item" :class="{'active': stage >= 2}" @click="stage = 2">
                    <div class="number">02</div>
                    <p>{{ $t('რისი წაღება შეგიძლია') }}</p>
                </div>
                <div class="navigation-item" :class="{'active': stage >= 3}" @click="stage = 3">
                    <div class="number">03</div>
                    <p>{{ $t('ანაზღაურების დეტალები') }}</p>
                </div>
            </div>
            <component
                :is="activeComponent"
                :data="data"
                @update:data="updateData"
            />
            <button @click="goToNextStage">
                {{ $t(stage < 3 ? 'განაგრძე' : 'გადაამოწმე და დაასრულე განაცხადი') }}
                <img src="/images/arrow-right-white.png" alt="">
            </button>
        </section>
    </div>

</template>

<script>
import CreateRoad from "../components/CreateOffer/CreateRoad";
import CreateParcelType from "../components/CreateOffer/CreateParcelType";
import CreateBilling from "../components/CreateOffer/CreateBilling";
import {authAjax, apiUrls} from "../store/urls";

export default {
    name: 'createOffer',
    data() {
        return {
            stage: 1,
            comp: {
                1: CreateRoad,
                2: CreateParcelType,
                3: CreateBilling
            },
            data: {
                airplane: false,
                car: false,
                minibus: false,
                railway: false,

                weight: null,
                width: null,
                length: null,
                height: null,
                store: false,
                hand: false,

                price_sum: null,
                price_kg: null,

                destination: 'test',
                item1: 'test',
                source: 'test',
                status: 'Active',

                reoffer: false,
                sendab_offer: false
            }
        }
    },
    computed: {
        activeComponent() {
            return this.comp[this.stage]
        }
    },
    methods: {
        goToNextStage() {
            if (this.stage > 2) {
                this.submit()
            } else {
                this.stage += 1
            }
        },
        submit() {
            return authAjax()
                .post(apiUrls.createOffer, this.data)
                .then(() => {

                })
                .catch(() => {

                })
        },
        updateData(value) {
            this.data = value
        }
    }
}
</script>

<style scoped lang="scss">
.create-offer {
    width: 100%;
    padding: 0 15px;

    section {
        max-width: 1290px;
        margin: 0 auto;

        .navigation {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-template-rows: 120px;

            .navigation-item {
                width: 100%;
                height: 100%;
                border-bottom: 5px solid #DDEFF3;
                display: flex;
                align-items: center;
                font-weight: 700;
                font-size: 24px;
                line-height: 46px;
                color: #889CB9;


                .number {
                    border: 3px solid #889CB9;
                    box-sizing: border-box;
                    height: 50px;
                    width: 50px;
                    border-radius: 50%;
                    margin: 0 12px 0 0;
                    text-align: center;
                    line-height: 44px;
                    cursor: pointer;
                }

                p {
                    cursor: pointer;
                }

                &.active {
                    border-color: #00D1FF;
                    color: #1D519A;

                    .number {
                        border-color: #1D519A;
                    }
                }
            }
        }

        button {
            margin: 100px auto 60px;
            background: #36C9F1;
            border-radius: 40px;
            padding: 0 34px;
            height: 60px;
            display: flex;
            align-items: center;
            font-weight: 700;
            font-size: 18px;
            line-height: 18px;
            color: #FFFFFF;
            cursor: pointer;

            img {
                width: 17px;
                margin: 0 0 0 24px;
            }
        }
    }
}
</style>
