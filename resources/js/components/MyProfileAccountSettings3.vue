<template>
  <div class="container-center-horizontal">
    <div class="my-profileaccount-settings2 screen">
      <div class="group-25-21">
        <div class="flex-row-78">
          <router-link to="/home-v2-0"><img class="logo-25" :src="logo" /></router-link>
          <div class="overlap-group2-35 border-1px-botticelli-2">
            <div class="text-834 myriadgeo-medium-mid-gray-14px">{{ text834 }}</div>
            <img class="x211688_forward_arrow_icon-1-75" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-27">
              <div class="overlap-group1-45">
                <img class="package-svgrepo-com-1-29" :src="packageSvgrepoCom11" />
                <div class="text-833 myriadgeo-bold-white-16px">{{ text833 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-32">
              <div class="overlap-group-147 border-1px-botticelli-2">
                <img class="ellipse-10-23" :src="ellipse10" />
                <div class="text-832 myriadgeo-bold-st-tropaz-16px">{{ text832 }}</div>
                <img class="x211688_forward_arrow_icon-1-76" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-9">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-12">
              <img class="account-25" :src="account" />
              <div class="text-827 myriadgeo-medium-st-tropaz-16px">{{ text827 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-9">
              <img class="package-svgrepo-com-1-29" :src="packageSvgrepoCom12" />
              <div class="text-825 myriadgeo-medium-st-tropaz-16px">{{ text825 }}</div>
            </div></router-link
          ><group84 />
          <router-link to="/my-profile-wallet-3">
            <div class="group-85-12">
              <img class="wallet-svgrepo-com-1-1-13" :src="walletSvgrepoCom11" />
              <div class="text-828 myriadgeo-medium-st-tropaz-16px">{{ text828 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-11"></div>
      </div>
      <div class="flex-row-79">
        <div class="settings-frame-9">

            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>
                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 "
                             @click.prevent="change_password"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px; ">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">პაროლის შეცვლა</div>
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
                        <div class="overlap-group-81 overlap-group-60 "
                             @click.prevent="email_notification"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px" style="width: 250px">ელ.ფოსტის შეტყობინებები</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                    style="margin-left: 40px;"
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
                             @click.prevent="account_deactivation"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ანგარიშის დახურვა</div>
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
<!--          <property1-downline :x42Props="property1DownlineProps.x42Props" />-->
        </div>
        <div class="group-container-34">
          <div class="group-108">
            <div class="overlap-group-146">
              <div class="rectangle-46-1"></div>
            </div>
            <p class="i-would-like-to-rece myriadgeo-medium-black-16px">{{ iWouldLikeToRece1 }}</p>
          </div>
          <div class="group-109">
            <div class="overlap-group5-17">
              <div class="rectangle-46-1"></div>
            </div>
            <p class="i-would-like-to-rece-1 myriadgeo-medium-black-16px">{{ iWouldLikeToRece2 }}</p>
          </div>
          <div class="group-110">
            <div class="overlap-group-146">
              <div class="rectangle-46-1"></div>
            </div>
            <p class="i-would-like-to-see myriadgeo-medium-black-16px">{{ iWouldLikeToSee }}</p>
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
import Group84 from "./Group84";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group57 from "./Group57";
export default {
  name: "MyProfileAccountSettings3",
  components: {
    Group53,
    Rectangle24,
    Group84,
    Property1Headline,
    Property1Active,
    Property1Downline,
    Group57,
  },
  props: [
    "logo",
    "text834",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text833",
    "ellipse10",
    "text832",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text827",
    "packageSvgrepoCom12",
    "text825",
    "walletSvgrepoCom11",
    "text828",
    "iWouldLikeToRece1",
    "iWouldLikeToRece2",
    "iWouldLikeToSee",
    "group53Props",
    "rectangle24Props",
    "property1HeadlineProps",
    "property1ActiveProps",
    "property1DownlineProps",
    "group57Props",
  ],

    methods: {
        change_password(){
            this.$router.push("/my-profile-account-settings-2");
        },

        email_notification (){
            this.$router.push("my-profileaccount-settings2");
        },

        account_deactivation (){
            this.$router.push("/my-profileaccount-settings");
        },
    }
};
</script>

<style>
.my-profileaccount-settings2 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1028px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-21 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-78 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-25 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-35 {
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

.text-834 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-75 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-27 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-45 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-29 {
  height: 24px;
  width: 24px;
}

.text-833 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-32 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-147 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-23 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-832 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-76 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-9 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-12 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-25 {
  height: 30px;
  width: 30px;
}

.text-827 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-9 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-825 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-85-12 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-13 {
  height: 26px;
  width: 26px;
}

.text-828 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-11 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 199px;
  margin-top: 26px;
  width: 220px;
}

.flex-row-79 {
  align-items: flex-start;
  display: flex;
  height: 290px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-9 {
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  height: 240px;
  overflow: hidden;
  position: relative;
  width: 410px;
}

.group-container-34 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 290px;
  padding: 65px 110px;
  width: 850px;
}

.group-108 {
  align-items: center;
  display: flex;
  min-width: 555px;
}

.overlap-group-146 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 30px;
  display: flex;
  height: 35px;
  min-width: 70px;
  padding: 0 3px;
}

.rectangle-46-1 {
  background-color: var(--white);
  border-radius: 30px;
  height: 29px;
  width: 29px;
}

.i-would-like-to-rece {
  letter-spacing: 0;
  margin-bottom: 1px;
  margin-left: 18px;
  min-height: 16px;
  min-width: 465px;
}

.group-109 {
  align-items: center;
  display: flex;
  margin-top: 25px;
  min-width: 479px;
}

.overlap-group5-17 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 30px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  min-width: 70px;
  padding: 0 4px;
}

.i-would-like-to-rece-1 {
  letter-spacing: 0;
  margin-bottom: 1px;
  margin-left: 18px;
  min-height: 16px;
  min-width: 389px;
}

.group-110 {
  align-items: center;
  display: flex;
  margin-top: 25px;
  min-width: 388px;
}

.i-would-like-to-see {
  letter-spacing: 0;
  margin-bottom: 1px;
  margin-left: 18px;
  min-height: 16px;
  min-width: 298px;
}
</style>
