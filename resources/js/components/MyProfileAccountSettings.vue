<template>
  <div class="container-center-horizontal">
    <div class="my-profile-account-settings-2 screen">
      <div class="group-25-8">
        <div class="flex-row-38">
          <router-link to="/home-v2-0"><img class="logo-10" :src="logo" /></router-link>
          <div class="overlap-group2-26 border-1px-botticelli-2">
            <div class="text-419 myriadgeo-medium-mid-gray-14px">{{ text419 }}</div>
            <img class="x211688_forward_arrow_icon-1-46" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-13">
              <div class="overlap-group1-25">
                <img class="package-svgrepo-com-1-17" :src="packageSvgrepoCom11" />
                <div class="text-418 myriadgeo-bold-white-16px">{{ text418 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-16">
              <div class="overlap-group-101 border-1px-botticelli-2">
                <img class="ellipse-10-8" :src="ellipse10" />
                <div class="text-417 myriadgeo-bold-st-tropaz-16px">{{ text417 }}</div>
                <img class="x211688_forward_arrow_icon-1-47" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-1">
          <router-link to="/my-profile-general-info-6">
            <div class="group-82-1">
              <img class="account-12" :src="account" />
              <div class="text-412 myriadgeo-medium-st-tropaz-16px">{{ text412 }}</div>
            </div></router-link
          ><router-link to="/my-profile-my-orders-1">
            <div class="group-83-2">
              <img class="package-svgrepo-com-1-17" :src="packageSvgrepoCom12" />
              <div class="text-410 myriadgeo-medium-st-tropaz-16px">{{ text410 }}</div>
            </div></router-link
          ><group84 />
          <router-link to="/my-profile-wallet-3">
            <div class="group-85-1">
              <img class="wallet-svgrepo-com-1-1-2" :src="walletSvgrepoCom11" />
              <div class="text-413 myriadgeo-medium-st-tropaz-16px">{{ text413 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-3"></div>
      </div>
      <div class="flex-row-39">
        <div class="settings-frame-1">

            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>
                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 overlap-group-60"
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
                                <div class="text_label myriadgeo-medium-st-tropaz-16px"  style="width: 250px;">ელ.ფოსტის შეტყობინებები</div>
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
                        <div class="overlap-group-81 "
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
<!--          <property1-active :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1Downline1Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline2Props.x42Props" />-->
        </div>
        <div class="group-container-20">
            <div>
                <template>
                    <div :class="[`group-58-5`]">
                        <div class="text-424 myriadgeo-medium-black-16px" >მიმდინარე პაროლი</div>
                        <div class="group-5-14">
                            <div class="overlap-group-102 border-1px-link-water">
                                <div class="text-42-1 ">
                                    <input class="myriadgeo-medium-bali-hai-16px" style="width: 250px" placeholder="შეიყვანე მიმდინარე პაროლი">
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <br>
            <div>
                <template>
                    <div :class="[`group-58-5`]">
                        <div class="text-424 myriadgeo-medium-black-16px" >ახალი პაროლი *</div>
                        <div class="group-5-14">
                            <div class="overlap-group-102 border-1px-link-water">
                                <div class="text-42-1 ">
                                    <input class="myriadgeo-medium-bali-hai-16px" style="width: 200px"  placeholder="შეიყვანე ახალი პაროლი">
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
            <br>
            <div>
                <template>
                    <div :class="[`group-58-5`]">
                        <div class="text-424 myriadgeo-medium-black-16px" style="width: 200px;" >გაიმეორე პაროლი *</div>
                        <div class="group-5-14">
                            <div class="overlap-group-102 border-1px-link-water">
                                <div class="text-42-1 ">
                                    <input class="myriadgeo-medium-bali-hai-16px" style="width: 200px" placeholder="გაიმეორე პაროლი">
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
<!--          <group583 :text424="group5831Props.text424" :text425="group5831Props.text425" />-->
<!--          <group583-->
<!--            :text424="group5832Props.text424"-->
<!--            :text425="group5832Props.text425"-->
<!--            :className="group5832Props.className"-->
<!--          />-->
<!--          <group583-->
<!--            :text424="group5833Props.text424"-->
<!--            :text425="group5833Props.text425"-->
<!--            :className="group5833Props.className"-->
<!--          />-->
<!--          <router-link to="/my-profile-general-info-6">-->
            <div class="group-8-3">
              <div class="overlap-group4-9 border-1px-st-tropaz">
                <div class="text-430 ">
                    <button type="button" class="myriadgeo-bold-st-tropaz-16px">
                        <div style="color: #0a53be">
                            პაროლის ცვლილება
                        </div>
                    </button>

                </div>
              </div>
            </div>
<!--            </router-link>-->
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
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group583 from "./Group583";
import Group57 from "./Group57";
export default {
  name: "MyProfileAccountSettings",
  components: {
    Group53,
    Rectangle24,
    Group84,
    Property1Active,
    Property1Downline,
    Group583,
    Group57,
  },
  props: [
    "logo",
    "text419",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text418",
    "ellipse10",
    "text417",
    "x211688_Forward_Arrow_Icon12",
    "account",
    "text412",
    "packageSvgrepoCom12",
    "text410",
    "walletSvgrepoCom11",
    "text413",
    "text430",
    "group53Props",
    "rectangle24Props",
    "property1ActiveProps",
    "property1Downline1Props",
    "property1Downline2Props",
    "group5831Props",
    "group5832Props",
    "group5833Props",
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
.my-profile-account-settings-2 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1318px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-8 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-38 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-10 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-26 {
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

.text-419 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-46 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-13 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-25 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-17 {
  height: 24px;
  width: 24px;
}

.text-418 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-16 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-101 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-8 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-417 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-47 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-1 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-82-1 {
  cursor: pointer;
  display: flex;
  width: 156px;
}

.account-12 {
  height: 30px;
  width: 30px;
}

.text-412 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 113px;
}

.group-83-2 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-410 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-85-1 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-2 {
  height: 26px;
  width: 26px;
}

.text-413 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-3 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-left: 199px;
  margin-top: 26px;
  width: 220px;
}

.flex-row-39 {
  align-items: flex-start;
  display: flex;
  height: 550px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-1 {
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

.group-container-20 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 550px;
  padding: 83px 218px;
  position: relative;
  width: 850px;
}

.group-8-3 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-top: 45px;
  min-width: 412px;
}

.overlap-group4-9 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  min-width: 410px;
  padding: 16px 118px;
}

.text-430 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 164px;
  text-align: center;
}
</style>
