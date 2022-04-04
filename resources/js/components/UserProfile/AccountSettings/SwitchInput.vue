<template>
    <div class="switch-input" :class="{'active': value}" @click="$emit('input', !value)">
        <div class="circle"/>
    </div>

</template>

<script>
export default {
    name: 'switchInput',
    props: {
        value: {
            type: Boolean,
            default: false
        }
    }
}
</script>

<style scoped lang="scss">
.switch-input {
    position: relative;
    width: 70px;
    height: 35px;
    background: #DDEFF3;
    border-radius: 30px;
    cursor: pointer;

    .circle {
        position: absolute;
        width: 29px;
        height: 29px;
        background: #FFFFFF;
        border-radius: 30px;
        top: 3px;
        left: 3px;
        transition: all .3s ease-in-out;
    }

    &.active {
        background: #00D1FF;

        .circle {
            left: 38px;
        }
    }
}
</style>
