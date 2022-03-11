<template>
  <div class="container-center-horizontal">
    <div class="my-profilegeneral-info4 screen">
      <div class="group-25-25">
        <div class="flex-row-88">
          <router-link to="/home-v2-0"><img class="logo-29" :src="logo" /></router-link>
          <div class="overlap-group2-39 border-1px-botticelli-2">
            <div class="text-942 myriadgeo-medium-mid-gray-14px">{{ text942 }}</div>
            <img class="x211688_forward_arrow_icon-1-86" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-31">
              <div class="overlap-group1-50">
                <img class="package-svgrepo-com-1-33" :src="packageSvgrepoCom11" />
                <div class="text-941 myriadgeo-bold-white-16px">{{ text941 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-36">
              <div class="overlap-group-157 border-1px-botticelli-2">
                <img class="ellipse-10-27" :src="ellipse10" />
                <div class="text-940 myriadgeo-bold-st-tropaz-16px">{{ text940 }}</div>
                <img class="x211688_forward_arrow_icon-1-87" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-13">
          <group82 :account="group82Props.account" />
          <router-link to="/my-profile-my-orders-1">
            <div class="group-83-13">
              <img class="package-svgrepo-com-1-33" :src="packageSvgrepoCom12" />
              <div class="text-933 myriadgeo-medium-st-tropaz-16px">{{ text933 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-13">
              <img class="setting-svgrepo-com-1-14" :src="settingSvgrepoCom1" />
              <div class="text-934 myriadgeo-medium-st-tropaz-16px">{{ text934 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-13">
              <img class="wallet-svgrepo-com-1-1-14" :src="walletSvgrepoCom11" />
              <div class="text-936 myriadgeo-medium-st-tropaz-16px">{{ text936 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-15"></div>
      </div>
      <div class="flex-row-89">
        <div class="settings-frame-13">

            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81"
                             @click.prevent="generalinfo_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ზოგადი ინფორმაცია</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div>
                <template>
                    <!--                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>-->
                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81"
                             @click.prevent="profileedit_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px" style="width: 250px">პროფილის რედაქტირება</div>
                                <img
                                    style="margin-left: 40px"
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div>
                <template>
                    <!--                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>-->

                    <div :class="[`x4-22`]">

                        <div class="overlap-group-81"
                             @click.prevent="grade_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">შეფასებები</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div>
                <template>
                    <!--                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>-->

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 overlap-group-60"
                             @click.prevent="verification_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ვერიფიკაცია</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <!--          <property1-headline :x43Props="property1Headline1Props.x43Props" />-->
<!--          <property1-headline-->
<!--            :className="property1Headline2Props.className"-->
<!--            :x43Props="property1Headline2Props.x43Props"-->
<!--          />-->
<!--          <property1-headline-->
<!--            :className="property1Headline3Props.className"-->
<!--            :x43Props="property1Headline3Props.x43Props"-->
<!--          />-->
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
        </div>
        <div class="overlap-group4-21">
          <div class="group-107-1">
            <div class="rectangle-43-6"></div>
            <div class="group-105-1">
              <div class="text-949 myriadgeo-medium-black-18px">{{ text949 }}</div>
              <router-link to="/my-profilegeneral-info">
                <div class="group-108-1">
                  <div class="overlap-group-158">
                    <div class="text-950 myriadgeo-bold-st-tropaz-16px">{{ text950 }}</div>
                  </div>
                </div></router-link
              >
            </div>
            <div class="rectangle-43-7"></div>
            <group106 :text947="group106Props.text947" />
            <div class="rectangle-44-1"></div>
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
  name: "MyProfileGeneralInfo5",
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
    "text942",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text941",
    "ellipse10",
    "text940",
    "x211688_Forward_Arrow_Icon12",
    "packageSvgrepoCom12",
    "text933",
    "settingSvgrepoCom1",
    "text934",
    "walletSvgrepoCom11",
    "text936",
    "text949",
    "text950",
    "group53Props",
    "rectangle24Props",
    "group82Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1Headline3Props",
    "property1ActiveProps",
    "group106Props",
    "group57Props",
  ],

    methods: {
        generalinfo_route(){
            this.$router.push("/my-profile-general-info-6");
        },
        verification_route (){
            this.$router.push("/my-profilegeneral-info4");
        },

        profileedit_route(){
            this.$router.push("/my-profilegeneral-info2");
        },

        grade_route(){
            this.$router.push("/my-profilegeneral-info3");
        },
    }
};
</script>

<style>
.my-profilegeneral-info4 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1088px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-25 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-88 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-29 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-39 {
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

.text-942 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-86 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-31 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-50 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-33 {
  height: 24px;
  width: 24px;
}

.text-941 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-36 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-157 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-27 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-940 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-87 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-13 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-83-13 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-933 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-13 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.setting-svgrepo-com-1-14 {
  height: 30px;
  width: 30px;
}

.text-934 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-13 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-14 {
  height: 26px;
  width: 26px;
}

.text-936 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-15 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 730px;
  margin-top: 26px;
  width: 155px;
}

.flex-row-89 {
  align-items: flex-start;
  display: flex;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-13 {
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

.overlap-group4-21 {
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

.group-107-1 {
  display: flex;
  flex-direction: column;
  height: 183px;
  position: relative;
  width: 631px;
}

.rectangle-43-6 {
  background-color: var(--botticelli-2);
  height: 1px;
  width: 630px;
}

.group-105-1 {
  display: flex;
  margin-top: 20px;
  width: 632px;
}

.text-949 {
  height: 18px;
  letter-spacing: 0;
  margin-top: 16px;
  width: 272px;
}

.group-108-1 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 108px;
  min-width: 252px;
}

.overlap-group-158 {
  align-items: center;
  background-color: var(--cyan--aqua-2);
  border-radius: 10px;
  display: flex;
  height: 50px;
  min-width: 250px;
  padding: 0 33px;
}

.text-950 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 182px;
  text-align: center;
}

.rectangle-43-7 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 20px;
  width: 630px;
}

.rectangle-44-1 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 30px;
  width: 630px;
}
</style>
