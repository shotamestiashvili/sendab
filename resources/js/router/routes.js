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
                    headerColor: 'white'
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
                children: [
                    {
                        path: '',
                        name: 'user-profile',
                        component: MyProfile,
                        meta: {
                            requiresAuth: true,
                            headerColor: 'white'
                        }
                    },
                    {
                        path: 'package',
                        name: 'my-packages',
                        component: MyPackages,
                        meta: {
                            requiresAuth: true,
                            headerColor: 'white'
                        }
                    },
                    {
                        path: 'settings',
                        name: 'account-settings',
                        component: AccountSettings,
                        meta: {
                            requiresAuth: true,
                            headerColor: 'white'
                        }
                    },
                    {
                        path: 'billing',
                        name: 'billing-info',
                        component: BillingInfo,
                        meta: {
                            requiresAuth: true,
                            headerColor: 'white'
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
                    headerColor: 'white'
                }
            }
        ]
    }
]
