<template>
    <div class="email-subscription">
        <div class="subscription">
            <SwitchInput v-model="email1"/>
            <p>I would like to receive the ParcelABC newsletter, offers and discounts</p>
        </div>
        <div class="subscription">
            <SwitchInput v-model="email2"/>
            <p>I would like to receive email about delivery status change</p>
        </div>
        <div class="subscription">
            <SwitchInput v-model="email3"/>
            <p>I would like to see pricing with VAT included</p>
        </div>
    </div>

</template>

<script>
import SwitchInput from "./SwitchInput";

export default {
    name: 'emailSubscription',
    components: {
        SwitchInput
    },
    data() {
        return {
            email1: false,
            email2: true,
            email3: false,
        }
    }
}
</script>

<style scoped lang="scss">
.email-subscription {

    .subscription {
        display: flex;
        align-items: center;
        margin: 0 0 25px;

        &:last-child {
            margin: 0;
        }

        p {
            font-weight: 500;
            font-size: 16px;
            line-height: 16px;
            color: #000000;
            margin: 0 0 0 18px;
        }
    }
}
</style>
