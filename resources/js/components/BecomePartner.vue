<template>
  <div class="container-center-horizontal">
    <div class="become-partner screen">
      <div class="overlap-group8-1">
        <div class="group-25-3">
          <router-link to="/home-v2-0"><img class="logo-4" :src="logo" /></router-link
          ><group2 :className="group2Props.className" />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-5">
              <div class="overlap-group1-13">
                <img class="package-svgrepo-com-1-7" :src="packageSvgrepoCom1" />
                <div class="text-196 myriadgeo-bold-white-16px">{{ text196 }}</div>
              </div>
            </div></a
          ><router-link to="/onboarding-login">
            <div class="group-3-7">
              <div class="overlap-group-47">
                <img class="account-6" :src="account" />
                <div class="text-195 myriadgeo-bold-white-16px">{{ text195 }}</div>
              </div>
            </div></router-link
          >
        </div>
        <div class="rectangle-29-1"></div>
      </div>
      <div class="overlap-group9-3">
        <div class="text-239 myriadgeo-bold-white-36px">{{ text239 }}</div>
        <div class="text-252">{{ text252 }}</div>
        <div class="frame-25">
          <img class="play-svgrepo-com-1-1" :src="playSvgrepoCom1" />
          <div class="text-253">{{ text253 }}</div>
        </div>
      </div>
      <div class="group-container-3">
        <div class="group-23017">
          <div class="flex-col-1">
            <div class="text-209 myriadgeo-medium-black-16px">{{ text209 }}</div>
            <div class="overlap-group-48 border-1px-link-water">
              <div class="text-210">
<!--                  <div class="myriadgeo-medium-bali-hai-16px">-->
                      <input placeholder="რომელ ქვეყანაში აგზავნი" class="myriadgeo-medium-bali-hai-16px">
<!--                          <div>-->
<!--                              რომელ ქვეყანაში აგზავნი-->
<!--                          </div>-->

<!--                  </div>-->
              </div>
<!--              <img class="x211688_forward_arrow_icon-1-32" :src="x211688_Forward_Arrow_Icon11" />-->
            </div>
          </div>
          <div class="overlap-group1-14 border-1px-link-water">
            <p class="zip-2 "></p>
              <input class="myriadgeo-medium-bali-hai-16px" placeholder="ქალაქი, სოფელი, ან zip კოდი">
          </div>
        </div>
        <a href="javascript:ShowOverlay('frame-2', 'animate-appear');">
          <div class="group-13-2">

              <div class="group-13" style="width: 131px;">
                  <div class="text-145 myriadgeo-medium-black-16px">{{ text145 }}</div>
                  <datepicker
                      placeholder="აირჩიე თარიღი"
                      :inputClass="$style.datepicker">
                  </datepicker>
              </div>
<!--            <div class="text-208 myriadgeo-medium-black-16px">{{ text208 }}</div>-->
<!--            <div class="overlap-group5-6 border-1px-link-water">-->
<!--              <div class="text-207 myriadgeo-medium-bali-hai-16px">{{ text207 }}</div>-->
<!--              <img class="x211688_forward_arrow_icon-1-33" :src="x211688_Forward_Arrow_Icon12" />-->
<!--            </div>-->
          </div>
        </a>

          <template>
              <div :class="[`group-29`]">
                  <div class="text-139 myriadgeo-medium-black-16px">შეფუთვის დეტალები</div>
                  <div class="overlap-group-container-3">
                      <div class="overlap-group-32 border-1px-link-water">
                          <div class="text-14 myriadgeo-medium-bali-hai-16px">
                              <input size="3" class="parcel_details1" type="text" placeholder="წონა"/>
                          </div>
                          <div class="overlap-group1-9"><div class="kg myriadgeo-medium-white-14px-2">kg</div></div>
                      </div>
                      <div class="overlap-group-30 border-1px-link-water">
                          <div class="text-141 myriadgeo-medium-bali-hai-16px">
                              <input size="3" class="parcel_details1" type="text" placeholder="სიგა."/>
                          </div>
                          <div class="overlap-group-33"><div class="cm myriadgeo-medium-white-14px-2">cm</div></div>
                      </div>
                      <div class="overlap-group-30 border-1px-link-water">
                          <div class="text-14 myriadgeo-medium-bali-hai-16px">
                              <input size="3" class="parcel_details1" type="text" placeholder="სიმა."/>
                          </div>
                          <div class="overlap-group-34"><div class="cm-1 myriadgeo-medium-white-14px-2">cm</div></div>
                      </div>
                      <div class="overlap-group-30 border-1px-link-water">
                          <div class="text-143 myriadgeo-medium-bali-hai-16px">
                              <input size="3" class="parcel_details1" type="text" placeholder="სიგრ."/>
                          </div>
                          <div class="overlap-group-35"><div class="cm-2 myriadgeo-medium-white-14px-2">cm</div></div>
                      </div>
                  </div>
              </div>
          </template>



          <!--          <group29 :className="group29Props.className" />-->
      </div>
      <group48 />
      <div class="overlap-group-container-5">
        <div class="overlap-group3-26 myriadgeo-regular-normal-amethyst-16px">
          <rectangle24 :className="rectangle24Props.className" />
          <contact-informations :support1="contactInformationsProps.support1" />
          <div class="rectangle-28-37"></div>
          <div class="ellipse-2-37 border-1px-martinique"></div>
          <img class="iconfinder_ic_keyboa-37" :src="iconfinder_Ic_Keyboard_Arrow_Right_" />
          <p class="copyright-2018-n-cr-37">{{ copyright2018Ncr }}</p>
          <p class="terms-of-use-privacy-37">{{ termsOfUsePrivacy }}</p>
          <group49 />
          <group50 :text8="group501Props.text8" />
          <group51 />
          <group50 :text8="group502Props.text8" :className="group502Props.className" />
        </div>
        <div class="overlap-group7-4">
          <div class="rectangle-26-3"></div>
          <div class="text-240 myriadgeo-medium-st-tropaz-24px">{{ text240 }}</div>
          <div class="ellipse-8-1 border-10px-white"></div>
          <img class="mail-svgrepo-com-1-1" :src="mailSvgrepoCom1" /><group58
            :text95="group581Props.text95"
            :text96="group581Props.text96"
          />
          <group58 :text95="group582Props.text95" :text96="group582Props.text96" :className="group582Props.className" />
          <group62 />
          <group58 :text95="group583Props.text95" :text96="group583Props.text96" :className="group583Props.className" />
          <group58 :text95="group584Props.text95" :text96="group584Props.text96" :className="group584Props.className" />
          <div class="overlap-group1-15 border-1px-st-tropaz">
            <div class="text-251 myriadgeo-bold-st-tropaz-16px">{{ text251 }}</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Group2 from "./Group2";
import Group53 from "./Group53";
import Group29 from "./Group29";
import Group48 from "./Group48";
import Rectangle24 from "./Rectangle24";
import ContactInformations from "./ContactInformations";
import Group49 from "./Group49";
import Group50 from "./Group50";
import Group51 from "./Group51";
import Group58 from "./Group58";
import Group62 from "./Group62";
// import {VSelectList} from "../../../public/js/app";
import Datepicker from 'vuejs-datepicker';

export default {
  name: "BecomePartner",
  components: {
      // VSelectList,
    Group2,
    Group53,
    Group29,
    Group48,
    Rectangle24,
    ContactInformations,
    Group49,
    Group50,
    Group51,
    Group58,
    Group62,
      Datepicker,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text196",
    "account",
    "text195",
    "text239",
    "text252",
    "playSvgrepoCom1",
    "text253",
    "text209",
    "text210",
    "x211688_Forward_Arrow_Icon11",
    "zip",
    "text208",
    "text207",
    "x211688_Forward_Arrow_Icon12",
    "iconfinder_Ic_Keyboard_Arrow_Right_",
    "copyright2018Ncr",
    "termsOfUsePrivacy",
    "text240",
    "mailSvgrepoCom1",
    "text251",
    "group2Props",
    "group29Props",
    "rectangle24Props",
    "contactInformationsProps",
    "group501Props",
    "group502Props",
    "group581Props",
    "group582Props",
    "group583Props",
    "group584Props",
  ],
};
</script>

<style>
.become-partner {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 2702px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.overlap-group8-1 {
  height: 50px;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.group-25-3 {
  display: flex;
  height: 50px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1299px;
}

.logo-4 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-5 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-13 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-7 {
  height: 24px;
  width: 24px;
}

.text-196 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-7 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-47 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 0 15px;
}

.account-6 {
  height: 30px;
  width: 30px;
}

.text-195 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 107px;
}

.rectangle-29-1 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 720px;
  position: absolute;
  top: 48px;
  width: 155px;
}

.overlap-group9-3 {
  align-items: center;
  background-color: var(--ebony);
  display: flex;
  flex-direction: column;
  margin-top: 37px;
  min-height: 450px;
  padding: 79px 0;
  width: 1791px;
}

.text-239 {
  letter-spacing: 0;
  line-height: 45px;
  margin-right: 1px;
  margin-top: 1px;
  min-height: 90px;
  text-align: center;
  width: 598px;
}

.text-252 {
  color: var(--white);
  font-family: var(--font-family-myriad_geo-medium);
  font-size: var(--font-size-l);
  font-weight: 500;
  letter-spacing: 0;
  line-height: 25px;
  margin-top: 35px;
  min-height: 50px;
  text-align: center;
  width: 767px;
}

.frame-25 {
  border: 3px solid #2f2f53;
  border-radius: 40px;
  display: flex;
  height: 65px;
  margin-right: 1px;
  margin-top: 51px;
  width: 256px;
}

.play-svgrepo-com-1-1 {
  height: 15px;
  margin-left: 30px;
  margin-top: 25px;
  width: 16px;
}

.text-253 {
  color: #f9ff00;
  font-family: var(--font-family-myriad_geo-bold);
  font-size: var(--font-size-l);
  font-weight: 700;
  height: 25px;
  letter-spacing: 0;
  line-height: 25px;
  margin-left: 10px;
  margin-top: 20px;
  text-align: center;
  white-space: nowrap;
  width: 170px;
}

.group-container-3 {
  align-items: center;
  background-color: var(--white);
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  height: 150px;
  justify-content: flex-end;
  min-width: 1791px;
  padding: 0 248px;
  position: relative;
}

.group-23017 {
  align-items: flex-end;
  display: flex;
  height: 74px;
  min-width: 555px;
}

.flex-col-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 74px;
  width: 270px;
}

.text-209 {
  letter-spacing: 0;
  margin-left: 1px;
  min-height: 16px;
}

.overlap-group-48 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-top: 18px;
  min-width: 270px;
  padding: 11px 18px;
}

.text-210 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 115px;
}

.x211688_forward_arrow_icon-1-32 {
  align-self: center;
  height: 16px;
  margin-bottom: 0;
  margin-left: 102px;
  width: 16px;
}

.overlap-group1-14 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-left: 13px;
  min-width: 270px;
  padding: 11px 18px;
}

.zip-2,
.text-208,
.text-251 {
  letter-spacing: 0;
  min-height: 16px;
}

.group-13-2 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  margin-left: 43px;
  min-height: 74px;
  width: 156px;
}

.overlap-group5-6 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-top: 18px;
  min-width: 152px;
  padding: 12px 18px;
}

.text-207 {
  align-self: center;
  letter-spacing: 0;
  min-height: 16px;
  min-width: 54px;
}

.x211688_forward_arrow_icon-1-33 {
  height: 16px;
  margin-left: 45px;
  width: 16px;
}

.overlap-group-container-5 {
  height: 1150px;
  margin-left: 4px;
  margin-top: 102px;
  position: relative;
  width: 1795px;
}

.overlap-group3-26 {
  height: 350px;
  left: 0;
  position: absolute;
  top: 800px;
  width: 1791px;
}

.rectangle-28-37 {
  background-color: var(--haiti);
  height: 1px;
  left: 251px;
  position: absolute;
  top: 210px;
  width: 1220px;
}

.ellipse-2-37 {
  border-radius: 25px;
  height: 50px;
  left: 1491px;
  position: absolute;
  top: 185px;
  width: 50px;
}

.iconfinder_ic_keyboa-37 {
  height: 25px;
  left: 1504px;
  position: absolute;
  top: 198px;
  width: 25px;
}

.copyright-2018-n-cr-37 {
  left: 251px;
  letter-spacing: 0;
  line-height: 16.1px;
  position: absolute;
  top: 275px;
  white-space: nowrap;
}

.terms-of-use-privacy-37 {
  left: 1237px;
  letter-spacing: 0;
  line-height: 17.4px;
  position: absolute;
  top: 274px;
  white-space: nowrap;
}

.overlap-group7-4 {
  height: 810px;
  left: 0;
  position: absolute;
  top: -10px;
  width: 1791px;
}

.rectangle-26-3 {
  background-color: var(--white);
  height: 730px;
  left: 0;
  position: absolute;
  top: 80px;
  transform: rotate(-180deg);
  width: 1791px;
}

.text-240 {
  left: 679px;
  letter-spacing: 0;
  line-height: 26.1px;
  position: absolute;
  text-align: center;
  top: 181px;
  width: 433px;
}

.ellipse-8-1 {
  background-color: var(--st-tropaz);
  border-radius: 80px;
  height: 160px;
  left: 816px;
  position: absolute;
  top: 0;
  width: 160px;
}

.mail-svgrepo-com-1-1 {
  height: 58px;
  left: 867px;
  position: absolute;
  top: 51px;
  width: 58px;
}

.overlap-group1-15 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  left: 571px;
  min-width: 660px;
  padding: 16px 237px;
  position: absolute;
  top: 666px;
}

.group-29 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-left: 26px;
    min-height: 74px;
    width: 492px;
}

.text-139 {
    letter-spacing: 0;
    min-height: 16px;
}

.overlap-group-container-3 {
    align-items: flex-start;
    display: flex;
    margin-top: 18px;
    min-width: 490px;
}

.overlap-group-32 {
    align-items: center;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    justify-content: flex-end;
    min-width: 115px;
    padding: 0 3px;
}

.text-14 {
    letter-spacing: 0;
    min-height: 16px;
    min-width: 38px;
}

.overlap-group1-9 {
    align-items: center;
    background-color: var(--cyan--aqua);
    border-radius: 40px;
    display: flex;
    height: 34px;
    justify-content: flex-end;
    margin-left: 21px;
    min-width: 35px;
    padding: 0 9px;
}

.kg {
    letter-spacing: 0;
    min-height: 14px;
    min-width: 15px;
}

.overlap-group-30 {
    align-items: center;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    justify-content: flex-end;
    margin-left: 10px;
    min-width: 115px;
    padding: 0 3px;
}

.text-141 {
    letter-spacing: 0;
    min-height: 16px;
    min-width: 37px;
}

.overlap-group-33 {
    align-items: center;
    background-color: var(--cyan--aqua);
    border-radius: 40px;
    display: flex;
    height: 34px;
    margin-left: 22px;
    min-width: 35px;
    padding: 0 8px;
}

.cm,
.cm-1,
.cm-2 {
    letter-spacing: 0;
    min-height: 14px;
    min-width: 19px;
    text-align: center;
}

.overlap-group-34 {
    align-items: center;
    background-color: var(--cyan--aqua);
    border-radius: 40px;
    display: flex;
    height: 34px;
    margin-left: 21px;
    min-width: 35px;
    padding: 0 8px;
}

.text-143 {
    letter-spacing: 0;
    min-height: 16px;
    min-width: 41px;
}

.overlap-group-35 {
    align-items: center;
    background-color: var(--cyan--aqua);
    border-radius: 40px;
    display: flex;
    height: 34px;
    margin-left: 18px;
    min-width: 35px;
    padding: 0 8px;
}

.group-29.group-29-1 {
    margin-left: 46px;
}
input:focus {
    outline:none;
}
</style>



<style scoped>
.parcel_details1 {
    border-top-style: hidden;
    border-right-style: hidden;
    border-left-style: hidden;
    border-bottom-style: hidden;
    border-radius: 40px;
    display: flex;
    height: 34px;
    justify-content: flex-end;
    min-width: 45px;
    align-items: center;
    background-color: transparent;
    /*border-radius: 40px;*/
    /*!*box-shadow: 0px 2px 1px #d1eaf140;*!*/
    /*height: 35px;*/
    /*justify-content: flex-end;*/
    /*min-width: 65px;*/
    padding: 0 3px;
    position: relative;
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
}
</style>



<style module>

.vdp.datepicker {
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    margin-top: 18px;
    min-width: 152px;
    padding: 12px 18px;
    border-right-width: 0px;
    padding-right: 0px;
    padding-left: 10px;
}

.datepicker {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    border: 1px solid var(--link-water);
    align-items: flex-start;
    background-color: var(--coconut);
    box-shadow: 0px 2px 1px #d1eaf140;
    border-radius: 40px;
    display: flex;
    height: 40px;
    margin-top: 18px;
    min-width: 152px;
    padding: 12px 18px;
    border-right-width: 0px;
    padding-right: 0px;
    padding-left: 10px;
}
</style>
