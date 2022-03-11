<template>
  <div class="container-center-horizontal">
    <div class="my-profilegeneral-info3 screen">
      <div class="group-25-15">
        <div class="flex-row-69">
          <router-link to="/home-v2-0"><img class="logo-17" :src="logo" /></router-link>
          <div class="overlap-group2-31 border-1px-botticelli-2">
            <div class="text-597 myriadgeo-medium-mid-gray-14px">{{ text597 }}</div>
            <img class="x211688_forward_arrow_icon-1-63" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-19">
              <div class="overlap-group1-35">
                <img class="package-svgrepo-com-1-22" :src="packageSvgrepoCom11" />
                <div class="text-596 myriadgeo-bold-white-16px">{{ text596 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-24">
              <div class="overlap-group-132 border-1px-botticelli-2">
                <img class="ellipse-10-16" :src="ellipse10" />
                <div class="text-595 myriadgeo-bold-st-tropaz-16px">{{ text595 }}</div>
                <img class="x211688_forward_arrow_icon-1-64" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-6">
          <group82 :account="group82Props.account" />
          <router-link to="/my-profile-my-orders-1">
            <div class="group-83-7">
              <img class="package-svgrepo-com-1-22" :src="packageSvgrepoCom12" />
              <div class="text-588 myriadgeo-medium-st-tropaz-16px">{{ text588 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-8">
              <img class="setting-svgrepo-com-1-9" :src="settingSvgrepoCom1" />
              <div class="text-589 myriadgeo-medium-st-tropaz-16px">{{ text589 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-9">
              <img class="wallet-svgrepo-com-1-1-10" :src="walletSvgrepoCom11" />
              <div class="text-591 myriadgeo-medium-st-tropaz-16px">{{ text591 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-8"></div>
      </div>
      <div class="flex-row-70">
        <div class="settings-frame-6">


            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 active "
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

                        <div class="overlap-group-81 overlap-group-60"
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
                        <div class="overlap-group-81"
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
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1DownlineProps.x42Props" />-->
        </div>
        <div class="overlap-group8-2">
          <div class="group-95-1">
            <div class="text-606 myriadgeo-medium-black-21px">{{ text606 }}</div>
              <div style="margin-left: 350px;">
                  <star-rating rating="2" read-only star-size="28" show-rating="true"/>
              </div>

          </div>
          <div class="rectangle-43-4"></div>
          <div class="address-2 myriadgeo-medium-black-21px">{{ address }}</div>
          <div class="overlap-group4-14 border-1px-swans-down">
            <div class="standard-chunk-of-lo-1 myriadgeo-regular-normal-black-18px">text should be here</div>
            <div class="flex-row-68">
              <div class="flex-col-44">
                <div class="text-60-1 myriadgeo-bold-black-16px">name of feedbacker should be here</div>
                <div class="date-1 myriadgeo-medium-mountain-mist-14px">date and time</div>
              </div>
                <div style="margin-left: 350px;">
                    <star-rating rating="2" read-only star-size="23" show-rating="true"/>
                </div>

<!--                <img class="star-svgrepo-com-5-17" :src="starSvgrepoCom51" />-->
<!--                <img class="star-svgrepo-com-18" :src="starSvgrepoCom41"/>-->
<!--                <img class="star-svgrepo-com-18" :src="starSvgrepoCom31" />-->
<!--                <img class="star-svgrepo-com-18" :src="starSvgrepoCom21"/>-->
<!--                <img class="star-svgrepo-com-18" :src="starSvgrepoCom11" />-->
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
import Property1Downline from "./Property1Downline";
import Group57 from "./Group57";
import StarRating from 'vue-star-rating'

export default {
  name: "MyProfileGeneralInfo4",
  components: {
    Group53,
    Rectangle24,
    Group82,
    Property1Headline,
    Property1Active,
    Property1Downline,
    Group57,
      StarRating,
  },
  props: [
    "logo",
    "text597",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text596",
    "ellipse10",
    "text595",
    "x211688_Forward_Arrow_Icon12",
    "packageSvgrepoCom12",
    "text588",
    "settingSvgrepoCom1",
    "text589",
    "walletSvgrepoCom11",
    "text591",
    "text606",
    "group104",
    "address",
    "standardChunkOfLo1",
    "text602",
    "date1",
    "starSvgrepoCom51",
    "starSvgrepoCom41",
    "starSvgrepoCom31",
    "starSvgrepoCom21",
    "starSvgrepoCom11",
    "standardChunkOfLo2",
    "text603",
    "date2",
    "starSvgrepoCom52",
    "starSvgrepoCom42",
    "starSvgrepoCom32",
    "starSvgrepoCom22",
    "starSvgrepoCom12",
    "standardChunkOfLo3",
    "text604",
    "date3",
    "starSvgrepoCom53",
    "starSvgrepoCom43",
    "starSvgrepoCom33",
    "starSvgrepoCom23",
    "starSvgrepoCom13",
    "standardChunkOfLo4",
    "text605",
    "date4",
    "starSvgrepoCom54",
    "starSvgrepoCom44",
    "starSvgrepoCom34",
    "starSvgrepoCom24",
    "starSvgrepoCom14",
    "group53Props",
    "rectangle24Props",
    "group82Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1ActiveProps",
    "property1DownlineProps",
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
.my-profilegeneral-info3 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1778px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-15 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-69 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-17 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-31 {
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

.text-597 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-63 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-19 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-35 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-22 {
  height: 24px;
  width: 24px;
}

.text-596 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-24 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-132 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-16 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-595 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-64 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-6 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-83-7 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-588 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-8 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.setting-svgrepo-com-1-9 {
  height: 30px;
  width: 30px;
}

.text-589 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-9 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-10 {
  height: 26px;
  width: 26px;
}

.text-591 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-8 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 730px;
  margin-top: 26px;
  width: 155px;
}

.flex-row-70 {
  align-items: flex-start;
  display: flex;
  height: 1010px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-6 {
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

.overlap-group8-2 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 1010px;
  padding: 63px 108px;
  width: 850px;
}

.group-95-1 {
  align-self: flex-end;
  display: flex;
  width: 632px;
}

.text-606 {
  height: 21px;
  letter-spacing: 0;
  width: 120px;
}

.group-104 {
  height: 21px;
  margin-left: 387px;
  width: 123px;
}

.rectangle-43-4 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 46px;
  width: 630px;
}

.address-2 {
  align-self: flex-start;
  letter-spacing: 0;
  margin-left: 4px;
  margin-top: 33px;
  min-height: 21px;
}

.overlap-group4-14 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  display: flex;
  flex-direction: column;
  margin-top: 33px;
  min-height: 170px;
  padding: 26px 0;
  width: 630px;
}

.standard-chunk-of-lo-1 {
  letter-spacing: 0;
  line-height: 23.4px;
  margin-top: 6px;
  min-height: 46px;
  width: 564px;
}

.flex-row-68 {
  align-items: center;
  display: flex;
  height: 39px;
  margin-right: 11px;
  margin-top: 27px;
  min-width: 551px;
}

.flex-col-44 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 39px;
  width: 89px;
}

.text-60-1 {
  letter-spacing: 0;
  line-height: 16px;
  min-height: 16px;
  white-space: nowrap;
}

.date-1 {
  letter-spacing: 0;
  line-height: 14px;
  margin-top: 9px;
  min-height: 14px;
  white-space: nowrap;
}

.star-svgrepo-com-5-17 {
  height: 20px;
  margin-left: 342px;
  margin-top: 3px;
  width: 20px;
}

.star-svgrepo-com-18 {
  height: 20px;
  margin-left: 5px;
  margin-top: 3px;
  width: 20px;
}

.overlap-group-131 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  display: flex;
  flex-direction: column;
  margin-top: 10px;
  min-height: 170px;
  padding: 26px 0;
  width: 630px;
}
</style>
