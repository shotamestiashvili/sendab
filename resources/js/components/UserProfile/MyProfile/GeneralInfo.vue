<template>
    <div class="general-info" v-if="userData">
        <div class="user-image">
            <img v-if="!userAvatar" src="/images/user-default-icon-blue.png" alt="">
            <img v-else src="/images/placeholder-user-image.png" alt="">
            <div class="verify-icon">
                <img src="/images/verify-icon.png" alt=""/>
            </div>
        </div>
        <h3 class="user-name">{{ userData.name }} {{ userData.lastname }}</h3>
        <div class="contact-info">
            <div class="contact-item">
                <div class="contact-item-icon">
                    <img src="/images/email-icon-blue.png" alt="">
                </div>
                <span>E-mail</span>
            </div>
            <div class="contact-item">
                <div class="contact-item-icon">
                    <img src="/images/phone-icon.png" alt="">
                </div>
                <span>Phone</span>
            </div>
        </div>
        <div class="general-info-item">
            <p>{{ $t('შეკვეთების რაოდენობა') }}:</p>
            <p>23</p>
        </div>
        <div class="general-info-item">
            <p>{{ $t('შესრულებული შეკვეთები') }}:</p>
            <p>1</p>
        </div>
        <div class="general-info-item">
            <p>{{ $t('მიღებული შეთავაზებები') }}:</p>
            <p>5</p>
        </div>
        <div class="general-info-item">
            <p>{{ $t('შეფასებები') }}:</p>
            <div class="stars">
                <img src="/images/star-icon.png" alt="">
                <img src="/images/star-icon.png" alt="">
                <img src="/images/star-icon.png" alt="">
                <img src="/images/star-icon.png" alt="">
                <img src="/images/star-icon-inactive.png" alt="">
            </div>
        </div>
    </div>

</template>

<script>
import {mapGetters} from 'vuex'

export default {
    name: 'generalInfo',
    computed: {
        ...mapGetters({
            userData: 'user/userData',
            userAvatar: 'user/userAvatar'
        }),
    }
}
</script>

<style scoped lang="scss">
.general-info {
    .user-image {
        width: 90px;
        height: 90px;
        position: relative;
        margin: 0 auto;
        border-radius: 50%;

        & > img {
            width: 100%;
            height: 100%;
        }

        .verify-icon {
            width: 30px;
            height: 30px;
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
                width: 14px;
            }
        }
    }

    .user-name {
        font-weight: 700;
        font-size: 24px;
        line-height: 24px;
        color: #000000;
        text-align: center;
        margin: 20px 0 30px;
    }

    .contact-info {
        display: flex;
        align-items: center;
        justify-content: center;

        .contact-item {
            margin: 0 13px 50px;
            display: grid;
            grid-template-columns: 1fr;
            grid-template-rows: 60px 18px;
            grid-row-gap: 9px;
            cursor: pointer;

            .contact-item-icon {
                background: #DAEEF3;
                width: 60px;
                height: 60px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;

                img {
                    width: 24px;
                }
            }

            span {
                font-weight: 500;
                font-size: 18px;
                line-height: 18px;
                color: #000000;
                text-align: center;
            }
        }
    }

    .general-info-item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 24px 0;
        border-top: 1px solid #C5DDE2;

        p {
            font-weight: 500;
            font-size: 18px;
            line-height: 18px;
            color: #000000;
        }

        .stars {
            display: flex;
            align-items: center;

            img {
                height: 14px;
                margin: 0 0 0 3px;
            }
        }
    }
}
</style>
