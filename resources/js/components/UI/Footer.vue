<template>
    <footer>
        <section>
            <div class="top-side">
                <nav>
                    <router-link to="#">{{ $t('კითხვები') }}</router-link>
                    <router-link to="#">{{ $t('კომპანიის შესახებ') }}</router-link>
                    <router-link to="#">{{ $t('კონტაქტი') }}</router-link>
                    <router-link to="#">{{ $t('ამანათის გაგზავნა') }}</router-link>
                </nav>

                <div class="support-info">
                    <div class="support-item">
                        <img src="/images/headphone-icon.png" alt="">
                        <span>(323) 905-0125</span>
                    </div>
                    <div class="support-item">
                        <img src="/images/mail-icon.png" alt="">
                        <span>support@sendab.com</span>
                    </div>
                </div>
            </div>

            <div class="divider">
                <div class="line"></div>
                <div class="arrow"><img src="/images/arrow-up-white.png" alt=""></div>
            </div>

            <div class="bot-side">
                <span class="copy">Copyright © 2018 NCrypted Technologies Pvt. Ltd. All Rights Reserved.</span>
                <div class="terms-info">
                    <router-link to="#">Terms of use</router-link>
                    <router-link to="#">Privacy Policy</router-link>
                    <router-link to="#">Cookie Policy</router-link>
                </div>
            </div>
        </section>
    </footer>

</template>

<script>
export default {
    name: 'Footer'
}
</script>

<style scoped lang="scss">
footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    background-color: #0D0D25;

    section {
        margin: 0 auto;
        max-width: 1290px;
        padding: 80px 10px 50px;

        .top-side {
            display: flex;
            align-items: center;
            justify-content: space-between;

            nav {
                display: flex;

                a {
                    &:before {
                        content: '';
                        display: block;
                        height: 5px;
                        width: 5px;
                        background: #00D1FF;
                        border-radius: 50%;
                        margin: 7px 10px 6px 0;
                    }

                    display: flex;
                    flex-wrap: nowrap;
                    font-weight: 500;
                    font-size: 18px;
                    color: #7D7DA3;
                    margin: 0 30px 0 0;
                    text-decoration: none;
                    white-space: nowrap;

                    &:last-child {
                        margin: 0;
                    }
                }
            }

            .support-info {
                display: flex;

                .support-item {
                    margin: 0 0 0 30px;
                    display: flex;
                    align-items: center;

                    img {
                        height: 45px;
                        margin: 0 15px 0 0;
                    }

                    span {
                        font-size: 20px;
                        color: #FFFFFF;
                        white-space: nowrap;
                    }
                }
            }
        }

        .divider {
            display: flex;
            align-items: center;
            margin: 50px 0 40px;

            .line {
                background: #1D1D36;
                height: 1px;
                flex-grow: 1;
            }

            .arrow {
                margin: 0 0 0 20px;
                width: 50px;
                height: 50px;
                border: 1px solid #303059;
                box-sizing: border-box;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                cursor: pointer;

                img {
                    width: 13px;
                }
            }
        }

        .bot-side {
            display: flex;
            align-items: center;
            justify-content: space-between;

            .copy {
                font-size: 16px;
                color: #5E5E8C;
            }

            .terms-info {
                a {
                    text-decoration: none;
                    font-size: 16px;
                    color: #5E5E8C;
                    margin: 0 10px;

                    &:last-child {
                        margin: 0 0 0 10px;
                    }
                }
            }
        }
    }
}

@media only screen and (max-width: 1000px) {
    footer {
        section {
            padding: 40px 32px 46px;

            .top-side {
                flex-direction: column;
                align-items: unset;
                justify-content: unset;

                nav {
                    flex-direction: column;
                    margin: 0 0 32px;

                    a {
                        margin: 0 0 20px;
                    }
                }

                .support-info {
                    flex-direction: column;

                    .support-item {
                        margin: 0 0 20px;

                        img {
                            height: 32px;
                        }
                    }
                }
            }

            .divider {
                margin: 20px 0;
            }

            .bot-side {
                flex-direction: column;
                align-items: unset;
                justify-content: unset;

                .terms-info {
                    margin: 20px 0 0;

                    a:first-child {
                        margin: 0 10px 0 0;
                    }
                }
            }
        }
    }
}
</style>
