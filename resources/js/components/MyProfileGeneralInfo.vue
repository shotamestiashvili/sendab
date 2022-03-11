<template>
 <v-app>
  <div class="container-center-horizontal">
    <div class="my-profile-general-info-6 screen">
      <div class="group-25-10">
        <div class="flex-row-44">
          <router-link to="/home-v2-0"><img class="logo-12" :src="logo" /></router-link>
          <div class="overlap-group2-28 border-1px-botticelli-2">
            <div class="text-482 myriadgeo-medium-mid-gray-14px">{{ text482 }}</div>
            <img class="x211688_forward_arrow_icon-1-51" :src="x211688_Forward_Arrow_Icon11" />
          </div>


          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-15">
              <div class="overlap-group1-28">
                <img class="package-svgrepo-com-1-19" :src="packageSvgrepoCom11" />
                <div class="text-481 myriadgeo-bold-white-16px">{{ text481 }}</div>
              </div>
            </div></a>
            <div>

            </div>
<!--            <a href="javascript:ShowOverlay('frame-9', 'animate-appear');">-->

            <div>


            </div>

            <div class="group-3-18" v-if="$store.getters['backend/LOGGED_IN']"  >
              <div class="overlap-group-108 border-1px-botticelli-2" @click.prevent="visible = !visible">
                  <v-avatar color="primary" size="38px">
                      <v-img v-if="avatar" :src="avatarUrl" ></v-img>
                  </v-avatar>
                  {{userName}}
              </div>

            </div>

            <div v-else>
                <router-link to="/onboarding-login">
                    <div class="group-3-6">
                        <div class="overlap-group-28">
                            <img class="account-4" :src="account1" />
                            <div class="text-178 myriadgeo-bold-white-16px">ავტორიზაცია</div>
                        </div>
                    </div>
                </router-link>
            </div>


<!--            </a>-->
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-3">
          <group82 :account="group82Props.account" />
          <router-link to="/my-profile-my-orders-1">
            <div class="group-83-4">
              <img class="package-svgrepo-com-1-19" :src="packageSvgrepoCom12" />
              <div class="text-473 myriadgeo-medium-st-tropaz-16px">{{ text473 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-5">
              <img class="setting-svgrepo-com-1-6" :src="settingSvgrepoCom1" />
              <div class="text-474 myriadgeo-medium-st-tropaz-16px">{{ text474 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-6">
              <img class="wallet-svgrepo-com-1-1-7" :src="walletSvgrepoCom11" />
              <div class="text-476 myriadgeo-medium-st-tropaz-16px">{{ text476 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-5"></div>
      </div>
      <div class="flex-row-45">
        <div class="settings-frame-3">
            <div>
                <template>
                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 active overlap-group-60"

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

                        <div class="overlap-group-81"
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



<!--          <property1-active   :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1Downline1Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline2Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline3Props.x42Props" />-->
        </div>
        <div class="overlap-group5-9">
            <div >
                <transition v-if="visible" name="fade" appear>
                    <v-card style="bottom: 240px; right: 240px;">
                        <div class="overlap-group5-3 border-5px-cyan--aqua">
                            <div class="flex-row">
                                <div class="overlap-group6-5">
<!--                                    <img class="ellipse-10-2" :src="ellipse102" />-->
<!--                                    <div class="ellipse-11 border-3px-white"></div>-->
<!--                                    <img class="check-svgrepo-com-1" :src="checkSvgrepoCom1" />-->

                                    <v-avatar color="primary" size="60px">
                                        <v-img v-if="avatar" :src="avatarUrl" ></v-img>
                                    </v-avatar>

                                </div>
                                <div class="text-container">
                                    <div class="text-59">{{ userName }}</div>
                                    <div class="text-60">
                <span class="span0">{{ spanText1 }}</span
                ><span class="span1"> {{ }}</span
                                    ><span class="span2">0</span>
                                    </div>
                                </div>
                                <div class="overlap-group7-1 border-1px-ziggurat">
                                    <div class="text-61 myriadgeo-bold-st-tropaz-20px">{{ text61 }}</div>
                                </div>
                            </div>
                            <div class="group-23018">
                                <router-link to="/messenger-1">
                                    <div class="group-10">
                                        <div class="overlap-group-11 border-2px-cyan--aqua">
                                            <img class="chat-svgrepo-com-1" :src="chatSvgrepoCom1" />
                                            <div class="overlap-group1-3" :style="{ 'background-image': 'url(' + overlapGroup1 + ')' }">
                                                <div class="number-2 myriadgeo-bold-white-18px">0 </div>
                                            </div>
                                        </div>
                                    </div></router-link
                                ><router-link to="/messenger">
                                <div class="group-11"><img class="notification-svgrepo-com-1" :src="notificationSvgrepoCom1" /></div
                                ></router-link>
                            </div>
                            <div class="group-23019">
                                <router-link to="/my-profile-general-info-6">
                                    <div class="group-8">
                                        <div class="overlap-group-10">
                                            <img class="account-1" :src="account" />
                                            <div class="text-65 myriadgeo-medium-st-tropaz-16px">{{ text65 }}</div>
                                        </div>
                                    </div></router-link
                                ><router-link to="/my-profile-my-orders-1">
                                <div class="group">
                                    <div class="overlap-group-12">
                                        <img class="package-svgrepo-com-1-2" :src="packageSvgrepoCom1" />
                                        <div class="text-63-1 myriadgeo-medium-st-tropaz-16px">{{ text63 }}</div>
                                    </div>
                                </div></router-link
                            ><router-link to="/my-profile-account-settings-2">
                                <div class="group">
                                    <div class="overlap-group-10">
                                        <img class="setting-svgrepo-com-1" :src="settingSvgrepoCom1" />
                                        <div class="text-64 myriadgeo-medium-st-tropaz-16px">{{ text64 }}</div>
                                    </div>
                                </div></router-link
                            ><router-link to="/my-profile-wallet-3">
                                <div class="group">
                                    <div class="overlap-group3-24">
                                        <img class="wallet-svgrepo-com-1-1" :src="walletSvgrepoCom11" />
                                        <div class="text-66 myriadgeo-medium-st-tropaz-16px">{{ text66 }}</div>
                                    </div>
                                </div></router-link
                            >
                            </div>
                            <router-link to="/make-an-offer">
                                <div class="group-3-3">
                                    <div class="overlap-group-13">
                                        <div class="text-62">ახალი შეკვეთა</div>
                                    </div>
                                </div></router-link
                            >
                            <div class="overlap-group4-2">
                                <div class="text-67 myriadgeo-medium-cinnabar-16px"  @click.prevent="logout">
                                ანგარიშიდან გამოსვლა</div>
                            </div>
                        </div>
                        <div class="rectangle-39"></div>
                    </v-card>
                </transition>
            </div>


            <div>

            </div>
          <div class="overlap-group4-11">
              <v-avatar
              color="primary"
              size="80px"
              >
                  <div v-if="!avatar">
                      <v-file-input
                          @change="preview_avatar"
                          v-model="avatar"
                          placeholder= ""
                      >
                      </v-file-input>
                  </div>

                  <v-img v-if="avatar" :src="avatarUrl" ></v-img>

              </v-avatar>


<!--            <img class="ellipse-10-11" :src="ellipse102" />-->
<!--            <div class="ellipse-11-1 border-3px-white"></div>-->
<!--            <img class="check-svgrepo-com-1-1" :src="checkSvgrepoCom1" />-->
          </div>
          <div class="text-487 myriadgeo-bold-black-24px" style="margin-left: 140px">{{ userName }} </div>
          <div class="group-91-1">
            <div class="group-container-23">
              <div class="group-89-1"><group882 /></div>
              <div class="group-90-2"><group88 :src="group88Props.src" /></div>
            </div>
            <div class="flex-row-46 myriadgeo-medium-black-18px">
              <div class="e-mail-39">{{ eMail }}</div>
              <div class="phone-87">{{ phone }}</div>
            </div>
          </div>
          <div class="group-92-2">
            <div class="rectangle-43-1"></div>
            <div class="flex-row-47 myriadgeo-medium-black-18px">
              <div class="text-488">შეკვეთების რაოდენობა</div>
              <div class="number-67"> 0 </div>
            </div>
          </div>
          <group93 :text489="group931Props.text489" :number="group931Props.number" />
          <group93
            :text489="group932Props.text489"
            :number="group932Props.number"
            :className="group932Props.className"
          />
          <div class="group-95">
            <div class="rectangle-43-1"></div>
            <div class="flex-row-48">
              <div class="text-491 myriadgeo-medium-black-18px">{{ text491 }}</div>
              <img class="star-svgrepo-com-5-16" :src="starSvgrepoCom5" />
                <img class="star-svgrepo-com-17" :src="starSvgrepoCom6"/>
                <img class="star-svgrepo-com-17" :src="starSvgrepoCom7" />
                <img class="star-svgrepo-com-17" :src="starSvgrepoCom8"/>
                <img class="star-svgrepo-com-17" :src="starSvgrepoCom8"/>

                <!--                <img class="star-svgrepo-com-17" :src="starSvgrepoCom9" />-->
<!--                <img class="star-svgrepo-com-17" :src="starSvgrepoCom9" />-->
<!--                <img class="star-svgrepo-com-17" :src="starSvgrepoCom9" />-->
<!--                <img class="star-svgrepo-com-17" :src="starSvgrepoCom9" />-->
<!--                <img class="star-svgrepo-com-17" :src="starSvgrepoCom9" />-->

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
 </v-app>
</template>

<script>
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group82 from "./Group82";
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group882 from "./Group882";
import Group88 from "./Group88";
import Group93 from "./Group93";
import Group57 from "./Group57";
import Frame9 from "./Frame9"
import profile from "./Profile"
export default {
  name: "MyProfileGeneralInfo",
  components: {
    Group53,
    Rectangle24,
    Group82,
    Property1Active,
    Property1Downline,
    Group882,
    Group88,
    Group93,
    Group57,
    Frame9,
      profile,
  },
  props: [
    "logo",
    "text482",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text481",
    "ellipse101",
    "text480",
    "x211688_Forward_Arrow_Icon12",
    "packageSvgrepoCom12",
    "text473",
    "settingSvgrepoCom1",
    "text474",
    "walletSvgrepoCom11",
    "text476",
    "ellipse102",
    "checkSvgrepoCom1",
    "text487",
    "eMail",
    "phone",
    "text488",
    "number",
    "text491",
    "starSvgrepoCom5",
    "starSvgrepoCom6",
    "starSvgrepoCom7",
    "starSvgrepoCom8",
    "starSvgrepoCom9",
    "group53Props",
    "rectangle24Props",
    "group82Props",
    "property1ActiveProps",
    "property1Downline1Props",
    "property1Downline2Props",
    "property1Downline3Props",
    "group88Props",
    "group931Props",
    "group932Props",
    "group57Props",

      "account1",
      "ellipse101",
      "text68",
      "x211688_Forward_Arrow_Icon1",
      "ellipse102",
      "checkSvgrepoCom1",
      "text59",
      "spanText1",
      "spanText2",
      "spanText3",
      "text61",
      "chatSvgrepoCom1",
      "overlapGroup1",
      "number",
      "notificationSvgrepoCom1",
      "account",
      "text65",
      "packageSvgrepoCom1",
      "text63",
      "settingSvgrepoCom1",
      "text64",
      "walletSvgrepoCom11",
      "text66",
      "text62",
      "text67",
  ],

    data () {
      return {
          visible: false,
          userName: null,
          avatar: null,
          avatarUrl: null,
      }
    },
    methods: {

      generalinfo_route(){
          this.$router.push("my-profile-general-info-6");
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



        preview_avatar() {

            this.avatarUrl = URL.createObjectURL(this.avatar)
        },

        logout(){
            this.$store.dispatch("backend/LOGOUT");
            this.$router.push("/home-20");
        },

       async getUserName(){
            this.userName = await this.$store.getters["backend/GET_USER_NAME"];
        },

    },

    mounted(){
      this.getUserName();
    }
};
</script>

<style>
.my-profile-general-info-6 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1388px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-10 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-43 {
    align-items: flex-start;
    display: flex;
    height: 660px;
    margin-left: 1px;
    margin-top: 80px;
    min-width: 1290px;
}


.flex-row-44 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-12 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-28 {
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

.text-482 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-51 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-15 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-28 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-19 {
  height: 24px;
  width: 24px;
}

.text-481 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-18 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-108 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-10 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-480 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-52 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-3 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-83-4 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-473 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-5 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.setting-svgrepo-com-1-6 {
  height: 30px;
  width: 30px;
}

.text-474 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-6 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-7 {
  height: 26px;
  width: 26px;
}

.text-476 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-5 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 730px;
  margin-top: 26px;
  width: 155px;
}

.flex-row-45 {
  align-items: flex-start;
  display: flex;
  height: 660px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-3 {
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

.overlap-group5-9 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 660px;
  padding: 37px 105px;
  position: relative;
  width: 850px;

}

.overlap-group4-11 {
  align-self: center;
  height: 97px;
  margin-left: 1px;
  position: relative;
  width: 91px;
}

.ellipse-10-11 {
  height: 90px;
  left: 0;
  object-fit: cover;
  position: absolute;
  top: 7px;
  width: 90px;
}

.ellipse-11-1 {
  background-color: var(--green);
  border-radius: 18px;
  height: 36px;
  left: 55px;
  position: absolute;
  top: 0;
  width: 36px;
}

.check-svgrepo-com-1-1 {
  height: 14px;
  left: 66px;
  position: absolute;
  top: 11px;
  width: 14px;
}

.text-487 {
  align-self: center;
  letter-spacing: 0;
  margin-top: 19px;
  min-height: 24px;
  min-width: 226px;
}

.group-91-1 {
  align-items: center;
  align-self: center;
  display: flex;
  flex-direction: column;
  margin-left: 5px;
  margin-top: 33px;
  min-height: 87px;
  width: 151px;
}

.group-container-23 {
  align-items: flex-start;
  display: flex;
  margin-right: 4px;
  min-width: 147px;
}

.group-89-1 {
  display: flex;
  height: 60px;
  position: relative;
  width: 60px;
}

.group-90-2 {
  display: flex;
  height: 60px;
  margin-left: 27px;
  position: relative;
  width: 60px;
}

.flex-row-46 {
  align-items: flex-start;
  display: flex;
  height: 18px;
  margin-right: 3px;
  margin-top: 9px;
  min-width: 136px;
}

.e-mail-39 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 48px;
}

.phone-87 {
  letter-spacing: 0;
  margin-left: 38px;
  min-height: 18px;
  min-width: 50px;
  text-align: center;
}

.group-92-2 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 50px;
  min-height: 43px;
  width: 634px;
}

.rectangle-43-1 {
  background-color: var(--botticelli-2);
  height: 1px;
  width: 630px;
}

.flex-row-47 {
  align-items: flex-start;
  display: flex;
  height: 18px;
  margin-top: 24px;
  min-width: 629px;
}

.text-488 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 208px;
}

.number-67 {
  letter-spacing: 0;
  margin-left: 402px;
  min-height: 18px;
  min-width: 19px;
  text-align: right;
}

.group-95 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-right: 2px;
  margin-top: 24px;
  min-height: 43px;
  width: 632px;
}

.flex-row-48 {
  align-items: center;
  display: flex;
  height: 18px;
  margin-top: 24px;
  min-width: 629px;
}

.text-491 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 103px;
}

.star-svgrepo-com-5-16 {
  height: 14px;
  margin-left: 444px;
  width: 14px;
}

.star-svgrepo-com-17 {
  height: 14px;
  margin-left: 3px;
  width: 14px;
}






.frame-9 {
    align-items: flex-end;
    display: flex;
    flex-direction: column;
    min-height: 430px;
    overflow-x: hidden;
    width: 370px;
}

.overlay .frame-9 {
    background-color: #00000000;
}

.group-3-2 {
    align-items: flex-start;
    display: flex;
    margin-right: -2px;
    min-width: 184px;
}

.overlap-group8 {
    align-items: center;
    background-color: var(--white);
    border-radius: 40px;
    display: flex;
    height: 50px;
    min-width: 182px;
    padding: 0 12px;
}

.ellipse-10-1 {
    height: 30px;
    object-fit: cover;
    width: 30px;
}

.text-68 {
    letter-spacing: 0;
    margin-left: 11px;
    min-height: 16px;
    min-width: 74px;
}

.x211688_forward_arrow_icon-1-26 {
    height: 14px;
    margin-left: 21px;
    margin-top: 0;
    width: 14px;
}

.overlap-group9-1 {
    height: 620px;
    margin-right: -6px;
    margin-top: 20px;
    position: relative;
    width: 376px;
}

.overlap-group5-3 {
    align-items: flex-start;
    background-color: var(--white);
    border-radius: 20px;
    box-shadow: 0px 22px 70px #c9e6ec;
    display: flex;
    flex-direction: column;
    left: 0;
    min-height: 620px;
    padding: 25px 20px;
    position: absolute;
    top: 0;
    width: 370px;
}

.flex-row {
    align-items: center;
    display: flex;
    margin-left: 10px;
    min-width: 268px;
}

.overlap-group6-5 {
    height: 65px;
    position: relative;
    width: 65px;
}

.ellipse-10-2 {
    height: 60px;
    left: 0;
    object-fit: cover;
    position: absolute;
    top: 5px;
    width: 60px;
}

.ellipse-11 {
    background-color: var(--green);
    border-radius: 13px;
    height: 26px;
    left: 39px;
    position: absolute;
    top: 0;
    width: 26px;
}

.check-svgrepo-com-1 {
    height: 10px;
    left: 47px;
    position: absolute;
    top: 8px;
    width: 10px;
}

.text-container {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-left: 13px;
    margin-top: 6px;
    min-height: 41px;
    width: 147px;
}

.text-59 {
    color: var(--black);
    font-family: var(--font-family-myriad_geo-bold);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0;
    margin-left: 1px;
    min-height: 12px;
}

.text-60 {
    color: transparent;
    font-family: var(--font-family-myriad_geo-medium);
    font-size: var(--font-size-xl);
    font-weight: 500;
    letter-spacing: 0;
    margin-top: 9px;
    min-height: 20px;
}

.span0 {
    color: var(--black);
    font-weight: 500;
}

.span1 {
    color: var(--black);
    font-family: var(--font-family-myriad_geo-bold);
    font-weight: 700;
}

.span2 {
    color: var(--green);
    font-family: var(--font-family-myriad_geo-bold);
    font-weight: 700;
}

.overlap-group7-1 {
    align-items: flex-start;
    align-self: flex-end;
    border-radius: 15px;
    display: flex;
    height: 30px;
    margin-bottom: 6px;
    margin-left: 13px;
    min-width: 30px;
    padding: 4px 8px;
}

.text-61 {
    letter-spacing: 0;
    min-height: 20px;
}

.group-23018 {
    display: flex;
    margin-top: 25px;
    width: 320px;
}

.group-10 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    min-width: 157px;
}

.overlap-group-11 {
    align-items: flex-start;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 65px;
    justify-content: flex-end;
    min-width: 155px;
}

.chat-svgrepo-com-1 {
    align-self: center;
    height: 30px;
    margin-bottom: 3px;
    width: 30px;
}

.overlap-group1-3 {
    align-items: flex-end;
    background-size: 100% 100%;
    display: flex;
    height: 30px;
    margin-left: 34px;
    min-width: 30px;
    padding: 5px 10px;
}

.number-2 {
    letter-spacing: 0;
    min-height: 18px;
    min-width: 10px;
}

.group-11 {
    background-color: var(--lily-white);
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    height: 65px;
    margin-left: 8px;
    width: 155px;
}

.notification-svgrepo-com-1 {
    height: 30px;
    margin-left: 63px;
    margin-top: 18px;
    width: 30px;
}

.group-23019 {
    display: flex;
    flex-direction: column;
    height: 215px;
    margin-top: 14px;
    width: 320px;
}

.group-8 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    min-width: 322px;
}

.overlap-group-10 {
    align-items: center;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 0 18px;
}

.account-1,
.setting-svgrepo-com-1 {
    height: 30px;
    width: 30px;
}

.text-65 {
    letter-spacing: 0;
    margin-left: 11px;
    min-height: 16px;
    min-width: 113px;
}

.group {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-top: 5px;
    min-width: 322px;
}

.overlap-group-12 {
    align-items: flex-start;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 12px 21px;
}

.package-svgrepo-com-1-2 {
    height: 24px;
    width: 24px;
}

.text-63-1 {
    align-self: center;
    letter-spacing: 0;
    margin-left: 14px;
    min-height: 16px;
    min-width: 117px;
}

.text-64 {
    letter-spacing: 0;
    margin-left: 11px;
    min-height: 16px;
    min-width: 183px;
}

.overlap-group3-24 {
    align-items: flex-start;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 10px 20px;
}

.wallet-svgrepo-com-1-1 {
    height: 26px;
    width: 26px;
}

.text-66 {
    align-self: center;
    letter-spacing: 0;
    margin-left: 13px;
    min-height: 16px;
    min-width: 135px;
}

.group-3-3 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-top: 61px;
    min-width: 322px;
}

.overlap-group-13 {
    align-items: center;
    background-color: var(--st-tropaz);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 0 103px;
}

.text-62 {
    color: var(--white);
    font-family: var(--font-family-myriad_geo-medium);
    font-size: var(--font-size-m);
    font-weight: 500;
    letter-spacing: 0;
    min-height: 16px;
    min-width: 114px;
}

.overlap-group4-2 {
    align-items: center;
    background-color: var(--carousel-pink);
    border-radius: 10px;
    display: flex;
    height: 50px;
    justify-content: flex-end;
    margin-top: 15px;
    min-width: 320px;
    padding: 0 70px;
}

.text-67 {
    letter-spacing: 0;
    min-height: 16px;
    min-width: 179px;
}

.rectangle-39 {
    background-color: #d5e6ea;
    height: 1px;
    left: 25px;
    position: absolute;
    top: 444px;
    width: 320px;
}

#overlay-frame-9 {
    background-color: transparent;
}

#overlay-frame-9 .frame-9 {
    left: 1171px;
    top: 33px;
}

#overlay-frame-9 .container-center-horizontal {
    justify-content: normal;
}

.group-3-6 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-left: 8px;
    min-width: 184px;
}
</style>
