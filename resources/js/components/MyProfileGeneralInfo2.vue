<template>
  <div class="container-center-horizontal">
    <div class="my-profilegeneral-info screen">
      <div class="group-25-11">
        <div class="flex-row-50">
          <router-link to="/home-v2-0"><img class="logo-13" :src="logo" /></router-link>
          <div class="overlap-group2-29 border-1px-botticelli-2">
            <div class="text-501 myriadgeo-medium-mid-gray-14px">{{ text501 }}</div>
            <img class="x211688_forward_arrow_icon-1-53" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-16">
              <div class="overlap-group1-29">
                <img class="package-svgrepo-com-1-20" :src="packageSvgrepoCom11" />
                <div class="text-500 myriadgeo-bold-white-16px">{{ text500 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-19">
              <div class="overlap-group-109 border-1px-botticelli-2">
                <img class="ellipse-10-12" :src="ellipse10" />
                <div class="text-499 myriadgeo-bold-st-tropaz-16px">{{ text499 }}</div>
                <img class="x211688_forward_arrow_icon-1-54" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-4">
          <group82 :account="group82Props.account" />
          <router-link to="/my-profile-my-orders-1">
            <div class="group-83-5">
              <img class="package-svgrepo-com-1-20" :src="packageSvgrepoCom12" />
              <div class="text-492 myriadgeo-medium-st-tropaz-16px">{{ text492 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-6">
              <img class="setting-svgrepo-com-1-7" :src="settingSvgrepoCom1" />
              <div class="text-493 myriadgeo-medium-st-tropaz-16px">{{ text493 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-7">
              <img class="wallet-svgrepo-com-1-1-8" :src="walletSvgrepoCom11" />
              <div class="text-495 myriadgeo-medium-st-tropaz-16px">{{ text495 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-6"></div>
      </div>
      <div class="flex-row-51">
        <div class="settings-frame-4">



            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81"

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
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">პროფილის რედაქტირება</div>
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

<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
        </div>
        <div class="group-container-24">
          <div class="group-107">
            <div class="group-105">
              <router-link to="/my-profilegeneral-info4"
                ><img class="x227601_right_arrow_icon-1-10" :src="x227601_Right_Arrow_Icon1"
              /></router-link>
              <div class="text-507 myriadgeo-medium-st-tropaz-18px">{{ text507 }}</div>
            </div>
          </div>
          <div class="group-22961">
            <router-link to="/my-profilegeneral-info5">
              <div class="group-22963">
                <div class="overlap-group1-30 border-1px-botticelli-2">
                  <img class="layer1" :src="layer11" />
                  <div class="id myriadgeo-medium-black-18px">{{ id }}</div>
                  <img class="icon-ionic-ios-arrow-forward" :src="iconIonicIosArrowForward1" />
                </div></div
            ></router-link>
            <div class="group-22962">
              <div class="overlap-group-110 border-1px-botticelli-2">
                <img class="layer1-1" :src="layer12" />
                <div class="text-506 myriadgeo-medium-black-18px">{{ text506 }}</div>
                <img class="icon-ionic-ios-arrow-forward-1" :src="iconIonicIosArrowForward2" />
              </div>
            </div>
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
import Group57 from "./Group57";
export default {
  name: "MyProfileGeneralInfo2",
  components: {
    Group53,
    Rectangle24,
    Group82,
    Property1Headline,
    Property1Active,
    Group57,
  },
  props: [
    "logo",
    "text501",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text500",
    "ellipse10",
    "text499",
    "x211688_Forward_Arrow_Icon12",
    "packageSvgrepoCom12",
    "text492",
    "settingSvgrepoCom1",
    "text493",
    "walletSvgrepoCom11",
    "text495",
    "x227601_Right_Arrow_Icon1",
    "text507",
    "layer11",
    "id",
    "iconIonicIosArrowForward1",
    "layer12",
    "text506",
    "iconIonicIosArrowForward2",
    "group53Props",
    "rectangle24Props",
    "group82Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1Headline3Props",
    "property1ActiveProps",
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
.my-profilegeneral-info {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1088px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-11 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-50 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-13 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-29 {
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

.text-501 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-53 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-16 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-29 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-20 {
  height: 24px;
  width: 24px;
}

.text-500 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-19 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-109 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-12 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-499 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-54 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-4 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-83-5 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-492 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-6 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.setting-svgrepo-com-1-7 {
  height: 30px;
  width: 30px;
}

.text-493 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-7 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-8 {
  height: 26px;
  width: 26px;
}

.text-495 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-6 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 730px;
  margin-top: 26px;
  width: 155px;
}

.flex-row-51 {
  align-items: flex-start;
  display: flex;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-4 {
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

.group-container-24 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 300px;
  padding: 72px 108px;
  width: 850px;
}

.group-107 {
  display: flex;
  height: 24px;
  width: 312px;
}

.group-105 {
  display: flex;
  height: 24px;
  width: 314px;
}

.x227601_right_arrow_icon-1-10 {
  cursor: pointer;
  height: 24px;
  margin-left: 0;
  margin-top: 0;
  width: 24px;
}

.text-507 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 16px;
  margin-top: 4px;
  width: 272px;
}

.group-22961 {
  align-self: center;
  display: flex;
  margin-top: 57px;
  width: 630px;
}

.group-22963 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  min-width: 302px;
}

.overlap-group1-30 {
  align-items: center;
  background-color: var(--white);
  border-radius: 50px;
  display: flex;
  height: 70px;
  min-width: 300px;
  padding: 20px 23.8px;
}

.layer1 {
  align-self: flex-start;
  height: 28px;
  width: 36px;
}

.id {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 19px;
  min-height: 18px;
  min-width: 85px;
}

.icon-ionic-ios-arrow-forward {
  height: 15px;
  margin-bottom: 1.3px;
  margin-left: 95px;
  width: 8px;
}

.group-22962 {
  align-items: flex-start;
  display: flex;
  margin-left: 28px;
  min-width: 302px;
}

.overlap-group-110 {
  align-items: center;
  background-color: var(--white);
  border-radius: 50px;
  display: flex;
  height: 70px;
  min-width: 300px;
  padding: 17.9px 28.9px;
}

.layer1-1 {
  align-self: flex-start;
  height: 30px;
  width: 26px;
}

.text-506 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 24px;
  min-height: 18px;
  min-width: 86px;
}

.icon-ionic-ios-arrow-forward-1 {
  height: 15px;
  margin-bottom: 1.3px;
  margin-left: 94px;
  width: 8px;
}
</style>
