<template>
    <header>
        <section>
            <div class="mobile-navigation">
                <img src="/images/header-navigation.png" alt="">
            </div>
            <router-link class="main-logo" :to="{name: 'home'}">
                <img src="/images/main-logo.png" alt="SendAb">
            </router-link>
            <div class="language-selector" :class="{'open': openLanguageSelector}">
                <h3 @click="openLanguageSelector = !openLanguageSelector">{{ $t(selectedLanguage.name) }}
                    <img src="/images/arrow-up.png" alt="">
                </h3>
                <div class="options">
                    <ul>
                        <li
                            v-for="(lang, i) in langs" :key="`lang${i}`"
                            :class="{'active': selectedLanguage.lang === lang.lang}"
                            @click="changeLanguage(lang.lang)"
                        >
                            {{ $t(lang.name) }}
                        </li>
                    </ul>
                </div>
            </div>
            <nav>
                <router-link :to="{name: 'send-package'}">{{ $t('ამანათის გაგზავნა') }}</router-link>
                <router-link :to="{name: 'help'}">{{ $t('დახმარება') }}</router-link>
                <router-link :to="{name: 'sendab-offer'}">{{ $t('გახდით პარტნიორი') }}</router-link>
            </nav>
            <div class="controls">
                <div class="controls-button" @click="packageSearch = !packageSearch">
                    <img src="/images/package-icon.png" alt="">
                    {{ $t('ამანათი') }}
                </div>
                <router-link :to="{name: 'login'}" class="controls-button login-button">
                    <img src="/images/user-default-icon.png" alt="">
                    {{ $t('ავტორიზაცია') }}
                </router-link>
            </div>
        </section>
        <div class="package-search" v-if="packageSearch">
            <div class="search-input-wrapper">
                <div class="search-input">
                    <img src="/images/package-icon-blue.png" alt="">
                    <input type="text" placeholder="Enter your own reference number">
                    <a class="controls-button">
                        <img src="/images/search-icon-white.png" alt="">
                        {{ $t('მოძებნე შეკვეთა') }}
                    </a>
                </div>
            </div>
            <div class="blur-effect" @click="packageSearch = !packageSearch"/>
        </div>
    </header>

</template>

<script>
export default {
    name: 'Header',
    data() {
        return {
            langs: [
                {
                    name: 'ქართული',
                    lang: 'ge'
                },
                {
                    name: 'ინგლისური',
                    lang: 'en'
                },
                {
                    name: 'გერმანული',
                    lang: 'de'
                }
            ],
            openLanguageSelector: false,
            packageSearch: false
        }
    },
    computed: {
        selectedLanguage() {
            return this.langs.find(el => el.lang === this.$i18n.locale) || {}
        }
    },
    methods: {
        changeLanguage(lang) {
            this.$i18n.locale = lang
            localStorage.setItem('lang', lang)
            this.openLanguageSelector = false
        }
    }
}
</script>

<style scoped lang="scss">
header {
    width: 100%;
    border-bottom: 1px solid #DDEFF3;

    section {
        margin: 0 auto;
        max-width: 1290px;
        padding: 0 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        height: 115px;

        .mobile-navigation {
            display: none;
        }

        .main-logo {
            cursor: pointer;

            img {
                height: 42px;
            }
        }

        .language-selector {

            h3 {
                cursor: pointer;
                position: relative;
                font-weight: 500;
                font-size: 14px;
                color: #5F636B;
                background: #FFFFFF;
                border-radius: 40px;
                padding: 10px 36px 10px 24px;
                border: 1px solid #DDEFF3;
                min-width: 130px;

                img {
                    position: absolute;
                    right: 15px;
                    top: 15px;
                    width: 10px;
                    transform: rotateX(180deg);
                    transition: all 0.3s ease-in-out;
                }
            }

            .options {
                display: none;
                position: relative;

                ul {
                    position: absolute;
                    z-index: 1;
                    left: 0;
                    top: 15px;
                    width: 200px;
                    background: #FFFFFF;
                    border: 5px solid #00D1FF;
                    box-sizing: border-box;
                    //box-shadow: 0 22px 70px #C9E6ED;
                    border-radius: 20px;
                    padding: 12px 24px;

                    li {
                        cursor: pointer;
                        font-size: 16px;
                        color: rgba(29, 81, 154, 0.5);
                        padding: 12px 0;
                        border-bottom: 1px solid #1D519A;

                        &.active {
                            color: #1D519A;
                        }

                        &:last-child {
                            border-bottom: none;
                        }
                    }
                }
            }

            &.open {
                h3 {
                    img {
                        transform: rotateX(0deg);
                    }
                }

                .options {
                    display: block;
                }
            }
        }

        nav {
            display: flex;

            a {
                font-weight: bold;
                font-size: 16px;
                text-decoration: none;
                color: #1D519A;
                padding: 15px 0 13px;
                margin: 0 15px;
                white-space: nowrap;
                border-bottom: 2px solid transparent;

                &.router-link-exact-active {
                    border-bottom-color: #1D519A;
                }
            }
        }

        .controls {
            display: flex;
            flex-wrap: nowrap;

            .controls-button {
                cursor: pointer;
                position: relative;
                height: 50px;
                background: #1D519A;
                border-radius: 40px;
                padding: 18px 20px 18px 55px;
                font-weight: bold;
                font-size: 16px;
                color: #FFFFFF;
                text-decoration: none;
                white-space: nowrap;
                margin: 0 10px 0 0;

                &.login-button {
                    margin: 0;
                    background: #36C9F1;
                }

                img {
                    position: absolute;
                    height: 24px;
                    left: 20px;
                    top: 13px;
                }
            }
        }
    }

    .package-search {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: 99;

        .blur-effect {
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
        }

        .search-input-wrapper {
            background: #FFFFFF;
            padding: 0 10px;

            .search-input {
                max-width: 1290px;
                margin: 0 auto;
                padding: 32px 0;
                display: flex;
                align-items: center;
                flex-wrap: nowrap;

                & > img {
                    height: 24px;
                    margin: 0 -50px 0 26px;
                    z-index: 1;
                }

                input {
                    flex-grow: 1;
                    background: #DDEFF3;
                    border-radius: 40px;
                    height: 50px;
                    font-weight: 500;
                    font-size: 16px;
                    line-height: 16px;
                    color: #1D519A;
                    padding: 0 16px 0 64px;
                    min-width: 0px;

                    &::placeholder {
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 16px;
                        color: #1D519A;
                    }

                    &:focus, &:focus-visible {
                        border-color: #1D519A;
                        outline: none;
                    }
                }

                .controls-button {
                    cursor: pointer;
                    position: relative;
                    height: 50px;
                    background: #36C9F1;
                    border-radius: 40px;
                    padding: 18px 20px 18px 55px;
                    font-weight: bold;
                    font-size: 16px;
                    color: #FFFFFF;
                    text-decoration: none;
                    white-space: nowrap;
                    margin: 0 0 0 10px;

                    img {
                        position: absolute;
                        height: 24px;
                        left: 20px;
                        top: 13px;
                    }
                }
            }
        }
    }
}


@media only screen and (max-width: 1000px) {
    header {
        background-color: #FFFFFF;

        section {
            height: auto;
            padding: 16px;
            justify-content: initial;

            .mobile-navigation {
                position: relative;
                display: inline-block;
                height: 40px;
                width: 50px;
                border-radius: 40px;
                background: rgba(29, 81, 154, 0.1);
                cursor: pointer;

                img {
                    position: absolute;
                    height: 20px;
                    left: 15px;
                    top: 10px;
                }
            }

            .main-logo {
                margin: 0 0 0 10px;

                img {
                    height: 28px;
                }
            }

            .language-selector {
                display: none;
            }

            nav {
                display: none;
            }

            .controls {
                margin: 0 0 0 auto;

                .controls-button {
                    height: 40px;
                    width: 50px;
                    color: transparent;
                    overflow: hidden;
                    padding: 0;

                    img {
                        left: 13px;
                        top: 8px;
                    }
                }
            }
        }

        .package-search {
            .search-input-wrapper {
                padding: 16px;

                .search-input {
                    padding: 0;

                    input {
                        height: 40px;
                    }

                    .controls-button {
                        height: 40px;
                        width: 50px;
                        color: transparent;
                        overflow: hidden;
                        padding: 0;

                        img {
                            left: 13px;
                            top: 8px;
                        }
                    }
                }
            }
        }
    }
}
</style>
