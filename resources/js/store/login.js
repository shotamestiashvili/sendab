import {ajax, authAjax, apiUrls} from "./urls";
import Swal from 'sweetalert2';
import tokens from '../utils/tokens'

export const namespaced = true

export const state = {
    apiConnected: false,
}

export const getters = {
    apiConnected(state) {
        return state.apiConnected
    }
}

export const mutations = {
    apiConnected(state) {
        state.apiConnected = true
    }
}

export const actions = {
    register(_, data) {
        return ajax
            .post(
                apiUrls.register, {
                    name: data.firstname,
                    email: data.email,
                    password: data.password,
                    password_confirmation: data.password_confirmation,
                    firstname: data.name,
                    lastname: data.lastname,
                    phone: data.phone,
                    country: data.country,
                    city: data.city,
                    address1: data.address1,
                    address2: data.address2,
                    postal: data.postal,
                    terms: data.term,
                    verified: false
                }
            )
            .then((response) => {
                localStorage.setItem('userToken', response.data.token);
            })
            .catch((e) => {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'The given data was invalid or The email has already been taken.!',
                    footer: e.data
                })
            });
    },
    login(_, data) {
        return ajax
            .post(apiUrls.login, {
                email: data.email,
                password: data.password,
            })
            .then((response) => {
                localStorage.setItem('userToken', response.data.token);
            })
            .catch(() => {
            });
    },
    logout() {
        return authAjax()
            .post(apiUrls.logout, {token: tokens.userToken})
            .catch(() => {
            });
    }
}
