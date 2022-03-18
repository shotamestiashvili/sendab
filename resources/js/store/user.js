import {authAjax, apiUrls} from "./urls";

export const namespaced = true

export const state = {
    userData: null,
    userAvatar: null,
}

export const getters = {
    userData(state) {
        return state.userData
    },
    userAvatar(state) {
        return state.userAvatar
    }
}

export const mutations = {
    setUserData(state, data) {
        state.userData = Array.isArray(data) && data.length ? data[0] : data
    },
    setUserAvatar(state, data) {
        state.userAvatar = data.message && data.message === 'No Avatar' ? null : data
    }
}

export const actions = {
    getUserData({commit}) {
        return authAjax()
            .get(apiUrls.getUserData)
            .then((response) => {
                commit('setUserData', response.data.data)
            })
            .catch(() => {
            });
    },
    getUserAvatar({commit}) {
        return authAjax()
            .get(apiUrls.getUserAvatar)
            .then((response) => {
                commit('setUserAvatar', response.data.data)
            })
            .catch(() => {
            });
    },
}
