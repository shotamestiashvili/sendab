<template>
  <div class="container-center-horizontal">
    <div class="my-profilemy-orders screen">
      <div class="group-25-18">
        <div class="flex-row-74">
          <router-link to="/home-v2-0"><img class="logo-22" :src="logo" /></router-link>
          <div class="overlap-group2-33 border-1px-botticelli-2">
            <div class="text-745 myriadgeo-medium-mid-gray-14px">{{ text745 }}</div>
            <img class="x211688_forward_arrow_icon-1-68" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-24">
              <div class="overlap-group1-42">
                <img class="package-svgrepo-com-1-27" :src="packageSvgrepoCom1" />
                <div class="text-744 myriadgeo-bold-white-16px">{{ text744 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-28">
              <div class="overlap-group-142 border-1px-botticelli-2">
                <img class="ellipse-10-20" :src="ellipse10" />
                <div class="text-743 myriadgeo-bold-st-tropaz-16px">{{ text743 }}</div>
                <img class="x211688_forward_arrow_icon-1-69" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-7">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-10">
              <img class="account-23" :src="account" />
              <div class="text-738 myriadgeo-medium-st-tropaz-16px">{{ text738 }}</div>
            </div></router-link
          ><group83 />
          <router-link to="/my-profile-account-settings-2">
            <div class="group-84-9">
              <img class="setting-svgrepo-com-1-10" :src="settingSvgrepoCom1" />
              <div class="text-737 myriadgeo-medium-st-tropaz-16px">{{ text737 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-10">
              <img class="wallet-svgrepo-com-1-1-11" :src="walletSvgrepoCom11" />
              <div class="text-739 myriadgeo-medium-st-tropaz-16px">{{ text739 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-9"></div>
      </div>
      <div class="flex-row-75">
        <div class="settings-frame-7">

            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">

                        <div class="overlap-group-81 "
                             @click.prevent="actual_orders"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px; ">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">მიმდინარე შეკვეთები</div>
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
                             @click.prevent="order_history"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">შეკვეთების ისტორია</div>
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
<!--          <property1-headline :x43Props="property1HeadlineProps.x43Props" />-->
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
        </div>
        <div class="group-container-31">
          <div class="overlap-group5-14 myriadgeo-medium-black-14px">
            <div class="id-1">{{ id }}</div>
            <div class="text-751">{{ text751 }}</div>
            <div class="text-752">{{ text752 }}</div>
            <div class="text-753">{{ text753 }}</div>
            <div class="text-754">{{ text754 }}</div>
          </div>
          <router-link to="/result-detailed-1">
            <div class="group-22976">
              <div class="flex-row-73">
                <div class="text-7-3 myriadgeo-medium-black-16px">{{ text755 }}</div>
                <div class="date-2 myriadgeo-medium-black-16px">{{ date1 }}</div>
                <div class="text-7-4 myriadgeo-medium-black-16px">{{ text756 }}</div>
                <div class="text-757 myriadgeo-medium-black-16px">{{ text757 }}</div>
                <div class="text-758 myriadgeo-medium-green-16px">{{ text758 }}</div>
                <img class="x227601_right_arrow_icon-1-11" :src="x227601_Right_Arrow_Icon11" />
              </div>
              <div class="rectangle-180"></div></div
          ></router-link>
          <div class="group-2297">
            <div class="flex-row-73">
              <div class="text-7-3 myriadgeo-medium-black-16px">{{ text759 }}</div>
              <div class="date-2 myriadgeo-medium-black-16px">{{ date2 }}</div>
              <div class="text-7-4 myriadgeo-medium-black-16px">{{ text760 }}</div>
              <div class="text-761 myriadgeo-medium-black-16px">{{ text761 }}</div>
              <div class="text-762 myriadgeo-medium-cyan--aqua-16px">{{ text762 }}</div>
              <img class="x227601_right_arrow_icon-1-12" :src="x227601_Right_Arrow_Icon12" />
            </div>
            <div class="rectangle-180"></div>
          </div>
          <div class="group-2297">
            <div class="flex-row-73">
              <div class="text-7-3 myriadgeo-medium-black-16px">{{ text763 }}</div>
              <div class="date-2 myriadgeo-medium-black-16px">{{ date3 }}</div>
              <div class="text-7-4 myriadgeo-medium-black-16px">{{ text764 }}</div>
              <div class="text-765 myriadgeo-medium-black-16px">{{ text765 }}</div>
              <div class="text-766 myriadgeo-medium-cinnabar-16px">{{ text766 }}</div>
              <img class="x227601_right_arrow_icon-1-13" :src="x227601_Right_Arrow_Icon13" />
            </div>
            <div class="rectangle-180"></div>
          </div>
          <div class="group-2297">
            <div class="flex-row-73">
              <div class="text-7-3 myriadgeo-medium-black-16px">{{ text767 }}</div>
              <div class="date-2 myriadgeo-medium-black-16px">{{ date4 }}</div>
              <div class="text-7-4 myriadgeo-medium-black-16px">{{ text768 }}</div>
              <div class="text-769 myriadgeo-medium-black-16px">{{ text769 }}</div>
              <div class="text-770 myriadgeo-medium-green-16px">{{ text770 }}</div>
              <img class="x227601_right_arrow_icon-1-11" :src="x227601_Right_Arrow_Icon14" />
            </div>
            <div class="rectangle-180"></div>
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
import Group83 from "./Group83";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Group57 from "./Group57";
export default {
  name: "MyProfileMyOrders2",
  components: {
    Group53,
    Rectangle24,
    Group83,
    Property1Headline,
    Property1Active,
    Group57,
  },
  props: [
    "logo",
    "text745",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom1",
    "text744",
    "ellipse10",
    "text743",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text738",
    "settingSvgrepoCom1",
    "text737",
    "walletSvgrepoCom11",
    "text739",
    "id",
    "text751",
    "text752",
    "text753",
    "text754",
    "text755",
    "date1",
    "text756",
    "text757",
    "text758",
    "x227601_Right_Arrow_Icon11",
    "text759",
    "date2",
    "text760",
    "text761",
    "text762",
    "x227601_Right_Arrow_Icon12",
    "text763",
    "date3",
    "text764",
    "text765",
    "text766",
    "x227601_Right_Arrow_Icon13",
    "text767",
    "date4",
    "text768",
    "text769",
    "text770",
    "x227601_Right_Arrow_Icon14",
    "group53Props",
    "rectangle24Props",
    "property1HeadlineProps",
    "property1ActiveProps",
    "group57Props",
  ],

    methods: {
        actual_orders(){
            this.$router.push("/my-profile-my-orders-1");
        },

        order_history (){
            this.$router.push("/my-profilemy-orders");
        },
    }
};
</script>

<style>
.my-profilemy-orders {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1208px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-18 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-74 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-22 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-33 {
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

.text-745 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-68 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-24 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-42 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-27 {
  height: 24px;
  width: 24px;
}

.text-744 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-28 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-142 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-20 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-743 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-69 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-7 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-10 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-23,
.setting-svgrepo-com-1-10 {
  height: 30px;
  width: 30px;
}

.text-738 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-84-9 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.text-737 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-10 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-11 {
  height: 26px;
  width: 26px;
}

.text-739 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-9 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 302px;
  margin-top: 26px;
  width: 157px;
}

.flex-row-75 {
  align-items: flex-start;
  display: flex;
  height: 470px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-7 {
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  height: 180px;
  overflow: hidden;
  position: relative;
  width: 410px;
}

.group-container-31 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 470px;
  padding: 80px 70px;
  width: 850px;
}

.overlap-group5-14 {
  align-items: center;
  align-self: center;
  background-color: var(--swans-down);
  border-radius: 20px;
  display: flex;
  height: 50px;
  min-width: 690px;
  padding: 0 22px;
}

.id-1 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 21px;
}

.text-751 {
  letter-spacing: 0;
  margin-left: 59px;
  min-height: 14px;
  min-width: 53px;
}

.text-752 {
  letter-spacing: 0;
  margin-left: 67px;
  min-height: 14px;
  min-width: 41px;
}

.text-753 {
  letter-spacing: 0;
  margin-left: 50px;
  min-height: 14px;
  min-width: 105px;
}

.text-754 {
  letter-spacing: 0;
  margin-left: 75px;
  min-height: 14px;
  min-width: 57px;
}

.group-22976 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  margin-top: 20px;
  min-height: 45px;
  width: 700px;
}

.flex-row-73 {
  align-items: center;
  align-self: center;
  display: flex;
  min-width: 656px;
}

.text-7-3 {
  letter-spacing: 0;
  margin-top: 4px;
  min-height: 16px;
  min-width: 42px;
}

.date-2 {
  letter-spacing: 0;
  margin-left: 38px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 79px;
}

.text-7-4 {
  letter-spacing: 0;
  margin-left: 41px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 43px;
}

.text-757 {
  letter-spacing: 0;
  margin-left: 48px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 144px;
}

.text-758 {
  letter-spacing: 0;
  margin-left: 36px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 115px;
}

.x227601_right_arrow_icon-1-11 {
  height: 24px;
  margin-left: 46px;
  width: 24px;
}

.rectangle-180 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 20px;
  width: 690px;
}

.group-2297 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 20px;
  min-height: 45px;
  width: 700px;
}

.text-761 {
  letter-spacing: 0;
  margin-left: 48px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 110px;
}

.text-762 {
  letter-spacing: 0;
  margin-left: 70px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 84px;
}

.x227601_right_arrow_icon-1-12 {
  height: 24px;
  margin-left: 77px;
  width: 24px;
}

.text-765 {
  letter-spacing: 0;
  margin-left: 48px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 146px;
}

.text-766 {
  letter-spacing: 0;
  margin-left: 34px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 106px;
}

.x227601_right_arrow_icon-1-13 {
  height: 24px;
  margin-left: 55px;
  width: 24px;
}

.text-769 {
  letter-spacing: 0;
  margin-left: 48px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 162px;
}

.text-770 {
  letter-spacing: 0;
  margin-left: 18px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 115px;
}
</style>
