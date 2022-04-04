<template>
    <div class="create-offer">
        <section v-if="roadSelector">
            <h1>{{ $t('აირჩიე სასურველი ქალაქი და თარიღი') }}</h1>
            <div class="data-picker">
                <div class="picker place-picker">
                    <Places
                        v-model="roadPicker.country.label"
                        @change="val => { roadPicker.country.data = val }"
                        :placeholder="$t('აირჩიე ქალაქი')"
                    />
                </div>
                <div class="picker">
                    <Datepicker v-model="roadPicker.date" :disabled-dates="disabledDates" :inline="true"
                                class="road-date-picker"/>
                    <div class="input-time">
                        <p>{{ $t('მიუთითე საათი') }}</p>
                        <div class="input-wrapper">
                            <input v-model="roadPicker.hours" type="number" :placeholder="$t('საათი')">
                            <span>{{ $t('სთ') }}</span>
                        </div>
                        <div class="input-wrapper">
                            <input v-model="roadPicker.minutes" type="number" :placeholder="$t('წუთი')">
                            <span>{{ $t('წთ') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <button @click="saveRoad">{{ $t('მონაცემების შენახვა') }}</button>
        </section>
        <section v-show="!roadSelector">
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
                @roadSelector="roadSelector = true"
                @inputItem="inputItem"
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
import Places from 'vue-places';
import Datepicker from 'vuejs-datepicker';
import {authAjax, apiUrls} from "../store/urls";

export default {
    name: 'createOffer',
    components: {
        Places,
        Datepicker
    },
    data() {
        return {
            stage: 1,
            roadSelector: false,
            comp: {
                1: CreateRoad,
                2: CreateParcelType,
                3: CreateBilling
            },
            disabledDates: {
                customPredictor(date) {
                    const nowDate = new Date();
                    const firstDay = new Date(nowDate.setDate(nowDate.getDate() - 1));
                    const lastDay = new Date(nowDate.setDate(nowDate.getDate() + 90));

                    if (date < firstDay || date > lastDay) {
                        return true
                    }
                }
            },
            roadPicker: {
                country: {
                    label: null,
                    data: {},
                },
                date: null,
                hours: null,
                minutes: null
            },
            data: {
                source: null,
                route1: null,
                route2: null,
                route3: null,
                route4: null,
                route5: null,
                route6: null,
                destination: null,
                airplane: false,
                car: false,
                minibus: false,
                railway: false,
                ship: false,
                motorcycle: false,
                bicycle: false,
                bus: false,
                taxi: false,
                truck: false,
                plate_number: null,
                comment: null,

                item1: null,
                item2: null,
                item3: null,
                item4: null,
                item5: null,
                item6: null,
                item7: null,
                item8: null,
                weight: null,
                width: null,
                length: null,
                height: null,
                store: false,
                hand: false,
                hand_price: null,

                price_sum: null,
                price_kg: null,
                reoffer: false,

                status: 'Active',

                sendab_offer: false
            }
        }
    },
    computed: {
        activeComponent() {
            return this.comp[this.stage]
        },
        items() {
            return [
                this.data.item1, this.data.item2, this.data.item3, this.data.item4,
                this.data.item5, this.data.item6, this.data.item7, this.data.item8
            ]
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
        },
        saveRoad() {
            this.roadSelector = false
            const roadPicker = {...this.roadPicker}
            this.roadPicker = {
                country: {
                    label: null,
                    data: {},
                },
                date: null,
                hours: null,
                minutes: null
            }
            if (!this.data.source) {
                this.data.source = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.destination) {
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.route1) {
                this.data.route1 = this.data.destination
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.route2) {
                this.data.route2 = this.data.destination
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.route3) {
                this.data.route3 = this.data.destination
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.route4) {
                this.data.route4 = this.data.destination
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.route5) {
                this.data.route5 = this.data.destination
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
                return
            }
            if (!this.data.route6) {
                this.data.route6 = this.data.destination
                this.data.destination = roadPicker.country.data.city || roadPicker.country.data.name
            }
        },
        inputItem(value) {
            const items = [...this.items]
            if (items.includes(value)) {
                const itemIndex = items.indexOf(value)
                items[itemIndex] = null
            } else {
                items.push(value)
            }
            const filteredItems = items.filter(val => val !== null)
            items.forEach((item, index) => {
                this.data[`item${index + 1}`] = null
            })
            filteredItems.forEach((item, index) => {
                this.data[`item${index + 1}`] = item
            })
        }
    }
}
</script>

<style lang="scss">
.road-date-picker {

    .vdp-datepicker__calendar {
        border: none;
        box-sizing: border-box;
        border-radius: 20px;
        padding: 10px;
        color: #1D519A;
        width: 100%;

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

.place-picker {
    input {
        background: #EBFAFE;
        border-radius: 15px;
        height: 63px;
        border: none;
        color: #1D519A;

        &::placeholder {
            color: #1D519A;
        }
    }

    .ap-dropdown-menu {
        box-shadow: none;

        .ap-suggestion {
            border: 2px solid transparent;
            color: #1D519A;
        }

        .ap-cursor {
            background: #FFFFFF;
            border: 2px solid #00D1FF;
            box-sizing: border-box;
            border-radius: 15px;
        }
    }
}
</style>

<style scoped lang="scss">
.create-offer {
    width: 100%;
    padding: 0 15px;

    section {
        max-width: 1290px;
        margin: 0 auto;

        h1 {
            font-weight: 700;
            font-size: 36px;
            text-align: center;
            margin: 50px 0;
        }

        .data-picker {
            display: flex;
            align-items: flex-start;
            justify-content: center;

            .picker {
                background: #FFFFFF;
                border: 1px solid #DDEFF3;
                box-sizing: border-box;
                box-shadow: 0 22px 70px #C9E6ED;
                border-radius: 20px;
                width: 370px;
                height: 470px;
                margin: 0 30px;
                padding: 18px 15px;
                position: relative;

                .input-time {
                    position: absolute;
                    bottom: 18px;
                    left: 15px;
                    right: 15px;
                    border-top: 1px solid #DDEFF3;
                    padding: 24px 0 0;
                    margin: 10px 10px 0;
                    display: grid;
                    grid-template-columns: 1fr 1fr;
                    grid-template-rows: 16px 40px;
                    grid-row-gap: 18px;
                    grid-column-gap: 10px;
                    grid-template-areas:
                        "title title"
                        "input1 input2";

                    p {
                        grid-area: title;
                        font-weight: 400;
                        font-size: 16px;
                        line-height: 16px;
                        color: #000000;
                    }


                    input {
                        height: 40px;
                        width: 100%;
                        background: #FAFDFE;
                        border: 1px solid #D1EAF1;
                        box-sizing: border-box;
                        box-shadow: 0 2px 1px rgba(209, 234, 241, 0.25);
                        border-radius: 40px;
                        margin: 0;
                        padding: 2px 18px;
                        font-weight: 500;
                        font-size: 16px;
                        color: #889CB9;

                        &::-webkit-outer-spin-button,
                        &::-webkit-inner-spin-button {
                            -webkit-appearance: none;
                            margin: 0;
                        }

                        &[type=number] {
                            -moz-appearance: textfield;
                        }
                    }

                    input:focus, input:focus-visible {
                        border-color: #1D519A;
                        outline: none;
                    }

                    input::placeholder {
                        color: #889CB9;
                        font-size: 16px;
                    }

                    .input-wrapper {
                        position: relative;
                        grid-area: input1;

                        &:last-child {
                            grid-area: input2;
                        }

                        input {
                            padding-right: 40px;
                        }

                        span {
                            width: 35px;
                            height: 34px;
                            background: #00D1FF;
                            border-radius: 40px;
                            font-weight: 500;
                            font-size: 14px;
                            line-height: 34px;
                            text-align: center;
                            color: #FFFFFF;
                            position: absolute;
                            top: 3px;
                            right: 3px;
                        }
                    }
                }
            }
        }

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
