<template>
  <div class="container-center-horizontal">
    <div class="make-an-offer-5 screen">
      <div class="group-22983">
        <router-link to="/home-v2-0"><img class="logo" :src="logo" /></router-link><group22 />
        <group53 />
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-1">
            <div class="overlap-group1-1">
              <img class="package-svgrepo-com-1-1" :src="packageSvgrepoCom1" />
              <div class="text-19 myriadgeo-bold-white-16px">{{ text19 }}</div>
            </div>
          </div></a
        ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
          <div class="group-3-1">
            <div class="overlap-group-8 border-1px-botticelli-2">
              <img class="ellipse-10" :src="ellipse10" />
              <div class="text-18 myriadgeo-bold-st-tropaz-16px">{{ text18 }}</div>
              <img class="x211688_forward_arrow_icon-1-7" :src="x211688_Forward_Arrow_Icon1" />
            </div></div
        ></a>
      </div>
      <rectangle24 :className="rectangle24Props.className" />
      <div class="group-container myriadgeo-bold-st-tropaz-24px">
        <div class="group-22981">
          <div class="overlap-group-7 border-3px-st-tropaz">
            <div class="number-1">{{ number1 }}</div>
          </div>
          <div class="text-21">{{ text21 }}</div>
        </div>
        <div class="group-22984">
          <div class="overlap-group-7 border-3px-st-tropaz">
            <div class="number">{{ number2 }}</div>
          </div>
          <div class="text-22">{{ text22 }}</div>
        </div>
        <div class="group-22985 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-7 border-3px-bali-hai">
            <div class="number">{{ number3 }}</div>
          </div>
          <div class="text-23">{{ text23 }}</div>
        </div>
      </div>
      <div class="overlap-group7">
        <div class="rectangle-189"></div>
      </div>
      <group22987 />
      <group22988
        :frame141Props="group22988Props.frame141Props"
        :frame142Props="group22988Props.frame142Props"
        :frame143Props="group22988Props.frame143Props"
        :frame171Props="group22988Props.frame171Props"
        :frame172Props="group22988Props.frame172Props"
      />
      <group22989 />
      <group22990 />
      <div class="group-22991">
        <div class="text-39 myriadgeo-medium-black-18px">{{ text39 }}</div>
        <div class="frame-16 myriadgeo-bold-st-tropaz-18px">
          <frame142 :text40="frame1421Props.text40" />
          <div class="frame-15 border-2px-cyan--aqua">
            <div class="text-41">{{ text41 }}</div>
          </div>
          <div class="frame-16-1 border-2px-botticelli">
            <div class="text-42">{{ text42 }}</div>
          </div>
          <div class="frame-17 border-2px-cyan--aqua">
            <div class="text-43">{{ text43 }}</div>
          </div>
        </div>
        <div class="frame-17-1">
          <frame143 />
          <frame142 :text40="frame1422Props.text40" :className="frame1422Props.className" />
          <div class="frame-16-2 border-2px-botticelli">
            <div class="text-46 myriadgeo-bold-st-tropaz-18px">{{ text46 }}</div>
          </div>
        </div>
        <div class="rectangle-190"></div>
      </div>
      <group22969 />
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
import Group22987 from "./Group22987";
import Group22988 from "./Group22988";
import Group22989 from "./Group22989";
import Group22990 from "./Group22990";
import Frame142 from "./Frame142";
import Frame143 from "./Frame143";
import Group22969 from "./Group22969";
import Group57 from "./Group57";
export default {
  name: "MakeAnOffer",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group22987,
    Group22988,
    Group22989,
    Group22990,
    Frame142,
    Frame143,
    Group22969,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text19",
    "ellipse10",
    "text18",
    "x211688_Forward_Arrow_Icon1",
    "number1",
    "text21",
    "number2",
    "text22",
    "number3",
    "text23",
    "text39",
    "text41",
    "text42",
    "text43",
    "text46",
    "rectangle24Props",
    "group22988Props",
    "frame1421Props",
    "frame1422Props",
    "group57Props",
  ],
};
</script>

<style>
.make-an-offer-5 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  height: 1755px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-22983 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-1 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-1 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-1 {
  height: 24px;
  width: 24px;
}

.text-19 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-1 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-8 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-18 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-7 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-container {
  align-items: flex-start;
  display: flex;
  margin-right: 43px;
  margin-top: 33px;
  min-width: 1246px;
}

.group-22981 {
  align-items: center;
  display: flex;
  min-width: 374px;
}

.overlap-group-7 {
  align-items: flex-start;
  border-radius: 25px;
  display: flex;
  height: 50px;
  min-width: 50px;
  padding: 12px 10px;
}

.number-1 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  white-space: nowrap;
}

.text-21 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 307px;
  white-space: nowrap;
}

.group-22984 {
  align-items: center;
  display: flex;
  margin-left: 66px;
  min-width: 334px;
}

.number {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  min-width: 25px;
  text-align: center;
  white-space: nowrap;
}

.text-22 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 267px;
  white-space: nowrap;
}

.group-22985 {
  align-items: center;
  display: flex;
  margin-left: 106px;
  min-width: 366px;
}

.text-23 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 299px;
  white-space: nowrap;
}

.overlap-group7 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  margin-left: 1px;
  margin-top: 33px;
  min-width: 1290px;
}

.rectangle-189 {
  background-color: var(--cyan--aqua);
  height: 5px;
  width: 850px;
}

.group-22991 {
  display: flex;
  flex-direction: column;
  height: 211px;
  margin-left: 2.86px;
  margin-top: 40px;
  width: 1292px;
}

.text-39 {
  height: 18px;
  letter-spacing: 0;
  width: 509px;
}

.frame-16 {
  display: flex;
  margin-top: 20px;
  position: relative;
  width: 1205px;
}

.frame-15 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 298px;
}

.text-41 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 248px;
}

.frame-16-1 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 310px;
}

.text-42 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 260px;
}

.frame-17 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 294px;
}

.text-43 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 244px;
}

.frame-17-1 {
  display: flex;
  margin-top: 15px;
  position: relative;
  width: 911px;
}

.frame-16-2 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 311px;
}

.text-46 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 261px;
}

.rectangle-190 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 31px;
  width: 1289.86px;
}
</style>
