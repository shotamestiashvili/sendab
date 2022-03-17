<template>
    <div class="register">
        <h1>{{ $t('ანგარიშის შექმნა') }}</h1>
        <div class="register-form">
            <div class="input-form">
                <div>
                    <p>{{ $t('სახელი') }}: *</p>
                    <input v-model="registrationData.firstname" type="text" name="name"
                           :placeholder="$t('თქვენი სახელი')">
                </div>
                <div>
                    <p>{{ $t('გვარი') }}: *</p>
                    <input v-model="registrationData.lastname" type="text" name="surname"
                           :placeholder="$t('თქვენი გვარი')">
                </div>
                <div>
                    <p>{{ $t('ელ. ფოსტა') }}: *</p>
                    <input v-model="registrationData.email" type="text" name="email"
                           :placeholder="$t('თქვენი ელექტრონული ფოსტა')">
                </div>
                <div>
                    <p>{{ $t('საკონტაქტო ტელეფონი') }}:</p>
                    <input v-model="registrationData.phone" type="number" name="phone"
                           :placeholder="$t('თქვენი საკონტაქტო ტელეფონი')">
                </div>
                <div>
                    <p>{{ $t('ქვეყანა') }}:</p>
                    <select v-model="registrationData.country">
                        <option>{{ $t('აირჩიე ქვეყანა') }}</option>
                    </select>
                </div>
                <div>
                    <p>{{ $t('ქალაქი') }}:</p>
                    <select v-model="registrationData.city">
                        <option>{{ $t('აირჩიე ქალაქი') }}</option>
                    </select>
                </div>
                <div>
                    <p>{{ $t('მისამართი') }} 1:</p>
                    <input v-model="registrationData.address1" type="text" name="address"
                           :placeholder="$t('მისამართი')">
                </div>
                <div>
                    <p>{{ $t('მისამართი') }} 2:</p>
                    <input v-model="registrationData.address2" type="text" name="address"
                           :placeholder="$t('მისამართი')">
                </div>
                <div>
                    <p>{{ $t('საფოსტო ინდექსი') }}:</p>
                    <input v-model="registrationData.postal" type="text" name="zip"
                           :placeholder="$t('შეიყვანე ფოსტა, ქალაქი ან სოფელი')">
                </div>
                <div/>
                <div>
                    <p>{{ $t('პაროლი') }}: *</p>
                    <input v-model="registrationData.password" type="password" name="password"
                           :placeholder="$t('თქვენი პაროლი')">
                </div>
                <div>
                    <p>{{ $t('გაიმეორე პაროლი') }}: *</p>
                    <input v-model="registrationData.password_confirmation" type="password" name="password"
                           :placeholder="$t('თქვენი პაროლი')">
                </div>
            </div>
            <div class="terms-of-service">
                <input v-model="registrationData.term" type="checkbox">
                <p>{{ $t('გავეცანი და ვეთანხმები') }}
                    <router-link to="#">{{ $t('წესებსა და პირობებს') }}</router-link>
                </p>
            </div>
            <div class="submit" @click="register">
                <span>{{ $t('ანგარიშის შექმნა') }}</span>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'register',
    data() {
        return {
            registrationData: {
                firstname: null,
                lastname: null,
                email: null,
                phone: null,
                country: null,
                city: null,
                address1: null,
                address2: null,
                postal: null,
                password: null,
                password_confirmation: null,
                term: null,
                name: null
            }
        }
    },
    methods: {
        register() {
            this.registrationData.name = `${this.registrationData.firstname} ${this.registrationData.lastname}`
            this.$store.dispatch('login/REGISTER', this.registrationData)
        }
    }
}
</script>

<style scoped lang="scss">
.register {

    h1 {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;
        color: #000000;
        text-align: center;
        margin: 60px 0 120px;
    }

    .register-form {
        max-width: 850px;
        background: #FFFFFF;
        box-shadow: 0 22px 70px #C9E6ED;
        border-radius: 30px;
        padding: 75px 80px;
        margin: 0 auto 100px;

        .input-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 80px 80px 80px 80px 80px 80px;
            grid-gap: 30px;

            p {
                font-weight: 500;
                font-size: 16px;
                color: #000000;
                margin: 0 0 12px 24px;
            }

            input, select {
                height: 50px;
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
                margin: 0 0 20px;
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

        .terms-of-service {
            padding: 30px 0;
            display: flex;
            align-items: center;

            input {
                height: 30px;
                width: 30px;
                //background: #00D1FF;
                margin: 0 18px 0 0;
            }

            p {
                font-weight: 500;
                font-size: 14px;
                color: #000000;

                a {
                    color: #00D1FF;
                    text-decoration: underline;
                }
            }
        }

        .submit {
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
