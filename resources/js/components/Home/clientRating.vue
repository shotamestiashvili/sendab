<template>
    <section>
        <h2>{{ $t('მომხმარებელთა შეფასებებები') }}</h2>
        <div class="scrollbar" v-dragscroll.x="true">
            <div class="rating">
                <div class="padding-element"></div>
                <div class="rate-wrapper" v-for="(rate, i) in ratingList" :key="`rate${i}`">
                    <p class="message">{{ rate.text }}</p>
                    <div class="user-info">
                        <p>{{ rate.name }}<strong>{{ rate.timestamp }}</strong></p>
                        <div class="stars">
                            <img v-for="star in rate.stars" src="/images/star-icon.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="padding-element"></div>
            </div>
        </div>
    </section>
</template>

<script>
import {dragscroll} from 'vue-dragscroll'

export default {
    name: 'ClientRating',
    directives: {
        dragscroll
    },
    data() {
        return {
            ratingList: [
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 4,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                },
                {
                    name: 'ელიზაბეტი',
                    timestamp: '09.12.2021',
                    stars: 5,
                    text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aspernatur assumenda, blanditiis consequuntur corporis !'
                }
            ]
        }
    }
}
</script>

<style scoped lang="scss">
section {
    border-top: 1px solid #B0D4DC;
    padding: 100px 0 40px;

    h2 {
        max-width: 1290px;
        margin: 0 auto;
        width: 100%;
        font-weight: bold;
        font-size: 48px;
        line-height: 65px;
        text-align: center;
        color: #1D519A;
    }

    .scrollbar {
        padding: 100px 0;
        overflow-x: scroll;
        overflow-y: hidden;

        &::-webkit-scrollbar {
            width: 0;
        }

        .rating {
            display: flex;
            align-items: center;
            flex-wrap: nowrap;
            width: fit-content;

            .padding-element {
                width: calc((100vw - 1310px) / 2);
                min-width: 10px;
                display: inline-block;
                height: 200px;
            }

            .rate-wrapper {
                display: inline-block;
                background: #FFFFFF;
                box-shadow: 0 22px 70px #C9E6ED;
                border-radius: 30px;
                padding: 34px;
                margin: 0 15px;
                width: 410px;
                height: 200px;

                &:nth-child(2) {
                    margin-left: 0;
                }

                &:nth-last-child(2) {
                    margin-right: 0;
                }

                p.message {
                    font-size: 18px;
                    line-height: 130%;
                    color: #000000;
                    height: 95px;
                    margin-bottom: 10px;
                }

                .user-info {
                    display: flex;
                    justify-content: space-between;

                    p {
                        font-weight: bold;
                        font-size: 16px;
                        color: #000000;
                        margin: 0 0 -10px;

                        strong {
                            display: block;
                            font-weight: 500;
                            font-size: 14px;
                            color: #999999;
                            padding: 10px 0 0;
                        }
                    }

                    .stars {
                        display: flex;
                        align-items: center;
                        flex-wrap: nowrap;

                        img {
                            width: 20px;
                            height: 20px;
                            margin: 0 0 0 5px;
                        }
                    }
                }
            }
        }
    }
}
</style>
