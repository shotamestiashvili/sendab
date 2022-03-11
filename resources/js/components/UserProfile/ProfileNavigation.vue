<template>
    <div class="profile-navigation">
        <router-link :to="{name: 'user-profile'}" class="navigation-item">
            <img src="/images/user-default-icon-blue.png" alt="">
            <span>{{ $t('ჩემი პროფილი') }}</span>
        </router-link>
        <router-link :to="{name: 'my-packages'}" class="navigation-item">
            <img src="/images/package-icon-blue.png" alt="">
            <span>{{ $t('ჩემი შეკვეთები') }}</span>
        </router-link>
        <router-link :to="{name: 'account-settings'}" class="navigation-item">
            <img src="/images/settings-icon.png" alt="">
            <span>{{ $t('ანგარიშის პარამეტრები') }}</span>
        </router-link>
        <router-link :to="{name: 'billing-info'}" class="navigation-item">
            <img src="/images/billing-icon.png" alt="">
            <span>{{ $t('ბალანსის მართვა') }}</span>
        </router-link>
    </div>

</template>

<script>
export default {
    name: 'profileNavigation'
}
</script>

<style scoped lang="scss">
.profile-navigation {
    width: 100%;
    background-color: #FFFFFF;
    display: flex;
    align-items: center;
    justify-content: center;

    .navigation-item {
        display: flex;
        align-items: center;
        color: #1D519A;
        font-size: 16px;
        border-bottom: 5px solid transparent;
        padding: 28px 0 22px;
        margin: 0 30px;
        cursor: pointer;
        text-decoration: none;

        img {
            height: 24px;
            margin: 0 12px 0 0;
        }

        &:first-child {
            margin: 0 30px 0 0;
        }

        &:last-child {
            margin: 0 0 0 30px;
        }

        &.router-link-exact-active {
            border-bottom-color: #1D519A;
        }
    }
}
</style>
