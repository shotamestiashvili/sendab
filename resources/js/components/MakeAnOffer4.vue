<template>
  <div class="container-center-horizontal">
    <div class="make-an-offer3 screen">
      <div class="group-22983-5">
        <router-link to="/home-v2-0"><img class="logo-18" :src="logo" /></router-link><group22 />
        <group53 />
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-20">
            <div class="overlap-group1-36">
              <img class="package-svgrepo-com-1-23" :src="packageSvgrepoCom1" />
              <div class="text-615 myriadgeo-bold-white-16px">{{ text615 }}</div>
            </div>
          </div></a
        ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
          <div class="group-3-25">
            <div class="overlap-group-134 border-1px-botticelli-2">
              <img class="ellipse-10-17" :src="ellipse10" />
              <div class="text-614 myriadgeo-bold-st-tropaz-16px">{{ text614 }}</div>
              <img class="x211688_forward_arrow_icon-1-65" :src="x211688_Forward_Arrow_Icon1" />
            </div></div
        ></a>
      </div>
      <rectangle24 :className="rectangle24Props.className" />
      <div class="group-container-28 myriadgeo-bold-st-tropaz-24px">
        <div class="group-22981-4">
          <div class="overlap-group-133 border-3px-st-tropaz">
            <div class="number-70">{{ number1 }}</div>
          </div>
          <div class="text-617">{{ text617 }}</div>
        </div>
        <div class="group-22984-3">
          <div class="overlap-group-133 border-3px-st-tropaz">
            <div class="number-69">{{ number2 }}</div>
          </div>
          <div class="text-618">{{ text618 }}</div>
        </div>
        <div class="group-22985-5 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-133 border-3px-bali-hai">
            <div class="number-69">{{ number3 }}</div>
          </div>
          <div class="text-619">{{ text619 }}</div>
        </div>
      </div>
      <div class="overlap-group7-9">
        <div class="rectangle-189-3"></div>
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
      <div class="group-22990-2">
        <div class="text-625 myriadgeo-medium-black-18px">{{ text625 }}</div>
        <div class="frame-16-29">
          <a href="javascript:ShowOverlay('frame-21', 'animate-appear');">
            <div class="frame-14-18 border-2px-botticelli">
              <img class="plane-svgrepo-com-1-14" :src="planeSvgrepoCom1" />
              <div class="text-626 myriadgeo-bold-st-tropaz-18px">{{ text626 }}</div>
            </div></a
          ><frame15 />
        </div>
        <div class="rectangle-190-17"></div>
      </div>
      <group22969 :className="group22969Props.className" />
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
import Frame15 from "./Frame15";
import Group22969 from "./Group22969";
import Group57 from "./Group57";
export default {
  name: "MakeAnOffer4",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group22987,
    Group22988,
    Group22989,
    Frame15,
    Group22969,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text615",
    "ellipse10",
    "text614",
    "x211688_Forward_Arrow_Icon1",
    "number1",
    "text617",
    "number2",
    "text618",
    "number3",
    "text619",
    "text625",
    "planeSvgrepoCom1",
    "text626",
    "rectangle24Props",
    "group22988Props",
    "group22969Props",
    "group57Props",
  ],
};
</script>

<style>
.make-an-offer3 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  height: 1495px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-22983-5 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-18 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-20 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-36 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-23 {
  height: 24px;
  width: 24px;
}

.text-615 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-25 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-134 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-17 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-614 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-65 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-container-28 {
  align-items: flex-start;
  display: flex;
  margin-right: 43px;
  margin-top: 33px;
  min-width: 1246px;
}

.group-22981-4 {
  align-items: center;
  display: flex;
  min-width: 374px;
}

.overlap-group-133 {
  align-items: flex-start;
  border-radius: 25px;
  display: flex;
  height: 50px;
  min-width: 50px;
  padding: 12px 10px;
}

.number-70 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  white-space: nowrap;
}

.text-617 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 307px;
  white-space: nowrap;
}

.group-22984-3 {
  align-items: center;
  display: flex;
  margin-left: 66px;
  min-width: 334px;
}

.number-69 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  min-width: 25px;
  text-align: center;
  white-space: nowrap;
}

.text-618 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 267px;
  white-space: nowrap;
}

.group-22985-5 {
  align-items: center;
  display: flex;
  margin-left: 106px;
  min-width: 366px;
}

.text-619 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 299px;
  white-space: nowrap;
}

.overlap-group7-9 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  margin-left: 1px;
  margin-top: 33px;
  min-width: 1290px;
}

.rectangle-189-3 {
  background-color: var(--cyan--aqua);
  height: 5px;
  width: 850px;
}

.group-22990-2 {
  display: flex;
  flex-direction: column;
  height: 129px;
  margin-left: 2.86px;
  margin-top: 40px;
  width: 1292px;
}

.text-625 {
  height: 18px;
  letter-spacing: 0;
  width: 310px;
}

.frame-16-29 {
  display: flex;
  margin-top: 20px;
  position: relative;
  width: 542.78px;
}

.frame-14-18 {
  background-color: var(--white);
  border-radius: 15px;
  cursor: pointer;
  display: flex;
  height: 63px;
  width: 268.78px;
}

.plane-svgrepo-com-1-14 {
  height: 33px;
  margin-left: 24.9px;
  margin-top: 15px;
  width: 33px;
}

.text-626 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 11.9px;
  margin-top: 22.5px;
  width: 174px;
}

.rectangle-190-17 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 27px;
  width: 1289.86px;
}
</style>
