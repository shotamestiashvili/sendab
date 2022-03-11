<template>
  <div class="container-center-horizontal">
    <div class="make-an-offer2 screen">
      <div class="group-22983-2">
        <router-link to="/home-v2-0"><img class="logo-5" :src="logo" /></router-link><group22 />
        <group53 />
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-6">
            <div class="overlap-group1-16">
              <img class="package-svgrepo-com-1-8" :src="packageSvgrepoCom1" />
              <div class="text-262 myriadgeo-bold-white-16px">{{ text262 }}</div>
            </div>
          </div></a
        ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
          <div class="group-3-8">
            <div class="overlap-group-50 border-1px-botticelli-2">
              <img class="ellipse-10-4" :src="ellipse10" />
              <div class="text-261 myriadgeo-bold-st-tropaz-16px">{{ text261 }}</div>
              <img class="x211688_forward_arrow_icon-1-34" :src="x211688_Forward_Arrow_Icon1" />
            </div></div
        ></a>
      </div>
      <rectangle24 :className="rectangle24Props.className" />
      <div class="group-container-4 myriadgeo-bold-st-tropaz-24px">
        <div class="group-22981-2">
          <div class="overlap-group-49 border-3px-st-tropaz">
            <div class="number-8">{{ number1 }}</div>
          </div>
          <div class="text-264">{{ text264 }}</div>
        </div>
        <div class="group-22984-2">
          <div class="overlap-group-49 border-3px-st-tropaz">
            <div class="number-7">{{ number2 }}</div>
          </div>
          <div class="text-265">{{ text265 }}</div>
        </div>
        <div class="group-22985-2 myriadgeo-bold-st-tropaz-24px">
          <div class="overlap-group-49 border-3px-st-tropaz">
            <div class="number-7">{{ number3 }}</div>
          </div>
          <div class="text-266">{{ text266 }}</div>
        </div>
      </div>
      <div class="overlap-group7-5">
        <div class="rectangle-189-2"></div>
      </div>
      <div class="group-container-5">
        <div class="group-112">
          <div class="group-22988-6">
            <div class="text-267 myriadgeo-medium-black-18px">{{ text267 }}</div>
            <frame22
              :frame1621Props="frame221Props.frame1621Props"
              :frame1622Props="frame221Props.frame1622Props"
              :frame145Props="frame221Props.frame145Props"
            />
            <div class="rectangle-190-15"></div>
          </div>
        </div>
        <div class="group-22986">
          <div class="group-22988-7">
            <div class="flex-row-4">
              <div class="text-270 myriadgeo-medium-black-18px">{{ text270 }}</div>
              <img class="info-svgrepo-com-1" :src="infoSvgrepoCom1" />
            </div>
            <frame22
              :className="frame222Props.className"
              :frame1621Props="frame222Props.frame1621Props"
              :frame1622Props="frame222Props.frame1622Props"
              :frame145Props="frame222Props.frame145Props"
            />
            <div class="rectangle-190-16"></div>
          </div>
        </div>
        <div class="group-22987-5">
          <div class="group-22988-8">
            <div class="text-273 myriadgeo-medium-black-18px">{{ text273 }}</div>
            <div class="frame-22">
              <div class="frame-16-26">
                <div class="frame-14-14 border-2px-botticelli">
                  <div class="text-274 myriadgeo-bold-st-tropaz-18px">{{ text274 }}</div>
                </div>
              </div>
              <div class="frame-17-6">
                <div class="frame-14-15 border-2px-botticelli">
                  <div class="text-275 myriadgeo-bold-st-tropaz-18px">{{ text275 }}</div>
                </div>
              </div>
            </div>
            <div class="rectangle-190-15"></div>
          </div>
        </div>
      </div>
      <div class="group-22969-6">
        <div class="overlap-group6-8">
          <div class="text-276 myriadgeo-bold-white-18px">{{ text276 }}</div>
          <img class="x227601_right_arrow_icon-1-9" :src="x227601_Right_Arrow_Icon1" />
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
import Group22 from "./Group22";
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Frame22 from "./Frame22";
import Group57 from "./Group57";
export default {
  name: "MakeAnOffer3",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Frame22,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text262",
    "ellipse10",
    "text261",
    "x211688_Forward_Arrow_Icon1",
    "number1",
    "text264",
    "number2",
    "text265",
    "number3",
    "text266",
    "text267",
    "text270",
    "infoSvgrepoCom1",
    "text273",
    "text274",
    "text275",
    "text276",
    "x227601_Right_Arrow_Icon1",
    "rectangle24Props",
    "frame221Props",
    "frame222Props",
    "group57Props",
  ],
};
</script>

<style>
.make-an-offer2 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  height: 1305px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-22983-2 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-5 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-6 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-16 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-8 {
  height: 24px;
  width: 24px;
}

.text-262 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-8 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-50 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-4 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-261 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-34 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-container-4 {
  align-items: flex-start;
  display: flex;
  margin-right: 43px;
  margin-top: 33px;
  min-width: 1246px;
}

.group-22981-2 {
  align-items: center;
  display: flex;
  min-width: 374px;
}

.overlap-group-49 {
  align-items: flex-start;
  border-radius: 25px;
  display: flex;
  height: 50px;
  min-width: 50px;
  padding: 12px 10px;
}

.number-8 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  white-space: nowrap;
}

.text-264 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 307px;
  white-space: nowrap;
}

.group-22984-2 {
  align-items: center;
  display: flex;
  margin-left: 66px;
  min-width: 334px;
}

.number-7 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  min-width: 25px;
  text-align: center;
  white-space: nowrap;
}

.text-265 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 267px;
  white-space: nowrap;
}

.group-22985-2 {
  align-items: center;
  display: flex;
  margin-left: 106px;
  min-width: 366px;
}

.text-266 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 299px;
  white-space: nowrap;
}

.overlap-group7-5 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  margin-left: 1px;
  margin-top: 33px;
  min-width: 1290px;
}

.rectangle-189-2 {
  background-color: var(--cyan--aqua);
  height: 5px;
  width: 1290px;
}

.group-container-5 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 0.86px;
  margin-top: 47px;
  min-height: 449px;
  width: 1290px;
}

.group-112 {
  display: flex;
  width: 1290px;
}

.group-22988-6 {
  display: flex;
  flex-direction: column;
  height: 129px;
  position: relative;
  width: 1291.86px;
}

.text-267 {
  height: 18px;
  letter-spacing: 0;
  width: 484px;
}

.rectangle-190-15 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 27px;
  width: 1289.86px;
}

.group-22986 {
  display: flex;
  height: 129px;
  margin-top: 31px;
  width: 1290px;
}

.group-22988-7 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 129px;
  position: relative;
  width: 1291.86px;
}

.flex-row-4 {
  align-items: flex-start;
  display: flex;
  min-width: 359px;
}

.text-270 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 332px;
}

.info-svgrepo-com-1 {
  height: 18px;
  margin-left: 9px;
  width: 18px;
}

.rectangle-190-16 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 27px;
  width: 1290px;
}

.group-22987-5 {
  display: flex;
  margin-top: 31px;
  width: 1290px;
}

.group-22988-8 {
  display: flex;
  flex-direction: column;
  height: 129px;
  width: 1291.86px;
}

.text-273 {
  height: 18px;
  letter-spacing: 0;
  width: 411px;
}

.frame-22 {
  display: flex;
  margin-top: 20px;
  width: 163px;
}

.frame-16-26 {
  display: flex;
  width: 70px;
}

.frame-14-14 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 70px;
}

.text-274 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 20px;
}

.frame-17-6 {
  display: flex;
  margin-left: 10px;
  width: 83px;
}

.frame-14-15 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 83px;
}

.text-275 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 33px;
}

.group-22969-6 {
  align-items: flex-start;
  display: flex;
  margin-left: 3px;
  margin-top: 77px;
  min-width: 442px;
}

.overlap-group6-8 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 60px;
  justify-content: flex-end;
  min-width: 440px;
  padding: 0 33px;
}

.text-276 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 334px;
}

.x227601_right_arrow_icon-1-9 {
  height: 20px;
  margin-left: 19px;
  width: 20px;
}
</style>
