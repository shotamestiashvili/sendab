import Router from 'vue-router';
import Vue from "vue";
import routes from './routes';

Vue.use(Router);

const router = new Router({
    mode: "hash",
    routes: routes
});

router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('userToken')
    if (to.matched.some(record => record.meta.requiresAuth) && !loggedIn) {
        next({name: 'login'})
    }
    next()
});

export default router;
