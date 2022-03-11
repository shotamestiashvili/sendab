<template>
  <div class="container-center-horizontal">
    <div class="my-profilegeneral-info6 screen">
      <div class="group-25-31">
        <div class="flex-row-93">
          <router-link to="/home-v2-0"><img class="logo-36" :src="logo" /></router-link>
          <div class="overlap-group2-41 border-1px-botticelli-2">
            <div class="text-1167 myriadgeo-medium-mid-gray-14px">{{ text1167 }}</div>
            <img class="x211688_forward_arrow_icon-1-94" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-37">
              <div class="overlap-group1-56">
                <img class="package-svgrepo-com-1-39" :src="packageSvgrepoCom11" />
                <div class="text-1166 myriadgeo-bold-white-16px">{{ text1166 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-42">
              <div class="overlap-group-171 border-1px-botticelli-2">
                <img class="ellipse-10-33" :src="ellipse10" />
                <div class="text-1165 myriadgeo-bold-st-tropaz-16px">{{ text1165 }}</div>
                <img class="x211688_forward_arrow_icon-1-95" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-15">
          <group82 :account="group82Props.account" />
          <router-link to="/my-profile-my-orders-1">
            <div class="group-83-15">
              <img class="package-svgrepo-com-1-39" :src="packageSvgrepoCom12" />
              <div class="text-1158 myriadgeo-medium-st-tropaz-16px">{{ text1158 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-15">
              <img class="setting-svgrepo-com-1-16" :src="settingSvgrepoCom1" />
              <div class="text-1159 myriadgeo-medium-st-tropaz-16px">{{ text1159 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-15">
              <img class="wallet-svgrepo-com-1-1-16" :src="walletSvgrepoCom11" />
              <div class="text-1161 myriadgeo-medium-st-tropaz-16px">{{ text1161 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-17"></div>
      </div>
      <div class="flex-row-94">
        <div class="settings-frame-15">
          <property1-headline :x43Props="property1Headline1Props.x43Props" />
          <property1-headline
            :className="property1Headline2Props.className"
            :x43Props="property1Headline2Props.x43Props"
          />
          <property1-headline
            :className="property1Headline3Props.className"
            :x43Props="property1Headline3Props.x43Props"
          />
          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />
        </div>
        <div class="overlap-group4-27">
          <div class="group-107-4">
            <div class="rectangle-43-9"></div>
            <group106 :text947="group1061Props.text947" :className="group1061Props.className" />
            <div class="rectangle-4-1"></div>
            <group106 :text947="group1062Props.text947" />
            <div class="rectangle-4-1"></div>
          </div>
        </div>
      </div>
      <group57
        :className="group57Props.className"
        :rectangle24Props="group57Props.rectangle24Props"
        :contactInformationsProps="group57Props.contactInformationsProps"
        :group501Props="group57Props.group501Props"
        :group502Props="group57Props.group502Props"
      />
    </div>
  </div>
</template>

<script>
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group82 from "./Group82";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Group106 from "./Group106";
import Group57 from "./Group57";
export default {
  name: "MyProfileGeneralInfo7",
  components: {
    Group53,
    Rectangle24,
    Group82,
    Property1Headline,
    Property1Active,
    Group106,
    Group57,
  },
  props: [
    "logo",
    "text1167",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text1166",
    "ellipse10",
    "text1165",
    "x211688_Forward_Arrow_Icon12",
    "packageSvgrepoCom12",
    "text1158",
    "settingSvgrepoCom1",
    "text1159",
    "walletSvgrepoCom11",
    "text1161",
    "group53Props",
    "rectangle24Props",
    "group82Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1Headline3Props",
    "property1ActiveProps",
    "group1061Props",
    "group1062Props",
    "group57Props",
  ],
};
</script>

<style>
.my-profilegeneral-info6 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1088px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-31 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-93 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-36 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-41 {
  align-items: flex-start;
  border-radius: 40px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  margin-bottom: 1px;
  margin-left: 36px;
  min-width: 110px;
  padding: 9px 13px;
}

.text-1167 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-94 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-37 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-56 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-39 {
  height: 24px;
  width: 24px;
}

.text-1166 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-42 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-171 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-33 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-1165 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-95 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-15 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-83-15 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-1158 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-15 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.setting-svgrepo-com-1-16 {
  height: 30px;
  width: 30px;
}

.text-1159 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-15 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-16 {
  height: 26px;
  width: 26px;
}

.text-1161 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-17 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 730px;
  margin-top: 26px;
  width: 155px;
}

.flex-row-94 {
  align-items: flex-start;
  display: flex;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-15 {
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  height: 300px;
  overflow: hidden;
  position: relative;
  width: 410px;
}

.overlap-group4-27 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  height: 300px;
  justify-content: flex-end;
  margin-left: 30px;
  min-width: 850px;
  padding: 58px 109px;
}

.group-107-4 {
  display: flex;
  flex-direction: column;
  height: 183px;
  position: relative;
  width: 631px;
}

.rectangle-43-9 {
  background-color: var(--botticelli-2);
  height: 1px;
  width: 630px;
}

.rectangle-4-1 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 30px;
  width: 630px;
}
</style>
