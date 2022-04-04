import Website from "../page/Website";
import Home from "../page/Home";
import SendPackage from "../page/SendPackage";
import Help from "../page/Help";
import Login from "../page/Login";
import SendABOffer from "../page/SendABOffer";
import Register from "../page/Register";
import UserProfile from "../page/UserProfile";
import MyProfile from "../components/UserProfile/MyProfile";
import MyPackages from "../components/UserProfile/MyPackages";
import AccountSettings from "../components/UserProfile/AccountSettings";
import BillingInfo from "../components/UserProfile/BillingInfo";
import CreateOffer from "../page/CreateOffer";
import AboutUs from "../page/AboutUs";

export default [
    {
        path: '/',
        component: Website,
        children: [
            {
                path: '',
                name: 'home',
                component: Home
            },
            {
                path: 'send-package',
                name: 'send-package',
                component: SendPackage,
                meta: {
                    headerStyle: 'light-header'
                }
            },
            {
                path: 'help',
                name: 'help',
                component: Help
            },
            {
                path: 'login',
                name: 'login',
                component: Login
            },
            {
                path: 'sendab-offer',
                name: 'sendab-offer',
                component: SendABOffer
            },
            {
                path: 'register',
                name: 'register',
                component: Register
            },
            {
                path: 'profile',
                component: UserProfile,
                meta: {
                    requiresAuth: true,
                    headerStyle: 'light-header'
                },
                children: [
                    {
                        path: 'user',
                        name: 'user-profile',
                        component: MyProfile,
                        meta: {
                            requiresAuth: true,
                            headerStyle: 'light-header'
                        }
                    },
                    {
                        path: 'package',
                        name: 'my-packages',
                        component: MyPackages,
                        meta: {
                            requiresAuth: true,
                            headerStyle: 'light-header'
                        }
                    },
                    {
                        path: 'settings',
                        name: 'account-settings',
                        component: AccountSettings,
                        meta: {
                            requiresAuth: true,
                            headerStyle: 'light-header'
                        }
                    },
                    {
                        path: 'billing',
                        name: 'billing-info',
                        component: BillingInfo,
                        meta: {
                            requiresAuth: true,
                            headerStyle: 'light-header'
                        }
                    }
                ]
            },
            {
                path: 'create-offer',
                name: 'create-offer',
                component: CreateOffer,
                meta: {
                    requiresAuth: true,
                    backgroundColor: 'white',
                    headerStyle: 'light-header'
                }
            },
            {
                path: 'about-us',
                name: 'about-us',
                component: AboutUs,
                meta: {
                    headerStyle: 'dark-header'
                }
            }
        ]
    }
]
