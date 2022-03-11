<template>
  <div class="container-center-horizontal">
    <div class="make-an-offer screen">
      <div class="group-22983-1">
        <router-link to="/home-v2-0"><img class="logo-2" :src="logo" /></router-link><group22 />
        <group53 />
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-3">
            <div class="overlap-group1-7">
              <img class="package-svgrepo-com-1-5" :src="packageSvgrepoCom1" />
              <div class="text-114 myriadgeo-bold-white-16px">{{ text114 }}</div>
            </div>
          </div></a
        ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
          <div class="group-3-5">
            <div class="overlap-group-25 border-1px-botticelli-2">
              <img class="ellipse-10-3" :src="ellipse10" />
              <div class="text-113 myriadgeo-bold-st-tropaz-16px">{{ text113 }}</div>
              <img class="x211688_forward_arrow_icon-1-28" :src="x211688_Forward_Arrow_Icon1" />
            </div></div
        ></a>
      </div>
      <rectangle24 :className="rectangle24Props.className" />
      <div class="group-container-1">
        <div class="group-22981-1 myriadgeo-bold-st-tropaz-24px">
          <div class="overlap-group-24 border-3px-st-tropaz">
            <div class="number-4">{{ number1 }}</div>
          </div>
          <div class="text-116">{{ text116 }}</div>
        </div>
        <div class="group-22984-1 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-24 border-3px-bali-hai">
            <div class="number-3">{{ number2 }}</div>
          </div>
          <div class="text-117">{{ text117 }}</div>
        </div>
        <div class="group-22985-1 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-24 border-3px-bali-hai">
            <div class="number-3">{{ number3 }}</div>
          </div>
          <div class="text-118">{{ text118 }}</div>
        </div>
      </div>
      <div class="overlap-group7-3">
        <div class="rectangle-189-1"></div>
      </div>
      <div class="frame-18">
        <div class="group-22989-7">
          <div class="text-119 myriadgeo-medium-black-18px">{{ text119 }}</div>
          <div class="frame-16-20">
            <div class="group-22988-3">
              <div class="frame-19-3">
                <a href="javascript:ShowOverlay('frame-20', 'animate-appear');">
                  <div class="frame-14-12 border-2px-botticelli">
                    <div class="text-120 myriadgeo-bold-st-tropaz-18px">{{ text120 }}</div>
                    <date-svgrepo-com12 /></div></a
                ><img class="frame-3" :src="frame3" /><frame152 />
                <frame16 />
              </div>
              <div class="rectangle-190-12"></div>
            </div>
          </div>
        </div>
        <group229872 />
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
import DateSvgrepoCom12 from "./DateSvgrepoCom12";
import Frame152 from "./Frame152";
import Frame16 from "./Frame16";
import Group229872 from "./Group229872";
import Group22969 from "./Group22969";
import Group57 from "./Group57";
export default {
  name: "MakeAnOffer2",
  components: {
    Group22,
    Group53,
    Rectangle24,
    DateSvgrepoCom12,
    Frame152,
    Frame16,
    Group229872,
    Group22969,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text114",
    "ellipse10",
    "text113",
    "x211688_Forward_Arrow_Icon1",
    "number1",
    "text116",
    "number2",
    "text117",
    "number3",
    "text118",
    "text119",
    "text120",
    "frame3",
    "rectangle24Props",
    "group22969Props",
    "group57Props",
  ],
};
</script>

<style>
.make-an-offer {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  height: 1405px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-22983-1 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-2 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-3 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-7 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-5 {
  height: 24px;
  width: 24px;
}

.text-114 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-5 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-25 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-3 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-113 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-28 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-container-1 {
  align-items: flex-start;
  display: flex;
  margin-right: 43px;
  margin-top: 33px;
  min-width: 1246px;
}

.group-22981-1 {
  align-items: center;
  display: flex;
  min-width: 374px;
}

.overlap-group-24 {
  align-items: flex-start;
  border-radius: 25px;
  display: flex;
  height: 50px;
  min-width: 50px;
  padding: 12px 10px;
}

.number-4 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  white-space: nowrap;
}

.text-116 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 307px;
  white-space: nowrap;
}

.group-22984-1 {
  align-items: center;
  display: flex;
  margin-left: 66px;
  min-width: 334px;
}

.number-3 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  min-width: 25px;
  text-align: center;
  white-space: nowrap;
}

.text-117 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 267px;
  white-space: nowrap;
}

.group-22985-1 {
  align-items: center;
  display: flex;
  margin-left: 106px;
  min-width: 366px;
}

.text-118 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 299px;
  white-space: nowrap;
}

.overlap-group7-3 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  margin-left: 1px;
  margin-top: 33px;
  min-width: 1290px;
}

.rectangle-189-1 {
  background-color: var(--cyan--aqua);
  height: 5px;
  width: 410px;
}

.frame-18 {
  display: flex;
  flex-direction: column;
  height: 306px;
  margin-left: 6px;
  margin-top: 62px;
  position: relative;
  width: 1295px;
}

.group-22989-7 {
  display: flex;
  flex-direction: column;
  height: 133px;
  width: 1297px;
}

.text-119 {
  height: 18px;
  letter-spacing: 0;
  width: 195px;
}

.frame-16-20 {
  display: flex;
  margin-top: 20px;
  width: 1295px;
}

.group-22988-3 {
  display: flex;
  flex-direction: column;
  height: 95px;
  width: 1295px;
}

.frame-19-3 {
  display: flex;
  position: relative;
  width: 849.99px;
}

.frame-14-12 {
  align-items: center;
  background-color: var(--white);
  border-radius: 15px;
  cursor: pointer;
  display: flex;
  height: 63px;
  justify-content: flex-end;
  min-width: 334.5px;
  padding: 0 15px;
  position: relative;
}

.text-120 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 82px;
}

.frame-3 {
  height: 24px;
  margin-left: 29.8px;
  margin-top: 19.5px;
  width: 24.5px;
}

.rectangle-190-12 {
  background-color: var(--swans-down);
  height: 1px;
  margin-left: 5.1px;
  margin-top: 31px;
  width: 1289.86px;
}
</style>
