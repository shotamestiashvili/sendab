<template>
  <div class="container-center-horizontal">
    <div class="my-profile-wallet-3 screen">
      <div class="group-25-9">
        <div class="flex-row-41">
          <router-link to="/home-v2-0"><img class="logo-11" :src="logo" /></router-link>
          <div class="overlap-group2-27 border-1px-botticelli-2">
            <div class="text-450 myriadgeo-medium-mid-gray-14px">{{ text450 }}</div>
            <img class="x211688_forward_arrow_icon-1-49" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-14">
              <div class="overlap-group1-27">
                <img class="package-svgrepo-com-1-18" :src="packageSvgrepoCom11" />
                <div class="text-449 myriadgeo-bold-white-16px">{{ text449 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-17">
              <div class="overlap-group-107 border-1px-botticelli-2">
                <img class="ellipse-10-9" :src="ellipse10" />
                <div class="text-448 myriadgeo-bold-st-tropaz-16px">{{ text448 }}</div>
                <img class="x211688_forward_arrow_icon-1-50" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-2">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-2">
              <img class="account-13" :src="account" />
              <div class="text-443 myriadgeo-medium-st-tropaz-16px">{{ text443 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-3">
              <img class="package-svgrepo-com-1-18" :src="packageSvgrepoCom12" />
              <div class="text-441 myriadgeo-medium-st-tropaz-16px">{{ text441 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-4">
              <img class="setting-svgrepo-com-1-5" :src="settingSvgrepoCom1" />
              <div class="text-442 myriadgeo-medium-st-tropaz-16px">{{ text442 }}</div>
            </div></router-link
          ><group85 />
        </div>
        <div class="rectangle-33-4"></div>
      </div>
      <div class="flex-row-42">
        <div class="settings-frame-2">

            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 overlap-group-60"
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

            <!--          <property1-active :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1Downline1Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline2Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline3Props.x42Props" />-->
        </div>
        <div class="group-container-21">
          <div class="overlap-group4-10">
            <router-link to="/my-profilewallet2">
              <div class="group-111">
                <div class="text-container-6 border-1px-ziggurat">
                  <div class="text-455 myriadgeo-bold-st-tropaz-20px">{{ text455 }}</div>
                  <div class="text-456">{{ text456 }}</div>
                </div>
              </div></router-link
            >
            <div class="rectangle-47-2 border-1px-botticelli-2"></div>
            <div class="text-457 myriadgeo-medium-st-tropaz-14px">{{ text457 }}</div>
            <div class="text-458 myriadgeo-medium-bali-hai-14px">{{ text458 }}</div>
            <div class="text-459 myriadgeo-bold-green-48px">
              <span class="myriadgeo-bold-green-48px">{{ spanText1 }}</span
              ><span class="myriadgeo-bold-green-24px">{{ spanText2 }}</span>
            </div>
            <div class="text-460 myriadgeo-bold-bali-hai-48px">
              <span class="myriadgeo-bold-bali-hai-48px">{{ spanText3 }}</span
              ><span class="myriadgeo-bold-bali-hai-24px">{{ spanText4 }}</span>
            </div>
            <img class="info-svgrepo-com-1-1" :src="infoSvgrepoCom1" />
            <p class="total-available-bala myriadgeo-medium-mid-gray-14px">{{ totalAvailableBala1 }}</p>
          </div>
          <div class="group-118">
            <group115 :lockSvgrepoCom1="group1151Props.lockSvgrepoCom1" :text465="group1151Props.text465" />
            <div class="group-113">
              <div class="group-92">
                <div class="rectangle-43"></div>
                <div class="text-container-5 myriadgeo-medium-black-18px">
                  <div class="text-461">{{ text461 }}</div>
                  <div class="text-462">{{ text462 }}</div>
                </div>
              </div>
              <div class="group-93">
                <div class="rectangle-43"></div>
                <div class="text-container-5 myriadgeo-medium-black-18px">
                  <div class="text-463">{{ text463 }}</div>
                  <div class="text-464">{{ text464 }}</div>
                </div>
                <div class="rectangle-44"></div>
              </div>
              <div class="flex-row-43">
                <img class="info-svgrepo-com-2" :src="infoSvgrepoCom2" />
                <p class="total-available-bala-1 myriadgeo-medium-mid-gray-14px">{{ totalAvailableBala2 }}</p>
              </div>
            </div>
          </div>
          <group115
            :lockSvgrepoCom1="group1152Props.lockSvgrepoCom1"
            :text465="group1152Props.text465"
            :className="group1152Props.className"
          />
          <div class="group-117 border-1px-botticelli-2">
            <div class="group-114">
              <div class="offered-rides myriadgeo-medium-st-tropaz-18px">{{ offeredRides }}</div>
              <div class="my-booking">{{ myBooking }}</div>
            </div>
            <div class="overlap-group5-8">
              <div class="rectangle-50"></div>
              <div class="rectangle-51"></div>
            </div>
            <div class="group-container-22">
              <div class="group-92-1">
                <div class="text-467 myriadgeo-medium-black-14px">{{ text467 }}</div>
                <div class="text-4-2 myriadgeo-medium-black-26px">{{ text468 }}</div>
              </div>
              <div class="group-115">
                <div class="text-469 myriadgeo-medium-black-14px">{{ text469 }}</div>
                <div class="text-470 myriadgeo-medium-black-26px">{{ text470 }}</div>
              </div>
            </div>
            <div class="group-116">
              <div class="text-471 myriadgeo-medium-black-14px">{{ text471 }}</div>
              <div class="text-4-2 myriadgeo-medium-black-26px">{{ text472 }}</div>
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
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group115 from "./Group115";
import Group57 from "./Group57";
export default {
  name: "MyProfilewallet",
  components: {
    Group53,
    Rectangle24,
    Group85,
    Property1Active,
    Property1Downline,
    Group115,
    Group57,
  },
  props: [
    "logo",
    "text450",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text449",
    "ellipse10",
    "text448",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text443",
    "packageSvgrepoCom12",
    "text441",
    "settingSvgrepoCom1",
    "text442",
    "text455",
    "text456",
    "text457",
    "text458",
    "spanText1",
    "spanText2",
    "spanText3",
    "spanText4",
    "infoSvgrepoCom1",
    "totalAvailableBala1",
    "text461",
    "text462",
    "text463",
    "text464",
    "infoSvgrepoCom2",
    "totalAvailableBala2",
    "offeredRides",
    "myBooking",
    "text467",
    "text468",
    "text469",
    "text470",
    "text471",
    "text472",
    "group53Props",
    "rectangle24Props",
    "property1ActiveProps",
    "property1Downline1Props",
    "property1Downline2Props",
    "property1Downline3Props",
    "group1151Props",
    "group1152Props",
    "group57Props",
  ],

    methods: {
        my_balance(){
            this.$router.push("/my-profile-wallet-3");
        },

        balance_fill(){
            this.$router.push("/my-profilewallet2");
        },

        cash_out (){
            this.$router.push("/my-profilewallet");
        },

        transaction_history(){
            this.$router.push("/my-profilewallet3");
        },
    }
};
</script>

<style>
.my-profile-wallet-3 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1997px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-9 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-41 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-11 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-27 {
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

.text-450 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-49 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-14 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-27 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-18 {
  height: 24px;
  width: 24px;
}

.text-449 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-17 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-107 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-9 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-448 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-50 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-2 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-2 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-13,
.setting-svgrepo-com-1-5 {
  height: 30px;
  width: 30px;
}

.text-443 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-3 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-441 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-4 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.text-442 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.rectangle-33-4 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 715px;
  margin-top: 26px;
  width: 180px;
}

.flex-row-42 {
  align-items: flex-start;
  display: flex;
  height: 1244px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-2 {
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

.group-container-21 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 1244px;
  padding: 110px 0;
  position: relative;
  width: 850px;
}

.overlap-group4-10 {
  border-radius: 20px;
  height: 190px;
  position: relative;
  width: 630px;
}

.group-111 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  height: 30px;
  left: 197px;
  min-width: 104px;
  position: absolute;
  top: 70px;
}

.text-container-6 {
  align-items: flex-start;
  border-radius: 30px;
  display: flex;
  height: 30px;
  min-width: 100px;
  padding: 4px 10px;
}

.text-455 {
  letter-spacing: 0;
  min-height: 20px;
  min-width: 12px;
}

.text-456 {
  align-self: center;
  color: var(--st-tropaz);
  font-family: var(--font-family-myriad_geo-bold);
  font-size: var(--font-size-s);
  font-weight: 700;
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 9px;
  min-height: 14px;
  min-width: 54px;
}

.rectangle-47-2 {
  border-radius: 20px;
  height: 190px;
  left: 0;
  position: absolute;
  top: 0;
  width: 630px;
}

.text-457 {
  left: 38px;
  letter-spacing: 0;
  position: absolute;
  top: 39px;
}

.text-458 {
  left: 372px;
  letter-spacing: 0;
  position: absolute;
  top: 39px;
}

.text-459 {
  left: 38px;
  letter-spacing: 0;
  position: absolute;
  top: 64px;
}

.text-460 {
  left: 372px;
  letter-spacing: 0;
  position: absolute;
  top: 64px;
}

.info-svgrepo-com-1-1 {
  height: 18px;
  left: 38px;
  position: absolute;
  top: 138px;
  width: 18px;
}

.total-available-bala {
  left: 64px;
  letter-spacing: 0;
  position: absolute;
  top: 140px;
}

.group-118 {
  display: flex;
  flex-direction: column;
  height: 257px;
  margin-top: 70px;
  position: relative;
  width: 632px;
}

.group-113 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  margin-top: 35px;
  min-height: 192px;
  width: 633px;
}

.group-92 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  min-height: 43px;
  width: 634px;
}

.rectangle-43 {
  background-color: var(--botticelli-2);
  height: 1px;
  width: 630px;
}

.text-container-5 {
  align-items: flex-start;
  display: flex;
  height: 18px;
  margin-top: 24px;
  min-width: 629px;
}

.text-461 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 292px;
}

.text-462 {
  letter-spacing: 0;
  margin-left: 269px;
  min-height: 18px;
  min-width: 68px;
  text-align: right;
}

.group-93 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  margin-top: 24px;
  min-height: 68px;
  width: 634px;
}

.text-463 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 297px;
}

.text-464 {
  letter-spacing: 0;
  margin-left: 283px;
  min-height: 18px;
  min-width: 49px;
  text-align: right;
}

.rectangle-44 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 24px;
  width: 630px;
}

.flex-row-43 {
  align-items: center;
  display: flex;
  margin-top: 39px;
  min-width: 554px;
}

.info-svgrepo-com-2 {
  height: 18px;
  width: 18px;
}

.total-available-bala-1 {
  letter-spacing: 0;
  margin-left: 8px;
  min-height: 14px;
  min-width: 528px;
}

.group-117 {
  align-items: center;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  margin-top: 35px;
  min-height: 370px;
  padding: 28px 0;
  width: 631px;
}

.group-114 {
  display: flex;
  margin-left: 3px;
  width: 246px;
}

.offered-rides {
  height: 18px;
  letter-spacing: 0;
  width: 104px;
}

.my-booking {
  color: var(--bali-hai-2);
  font-family: var(--font-family-myriad_geo-medium);
  font-size: var(--font-size-l);
  font-weight: 500;
  height: 18px;
  letter-spacing: 0;
  margin-left: 46px;
  width: 92px;
}

.overlap-group5-8 {
  height: 4px;
  margin-left: 1px;
  margin-top: 21px;
  position: relative;
  width: 630px;
}

.rectangle-50 {
  background-color: var(--botticelli-2);
  height: 1px;
  left: 0;
  position: absolute;
  top: 3px;
  width: 630px;
}

.rectangle-51 {
  background-color: var(--cyan--aqua);
  height: 4px;
  left: 194px;
  position: absolute;
  top: 0;
  width: 104px;
}

.group-container-22 {
  align-items: flex-start;
  display: flex;
  margin-right: 52px;
  margin-top: 66px;
  min-width: 441px;
}

.group-92-1 {
  display: flex;
  flex-direction: column;
  height: 58px;
  width: 203px;
}

.text-467 {
  height: 14px;
  letter-spacing: 0;
  margin-left: 1px;
  width: 198px;
}

.text-4-2 {
  height: 26px;
  letter-spacing: 0;
  margin-top: 18px;
  width: 111px;
}

.group-115 {
  display: flex;
  flex-direction: column;
  height: 58px;
  margin-left: 119px;
  width: 119px;
}

.text-469 {
  height: 14px;
  letter-spacing: 0;
  margin-left: 1px;
  width: 114px;
}

.text-470 {
  height: 26px;
  letter-spacing: 0;
  margin-top: 18px;
  width: 98px;
}

.group-116 {
  align-self: flex-start;
  display: flex;
  flex-direction: column;
  height: 58px;
  margin-left: 68px;
  margin-top: 43px;
  width: 115px;
}

.text-471 {
  height: 14px;
  letter-spacing: 0;
  margin-left: 1px;
  width: 101px;
}
</style>
