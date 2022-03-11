<template>
  <div class="container-center-horizontal">
    <div class="my-profilewallet3 screen">
      <div class="group-25-24">
        <div class="flex-row-86">
          <router-link to="/home-v2-0"><img class="logo-28" :src="logo" /></router-link>
          <div class="overlap-group2-38 border-1px-botticelli-2">
            <div class="text-904 myriadgeo-medium-mid-gray-14px">{{ text904 }}</div>
            <img class="x211688_forward_arrow_icon-1-84" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-30">
              <div class="overlap-group1-49">
                <img class="package-svgrepo-com-1-32" :src="packageSvgrepoCom11" />
                <div class="text-903 myriadgeo-bold-white-16px">{{ text903 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-35">
              <div class="overlap-group-156 border-1px-botticelli-2">
                <img class="ellipse-10-26" :src="ellipse10" />
                <div class="text-902 myriadgeo-bold-st-tropaz-16px">{{ text902 }}</div>
                <img class="x211688_forward_arrow_icon-1-85" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-12">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-15">
              <img class="account-28" :src="account" />
              <div class="text-897 myriadgeo-medium-st-tropaz-16px">{{ text897 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-12">
              <img class="package-svgrepo-com-1-32" :src="packageSvgrepoCom12" />
              <div class="text-895 myriadgeo-medium-st-tropaz-16px">{{ text895 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-12">
              <img class="setting-svgrepo-com-1-13" :src="settingSvgrepoCom1" />
              <div class="text-896 myriadgeo-medium-st-tropaz-16px">{{ text896 }}</div>
            </div></router-link
          ><group85 />
        </div>
        <div class="rectangle-33-14"></div>
      </div>
      <div class="flex-row-87">
        <div class="settings-frame-12">
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
                        <div class="overlap-group-81 overlap-group-60"
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
<!--          <property1-headline-->
<!--            :className="property1Headline3Props.className"-->
<!--            :x43Props="property1Headline3Props.x43Props"-->
<!--          />-->
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
        </div>
        <div class="overlap-group6-18">
          <div class="group-container-37">
            <group30 :text349="group301Props.text349" />
            <group30 :text349="group302Props.text349" :className="group302Props.className" />
          </div>
          <div class="overlap-group7-10 myriadgeo-medium-black-14px">
            <div class="id-2">{{ id }}</div>
            <div class="text-909">{{ text909 }}</div>
            <div class="text-910">{{ text910 }}</div>
            <div class="text-911">{{ text911 }}</div>
            <div class="text-912">{{ text912 }}</div>
          </div>
          <router-link to="/result-detailed-1">
            <div class="group-22976-1">
              <div class="flex-row-85">
                <div class="text-9-3 myriadgeo-medium-black-16px">{{ text913 }}</div>
                <div class="date-5 myriadgeo-medium-black-16px">{{ date1 }}</div>
                <div class="text-9-4 myriadgeo-medium-black-16px">{{ text914 }}</div>
                <div class="text-9-5 myriadgeo-medium-black-16px">{{ text915 }}</div>
                <div class="text-916 myriadgeo-medium-green-16px">{{ text916 }}</div>
                <img class="x227601_right_arrow_icon-1-15" :src="x227601_Right_Arrow_Icon11" />
              </div>
              <div class="rectangle-180-1"></div></div
          ></router-link>
          <div class="group-2297-1">
            <div class="flex-row-85">
              <div class="text-9-3 myriadgeo-medium-black-16px">{{ text917 }}</div>
              <div class="date-5 myriadgeo-medium-black-16px">{{ date2 }}</div>
              <div class="text-9-4 myriadgeo-medium-black-16px">{{ text918 }}</div>
              <div class="text-919 myriadgeo-medium-black-16px">{{ text919 }}</div>
              <div class="text-920 myriadgeo-medium-cyan--aqua-16px">{{ text920 }}</div>
              <img class="x227601_right_arrow_icon-1-16" :src="x227601_Right_Arrow_Icon12" />
            </div>
            <div class="rectangle-180-1"></div>
          </div>
          <div class="group-2297-1">
            <div class="flex-row-85">
              <div class="text-9-3 myriadgeo-medium-black-16px">{{ text921 }}</div>
              <div class="date-5 myriadgeo-medium-black-16px">{{ date3 }}</div>
              <div class="text-9-4 myriadgeo-medium-black-16px">{{ text922 }}</div>
              <div class="text-9-5 myriadgeo-medium-black-16px">{{ text923 }}</div>
              <div class="text-924 myriadgeo-medium-cinnabar-16px">{{ text924 }}</div>
              <img class="x227601_right_arrow_icon-1-17" :src="x227601_Right_Arrow_Icon13" />
            </div>
            <div class="rectangle-180-1"></div>
          </div>
          <div class="group-2297-1">
            <div class="flex-row-85">
              <div class="text-9-3 myriadgeo-medium-black-16px">{{ text925 }}</div>
              <div class="date-5 myriadgeo-medium-black-16px">{{ date4 }}</div>
              <div class="text-9-4 myriadgeo-medium-black-16px">{{ text926 }}</div>
              <div class="text-927 myriadgeo-medium-black-16px">{{ text927 }}</div>
              <div class="text-928 myriadgeo-medium-green-16px">{{ text928 }}</div>
              <img class="x227601_right_arrow_icon-1-15" :src="x227601_Right_Arrow_Icon14" />
            </div>
            <div class="rectangle-180-1"></div>
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
import Group30 from "./Group30";
import Group57 from "./Group57";
export default {
  name: "MyProfilewallet4",
  components: {
    Group53,
    Rectangle24,
    Group85,
    Property1Headline,
    Property1Active,
    Group30,
    Group57,
  },
  props: [
    "logo",
    "text904",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text903",
    "ellipse10",
    "text902",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text897",
    "packageSvgrepoCom12",
    "text895",
    "settingSvgrepoCom1",
    "text896",
    "id",
    "text909",
    "text910",
    "text911",
    "text912",
    "text913",
    "date1",
    "text914",
    "text915",
    "text916",
    "x227601_Right_Arrow_Icon11",
    "text917",
    "date2",
    "text918",
    "text919",
    "text920",
    "x227601_Right_Arrow_Icon12",
    "text921",
    "date3",
    "text922",
    "text923",
    "text924",
    "x227601_Right_Arrow_Icon13",
    "text925",
    "date4",
    "text926",
    "text927",
    "text928",
    "x227601_Right_Arrow_Icon14",
    "group53Props",
    "rectangle24Props",
    "property1Headline1Props",
    "property1Headline2Props",
    "property1Headline3Props",
    "property1ActiveProps",
    "group301Props",
    "group302Props",
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
.my-profilewallet3 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1418px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-24 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-86 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-28 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-38 {
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

.text-904 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-84 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-30 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-49 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-32 {
  height: 24px;
  width: 24px;
}

.text-903 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-35 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-156 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-26 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-902 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-85 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-12 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-15 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-28,
.setting-svgrepo-com-1-13 {
  height: 30px;
  width: 30px;
}

.text-897 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-12 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-895 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-12 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.text-896 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.rectangle-33-14 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 715px;
  margin-top: 26px;
  width: 180px;
}

.flex-row-87 {
  align-items: flex-start;
  display: flex;
  height: 618px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-12 {
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

.overlap-group6-18 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 618px;
  padding: 59px 70px;
  width: 850px;
}

.group-container-37 {
  align-items: flex-start;
  align-self: flex-start;
  display: flex;
  height: 74px;
  margin-left: 10px;
  min-width: 326px;
  position: relative;
}

.overlap-group7-10 {
  align-items: center;
  align-self: center;
  background-color: var(--swans-down);
  border-radius: 20px;
  display: flex;
  height: 50px;
  margin-top: 57px;
  min-width: 690px;
  padding: 0 22px;
}

.id-2 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 21px;
}

.text-909 {
  letter-spacing: 0;
  margin-left: 49px;
  min-height: 14px;
  min-width: 53px;
}

.text-910 {
  letter-spacing: 0;
  margin-left: 57px;
  min-height: 14px;
  min-width: 41px;
}

.text-911 {
  letter-spacing: 0;
  margin-left: 30px;
  min-height: 14px;
  min-width: 101px;
}

.text-912 {
  letter-spacing: 0;
  margin-left: 119px;
  min-height: 14px;
  min-width: 57px;
}

.group-22976-1 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  margin-top: 20px;
  min-height: 45px;
  width: 700px;
}

.flex-row-85 {
  align-items: center;
  align-self: center;
  display: flex;
  min-width: 656px;
}

.text-9-3 {
  letter-spacing: 0;
  margin-top: 4px;
  min-height: 16px;
  min-width: 42px;
}

.date-5 {
  letter-spacing: 0;
  margin-left: 28px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 79px;
}

.text-9-4 {
  letter-spacing: 0;
  margin-left: 31px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 43px;
}

.text-9-5 {
  letter-spacing: 0;
  margin-left: 28px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 136px;
}

.text-916 {
  letter-spacing: 0;
  margin-left: 84px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 115px;
}

.x227601_right_arrow_icon-1-15 {
  height: 24px;
  margin-left: 46px;
  width: 24px;
}

.rectangle-180-1 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 20px;
  width: 690px;
}

.group-2297-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 20px;
  min-height: 45px;
  width: 700px;
}

.text-919 {
  letter-spacing: 0;
  margin-left: 28px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 172px;
}

.text-920 {
  letter-spacing: 0;
  margin-left: 48px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 84px;
}

.x227601_right_arrow_icon-1-16 {
  height: 24px;
  margin-left: 77px;
  width: 24px;
}

.text-924 {
  letter-spacing: 0;
  margin-left: 84px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 106px;
}

.x227601_right_arrow_icon-1-17 {
  height: 24px;
  margin-left: 55px;
  width: 24px;
}

.text-927 {
  letter-spacing: 0;
  margin-left: 28px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 131px;
}

.text-928 {
  letter-spacing: 0;
  margin-left: 89px;
  margin-top: 4px;
  min-height: 16px;
  min-width: 115px;
}
</style>
