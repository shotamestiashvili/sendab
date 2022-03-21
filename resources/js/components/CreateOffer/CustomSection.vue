<template>
    <div class="custom-section">
        <h6>{{ $t(title) }}</h6>
        <slot/>
    </div>

</template>

<script>
export default {
    name: 'customSection',
    props: {
        title: {
            type: String,
            default: null
        }
    }
}
</script>

<style scoped lang="scss">
.custom-section {
    padding: 0 0 30px;
    border-bottom: 1px solid #DDEFF3;

    h6 {
        font-weight: 400;
        font-size: 18px;
        line-height: 18px;
        color: #000000;
        margin: 40px 0 20px;
    }
}
</style>
