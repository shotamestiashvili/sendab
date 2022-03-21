<template>
    <div class="titled-input" @click="$emit('input', value)">
        {{ $t(title) }}
        <slot>
            <input :type="type" v-model="value" :placeholder="$t(placeholder)">
        </slot>
    </div>

</template>

<script>
export default {
    name: 'titledInput',
    props: {
        title: {
            type: String,
            default: null
        },
        value: {
            default: null
        },
        type: {
            type: String,
            default: 'text'
        },
        placeholder: {
            type: String,
            default: 'მნიშვნელობა'
        }
    }
}
</script>

<style scoped lang="scss">
.titled-input {
    border: 2px solid #C2DDE4;
    box-sizing: border-box;
    border-radius: 15px;
    height: 63px;
    padding: 0 25px;
    align-items: center;
    font-weight: 700;
    font-size: 18px;
    line-height: 59px;
    color: #1D519A;
    display: inline-block;
    margin: 0 10px 10px 0;

    input {
        padding: 0 15px;
        background: #DDEFF3;
        border-radius: 7px;
        font-weight: 500;
        font-size: 14px;
        line-height: 14px;
        color: #6C98A2;
        margin: 0 0 0 30px;
        height: 38px;
        max-width: 160px;

        &::-webkit-outer-spin-button,
        &::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        &[type=number] {
            -moz-appearance: textfield;
        }

        &::placeholder {
            color: #6C98A2;
        }

        &:focus, &:focus-visible {
            border-color: #1D519A;
            outline: none;
        }
    }
}
</style>
