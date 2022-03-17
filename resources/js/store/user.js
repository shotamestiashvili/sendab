import {authAjax, apiUrls} from "./urls";

export const namespaced = true

export const state = {
    userData: null,
}

export const getters = {
    userData(state) {
        return state.userData
    }
}

export const mutations = {
    setUserData(state, data) {
        console.log(data)
        state.userData = Array.isArray(data) && data.length ? data[0] : data
        console.log(state.userData)
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
}