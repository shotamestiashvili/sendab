import axios from "axios";

export const namespaced = true

export const state = {
    country: [],
    city: [],

}
export const mutations = {

    SET_COUNTRY(state, value) {
        state.country = value;
    },

    SET_CITY(state, value) {
        state.city = value;
    },

}
export const actions = {

    FETCH_COUNTRY (context) {
        axios({
            method: 'post',
            url: '/country',

            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response) => {
            context.commit('SET_COUNTRY', response.data.data.country);
            console.log(response.data.data.country);

        }).catch((error) => {
            console.log(error);
        });
    },

    FETCH_CITY (context, value) {
        axios.post('/api/country', {
            data: {
                country: state.country,
                city: value,
            },
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response) => {
            context.commit('SET_CITY', response.data.data.city);

        }).catch((error) => {
            console.log(error);
        });
    },

}
export const getters = {

    GET_COUNTRY(state){
        return state.country;
    },

    GET_CITY(state){
        return state.city;
    },

}
