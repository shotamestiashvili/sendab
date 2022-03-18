<template>
    <div class="login">
        <h1>{{ $t('ავტორიზაცია') }}</h1>
        <div class="login-form">
            <p>{{ $t('ელ. ფოსტა') }}: *</p>
            <input v-model="loginData.email" type="text" name="email" :placeholder="$t('თქვენი ელექტრონული ფოსტა')">
            <p>{{ $t('პაროლი') }}: *</p>
            <input v-model="loginData.password" type="password" name="password" :placeholder="$t('თქვენი პაროლი')">
            <router-link to="#">{{ $t('პაროლის აღდგენა') }}</router-link>
            <div class="submit" @click="login">
                <span>{{ $t('ავტორიზაცია') }}</span>
            </div>
            <div class="register">
                <p>{{ $t('არ გაქვს ანგარიში?') }}
                    <router-link :to="{name: 'register'}">{{ $t('გაიარე რეგისტრაცია') }}</router-link>
                </p>
            </div>
        </div>
    </div>

</template>

<script>
export default {
    name: 'login',
    data() {
        return {
            loginData: {
                email: null,
                password: null
            }
        }
    },
    methods: {
        login() {
            this.$store.dispatch('login/login', this.loginData).then(() => {
                this.$store.dispatch('user/getUserData')
                this.$store.dispatch('user/getUserAvatar')
                this.$router.push({name: 'home'})
            })
        }
    }
}
</script>

<style scoped lang="scss">
.login {

    h1 {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;
        color: #000000;
        text-align: center;
        margin: 60px 0 120px;
    }

    .login-form {
        max-width: 470px;
        background: #FFFFFF;
        box-shadow: 0 22px 70px #C9E6ED;
        border-radius: 30px;
        padding: 30px;
        margin: 0 auto 100px;

        p {
            font-weight: 500;
            font-size: 16px;
            color: #000000;
            margin: 0 0 12px 24px;
        }

        input {
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

        input:focus, input:focus-visible {
            border-color: #1D519A;
            outline: none;
        }

        input::placeholder {
            color: #889CB9;
            font-size: 16px;
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

        a {
            font-weight: 500;
            font-size: 16px;
            text-decoration-line: underline;
            color: #1D519A;
            margin: 8px 0 40px 24px;
            display: block;
        }

        .register {
            border-top: 1px solid #D1E5EA;
            margin: 30px 0 0;
            padding: 30px 0 0;

            p {
                font-weight: 500;
                font-size: 16px;
                line-height: 16px;
                text-align: center;
                color: #000000;

                a {
                    text-decoration-line: underline;
                    color: #1D519A;
                    margin: 0;
                    display: inline-block;
                }
            }
        }
    }
}
</style>
