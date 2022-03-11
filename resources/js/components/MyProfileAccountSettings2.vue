<template>
  <div class="container-center-horizontal">
    <div class="my-profileaccount-settings screen">
      <div class="group-25-19">
        <div class="flex-row-76">
          <router-link to="/home-v2-0"><img class="logo-23" :src="logo" /></router-link>
          <div class="overlap-group2-34 border-1px-botticelli-2">
            <div class="text-780 myriadgeo-medium-mid-gray-14px">{{ text780 }}</div>
            <img class="x211688_forward_arrow_icon-1-70" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-25">
              <div class="overlap-group1-43">
                <img class="package-svgrepo-com-1-28" :src="packageSvgrepoCom11" />
                <div class="text-779 myriadgeo-bold-white-16px">{{ text779 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-29">
              <div class="overlap-group-143 border-1px-botticelli-2">
                <img class="ellipse-10-21" :src="ellipse10" />
                <div class="text-778 myriadgeo-bold-st-tropaz-16px">{{ text778 }}</div>
                <img class="x211688_forward_arrow_icon-1-72" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-8">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-11">
              <img class="account-24" :src="account" />
              <div class="text-773 myriadgeo-medium-st-tropaz-16px">{{ text773 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-8">
              <img class="package-svgrepo-com-1-28" :src="packageSvgrepoCom12" />
              <div class="text-771 myriadgeo-medium-st-tropaz-16px">{{ text771 }}</div>
            </div></router-link
          ><group84 />
          <router-link to="/my-profile-wallet-3">
            <div class="group-85-11">
              <img class="wallet-svgrepo-com-1-1-12" :src="walletSvgrepoCom11" />
              <div class="text-774 myriadgeo-medium-st-tropaz-16px">{{ text774 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-10"></div>
      </div>
      <div class="flex-row-77">
        <div class="settings-frame-8">

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
                        <div class="overlap-group-81 "
                             @click.prevent="email_notification"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px" style="width: 250px">ელ.ფოსტის შეტყობინებები</div>
                                <img
                                    style="margin-left: 40px;"
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
<!--          <property1-headline :x43Props="property1Headline1Props.x43Props" />-->
<!--          <property1-headline-->
<!--            :className="property1Headline2Props.className"-->
<!--            :x43Props="property1Headline2Props.x43Props"-->
<!--          />-->
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
        </div>
        <div class="overlap-group5-15">
          <img class="alert-svgrepo-com-1-1" :src="alertSvgrepoCom11" />
          <p class="text-786 myriadgeo-medium-black-16px">{{ text786 }}</p>
          <div class="overlap-group4-17">
            <div class="text-785 ">
                <button type="button" class="myriadgeo-medium-cinnabar-16px">
                    <div style="color: red">
                        ანგარიშის დახურვა
                    </div>
                </button>
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
import Group84 from "./Group84";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Group57 from "./Group57";
export default {
  name: "MyProfileAccountSettings2",
  components: {
    Group53,
    Rectangle24,
    Group84,
    Property1Headline,
    Property1Active,
    Group57,
  },
  props: [
    "logo",
    "text780",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text779",
    "ellipse10",
    "text778",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text773",
    "packageSvgrepoCom12",
    "text771",
    "walletSvgrepoCom11",
    "text774",
    "alertSvgrepoCom11",
    "text786",
    "text785",
    "group53Props",
    "rectangle24Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1ActiveProps",
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
.my-profileaccount-settings {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1218px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-19 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-76 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-23 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-34 {
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

.text-780 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-70 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-25 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-43 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-28 {
  height: 24px;
  width: 24px;
}

.text-779 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-29 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-143 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-21 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-778 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-72 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-8 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-11 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-24 {
  height: 30px;
  width: 30px;
}

.text-773 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-8 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-771 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-85-11 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-12 {
  height: 26px;
  width: 26px;
}

.text-774 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-10 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 199px;
  margin-top: 26px;
  width: 220px;
}

.flex-row-77 {
  align-items: flex-start;
  display: flex;
  height: 470px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-8 {
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

.overlap-group5-15 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 470px;
  padding: 64px 216px;
  width: 850px;
}

.alert-svgrepo-com-1-1 {
  height: 84px;
  width: 84px;
}

.text-786 {
  align-self: flex-end;
  letter-spacing: 0;
  line-height: 26px;
  margin-top: 23px;
  min-height: 52px;
  text-align: center;
  width: 417px;
}

.overlap-group4-17 {
  align-items: center;
  background-color: var(--carousel-pink);
  border-radius: 10px;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  margin-top: 96px;
  min-width: 320px;
  padding: 0 86px;
}

.text-785 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 147px;
  text-align: center;
}
</style>
