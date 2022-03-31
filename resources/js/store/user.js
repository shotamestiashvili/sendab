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
        state.userAvatar = data
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
    getUserAvatar({commit, dispatch}) {
        return authAjax()
            .get(apiUrls.getUserAvatar)
            .then((response) => {
                if (response.data.data && response.data.data.message && response.data.data.message === 'No Avatar') {
                    commit('setUserAvatar', null)
                } else {
                    dispatch('loadAvatar', response.data)
                }
            })
            .catch(() => {
            });
    },
    loadAvatar({commit}, data) {
        const blob = new Blob([data], {type : 'image/*'});
        const a = new FileReader();
        a.onload = function (e) {
            console.log(e.target.result)
            commit('setUserAvatar', e.target.result);
        };
        a.readAsDataURL(blob);
    },
    updateUserData({commit}, data) {
        return authAjax()
            .post(apiUrls.updateUserData, data)
            .catch(() => {
            });
    },
    updateUserAvatar({commit}, data) {
        return authAjax()
            .post(apiUrls.saveUserAvatar, data)
            .catch(() => {
            });
    }
}
