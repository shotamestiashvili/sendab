import { mapGetters } from 'vuex'

export const authComputed = {
    ...mapGetters(["backend/LOGGED_IN"])
}
