import axios from "axios";
import credentials from "../static/apiCredentials";
import Swal from 'sweetalert2';
import { mapGetters } from 'vuex'



export const namespaced = true

export const state = {
    sessionCSRF: '',
    userToken: null,
    emailSent: false,
    email: '',
    user: '',
    userID: '',
    authorized: null,
    userName: '',
    errors: ''


}
export const mutations = {
    SET_USER_NAME(state, value){
        state.userName = value;
    },

    SET_CSRF(state, value) {
        state.sessionCSRF = value;
    },

    SET_TOKEN(state, value){
        state.userToken = value;
    },

    SET_EMAIL_STATE(state, value) {
        state.emailSent = value;
    },

    SET_EMAIL(state, value) {
        state.email = value;
    },

    SET_USERDATA(state, userData) {
        state.user = userData;
        localStorage.setItem('user', JSON.stringify('userData'));
        axios.defaults.headers.common['authorization'] = 'Bearer ${ userData.token}';

    },

    SET_USERID(state, userid) {
        state.userID = userid;
    },

    SET_AUTHORIZED(state, value) {
        state.authorized = value;
    },

    LOGOUT () {
        localStorage.removeItem('user')
        location.reload()
    }


}
export const actions = {

    USER_NAME (context) {
        axios.post('/api/userName', {
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response) => {
            context.commit('SET_USER_NAME', response.data.data.name);

        }).catch((error) => {
            console.log(error);
        });
    },

    SANCTUM_CSRF(context){
        axios({
            method: 'get',
            url: '/sanctum/csrf-cookie',
        }).then((response)=>{
        }).catch((e) => {
            console.log(e);
        });
    },

    REGISTER (context, value){
        context.dispatch('SANCTUM_CSRF');
        axios({
            method: 'post',
            url: '/register',
            data: {
                name: value.firstname,
                email: value.email,
                password:  value.password,
                password_confirmation: value.password_confirmation,
                firstname: value.name,
                lastname: value.lastname,
                phone: value.phone,
                country: value.country,
                city: value.city,
                address1: value.address1,
                address2: value.address2,
                postal: value.postal,
                terms: value.term,
                verified: false
            },
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },

        }).then((response)=>{
            context.commit('SET_USERDATA', response.data);
            Swal.fire('Account Registered');
        }).catch((e) => {
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'The given data was invalid or The email has already been taken.!',
                footer: e.data
            })
            console.log(e);
        });
    },



     LOGIN (context, value){
        context.dispatch('SANCTUM_CSRF');
        axios({
            method: 'post',
            url: '/login',
            data: {
                email: value.email,
                password:  value.password,
            },
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response)=>{
                context.commit('SET_TOKEN', response.data.token);
                context.commit('SET_USERDATA', response.data);
                context.dispatch('USER_NAME');
                Swal.fire('Login Sucessfully');

        }).catch(error => {

            // Swal.fire({
            //     icon: 'error',
            //     title: 'Oops...',
            //     text: 'Email or Password is incorrect',
            //     footer: e.data
            // })

        });
    },

    LOGOUT (context){
        axios({
            method: 'post',
            url: '/api/logout',
            data: {
               token: context.state.userToken,

            },
            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response)=>{
            context.commit('SET_TOKEN', response.data.token);
            Swal.fire('Logout');
            context.commit('LOGOUT');
        }).catch((e) => {
            console.log(e);
        });
    },

    FORGOT_PASSWORD(context, email){
        context.commit('SET_EMAIL', email);
        context.dispatch('SANCTUM_CSRF');

        axios({
            method: 'post',
            url: '/forgot-password',
             data: {
                  email: email,
             },

            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },

        }).then((response)=>{
            context.commit('SET_EMAIL_STATE', 'true');

        }).catch((e) => {
            console.log(e);
        });
    },

    GET_STATUS(context){

        axios({
            method: 'post',
            url: '/api/check',

            headers: {
                "Content-Type": 'application/json',
                "Accept": 'application/json',
                "Access-Control-Allow-Origin": "*",
            },
        }).then((response)=>{
            context.commit('SET_AUTHORIZED', response.data.data.status)
        }).catch((e)=>{
            console.log(e)
        });
    },

}
export const getters = {

    GET_TOKEN(state){
        return state.userToken;
    },

    GET_EMAIL(state){
        return state.email;
    },

    USER_ID(state){
        return state.userID;
    },

    GET_STATUS(state){
        return state.authorized;
    },

    LOGGED_IN (state) {
        return !!state.user
    },

    GET_USER_NAME(state){
        return state.userName;
    }

}
