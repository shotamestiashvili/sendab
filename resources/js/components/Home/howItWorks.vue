<template>
    <section>
        <div class="how-it-works">
            <h1>{{ $t('მიიღე ან გააგზავნე ნებისმიერი ნივთი მცირე დროში') }}</h1>
            <h3>{{ $t('როგორ მუშაობს სენდაბის სერვისი') }}</h3>
            <div class="road-map">
                <img src="/images/road-part-1.png" alt="">
                <div class="check-point">
                    <div class="number"><span>01</span></div>
                    <p>{{ $t('დააზუსტე ამანათის მონაცემები და სასურველი მარშრუტი') }}</p>
                </div>
                <img src="/images/road-part-2.png" alt="">
                <img class="vertical" src="/images/road-part-vertical.png" alt="">
                <div class="check-point right">
                    <p>{{ $t('შეათანხმე ამანათის ღირებულება') }}</p>
                    <div class="number"><span>02</span></div>
                </div>
                <img src="/images/road-part-3.png" alt="">
                <img class="vertical" src="/images/road-part-vertical.png" alt="">
                <div class="check-point">
                    <div class="number"><span>03</span></div>
                    <p>{{ $t('მიიღე კოდი და თვალი ადევნე ამანათის ადგილმდებარეობას') }}</p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'HowItWorks'
}
</script>

<style scoped lang="scss">
section {
    width: 100%;
    background: #FFFFFF;
    padding: 0 0 200px;

    .how-it-works {
        max-width: 1290px;
        margin: 0 auto;

        h1 {
            max-width: 780px;
            margin: 0 auto 36px;
            font-weight: bold;
            font-size: 48px;
            line-height: 65px;
            text-align: center;
            color: #1D519A;
        }

        h3 {
            font-weight: 500;
            font-size: 24px;
            text-align: center;
            color: #5676A3;
        }

        .road-map {
            max-width: 700px;
            margin: 0 auto;

            .vertical {
                display: none;
            }

            img {
                width: 100%;
                padding: 40px 60px;

                &:first-child {
                    width: 50%;
                    padding: 40px 0 40px 60px;
                }
            }

            .check-point {
                display: flex;
                align-items: center;

                .number {
                    border: 2px dashed #E0E7F0;
                    box-sizing: border-box;
                    height: 130px;
                    width: 130px;
                    min-height: 130px;
                    min-width: 130px;
                    border-radius: 50%;
                    display: flex;
                    align-items: center;
                    justify-content: center;

                    span {
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        background: #36C9F1;
                        height: 100px;
                        width: 100px;
                        border-radius: 50%;
                        font-weight: bold;
                        font-size: 36px;
                        line-height: 36px;
                        color: #FFFFFF;
                    }
                }

                p {
                    width: 100%;
                    margin: 0 0 0 50px;
                    font-weight: 500;
                    font-size: 24px;
                    line-height: 34px;
                    color: #2D2D2D;

                    &:first-child {
                        margin: 0 50px 0 0;
                        text-align: right;
                    }
                }
            }
        }
    }
}

@media only screen and (max-width: 1000px) {

    section {
        padding: 18px;

        .how-it-works {
            h1 {
                font-size: 24px;
                line-height: 29px;
                margin: 0 auto;
            }

            h3 {
                font-size: 14px;
                line-height: 45px;
            }

            .road-map {
                padding: 40px 0 60px;

                img {
                    display: none;
                }

                .vertical {
                    display: block;
                    height: 70px;
                    width: auto;
                    padding: 10px 24px;
                }

                .check-point {

                    &.right {
                        flex-direction: row-reverse;
                    }

                    .number {
                        height: 50px;
                        width: 50px;
                        min-height: 50px;
                        min-width: 50px;

                        span {
                            height: 35px;
                            width: 35px;
                            font-weight: 700;
                            font-size: 18px;
                            line-height: 18px;
                        }
                    }

                    p {
                        font-weight: 400;
                        font-size: 18px;
                        line-height: 24px;
                        margin: 0 0 0 24px;

                        &:first-child {
                            margin: 0 0 0 24px;
                            text-align: left;
                        }
                    }
                }
            }
        }
    }
}
</style>
