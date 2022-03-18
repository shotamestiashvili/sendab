<template>
    <header>
        <section>
            <div class="mobile-navigation">
                <img src="/images/header-navigation.png" alt="">
            </div>
            <router-link class="main-logo" :to="{name: 'home'}">
                <img src="/images/main-logo.png" alt="SendAb">
            </router-link>
            <div ref="languageSelector" class="language-selector" :class="{'open': openLanguageSelector}">
                <h3 @click="openLanguage">{{ $t(selectedLanguage.name) }}
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
                <router-link :to="{name: 'sendab-offer'}">{{ $t('სენდაბის შემოთავაზება') }}</router-link>
            </nav>
            <div class="controls">
                <div class="controls-button" @click="packageSearch = !packageSearch">
                    <img src="/images/package-icon.png" alt="">
                    {{ $t('ამანათი') }}
                </div>
                <router-link v-if="!userData" :to="{name: 'login'}" class="controls-button login-button">
                    <img src="/images/user-default-icon.png" alt="">
                    {{ $t('ავტორიზაცია') }}
                </router-link>
                <div v-else class="user-component" ref="userProfile">
                    <div class="user-profile" :class="{'open': openUserProfile}"
                         @click="openUser">
                        <img class="avatar" src="/images/placeholder-user-image.png" alt="">
                        <span>{{ $t('ანგარიში') }}</span>
                        <img class="arrow-up" src="/images/arrow-up.png" alt="">
                    </div>
                    <div class="user-profile-dropdown" v-if="openUserProfile">
                        <div class="avatar-grid">
                            <div class="user-avatar">
                                <img src="/images/placeholder-user-image.png" alt="">
                                <div class="verify-icon">
                                    <img src="/images/verify-icon.png" alt=""/>
                                </div>
                            </div>
                            <p>{{ userData.name }} {{ userData.lastname }}</p>
                            <div class="balance">
                                {{ $t('ბალანსი') }}:
                                <span>32.4<svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                                               xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M3.204 8.006C3.204 8.774 3.366 9.458 3.69 10.058C4.026 10.646 4.488 11.108 5.076 11.444C5.664 11.768 6.33 11.93 7.074 11.93H10.782V14H3.402C2.718 14 2.082 14.03 1.494 14.09V12.056L2.826 11.984V11.93C2.082 11.474 1.53 10.88 1.17 10.148C0.81 9.404 0.63 8.606 0.63 7.754C0.63 6.506 0.972 5.402 1.656 4.442C2.352 3.482 3.3 2.84 4.5 2.516V0.877999H5.724V2.318C5.82 2.306 5.964 2.3 6.156 2.3C6.36 2.3 6.51 2.306 6.606 2.318V0.877999H7.83V2.516C9.054 2.864 10.002 3.548 10.674 4.568C11.358 5.588 11.7 6.776 11.7 8.132H9.126C9.126 7.16 9.018 6.386 8.802 5.81C8.586 5.234 8.262 4.82 7.83 4.568V8.132H6.606V4.208C6.51 4.196 6.36 4.19 6.156 4.19C5.964 4.19 5.82 4.196 5.724 4.208V8.132H4.5V4.568C4.068 4.82 3.744 5.228 3.528 5.792C3.312 6.344 3.204 7.082 3.204 8.006Z"
                                            fill="#1EAA56"/>
                                    </svg>
                                </span>
                                <div class="add-balance">+</div>
                            </div>
                        </div>
                        <div class="user-notifications">
                            <div class="notification-item active">
                                <img src="/images/message-icon.png" alt="">
                                <span>4</span>
                            </div>
                            <div class="notification-item">
                                <img src="/images/bell-icon.png" alt="">
                            </div>
                        </div>
                        <router-link :to="{name: 'user-profile'}">
                            <img src="/images/user-default-icon-blue.png" alt="">{{ $t('ჩემი პროფილი') }}
                        </router-link>
                        <router-link :to="{name: 'my-packages'}">
                            <img src="/images/package-icon-blue.png" alt="">{{ $t('ჩემი შეკვეთები') }}
                        </router-link>
                        <router-link :to="{name: 'account-settings'}">
                            <img src="/images/settings-icon.png" alt="">{{ $t('ანგარიშის პარამეტრები') }}
                        </router-link>
                        <router-link :to="{name: 'billing-info'}">
                            <img src="/images/billing-icon.png" alt="">{{ $t('ბალანსის მართვა') }}
                        </router-link>
                        <hr>
                        <button>{{ $t('ახალი შეკვეთა') }}</button>
                        <button class="logout" @click="logout">{{ $t('ანგარიშიდან გამოსვლა') }}</button>
                    </div>
                </div>
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
import {mapGetters} from "vuex";

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
            openUserProfile: false,
            packageSearch: false,
        }
    },
    computed: {
        ...mapGetters({
            userData: 'user/userData'
        }),
        selectedLanguage() {
            return this.langs.find(el => el.lang === this.$i18n.locale) || {}
        }
    },
    methods: {
        changeLanguage(lang) {
            this.$i18n.locale = lang
            localStorage.setItem('lang', lang)
            this.openLanguageSelector = false
        },
        openLanguage() {
            this.openLanguageSelector = !this.openLanguageSelector
            if (this.openLanguageSelector) {
                window.addEventListener('click', this.closeLanguage)
            } else {
                window.removeEventListener('click', this.closeLanguage)
            }
        },
        closeLanguage(e) {
            if (!e.path.includes(this.$refs.languageSelector)) {
                this.openLanguageSelector = false
                window.removeEventListener('click', this.closeLanguage)
            }
        },
        openUser() {
            this.openUserProfile = !this.openUserProfile
            if (this.openUserProfile) {
                window.addEventListener('click', this.closeUser)
            } else {
                window.removeEventListener('click', this.closeUser)
            }
        },
        closeUser(e) {
            if (!e.path.includes(this.$refs.userProfile)) {
                this.openUserProfile = false
                window.removeEventListener('click', this.closeUser)
            }
        },
        logout() {
            this.$store.dispatch('login/logout').then(() => {
                localStorage.removeItem('userToken');
                location.reload();
            })
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

            .user-component {
                position: relative;

                .user-profile {
                    background: #FFFFFF;
                    border-radius: 40px;
                    height: 50px;
                    min-width: 180px;
                    padding: 10px 12px;
                    display: flex;
                    align-items: center;
                    cursor: pointer;

                    .avatar {
                        height: 30px;
                        width: 30px;
                        border-radius: 50%;
                        margin: 0 10px 0 0;
                    }

                    & > span {
                        font-weight: 700;
                        font-size: 16px;
                        line-height: 16px;
                        color: #1D519A;
                        flex-grow: 1;
                    }

                    .arrow-up {
                        margin: 0 10px;
                        width: 9px;
                        transform: rotateX(180deg);
                        transition: all 0.3s ease-in-out;
                    }

                    &.open {

                        .arrow-up {
                            transform: rotateX(0deg);
                        }
                    }
                }

                .user-profile-dropdown {
                    z-index: 1;
                    position: absolute;
                    right: 0;
                    top: 70px;
                    background: #FFFFFF;
                    border: 5px solid #00D1FF;
                    box-sizing: border-box;
                    border-radius: 20px;
                    width: 370px;
                    padding: 30px 25px;

                    .avatar-grid {
                        display: grid;
                        grid-template-areas:
                            "avatar name"
                            "avatar balance";
                        grid-template-columns: 60px auto;
                        grid-template-rows: 20px 40px;
                        grid-column-gap: 18px;
                        margin: 0 0 30px;

                        .user-avatar {
                            grid-area: avatar;
                            position: relative;
                            width: 60px;
                            height: 60px;

                            & > img {
                                width: 60px;
                                height: 60px;
                                border-radius: 50%;
                            }

                            .verify-icon {
                                width: 26px;
                                height: 26px;
                                border-radius: 50%;
                                background: #1EAA56;
                                border: 3px solid #FFFFFF;
                                position: absolute;
                                top: -3px;
                                right: -3px;
                                display: flex;
                                align-items: center;
                                justify-content: center;

                                img {
                                    width: 10px;
                                }
                            }
                        }

                        p {
                            grid-area: name;
                            font-weight: 700;
                            font-size: 12px;
                            line-height: 12px;
                            color: #000000;
                            margin: 8px 0 0;
                        }

                        .balance {
                            grid-area: balance;
                            font-weight: 500;
                            font-size: 20px;
                            line-height: 20px;
                            color: #000000;
                            display: flex;
                            flex-wrap: nowrap;
                            align-items: center;

                            span {
                                color: #1EAA56;
                                margin: 0 0 0 6px;
                            }

                            .add-balance {
                                border: 1px solid #C6D8DD;
                                box-sizing: border-box;
                                width: 30px;
                                height: 30px;
                                margin: 0 0 0 12px;
                                font-weight: 700;
                                font-size: 20px;
                                line-height: 30px;
                                color: #1D519A;
                                text-align: center;
                                border-radius: 50%;
                                cursor: pointer;
                            }
                        }
                    }

                    .user-notifications {
                        display: grid;
                        grid-template-columns: 1fr 1fr;
                        grid-column-gap: 10px;
                        margin: 14px 0;

                        .notification-item {
                            height: 65px;
                            background: #E9F8FB;
                            border-radius: 10px;
                            border: 2px solid #E9F8FB;
                            box-sizing: border-box;
                            position: relative;
                            cursor: pointer;
                            display: flex;
                            align-items: center;
                            justify-content: center;

                            &.active {
                                border-color: #00D1FF;
                            }

                            img {
                                width: 30px;
                                height: 30px;
                            }

                            span {
                                position: absolute;
                                top: -2px;
                                right: -2px;
                                text-align: center;
                                background: #00D1FF;
                                border-radius: 0 10px;
                                width: 30px;
                                height: 30px;
                                font-weight: 700;
                                font-size: 18px;
                                line-height: 30px;
                                color: #FFFFFF;
                            }
                        }
                    }

                    a {
                        background: #E9F8FB;
                        border-radius: 10px;
                        padding: 12px 20px;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 16px;
                        color: #1D519A;
                        text-decoration: none;
                        margin: 0 0 5px;
                        display: flex;
                        align-items: center;

                        img {
                            height: 26px;
                            margin: 0 12px 0 0;
                        }
                    }

                    hr {
                        margin: 30px 0;
                        border-color: #D5E6EB;
                    }

                    button {
                        background: #1D519A;
                        border-radius: 10px;
                        display: flex;
                        align-items: center;
                        justify-content: center;
                        height: 50px;
                        font-weight: 500;
                        font-size: 16px;
                        line-height: 16px;
                        color: #FFFFFF;
                        margin: 0 0 15px;
                        width: 100%;
                    }

                    .logout {
                        background: #F9E7EA;
                        color: #E1473D;
                        margin: 0;
                    }
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
                    min-width: 0;

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
