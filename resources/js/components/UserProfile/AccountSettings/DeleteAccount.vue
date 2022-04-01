<template>
    <div class="delete-account">
        <img src="/images/warning-icon.png" alt="">
        <p>{{ $t('ანგარიშის დახურვით თქვენ გაგიუქმდებათ წვდომა თქვენს მონაცემებზე') }}</p>
        <button>{{ $t('ანგარიშის დახურვა') }}</button>
    </div>

</template>

<script>
export default {
    name: 'deleteAccount'
}
</script>

<style scoped lang="scss">
.delete-account {
    img {
        width: 84px;
        margin: 0 auto 28px;
        display: block;
    }

    p {
        max-width: 420px;
        margin: 0 auto 96px;
        font-weight: 500;
        font-size: 16px;
        line-height: 26px;
        text-align: center;
        color: #000000;
    }

    button {
        height: 50px;
        background: #F9E7EA;
        border-radius: 10px;
        font-size: 16px;
        line-height: 16px;
        text-align: center;
        color: #E1473D;
        padding: 17px 85px;
        margin: 0 auto 30px;
        display: block;
    }
}
</style>
