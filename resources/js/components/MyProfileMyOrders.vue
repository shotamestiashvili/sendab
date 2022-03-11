<template>
  <div class="container-center-horizontal">
    <div class="my-profile-my-orders-1 screen">
      <div class="group-25-6">
        <div class="flex-row-7">
          <router-link to="/home-v20">
              <img class="logo-8" :src="logo" />
          </router-link>
          <div class="overlap-group2-25 border-1px-botticelli-2">
            <div class="text-343 myriadgeo-medium-mid-gray-14px">{{ text343 }}</div>
            <img class="x211688_forward_arrow_icon-1-38" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-11">
              <div class="overlap-group1-21">
                <img class="package-svgrepo-com-1-13" :src="packageSvgrepoCom1" />
                <div class="text-342 myriadgeo-bold-white-16px">{{ text342 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-14">
              <div class="overlap-group-59 border-1px-botticelli-2">
                <img class="ellipse-10-6" :src="ellipse10" />
                <div class="text-341 myriadgeo-bold-st-tropaz-16px">{{ text341 }}</div>
                <img class="x211688_forward_arrow_icon-1-39" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82">
              <img class="account-11" :src="account" />
              <div class="text-336 myriadgeo-medium-st-tropaz-16px">{{ text336 }}</div>
            </div></router-link
          ><group83 />
          <router-link to="/my-profile-account-settings-2">
            <div class="group-84">
              <img class="setting-svgrepo-com-1-1" :src="settingSvgrepoCom1" />
              <div class="text-335 myriadgeo-medium-st-tropaz-16px">{{ text335 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85">
              <img class="wallet-svgrepo-com-1-1-1" :src="walletSvgrepoCom11" />
              <div class="text-337 myriadgeo-medium-st-tropaz-16px">{{ text337 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-2"></div>
      </div>
      <div class="flex-row-8">
        <div class="settings-frame">

            <div>
                <template>
                  <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">

                        <div class="overlap-group-81 overlap-group-60"
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

                        <div class="overlap-group-81"
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
<!--          <property1-active :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1DownlineProps.x42Props" />-->
        </div>
        <div class="overlap-group6-11">
          <div class="group-container-9">
            <group30 :text349="group301Props.text349" />
            <group30 :text349="group302Props.text349" :className="group302Props.className" />
          </div>
          <group22973
            :location3Props="group22973Props.location3Props"
            :location4Props="group22973Props.location4Props"
          />
          <group22974 :group71Props="group22974Props.group71Props" />
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
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group30 from "./Group30";
import Group22973 from "./Group22973";
import Group22974 from "./Group22974";
import Group57 from "./Group57";
export default {
  name: "MyProfileMyOrders",
  components: {
    Group53,
    Rectangle24,
    Group83,
    Property1Active,
    Property1Downline,
    Group30,
    Group22973,
    Group22974,
    Group57,
  },
  props: [
    "logo",
    "text343",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom1",
    "text342",
    "ellipse10",
    "text341",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text336",
    "settingSvgrepoCom1",
    "text335",
    "walletSvgrepoCom11",
    "text337",
    "group53Props",
    "rectangle24Props",
    "property1ActiveProps",
    "property1DownlineProps",
    "group301Props",
    "group302Props",
    "group22973Props",
    "group22974Props",
    "group57Props",
  ],

    methods: {
        actual_orders() {
            this.$router.push("/my-profile-my-orders-1");
        },

        order_history() {
            this.$router.push("/my-profilemy-orders");
        },
    }
};
</script>

<style>
.my-profile-my-orders-1 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1778px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-6 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-7 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-8 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-25 {
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

.text-343 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-38 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-11 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-21 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-13 {
  height: 24px;
  width: 24px;
}

.text-342 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-14 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-59 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-6 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-341 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-39 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-11,
.setting-svgrepo-com-1-1 {
  height: 30px;
  width: 30px;
}

.text-336 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-84 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.text-335 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-1 {
  height: 26px;
  width: 26px;
}

.text-337 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-2 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 302px;
  margin-top: 26px;
  width: 157px;
}

.flex-row-8 {
  align-items: flex-start;
  display: flex;
  height: 1028px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame {
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

.overlap-group6-11 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 1028px;
  padding: 59px 109px;
  position: relative;
  width: 850px;
}

.group-container-9 {
  align-items: flex-start;
  align-self: flex-start;
  display: flex;
  height: 74px;
  margin-left: 1px;
  min-width: 326px;
  position: relative;
}
</style>
