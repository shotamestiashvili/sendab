import axios from "axios";

export const namespaced = true

export const state = {
    order: {
        date: '',
        sourceCountry: '',
        destinationCountry: '',
        sourceCity: '',
        destinationCity: '',
        parcelWeight: '',
        parcelLength: '',
        parcelHeight: '',
        parcelWidth: '',
    },


}
export const mutations = {

    SAVE_FIRST_PAGE(state, value){
            state.order.date =  value.date,
            state.order.sourceCountry = value.sourceCountry,
            state.order.destinationCountry = value.destinationCountry,
            state.order.sourceCity = value.sourceCity,
            state.order.destinationCity = value.destinationCity,
            state.order.parcelWeight =  value.parcelWeight,
            state.order.parcelLength = value.parcelLength,
            state.order.parcelHeight =  value.parcelHeight,
            state.order.parcelWidth = value.parcelWidth
    },


}
export const actions = {

    FIRST( { commit, state, dispatch },  data){
      commit("SAVE_FIRST_PAGE", data);
    },


}
export const getters = {

    GET_ORDER(state){
        return state.order;
    },


}
