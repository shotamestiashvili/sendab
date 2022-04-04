<template>
    <div class="reset-password">
        <p>{{ $t('მიმდინარე პაროლი') }}</p>
        <input type="password" v-model="data.actualPassword" :placeholder="$t('შეიყვანე პაროლი')">
        <p>{{ $t('ახალი პაროლი') }}: *</p>
        <input type="password" v-model="data.newPassword" :placeholder="$t('თქვენი ახალი პაროლი')">
        <p>{{ $t('გაიმეორე პაროლი') }}: *</p>
        <input type="password" v-model="data.repeatPassword" :placeholder="$t('გაიმეორე პაროლი')">
        <div class="submit" @click="ChangePassword">
            <span>{{ $t('პაროლის ცვლილება') }}</span>
        </div>
    </div>

</template>

<script>
import {authAjax, apiUrls} from "../../../store/urls";

export default {
    name: 'resetPassword',
    data() {
        return {
            data: {
                actualPassword: null,
                newPassword: null,
                repeatPassword: null
            }
        }
    },
    methods: {
        ChangePassword() {
            authAjax()
                .post(apiUrls.changePassword, this.data)
                .catch(() => {

                })
        }
    }
}
</script>

<style scoped lang="scss">
.reset-password {
    max-width: 410px;
    margin: 0 auto;

    p {
        font-weight: 500;
        font-size: 16px;
        color: #000000;
        margin: 22px 0 18px 18px;
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
        margin: 45px 0 0;

        span {
            font-weight: bold;
            font-size: 16px;
            color: #1D519A;
        }
    }
}
</style>
