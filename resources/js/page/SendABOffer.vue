<template>
    <div class="sendab-offer">
        <div class="video-instruction">
            <h1>{{ $t('გამოიმუშავე დამატებითი შემოსავალი მოგზაურობისას') }}</h1>
            <h3>{{
                $t(`ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს`)
                }}</h3>
            <div class="activation-button">
                <img src="/images/play-icon.png" alt="">
                <span>{{ $t('ვიდეო ინსტრუქცია') }}</span>
            </div>
        </div>
        <div class="filter-section">
            <div class="filters">
                <div class="select-to custom-location-input">
                    <p>{{ $t('მიმღები ქვეყანა') }}</p>
                    <Places
                        :placeholder="$t('აირჩიე ქვეყანა')"
                    />
                </div>
                <div class="select-when">
                    <p>{{ $t('თარიღი') }}</p>
                    <Datepicker :disabled-dates="disabledDates" class="date-picker" :placeholder="$t('აირჩიე')"/>
                </div>
                <div class="select-details">
                    <p>{{ $t('შეფუთვის დეტალები') }}</p>
                    <div class="details-info">
                        <div class="input-wrapper">
                            <input type="text" :placeholder="$t('წონა')">
                            <span>kg</span>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" :placeholder="$t('სიგა.')">
                            <span>cm</span>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" :placeholder="$t('სიმა.')">
                            <span>cm</span>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" :placeholder="$t('სიგრ.')">
                            <span>cm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="results-section">
            <div class="results-list">
                <PackageCard v-for="(result, i) in searchResults" :data="result" :key="`result${i}`"/>
            </div>
        </section>
        <ContactForm/>
    </div>

</template>

<script>
import Places from 'vue-places';
import Datepicker from 'vuejs-datepicker';
import PackageCard from "../components/SendPackage/PackageCard";
import ContactForm from "../components/Help/ContactForm";

export default {
    name: 'sendABOffer',
    components: {
        Places,
        Datepicker,
        PackageCard,
        ContactForm
    },
    data() {
        return {
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

.custom-location-input {
    input {
        padding-right: 30px !important;
    }

    .ap-input-icon svg {
        top: 42%
    }
}
</style>

<style scoped lang="scss">
.sendab-offer {

    .video-instruction {
        padding: 80px 0;
        background-color: #0D0D25;

        h1 {
            font-weight: bold;
            font-size: 36px;
            line-height: 45px;
            text-align: center;
            color: #FFFFFF;
            margin: 0 auto 35px;
            max-width: 680px;
        }

        h3 {
            font-weight: 500;
            font-size: 18px;
            line-height: 25px;
            text-align: center;
            color: #FFFFFF;
            margin: 0 auto 50px;
            max-width: 780px;
        }

        .activation-button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 30px;
            width: 256px;
            height: 65px;
            border: 3px solid #303054;
            box-sizing: border-box;
            border-radius: 40px;
            margin: 0 auto;
            cursor: pointer;

            img {
                width: 14px;
                margin: 0 12px 0 0;
            }

            span {
                font-weight: bold;
                font-size: 18px;
                line-height: 25px;
                color: #FAFF00;
            }
        }
    }

    .filter-section {
        width: 100%;
        background: #FFFFFF;
        padding: 38px 15px;

        .filters {
            max-width: 1290px;
            margin: 0 auto;
            display: grid;
            grid-column-gap: 32px;
            grid-template-areas: "to when details";
            grid-template-columns: 2fr 1fr 3fr;


            .select-to {
                grid-area: to;
            }

            .select-when {
                grid-area: when;
            }

            .select-details {
                grid-area: details;

                .details-info {
                    display: grid;
                    grid-template-columns: 1fr 1fr 1fr 1fr;
                    grid-column-gap: 10px;

                    .input-wrapper {
                        position: relative;

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

            p {
                font-weight: 500;
                font-size: 16px;
                color: #000000;
                margin: 0 0 18px;
            }

            input, select {
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

            input:focus, select:focus, input:focus-visible, select:focus-visible {
                border-color: #1D519A;
                outline: none;
            }

            input::placeholder {
                color: #889CB9;
                font-size: 16px;
            }
        }
    }

    section.results-section {
        width: 100%;
        padding: 70px 0 130px;

        .results-list {
            max-width: 900px;
            padding: 0 25px;
            margin: 0 auto;
        }
    }
}
</style>
