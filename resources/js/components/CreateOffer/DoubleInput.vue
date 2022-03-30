<template>
    <div class="double-input">
        <p>{{ title }}<span>{{ body }}</span></p>
    </div>

</template>

<script>
export default {
    name: 'doubleInput',
    props: {
        title: {
            type: String,
            default: null
        },
        body: {
            type: String,
            default: null
        }
    }
}
</script>

<style scoped lang="scss">
.double-input {
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
    vertical-align: top;

    p {
        display: flex;
        align-items: center;
    }

    span {
        display: flex;
        align-items: center;
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
    }
}
</style>
