<template>
  <div class="container-center-horizontal">
    <div class="my-profilewallet2 screen">
      <div class="group-25-23">
        <div class="flex-row-83">
          <router-link to="/home-v2-0"><img class="logo-27" :src="logo" /></router-link>
          <div class="overlap-group2-37 border-1px-botticelli-2">
            <div class="text-883 myriadgeo-medium-mid-gray-14px">{{ text883 }}</div>
            <img class="x211688_forward_arrow_icon-1-81" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-29">
              <div class="overlap-group1-48">
                <img class="package-svgrepo-com-1-31" :src="packageSvgrepoCom11" />
                <div class="text-882 myriadgeo-bold-white-16px">{{ text882 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-34">
              <div class="overlap-group-154 border-1px-botticelli-2">
                <img class="ellipse-10-25" :src="ellipse10" />
                <div class="text-881 myriadgeo-bold-st-tropaz-16px">{{ text881 }}</div>
                <img class="x211688_forward_arrow_icon-1-82" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-11">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-14">
              <img class="account-27" :src="account" />
              <div class="text-876 myriadgeo-medium-st-tropaz-16px">{{ text876 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-11">
              <img class="package-svgrepo-com-1-31" :src="packageSvgrepoCom12" />
              <div class="text-874 myriadgeo-medium-st-tropaz-16px">{{ text874 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-11">
              <img class="setting-svgrepo-com-1-12" :src="settingSvgrepoCom1" />
              <div class="text-875 myriadgeo-medium-st-tropaz-16px">{{ text875 }}</div>
            </div></router-link
          ><group85 />
        </div>
        <div class="rectangle-33-13"></div>
      </div>
      <div class="flex-row-84">
        <div class="settings-frame-11">
            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 "
                             @click.prevent="my_balance"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ჩემი ბალანსი</div>
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
                             @click.prevent="balance_fill"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ბალანსის შევსება</div>
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
                             @click.prevent="cash_out"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">თანხის გატანა</div>
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
                        <div class="overlap-group-81 "
                             @click.prevent="transaction_history"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ტრანზაქციების ისტორია</div>
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
<!--          <property1-downline :x42Props="property1Downline1Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline2Props.x42Props" />-->
        </div>
        <div class="overlap-group6-17">
          <div class="text-889 myriadgeo-bold-black-24px">{{ text889 }}</div>
          <group583
            :text424="group583Props.text424"
            :text425="group583Props.text425"
            :className="group583Props.className"
          />
          <div class="group-104-1">
            <div class="text-892 myriadgeo-medium-black-16px">{{ text892 }}</div>
            <div class="group-5-20">
              <div class="overlap-group-155 border-1px-link-water">
                <div class="text-893 myriadgeo-medium-bali-hai-16px">{{ text893 }}</div>
                <img class="x211688_forward_arrow_icon-1-83" :src="x211688_Forward_Arrow_Icon13" />
              </div>
            </div>
          </div>
          <group119 :className="group119Props.className" />
          <div class="overlap-group5-19 border-1px-st-tropaz">
            <div class="text-894 myriadgeo-bold-st-tropaz-16px">{{ text894 }}</div>
          </div>
          <div class="light-large-container">
            <img
              class="visa-light-large"
              src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/visa-light-large@2x.svg"
            />
            <img
              class="x-light-large"
              src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/mastercard-light-large@2x.svg"
            />
            <img
              class="x-light-large"
              src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/americanexpress-light-large@2x.svg"
            />
            <img
              class="discover-light-large"
              src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/discover-light-large@2x.svg"
            />
            <img
              class="x-light-large"
              src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/paypal-light-large@2x.svg"
            />
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
import Group85 from "./Group85";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group583 from "./Group583";
import Group119 from "./Group119";
import Group57 from "./Group57";
export default {
  name: "MyProfilewallet3",
  components: {
    Group53,
    Rectangle24,
    Group85,
    Property1Headline,
    Property1Active,
    Property1Downline,
    Group583,
    Group119,
    Group57,
  },
  props: [
    "logo",
    "text883",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text882",
    "ellipse10",
    "text881",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text876",
    "packageSvgrepoCom12",
    "text874",
    "settingSvgrepoCom1",
    "text875",
    "text889",
    "text892",
    "text893",
    "x211688_Forward_Arrow_Icon13",
    "text894",
    "group53Props",
    "rectangle24Props",
    "property1HeadlineProps",
    "property1ActiveProps",
    "property1Downline1Props",
    "property1Downline2Props",
    "group583Props",
    "group119Props",
    "group57Props",
  ],

    methods: {
        my_balance() {
            this.$router.push("/my-profile-wallet-3");
        },

        balance_fill() {
            this.$router.push("/my-profilewallet2");
        },

        cash_out() {
            this.$router.push("/my-profilewallet");
        },

        transaction_history() {
            this.$router.push("/my-profilewallet3");
        },
    }
};
</script>

<style>
.my-profilewallet2 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1448px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-23 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-83 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-27 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-37 {
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

.text-883 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-81 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-29 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-48 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-31 {
  height: 24px;
  width: 24px;
}

.text-882 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-34 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-154 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-25 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-881 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-82 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-11 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-14 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-27,
.setting-svgrepo-com-1-12 {
  height: 30px;
  width: 30px;
}

.text-876 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-11 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-874 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-11 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.text-875 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.rectangle-33-13 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 715px;
  margin-top: 26px;
  width: 180px;
}

.flex-row-84 {
  align-items: flex-start;
  display: flex;
  height: 660px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-11 {
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

.overlap-group6-17 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 660px;
  padding: 76px 218px;
  position: relative;
  width: 850px;
}

.text-889 {
  align-self: center;
  letter-spacing: 0;
  min-height: 24px;
  min-width: 214px;
}

.group-104-1 {
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  height: 78px;
  margin-top: 22px;
  width: 412px;
}

.text-892 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 22px;
  width: 212px;
}

.group-5-20 {
  align-items: flex-start;
  display: flex;
  margin-top: 12px;
  min-width: 412px;
}

.overlap-group-155 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  min-width: 410px;
  padding: 16px 19px;
}

.text-893 {
  letter-spacing: 0;
  margin-top: 0;
  min-height: 16px;
  min-width: 160px;
}

.x211688_forward_arrow_icon-1-83 {
  height: 16px;
  margin-left: 194px;
  width: 16px;
}

.overlap-group5-19 {
  align-items: flex-start;
  align-self: center;
  border-radius: 50px;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  margin-top: 26px;
  min-width: 410px;
  padding: 16px 128px;
}

.text-894 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 143px;
  text-align: center;
}

.light-large-container {
  align-items: flex-start;
  display: flex;
  margin-left: 2px;
  margin-top: 63px;
  min-width: 288px;
}

.visa-light-large {
  height: 32px;
  width: 48px;
}

.x-light-large {
  height: 32px;
  margin-left: 12px;
  width: 48px;
}

.discover-light-large {
  align-self: flex-end;
  height: 32px;
  margin-left: 12px;
  width: 48px;
}
</style>
