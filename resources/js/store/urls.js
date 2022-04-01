import axios from 'axios'
import tokens from '../utils/tokens'

export const ajax = axios.create({
    headers: {
        "Content-Type": 'application/json',
        "Accept": 'application/json',
        "Access-Control-Allow-Origin": "*",
    },
})

export const authAjax = () => {
    if (tokens.userToken) {
        ajax.defaults.headers.common['authorization'] = `Bearer ${tokens.userToken}`;
    }

    return ajax
}

export const apiUrls = {
    register: '/register',
    login: '/login',
    logout: '/api/logout',

    changePassword: '/api/password/change',
    forgotPassword: '/forgot-password',
    resetPassword: '/password/reset',

    userName: '/api/userName',
    getUserData: '/api/profile/get',
    updateUserData: '/api/profile/update',
    saveUserAvatar: '/api/upload/avatar/save',
    getUserAvatar: '/api/upload/avatar/get',

    verifyUser: (id, remember_token) => `/verify/${id}/${remember_token}`,
    saveUserDocuments: '/api/upload/document/save',
    getUserDocumentFront: '/api/upload/document/front',
    getUserDocumentBack: '/api/upload/document/back',
    getUserDocumentSelfie: '/api/upload/document/selfie',

    createOrder: '/api/order/create',
    getOrder: '/api/order/get',
    getFAQ: '/api/faq/get',
    submitMail: '/api/support/save',

    createOffer: 'api/offer/createOffer',
    getAllOffers: 'api/offer/getAllOffers',
    getMyAllOffers: 'api/offer/getMyAllOffers',

    getStatus: '/api/check',
    sanctumToken: '/sanctum/csrf-cookie',
}
