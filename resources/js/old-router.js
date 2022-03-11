import Vue from "vue";
import Router from "vue-router";
import AboutSendab from "./components/AboutSendab";
import MakeAnOffer from "./components/MakeAnOffer";
import Frame24 from "./components/Frame24";
import Frame9 from "./components/Frame9";
import TrackYourItem from "./components/TrackYourItem";
import FAQ from "./components/FAQ";
import MakeAnOffer2 from "./components/MakeAnOffer2";
import HomeV20 from "./components/HomeV20";
import BecomePartner from "./components/BecomePartner";
import MakeAnOffer3 from "./components/MakeAnOffer3";
import Frame13 from "./components/Frame13";
import OnboardingRegistration from "./components/OnboardingRegistration";
import Messenger from "./components/Messenger";
import MyProfileMyOrders from "./components/MyProfileMyOrders";
import ResultConfirmation from "./components/ResultConfirmation";
import MyProfileAccountSettings from "./components/MyProfileAccountSettings";
import Frame2 from "./components/Frame2";
import MyProfilewallet from "./components/MyProfilewallet";
import MyProfileGeneralInfo from "./components/MyProfileGeneralInfo";
import MyProfileGeneralInfo2 from "./components/MyProfileGeneralInfo2";
import Frame21 from "./components/Frame21";
import MyProfileGeneralInfo3 from "./components/MyProfileGeneralInfo3";
import FAQHover from "./components/FAQHover";
import MyProfileGeneralInfo4 from "./components/MyProfileGeneralInfo4";
import MakeAnOffer4 from "./components/MakeAnOffer4";
import Frame20 from "./components/Frame20";
import MakeAnOffer5 from "./components/MakeAnOffer5";
import OnboardingLogin from "./components/OnboardingLogin";
import MyProfileMyOrders2 from "./components/MyProfileMyOrders2";
import MyProfileAccountSettings2 from "./components/MyProfileAccountSettings2";
import ResultDetailed from "./components/ResultDetailed";
import MyProfileAccountSettings3 from "./components/MyProfileAccountSettings3";
import Frame8 from "./components/Frame8";
import MyProfilewallet2 from "./components/MyProfilewallet2";
import MyProfilewallet3 from "./components/MyProfilewallet3";
import MyProfilewallet4 from "./components/MyProfilewallet4";
import MyProfileGeneralInfo5 from "./components/MyProfileGeneralInfo5";
import Messenger2 from "./components/Messenger2";
import MyProfileGeneralInfo6 from "./components/MyProfileGeneralInfo6";
import OnboardingRegistration2 from "./components/OnboardingRegistration2";
import MakeAnOffer6 from "./components/MakeAnOffer6";
import ResultConfirmation2 from "./components/ResultConfirmation2";
import ResultConfirmation3 from "./components/ResultConfirmation3";
import MyProfileGeneralInfo7 from "./components/MyProfileGeneralInfo7";
import ResultConfirmation4 from "./components/ResultConfirmation4";
import ResultDetailed2 from "./components/ResultDetailed2";
import SearchResult from "./components/SearchResult";
import HomeV203 from "./components/HomeV203";
import ResetPasswordForm from "./components/ResetPasswordForm";
import ResetPasswordConfirm from "../js/page/RessetPass";
import UserLocation from "./components/UserLocation";

import {

  aboutSendabData,
  makeAnOfferData,
  frame9Data,
  fAQData,
  makeAnOffer2Data,
  homeV20Data,
  becomePartnerData,
  makeAnOffer3Data,
  onboardingRegistrationData,
  messengerData,
  myProfileMyOrdersData,
  resultConfirmationData,
  myProfileAccountSettingsData,
  myProfilewalletData,
  myProfileGeneralInfoData,
  myProfileGeneralInfo2Data,
  frame21Data,
  myProfileGeneralInfo3Data,
  fAQHoverData,
  myProfileGeneralInfo4Data,
  makeAnOffer4Data,
  frame20Data,
  makeAnOffer5Data,
  onboardingLoginData,
  myProfileMyOrders2Data,
  myProfileAccountSettings2Data,
  resultDetailedData,
  myProfileAccountSettings3Data,
  frame8Data,
  myProfilewallet2Data,
  myProfilewallet3Data,
  myProfilewallet4Data,
  myProfileGeneralInfo5Data,
  messenger2Data,
  myProfileGeneralInfo6Data,
  onboardingRegistration2Data,
  makeAnOffer6Data,
  resultConfirmation2Data,
  resultConfirmation3Data,
  myProfileGeneralInfo7Data,
  resultConfirmation4Data,
  resultDetailed2Data,
  searchResultData,
  homeV203Data,

} from "./data";



Vue.use(Router);



const router = new Router({

  mode: "hash",


  routes: [

      {
          path: '/reset-password',
          name: 'reset-password',
          component: ResetPasswordConfirm,
          props: { ...onboardingLoginData },

     },

      {
          path: "/password-confirm",
          component: ResetPasswordConfirm,
          props: { ...onboardingLoginData },
      },

      {
          path: "/password-reset",
          component: ResetPasswordForm,
          props: { ...onboardingLoginData },
      },

    {
      path: "/about-sendab",
      component: AboutSendab,
      props: { ...aboutSendabData },
    },
    {
      path: "/make-an-offer-5",
      component: MakeAnOffer,
      props: { ...makeAnOfferData },
    },
    {
      path: "/frame-24",
      component: Frame24,
      props: {
        text58: "ქართული",
        x211688_Forward_Arrow_Icon1:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-3@2x.png",
        text55: "ქართული",
        text56: "ინგლისური",
        text57: "გერმანული",
      },
    },
    {
      path: "/frame-9",
      component: Frame9,
      props: { ...frame9Data },
    },
    {
      path: "/track-your-item",
      component: TrackYourItem,
      props: {
        packageSvgrepoCom1:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/package-svgrepo-com-1-3@2x.png",
        enterYourOwnReferenceNumber: "Enter your own reference number",
        account:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/account-2@2x.png",
        text69: "მოძებნე შეკვეთა",
      },
    },
    {
      path: "/faq",
      component: FAQ,
      props: { ...fAQData },
    },
    {
      path: "/make-an-offer",
      component: MakeAnOffer2,
      props: { ...makeAnOffer2Data },
    },
    {
      path: "/become-partner",
      component: BecomePartner,
      props: { ...becomePartnerData },
    },
    {
      path: "/make-an-offer2",
      component: MakeAnOffer3,
      props: { ...makeAnOffer3Data },
    },
    {
      path: "/frame-13",
      component: Frame13,
      props: {
        phoneSvgrepoCom1:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/phone-svgrepo-com-1@2x.png",
        phone: "+995 (591) 81-48-71",
      },
    },
    {
      path: "/onboarding-registration-1",
      component: OnboardingRegistration,
      props: { ...onboardingRegistrationData },
    },
    {
      path: "/messenger-1",
      component: Messenger,
      props: { ...messengerData },
    },
    {
      path: "/my-profile-my-orders-1",
      component: MyProfileMyOrders,
      props: { ...myProfileMyOrdersData },
    },
    {
      path: "/result-confirmation-3",
      component: ResultConfirmation,
      props: { ...resultConfirmationData },
    },
    {
      path: "/my-profile-account-settings-2",
      component: MyProfileAccountSettings,
      props: { ...myProfileAccountSettingsData },
    },
    {
      path: "/frame-2",
      component: Frame2,
      props: {
        text432: "თარიღი",
        text431: "აირჩიე",
        x211688_Forward_Arrow_Icon1:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-45@2x.png",
        x2561331_Right_Arrow_Icon2:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/2561331-right-arrow-icon-2@2x.png",
        text440: "ნოემბერი",
        x2561331_Right_Arrow_Icon1:
          "https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/2561331-right-arrow-icon-1@2x.png",
      },
    },
    {
      path: "/my-profile-wallet-3",
      component: MyProfilewallet,
      props: { ...myProfilewalletData },
    },
    {
      path: "/my-profile-general-info-6",
      component: MyProfileGeneralInfo,
      props: { ...myProfileGeneralInfoData, ...frame9Data },
    },
    {
      path: "/my-profilegeneral-info",
      component: MyProfileGeneralInfo2,
      props: { ...myProfileGeneralInfo2Data },
    },
    {
      path: "/frame-21",
      component: Frame21,
      props: { ...frame21Data },
    },
    {
      path: "/my-profilegeneral-info2",
      component: MyProfileGeneralInfo3,
      props: { ...myProfileGeneralInfo3Data },
    },
    {
      path: "/faq-hover",
      component: FAQHover,
      props: { ...fAQHoverData },
    },
    {
      path: "/my-profilegeneral-info3",
      component: MyProfileGeneralInfo4,
      props: { ...myProfileGeneralInfo4Data },
    },
    {
      path: "/make-an-offer3",
      component: MakeAnOffer4,
      props: { ...makeAnOffer4Data },
    },
    {
      path: "/frame-20",
      component: Frame20,
      props: { ...frame20Data },
    },
    {
      path: "/make-an-offer4",
      component: MakeAnOffer5,
      props: { ...makeAnOffer5Data },
    },
    {
      path: "/onboarding-login",
      component: OnboardingLogin,
      props: { ...onboardingLoginData },

    },
    {
      path: "/my-profilemy-orders",
      component: MyProfileMyOrders2,
      props: { ...myProfileMyOrders2Data },
    },
    {
      path: "/my-profileaccount-settings",
      component: MyProfileAccountSettings2,
      props: { ...myProfileAccountSettings2Data },
    },
    {
      path: "/result-detailed-1",
      component: ResultDetailed,
      props: { ...resultDetailedData },
    },
    {
      path: "/my-profileaccount-settings2",
      component: MyProfileAccountSettings3,
      props: { ...myProfileAccountSettings3Data },
    },
    {
      path: "/frame-8",
      component: Frame8,
      props: { ...frame8Data },
    },
    {
      path: "/my-profilewallet",
      component: MyProfilewallet2,
      props: { ...myProfilewallet2Data },
    },
    {
      path: "/my-profilewallet2",
      component: MyProfilewallet3,
      props: { ...myProfilewallet3Data },
    },
    {
      path: "/my-profilewallet3",
      component: MyProfilewallet4,
      props: { ...myProfilewallet4Data },
    },
    {
      path: "/my-profilegeneral-info4",
      component: MyProfileGeneralInfo5,
      props: { ...myProfileGeneralInfo5Data },
    },
    {
      path: "/messenger",
      component: Messenger2,
      props: { ...messenger2Data },
    },
    {
      path: "/my-profilegeneral-info5",
      component: MyProfileGeneralInfo6,
      props: { ...myProfileGeneralInfo6Data },
    },
    {
      path: "/onboarding-registration",
      component: OnboardingRegistration2,
      props: { ...onboardingRegistration2Data },
    },
    {
      path: "/make-an-offer5",
      component: MakeAnOffer6,
      props: { ...makeAnOffer6Data },
    },
    {
      path: "/result-confirmation",
      component: ResultConfirmation2,
      props: { ...resultConfirmation2Data },
    },
    {
      path: "/result-confirmation2",
      component: ResultConfirmation3,
      props: { ...resultConfirmation3Data },
    },
    {
      path: "/my-profilegeneral-info6",
      component: MyProfileGeneralInfo7,
      props: { ...myProfileGeneralInfo7Data },
    },
    {
      path: "/result-confirmation3",
      component: ResultConfirmation4,
      props: { ...resultConfirmation4Data },
    },
    {
      path: "/result-detailed",
      component: ResultDetailed2,
      props: { ...resultDetailed2Data },
    },
    {
      path: "/search-result",
      component: SearchResult,
      props: { ...searchResultData },
        name: SearchResult,
    },
    {
      path: "/home-v20",
      component: HomeV203,
      props: { ...homeV203Data, ...frame9Data },
    },
    {
      path: "*",
      component: HomeV20,
      props: { ...homeV20Data, ...frame9Data },
    },
  ],
});

router.beforeEach((to, from, next) => {
    const loggedIn = localStorage.getItem('user')
    if (to.matched.some(record => record.meta.requiresAuth) && !loggedIn) {
        next('/')
    }
    next()
});

export default router;
