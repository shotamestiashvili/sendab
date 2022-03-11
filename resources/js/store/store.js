import Vue from 'vue';
import Vuex from 'vuex';

import * as customer from './modules/customer';
import * as user from './modules/user';
import * as backend from './modules/backend';
import * as avatar from  './modules/avatar';
import * as document from  './modules/document';
import * as location from './modules/location';
import * as order from './modules/order';
import * as partner  from './modules/partner';

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        customer: customer,
        user: user,
        backend: backend,
        avatar: avatar,
        document: document,
        location: location,
        order: order,
        partner: partner,

    }

})
