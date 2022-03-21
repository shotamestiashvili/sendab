<template>
    <div class="custom-input" :class="{'active': value === compVal}" @click="$emit('input', compVal)">
        {{ $t(title) }}
    </div>

</template>

<script>
export default {
    name: 'customInput',
    props: {
        title: {
            type: String,
            default: null
        },
        value: {
            default: null
        },
        compVal: {
            default: null
        }
    }
}
</script>

<style scoped lang="scss">
.custom-input {
    opacity: 0.5;
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
    cursor: pointer;

    &.active {
        opacity: 1;
        border-color: #00D1FF;
    }
}
</style>
