import axios from "axios";

export const namespaced = true

export const state = {
    userData: '',
}
export const mutations = {
    SET_USER_NAME(state, value){
        state.userName = value;
    }
}
export const actions = {

    USER_NAME (context) {
        axios.get('/api/user', {
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response) => {
            context.commit('SET_USER', response.data.data);

        }).catch((error) => {
            console.log(error);
        });
    },

}

export const getters = {
    GET_USER(state){
        return state.userData;
    }
}
