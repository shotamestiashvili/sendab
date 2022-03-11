<template>
  <div class="container-center-horizontal">
    <div class="my-profilewallet screen">
      <div class="group-25-22">
        <div class="flex-row-81">
          <router-link to="/home-v2-0"><img class="logo-26" :src="logo" /></router-link>
          <div class="overlap-group2-36 border-1px-botticelli-2">
            <div class="text-853 myriadgeo-medium-mid-gray-14px">{{ text853 }}</div>
            <img class="x211688_forward_arrow_icon-1-79" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-28">
              <div class="overlap-group1-46">
                <img class="package-svgrepo-com-1-30" :src="packageSvgrepoCom11" />
                <div class="text-852 myriadgeo-bold-white-16px">{{ text852 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-33">
              <div class="overlap-group-151 border-1px-botticelli-2">
                <img class="ellipse-10-24" :src="ellipse10" />
                <div class="text-851 myriadgeo-bold-st-tropaz-16px">{{ text851 }}</div>
                <img class="x211688_forward_arrow_icon-1-80" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-10">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-13">
              <img class="account-26" :src="account" />
              <div class="text-846 myriadgeo-medium-st-tropaz-16px">{{ text846 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-10">
              <img class="package-svgrepo-com-1-30" :src="packageSvgrepoCom12" />
              <div class="text-844 myriadgeo-medium-st-tropaz-16px">{{ text844 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-10">
              <img class="setting-svgrepo-com-1-11" :src="settingSvgrepoCom1" />
              <div class="text-845 myriadgeo-medium-st-tropaz-16px">{{ text845 }}</div>
            </div></router-link
          ><group85 />
        </div>
        <div class="rectangle-33-12"></div>
      </div>
      <div class="flex-row-82">
        <div class="settings-frame-10">

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
                        <div class="overlap-group-81"
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

                        <div class="overlap-group-81 overlap-group-60"
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
<!--          <property1-headline :x43Props="property1Headline1Props.x43Props" />-->
<!--          <property1-headline-->
<!--            :className="property1Headline2Props.className"-->
<!--            :x43Props="property1Headline2Props.x43Props"-->
<!--          />-->
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1DownlineProps.x42Props" />-->
        </div>
        <div class="group-container-35">
          <div class="overlap-group4-19 border-1px-botticelli-2">
            <div class="text-869 myriadgeo-medium-st-tropaz-14px">{{ text869 }}</div>
            <div class="text-870 myriadgeo-bold-green-48px">
              <span class="myriadgeo-bold-green-48px">{{ spanText1 }}</span
              ><span class="myriadgeo-bold-green-24px">{{ spanText2 }}</span>
            </div>
            <div class="group-container-36">
              <group119 />
              <div class="group-88-6">
                <p class="text-871 myriadgeo-medium-black-16px">{{ text871 }}</p>
                <div class="group-5-19">
                  <div class="overlap-group1-47 border-1px-link-water">
                    <div class="text-873 myriadgeo-medium-bali-hai-16px">{{ text873 }}</div>
                  </div>
                  <div class="overlap-group-152 border-1px-st-tropaz">
                    <div class="text-872 myriadgeo-bold-st-tropaz-16px">{{ text872 }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="group-115-2">
            <div class="text-867 myriadgeo-bold-black-24px">{{ text867 }}</div>
          </div>
          <div class="group-92-3">
            <div class="rectangle-43-5"></div>
            <div class="text-container-7 myriadgeo-medium-black-18px">
              <div class="text-858">{{ text858 }}</div>
              <div class="text-862">{{ text862 }}</div>
              <div class="text-863">{{ text863 }}</div>
            </div>
            <div class="flex-row-80">
              <div class="text-8-1 myriadgeo-medium-black-18px">{{ text859 }}</div>
              <div class="date-3 myriadgeo-medium-black-18px">{{ date1 }}</div>
              <div class="text-86-1 myriadgeo-medium-green-18px">{{ text864 }}</div>
            </div>
            <div class="flex-row-80">
              <div class="text-8-1 myriadgeo-medium-black-18px">{{ text860 }}</div>
              <div class="date-3 myriadgeo-medium-black-18px">{{ date2 }}</div>
              <div class="text-865 myriadgeo-medium-cinnabar-18px">{{ text865 }}</div>
            </div>
            <div class="flex-row-80">
              <div class="text-861 myriadgeo-medium-black-18px">{{ text861 }}</div>
              <div class="date-4 myriadgeo-medium-black-18px">{{ date3 }}</div>
              <div class="text-86-1 myriadgeo-medium-green-18px">{{ text866 }}</div>
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
import Group85 from "./Group85";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group119 from "./Group119";
import Group57 from "./Group57";
export default {
  name: "MyProfilewallet2",
  components: {
    Group53,
    Rectangle24,
    Group85,
    Property1Headline,
    Property1Active,
    Property1Downline,
    Group119,
    Group57,
  },
  props: [
    "logo",
    "text853",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text852",
    "ellipse10",
    "text851",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text846",
    "packageSvgrepoCom12",
    "text844",
    "settingSvgrepoCom1",
    "text845",
    "text869",
    "spanText1",
    "spanText2",
    "text871",
    "text873",
    "text872",
    "text867",
    "text858",
    "text862",
    "text863",
    "text859",
    "date1",
    "text864",
    "text860",
    "date2",
    "text865",
    "text861",
    "date3",
    "text866",
    "group53Props",
    "rectangle24Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1ActiveProps",
    "property1DownlineProps",
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
.my-profilewallet {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1708px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-22 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-81 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-26 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-36 {
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

.text-853 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-79 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-28 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-46 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-30 {
  height: 24px;
  width: 24px;
}

.text-852 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-33 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-151 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-24 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-851 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-80 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-10 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-13 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-26,
.setting-svgrepo-com-1-11 {
  height: 30px;
  width: 30px;
}

.text-846 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-10 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-844 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-10 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.text-845 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.rectangle-33-12 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 715px;
  margin-top: 26px;
  width: 180px;
}

.flex-row-82 {
  align-items: flex-start;
  display: flex;
  height: 937px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-10 {
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

.group-container-35 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 937px;
  padding: 71px 84px;
  width: 850px;
}

.overlap-group4-19 {
  align-items: center;
  align-self: center;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  margin-top: 39px;
  min-height: 440px;
  padding: 38px 108px;
  width: 630px;
}

.text-869 {
  letter-spacing: 0;
  margin-right: 1px;
  min-height: 14px;
  min-width: 173px;
}

.text-870 {
  letter-spacing: 0;
  margin-right: 2px;
  margin-top: 11px;
  min-height: 48px;
  min-width: 136px;
}

.group-container-36 {
  align-self: flex-end;
  height: 231px;
  margin-top: 43px;
  position: relative;
  width: 412px;
}

.group-88-6 {
  display: flex;
  flex-direction: column;
  height: 231px;
  left: 0;
  position: absolute;
  top: 0;
  width: 412px;
}

.text-871 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 23px;
  width: 200px;
}

.group-5-19 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 12px;
  min-height: 203px;
}

.overlap-group1-47 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 50px;
  min-width: 410px;
  padding: 16px 22px;
}

.text-873 {
  letter-spacing: 0;
  min-height: 16px;
}

.overlap-group-152 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  margin-top: 103px;
  min-width: 410px;
  padding: 16px 146px;
}

.text-872 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 116px;
  text-align: center;
}

.group-115-2 {
  display: flex;
  margin-left: 26px;
  margin-top: 61px;
  width: 252px;
}

.text-867 {
  height: 24px;
  letter-spacing: 0;
  width: 250px;
}

.group-92-3 {
  align-items: flex-start;
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  margin-top: 38px;
  min-height: 193px;
  width: 654px;
}

.rectangle-43-5 {
  background-color: var(--botticelli-2);
  height: 1px;
  width: 630px;
}

.text-container-7 {
  align-items: flex-start;
  display: flex;
  height: 18px;
  margin-top: 24px;
  min-width: 630px;
}

.text-858 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 171px;
}

.text-862 {
  letter-spacing: 0;
  margin-left: 106px;
  min-height: 18px;
  min-width: 68px;
}

.text-863 {
  letter-spacing: 0;
  margin-left: 212px;
  min-height: 18px;
}

.flex-row-80 {
  align-items: flex-start;
  display: flex;
  height: 18px;
  margin-top: 32px;
  min-width: 630px;
}

.text-8-1 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 68px;
}

.date-3 {
  letter-spacing: 0;
  margin-left: 209px;
  min-height: 18px;
  min-width: 89px;
}

.text-86-1 {
  letter-spacing: 0;
  margin-left: 116px;
  min-height: 18px;
}

.text-865 {
  letter-spacing: 0;
  margin-left: 150px;
  min-height: 18px;
  min-width: 114px;
  text-align: right;
}

.text-861 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 58px;
}

.date-4 {
  letter-spacing: 0;
  margin-left: 219px;
  min-height: 18px;
  min-width: 89px;
}
</style>
