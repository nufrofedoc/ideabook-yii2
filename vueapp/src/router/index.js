import Vue from 'vue'
import VueRouter from 'vue-router'
import Home from '../views/Home.vue'
import Login from '../views/Login.vue'
import Registration from '../views/Registration.vue'
import DefaultLayout from '../layouts/DefaultLayout.vue'
import AuthLayout from '../layouts/AuthLayout.vue'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'Default',
        redirect: 'home',
        component: DefaultLayout,
        children: [
            {
                path: 'home',
                name: 'home',
                component: Home
            }
        ]
    },
    {
        path: '/auth',
        name: 'Auth',
        // route level code-splitting
        // this generates a separate chunk (about.[hash].js) for this route
        // which is lazy-loaded when the route is visited.
        component: AuthLayout,
        children: [
            {
                path: 'login',
                name: 'login',
                component: Login
            },
            {
                path: 'register',
                name: 'register',
                component: Registration
            }
        ]
    },
    {
        path: '/login',
        redirect: '/auth/login'
    },
    {
        path: '/register',
        redirect: '/auth/register'
    },
]

const router = new VueRouter({
    mode: 'history',
    base: process.env.BASE_URL,
    routes
})

export default router
