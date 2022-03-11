<template>
  <div class="container-center-horizontal">
    <div class="faq screen">
      <div class="overlap-group6-6">
        <div class="group-25-1">
          <router-link to="/home-v2-0"><img class="logo-1" :src="logo" /></router-link
          ><group2 :className="group2Props.className" />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-2">
              <div class="overlap-group1-5">
                <img class="package-svgrepo-com-1-4" :src="packageSvgrepoCom1" />
                <div class="text-75 myriadgeo-bold-white-16px">{{ text75 }}</div>
              </div>
            </div></a
          ><router-link to="/onboarding-login">
            <div class="group-3-4">
              <div class="overlap-group-15">
                <img class="account-3" :src="account" />
                <div class="text-74 myriadgeo-bold-white-16px">{{ text74 }}</div>
              </div>
            </div></router-link
          >
        </div>
        <div class="rectangle-29"></div>
      </div>
      <h1 class="text-70 myriadgeo-medium-black-48px">{{ text70 }}</h1>
      <div class="overlap-group7-2">
        <div class="overlap-group4-3">
          <img class="search-svgrepo-com-1" :src="searchSvgrepoCom1" />
          <div class="text-81 myriadgeo-medium-st-tropaz-18px">{{ text81 }}</div>
        </div>
        <group54
          :text86="group541Props.text86"
          :group371Props="group541Props.group371Props"
          :group372Props="group541Props.group372Props"
          :group373Props="group541Props.group373Props"
          :group374Props="group541Props.group374Props"
        />
        <group54
          :text86="group542Props.text86"
          :className="group542Props.className"
          :group371Props="group542Props.group371Props"
          :group372Props="group542Props.group372Props"
          :group373Props="group542Props.group373Props"
          :group374Props="group542Props.group374Props"
        />
        <group56 :group371Props="group56Props.group371Props" :group372Props="group56Props.group372Props" />
        <div class="rectangle-30"></div>
      </div>
      <div class="overlap-group-container">
        <div class="overlap-group3-25 myriadgeo-regular-normal-amethyst-16px">
          <rectangle24 :className="rectangle24Props.className" />
          <contact-informations :support1="contactInformationsProps.support1" />
          <div class="rectangle-28-35"></div>
          <div class="ellipse-2-35 border-1px-martinique"></div>
          <img class="iconfinder_ic_keyboa-35" :src="iconfinder_Ic_Keyboard_Arrow_Right_" />
          <p class="copyright-2018-n-cr-35">{{ copyright2018Ncr }}</p>
          <p class="terms-of-use-privacy-35">{{ termsOfUsePrivacy }}</p>
          <group49 />
          <group50 :text8="group501Props.text8" />
          <group51 />
          <group50 :text8="group502Props.text8" :className="group502Props.className" />
        </div>
        <div class="overlap-group5-4">
          <div class="rectangle-26-2"></div>
          <div class="text-94 myriadgeo-medium-st-tropaz-24px">{{ text94 }}</div>
          <div class="ellipse-8 border-10px-white"></div>
          <img class="mail-svgrepo-com-1" :src="mailSvgrepoCom1" /><group58
            :text95="group581Props.text95"
            :text96="group581Props.text96"
          />
          <group58 :text95="group582Props.text95" :text96="group582Props.text96" :className="group582Props.className" />
          <group62 />
          <group58 :text95="group583Props.text95" :text96="group583Props.text96" :className="group583Props.className" />
          <group58 :text95="group584Props.text95" :text96="group584Props.text96" :className="group584Props.className" />
          <div class="overlap-group1-6 border-1px-st-tropaz">
            <div class="text-105 myriadgeo-bold-st-tropaz-16px">{{ text105 }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Group2 from "./Group2";
import Group53 from "./Group53";
import Group54 from "./Group54";
import Group56 from "./Group56";
import Rectangle24 from "./Rectangle24";
import ContactInformations from "./ContactInformations";
import Group49 from "./Group49";
import Group50 from "./Group50";
import Group51 from "./Group51";
import Group58 from "./Group58";
import Group62 from "./Group62";
export default {
  name: "FAQ",
  components: {
    Group2,
    Group53,
    Group54,
    Group56,
    Rectangle24,
    ContactInformations,
    Group49,
    Group50,
    Group51,
    Group58,
    Group62,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text75",
    "account",
    "text74",
    "text70",
    "searchSvgrepoCom1",
    "text81",
    "iconfinder_Ic_Keyboard_Arrow_Right_",
    "copyright2018Ncr",
    "termsOfUsePrivacy",
    "text94",
    "mailSvgrepoCom1",
    "text105",
    "group2Props",
    "group541Props",
    "group542Props",
    "group56Props",
    "rectangle24Props",
    "contactInformationsProps",
    "group501Props",
    "group502Props",
    "group581Props",
    "group582Props",
    "group583Props",
    "group584Props",
  ],
};
</script>

<style>
.faq {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 2902px;
  overflow: hidden;
  padding: 33px 0;
  width: 1791px;
}

.overlap-group6-6 {
  height: 50px;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.group-25-1 {
  display: flex;
  height: 50px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1299px;
}

.logo-1 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-2 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-5 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-4 {
  height: 24px;
  width: 24px;
}

.text-75 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-4 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-15 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 0 15px;
}

.account-3 {
  height: 30px;
  width: 30px;
}

.text-74 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 107px;
}

.rectangle-29 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 602px;
  position: absolute;
  top: 48px;
  width: 87px;
}

.text-70 {
  letter-spacing: 0;
  line-height: 60px;
  margin-top: 95px;
  min-height: 60px;
  min-width: 669px;
  white-space: nowrap;
}

.overlap-group7-2 {
  height: 1290px;
  margin-left: 3px;
  margin-top: 102px;
  position: relative;
  width: 1292px;
}

.overlap-group4-3 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  height: 1290px;
  left: 0;
  min-width: 1290px;
  padding: 50px 54px;
  position: absolute;
  top: 0;
}

.search-svgrepo-com-1 {
  height: 34px;
  width: 34px;
}

.text-81 {
  letter-spacing: 0;
  line-height: 18px;
  margin-left: 23px;
  margin-top: 10px;
  min-height: 18px;
  white-space: nowrap;
}

.rectangle-30 {
  background-color: var(--swans-down-3);
  height: 1px;
  left: 53px;
  position: absolute;
  top: 127px;
  width: 1184px;
}

.overlap-group-container {
  height: 1150px;
  margin-left: 4px;
  margin-top: 122px;
  position: relative;
  width: 1795px;
}

.overlap-group3-25 {
  height: 350px;
  left: 0;
  position: absolute;
  top: 800px;
  width: 1791px;
}

.rectangle-28-35 {
  background-color: var(--haiti);
  height: 1px;
  left: 251px;
  position: absolute;
  top: 210px;
  width: 1220px;
}

.ellipse-2-35 {
  border-radius: 25px;
  height: 50px;
  left: 1491px;
  position: absolute;
  top: 185px;
  width: 50px;
}

.iconfinder_ic_keyboa-35 {
  height: 25px;
  left: 1504px;
  position: absolute;
  top: 198px;
  width: 25px;
}

.copyright-2018-n-cr-35 {
  left: 251px;
  letter-spacing: 0;
  line-height: 16.1px;
  position: absolute;
  top: 275px;
  white-space: nowrap;
}

.terms-of-use-privacy-35 {
  left: 1237px;
  letter-spacing: 0;
  line-height: 17.4px;
  position: absolute;
  top: 274px;
  white-space: nowrap;
}

.overlap-group5-4 {
  height: 810px;
  left: 0;
  position: absolute;
  top: -10px;
  width: 1791px;
}

.rectangle-26-2 {
  background-color: var(--white);
  height: 730px;
  left: 0;
  position: absolute;
  top: 80px;
  transform: rotate(-180deg);
  width: 1791px;
}

.text-94 {
  left: 679px;
  letter-spacing: 0;
  line-height: 26.1px;
  position: absolute;
  text-align: center;
  top: 181px;
  width: 433px;
}

.ellipse-8 {
  background-color: var(--st-tropaz);
  border-radius: 80px;
  height: 160px;
  left: 816px;
  position: absolute;
  top: 0;
  width: 160px;
}

.mail-svgrepo-com-1 {
  height: 58px;
  left: 867px;
  position: absolute;
  top: 51px;
  width: 58px;
}

.overlap-group1-6 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  left: 571px;
  min-width: 660px;
  padding: 16px 237px;
  position: absolute;
  top: 666px;
}

.text-105 {
  letter-spacing: 0;
  min-height: 16px;
}
</style>
