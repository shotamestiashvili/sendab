<template>
  <div class="container-center-horizontal">
    <div class="make-an-offer4 screen">
      <div class="group-22983-6">
        <router-link to="/home-v2-0"><img class="logo-20" :src="logo" /></router-link><group22 />
        <group53 />
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-22">
            <div class="overlap-group1-40">
              <img class="package-svgrepo-com-1-25" :src="packageSvgrepoCom1" />
              <div class="text-677 myriadgeo-bold-white-16px">{{ text677 }}</div>
            </div>
          </div></a
        ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
          <div class="group-3-27">
            <div class="overlap-group-141 border-1px-botticelli-2">
              <img class="ellipse-10-19" :src="ellipse10" />
              <div class="text-676 myriadgeo-bold-st-tropaz-16px">{{ text676 }}</div>
              <img class="x211688_forward_arrow_icon-1-67" :src="x211688_Forward_Arrow_Icon1" />
            </div></div
        ></a>
      </div>
      <rectangle24 :className="rectangle24Props.className" />
      <div class="group-container-29 myriadgeo-bold-st-tropaz-24px">
        <div class="group-22981-5">
          <div class="overlap-group-139 border-3px-st-tropaz">
            <div class="number-72">{{ number1 }}</div>
          </div>
          <div class="text-679">{{ text679 }}</div>
        </div>
        <div class="group-22984-4">
          <div class="overlap-group-139 border-3px-st-tropaz">
            <div class="number-71">{{ number2 }}</div>
          </div>
          <div class="text-680">{{ text680 }}</div>
        </div>
        <div class="group-22985-6 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-139 border-3px-bali-hai">
            <div class="number-71">{{ number3 }}</div>
          </div>
          <div class="text-681">{{ text681 }}</div>
        </div>
      </div>
      <div class="overlap-group10-1">
        <div class="rectangle-189-4"></div>
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
      <group22990 :className="group22990Props.className" />
      <div class="group-container-30">
        <div class="group-22991-2">
          <div class="text-37 myriadgeo-medium-black-18px">{{ text697 }}</div>
          <div class="frame-16-30">
            <div class="frame-14-19 border-2px-botticelli">
              <div class="text-698 myriadgeo-bold-st-tropaz-18px">{{ text698 }}</div>
            </div>
            <div class="frame-15-17 border-2px-cyan--aqua">
              <div class="text-699 myriadgeo-bold-st-tropaz-18px">{{ text699 }}</div>
            </div>
          </div>
          <div class="overlap-group-140">
            <div class="frame-17-10"></div>
            <div class="rectangle-190-18"></div>
          </div>
        </div>
        <div class="group-22992">
          <div class="text-37 myriadgeo-medium-black-18px">{{ text700 }}</div>
          <div class="frame-16-31">
            <frame146 />
            <frame153 />
            <frame144 :address="frame144Props.address" :className="frame144Props.className" />
            <frame145 :address="frame145Props.address" :className="frame145Props.className" />
            <frame153 />
            <frame16 :className="frame16Props.className" />
          </div>
          <div class="overlap-group-140">
            <div class="frame-17-10"></div>
            <div class="rectangle-190-18"></div>
          </div>
        </div>
        <div class="group-22993-1">
          <div class="text-37 myriadgeo-medium-black-18px">{{ text707 }}</div>
          <div class="frame-16-32">
            <frame147 :text708="frame1471Props.text708" />
            <frame147 :text708="frame1472Props.text708" :className="frame1472Props.className" />
          </div>
          <div class="overlap-group-140">
            <div class="frame-17-10"></div>
            <div class="rectangle-190-18"></div>
          </div>
        </div>
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
import Group22990 from "./Group22990";
import Frame146 from "./Frame146";
import Frame153 from "./Frame153";
import Frame144 from "./Frame144";
import Frame145 from "./Frame145";
import Frame16 from "./Frame16";
import Frame147 from "./Frame147";
import Group22969 from "./Group22969";
import Group57 from "./Group57";
export default {
  name: "MakeAnOffer5",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group22987,
    Group22988,
    Group22989,
    Group22990,
    Frame146,
    Frame153,
    Frame144,
    Frame145,
    Frame16,
    Frame147,
    Group22969,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text677",
    "ellipse10",
    "text676",
    "x211688_Forward_Arrow_Icon1",
    "number1",
    "text679",
    "number2",
    "text680",
    "number3",
    "text681",
    "text697",
    "text698",
    "text699",
    "text700",
    "text707",
    "rectangle24Props",
    "group22988Props",
    "group22990Props",
    "frame144Props",
    "frame145Props",
    "frame16Props",
    "frame1471Props",
    "frame1472Props",
    "group22969Props",
    "group57Props",
  ],
};
</script>

<style>
.make-an-offer4 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  height: 1965px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-22983-6 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-20 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-22 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-40 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-25 {
  height: 24px;
  width: 24px;
}

.text-677 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-27 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-141 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-19 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-676 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-67 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-container-29 {
  align-items: flex-start;
  display: flex;
  margin-right: 43px;
  margin-top: 33px;
  min-width: 1246px;
}

.group-22981-5 {
  align-items: center;
  display: flex;
  min-width: 374px;
}

.overlap-group-139 {
  align-items: flex-start;
  border-radius: 25px;
  display: flex;
  height: 50px;
  min-width: 50px;
  padding: 12px 10px;
}

.number-72 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  white-space: nowrap;
}

.text-679 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 307px;
  white-space: nowrap;
}

.group-22984-4 {
  align-items: center;
  display: flex;
  margin-left: 66px;
  min-width: 334px;
}

.number-71 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  min-width: 25px;
  text-align: center;
  white-space: nowrap;
}

.text-680 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 267px;
  white-space: nowrap;
}

.group-22985-6 {
  align-items: center;
  display: flex;
  margin-left: 106px;
  min-width: 366px;
}

.text-681 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 299px;
  white-space: nowrap;
}

.overlap-group10-1 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  margin-left: 1px;
  margin-top: 33px;
  min-width: 1290px;
}

.rectangle-189-4 {
  background-color: var(--cyan--aqua);
  height: 5px;
  width: 850px;
}

.group-container-30 {
  height: 519px;
  margin-left: 2.86px;
  margin-top: 40px;
  position: relative;
  width: 1292px;
}

.group-22991-2 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 179px;
  position: absolute;
  top: 0;
  width: 1292px;
}

.text-37 {
  letter-spacing: 0;
  min-height: 18px;
}

.frame-16-30 {
  display: flex;
  margin-top: 20px;
  width: 402px;
}

.frame-14-19 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 143px;
}

.text-698 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 93px;
}

.frame-15-17 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 249px;
}

.text-699 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 199px;
}

.overlap-group-140 {
  height: 63px;
  margin-top: 15px;
  position: relative;
  width: 1290px;
}

.frame-17-10 {
  height: 63px;
  left: 0;
  position: absolute;
  top: 0;
  width: 911px;
}

.rectangle-190-18 {
  background-color: var(--swans-down);
  height: 1px;
  left: 0;
  position: absolute;
  top: 16px;
  width: 1290px;
}

.group-22992 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 179px;
  position: absolute;
  top: 170px;
  width: 1292px;
}

.frame-16-31 {
  display: flex;
  height: 63px;
  margin-top: 20px;
  position: relative;
  width: 746px;
}

.group-22993-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 179px;
  position: absolute;
  top: 340px;
  width: 1292px;
}

.frame-16-32 {
  display: flex;
  height: 63px;
  margin-top: 20px;
  position: relative;
  width: 252px;
}
</style>
