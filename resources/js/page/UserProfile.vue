<template>
    <div class="user-profile">
        <ProfileNavigation/>
        <router-view/>
    </div>

</template>

<script>
import ProfileNavigation from "../components/UserProfile/ProfileNavigation";

export default {
    name: 'userProfile',
    components: {
        ProfileNavigation
    }
}
</script>

<style scoped lang="scss">
.user-profile {

}
</style>
