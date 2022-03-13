<template>
    <section>
        <div class="popular-roads">
            <div class="head">
                <h2>{{ $t('ყველაზე პოპულარული მარშრუტები') }}</h2>
                <router-link to="#">
                    <span>{{ $t('მარშრუტის ჩვენება') }}</span>
                    <img src="/images/arrow-right.png" alt="">
                </router-link>
            </div>
            <div class="road-list" v-for="(road, i) in roadsList" :key="`road${i}`">
                <template v-for="(city, index) in road.list">
                    <p :class="{'start': city.type === 'start'}">{{ city.name }}</p>
                    <img v-if="index !== road.list.length - 1" src="/images/arrow-right-lightblue.png" alt="">
                </template>
                <div class="navigation">
                    <div class="fade-component"></div>
                    <router-link to="#">
                        <span>{{ $t('ამანათის გაგზავნა ') }}{{ road.price }}{{ $t('$ -დან') }}</span>
                        <div class="icon">
                            <img src="/images/arrow-right-white.png" alt="">
                        </div>
                    </router-link>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'PopularRoads',
    data() {
        return {
            roadsList: [
                {
                    price: 10,
                    list: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'}
                    ]
                },
                {
                    price: 10,
                    list: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'}
                    ]
                },
                {
                    price: 10,
                    list: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'}
                    ]
                },
                {
                    price: 10,
                    list: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'},
                        {name: 'ჰოლანდია'}
                    ]
                },
                {
                    price: 10,
                    list: [
                        {name: 'თბილისი', type: 'start'},
                        {name: 'ქუთაისი', type: 'start'},
                        {name: 'ბუდაპეშტი'},
                        {name: 'დუსელდორფი'}
                    ]
                }
            ]
        }
    }
}
</script>

<style scoped lang="scss">
section {
    width: 100%;
    padding: 40px 10px;

    .popular-roads {
        max-width: 1290px;
        margin: 0 auto;
        padding: 46px 53px;
        background: #FFFFFF;
        box-shadow: 0 22px 70px #C9E6ED;
        border-radius: 30px;

        .head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 0 0 28px;

            h2 {
                font-size: 24px;
                line-height: 60px;
                color: #000000;
            }

            a {
                margin: 0 30px 0 0;
                display: flex;
                align-items: center;
                text-decoration: none;

                span {
                    font-size: 18px;
                    line-height: 60px;
                    color: #1D519A;
                }

                img {
                    margin: 0 0 0 30px;
                    width: 17px;
                }
            }
        }

        .road-list {
            background: #EBFAFE;
            border-radius: 10px;
            margin: 15px 0 0;
            padding: 20px 24px;
            height: 80px;
            width: 100%;
            position: relative;
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            overflow: hidden;

            p {
                background: #FFFFFF;
                border: 1px solid #C2DDE4;
                border-radius: 7px;
                font-weight: bold;
                font-size: 16px;
                line-height: 16px;
                color: #E1473D;
                padding: 10px 13px;

                &.start {
                    color: #1D519A;
                }
            }

            & > img {
                width: 20px;
                margin: 0 20px;
            }

            .navigation {
                height: 100%;
                position: absolute;
                right: 0;
                top: 0;
                display: flex;
                align-items: center;

                .fade-component {
                    width: 180px;
                    height: 100%;
                    background: linear-gradient(90deg, rgba(235, 250, 254, 0) 16.83%, #EBFAFE 92.23%);
                }

                a {
                    height: 100%;
                    background: #EBFAFE;
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                    padding: 20px 24px 20px 0;

                    span {
                        font-weight: bold;
                        font-size: 18px;
                        color: #1D519A;
                    }

                    .icon {
                        background: #1D519A;
                        width: 40px;
                        height: 40px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        margin: 0 0 0 18px;
                        border-radius: 50%;

                        img {
                            width: 17px;
                        }
                    }
                }
            }
        }
    }
}

@media only screen and (max-width: 1000px) {
    section {
        padding: 0 15px;

        .popular-roads {
            padding: 18px;

            .head {
                flex-direction: column;
                align-items: initial;
                justify-content: initial;

                h2 {
                    font-size: 18px;
                    line-height: 140%;
                    padding: 0 30% 0 0;
                    margin: 0 0 12px;
                }

                a {
                    span {
                        font-size: 14px;
                        line-height: 100%;
                    }

                    img {
                        margin: 0 0 0 10px;
                    }
                }
            }

            .road-list {
                padding: 18px;
                height: 90px;
                align-items: flex-start;

                p {
                    padding: 5px 7px;
                    font-size: 12px;
                    line-height: 12px;
                }

                & > img {
                    width: 11px;
                    margin: 7px 6px 0;
                }

                .navigation {
                    left: 0;
                    width: 100%;

                    .fade-component {
                        position: absolute;
                        top: 0;
                        right: 0;
                    }

                    a {
                        position: absolute;
                        padding: 0;
                        left: 18px;
                        bottom: 18px;
                        width: 100%;
                        height: auto;

                        span {
                            font-weight: 700;
                            font-size: 14px;
                            line-height: 14px;
                        }

                        .icon {
                            width: 20px;
                            height: 20px;

                            img {
                                width: 10px;
                            }
                        }
                    }
                }
            }
        }
    }
}
</style>
