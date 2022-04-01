<template>
    <div class="edit-profile" v-if="data">
        <div class="user-avatar-edit">
            <div class="user-avatar-preview">
                <div
                    class="avatar"
                    :style="{'background-image': `url('${!userAvatar ? '/images/user-default-icon-blue.png' : userAvatar }')`}"
                />
                <h3>{{ $t('პროფილის ფოტოს განახლება') }}</h3>
                <p>PNG, JPG or GIF, max. 3MB</p>
            </div>
            <div class="upload-avatar">
                <img src="/images/file-icon.png" alt="">
                {{ $t('აირჩიე ფოტო') }}
                <input type='file' @change="inputImage" accept="image/*">
            </div>
        </div>
        <div class="edit-form">
            <div class="input-wrapper">
                <p>{{ $t('სახელი') }}</p>
                <input name="name" type="text" v-model="data.name">
            </div>
            <div class="input-wrapper">
                <p>{{ $t('გვარი') }}</p>
                <input name="lastname" type="text" v-model="data.lastname">
            </div>
            <div class="input-wrapper">
                <p>{{ $t('ელ. ფოსტა') }}</p>
                <input name="email" type="email" v-model="userData.email" disabled>
            </div>
            <div class="input-wrapper">
                <p>{{ $t('საკონტაქტო ნომერი') }}</p>
                <input name="phone" type="number" v-model="userData.phone" disabled>
            </div>
            <div class="input-wrapper edit-profile-location-input">
                <p>{{ $t('ადგილმდებარეობა') }}</p>
                <Places v-model="data.address1"/>
            </div>
            <div class="input-wrapper">
                <p>{{ $t('დაბადების თარიღი') }}</p>
                <Datepicker class="date-picker" v-model="data.birthdate"/>
            </div>
            <div class="input-wallet">
                <p>Wallet address</p>
                <input type="text" placeholder="Ethereum address">
            </div>
            <div class="submit" @click="updateUserData">
                <span>{{ $t('მონაცემების განახლება') }}</span>
            </div>
        </div>
    </div>

</template>

<script>
import Places from 'vue-places';
import Datepicker from 'vuejs-datepicker';
import {mapGetters} from 'vuex'

export default {
    name: 'editProfile',
    components: {
        Places,
        Datepicker
    },
    data() {
        return {
            data: null
        }
    },
    computed: {
        ...mapGetters({
            userData: 'user/userData',
            userAvatar: 'user/userAvatar'
        }),
    },
    watch: {
        userData() {
            this.data = {...this.userData}
        }
    },
    mounted() {
        if (this.userData) {
            this.data = {...this.userData}
        }
    },
    methods: {
        updateUserData() {
            this.$store.dispatch('user/updateUserData', this.data)
                .then(() => {
                    this.$store.dispatch('user/getUserData')
                })
        },
        inputImage(e) {
            const file = e.target.files || e.dataTransfer.files
            if (!file.length) {
                return
            }
            this.uploadImage(file[0])
        },
        uploadImage(file) {
            const reader = new FileReader()
            reader.onload = (e) => {
                const image = file
                image.preview = e.target.result

                const formData = new FormData()
                formData.append('avatar', image)
                this.$store.dispatch('user/updateUserAvatar', formData)
                    .then(() => {
                        this.$store.dispatch('user/getUserAvatar')
                    })
            }
            reader.readAsDataURL(file)
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

.edit-profile-location-input {
    input {
        padding-right: 30px !important;
    }
}
</style>

<style scoped lang="scss">
.edit-profile {

    .user-avatar-edit {
        padding: 0 0 35px;
        display: flex;
        align-items: center;
        justify-content: space-between;

        .user-avatar-preview {
            display: grid;
            grid-template-columns: 80px auto;
            grid-template-rows: 35px 35px;
            grid-column-gap: 20px;
            grid-row-gap: 10px;
            grid-template-areas:
                'avater name'
                'avater warning';

            .avatar {
                grid-area: avater;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-size: cover;
                background-position: center;
                background-repeat: no-repeat;
            }

            h3 {
                grid-area: name;
                font-weight: 500;
                font-size: 19px;
                line-height: 19px;
                margin: 16px 0 0;
            }

            p {
                grid-area: warning;
                font-weight: 500;
                font-size: 14px;
                line-height: 14px;
                margin: 0 0 21px;
            }
        }

        .upload-avatar {
            position: relative;
            border: 1px solid #1D519A;
            box-sizing: border-box;
            border-radius: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            padding: 0 20px;
            font-weight: 700;
            font-size: 16px;
            line-height: 16px;
            color: #1D519A;
            cursor: pointer;

            img {
                width: 24px;
                margin: 0 12px 0 0;
            }

            input {
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
                opacity: 0;
            }
        }
    }

    .edit-form {
        border-top: 1px solid #C5DDE2;
        padding: 40px 0 0;
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 32px;
        grid-row-gap: 26px;
        grid-template-areas:
            "name surname"
            "mail phone"
            "location bday"
            "wallet wallet"
            "submit submit";

        p {
            font-weight: 500;
            font-size: 16px;
            color: #000000;
            margin: 0 0 18px;
        }

        input {
            height: 40px;
            width: 100%;
            background: #FAFDFE;
            border: 1px solid #D1EAF1;
            box-sizing: border-box;
            box-shadow: 0 2px 1px rgba(209, 234, 241, 0.25);
            border-radius: 40px;
            padding: 2px 18px;
            font-weight: 500;
            font-size: 16px;
            color: #889CB9;

            &:focus, &:focus-visible {
                border-color: #1D519A;
                outline: none;
            }

            &::placeholder {
                color: #889CB9;
                font-size: 16px;
            }

            &:disabled {
                cursor: not-allowed;
            }
        }

        .input-wallet {
            grid-area: wallet;
        }

        .submit {
            grid-area: submit;
            border: 1px solid #1D519A;
            box-sizing: border-box;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 50px;
            width: 100%;
            cursor: pointer;

            span {
                font-weight: bold;
                font-size: 16px;
                color: #1D519A;
            }
        }
    }
}
</style>
