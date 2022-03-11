<template>
  <div class="container-center-horizontal">
    <div class="result-detailed-1 screen">
      <div class="overlap-group6-16">
        <div class="group-22975">
          <div class="group-container-32">
            <group30 :text349="group301Props.text349" />
            <group30 :text349="group302Props.text349" :className="group302Props.className" />
          </div>
          <div class="group-container-33">
            <group22973
              :className="group22973Props.className"
              :location3Props="group22973Props.location3Props"
              :location4Props="group22973Props.location4Props"
            />
            <group22974 :group71Props="group22974Props.group71Props" />
          </div>
        </div>
        <rectangle24 :className="rectangle241Props.className" />
        <rectangle24 :className="rectangle242Props.className" />
        <div class="group-22972">
          <div class="group-3-30">
            <div class="overlap-group-144">
              <div class="text-804 myriadgeo-bold-white-18px">{{ text804 }}</div>
            </div>
          </div>
        </div>
        <div class="group-25-20">
          <router-link to="/home-v2-0"><img class="logo-24" :src="logo" /></router-link><group22 />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-26">
              <div class="overlap-group1-44">
                <img class="x-svgrepo-com-1-2" :src="packageSvgrepoCom1" />
                <div class="text-809 myriadgeo-bold-white-16px">{{ text809 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-31">
              <div class="overlap-group-145 border-1px-botticelli-2">
                <img class="ellipse-10-22" :src="ellipse10" />
                <div class="text-808 myriadgeo-bold-st-tropaz-16px">{{ text808 }}</div>
                <img class="x211688_forward_arrow_icon-1-73" :src="x211688_Forward_Arrow_Icon1" />
              </div></div
          ></a>
        </div>
        <div class="rectangle-29-5"></div>
        <rectangle24 :className="rectangle243Props.className" />
        <div class="group-65">
          <div class="frame-4-34">
            <div class="frame-4-35">
              <div class="location-54 border-1px-botticelli">
                <frame92 />
                <date-svgrepo-com13 />
              </div>
              <img class="frame-4-36" :src="frame4" />
              <div class="location-56 border-1px-botticelli">
                <frame10 />
                <date-svgrepo-com13 :className="dateSvgrepoCom13Props.className" />
              </div>
            </div>
          </div>
        </div>
        <div class="text-819 myriadgeo-bold-black-36px">{{ text819 }}</div>
        <div class="overlap-group4-18">
          <div class="ellipse-7"></div>
          <img class="x227601_right_arrow_icon-1-14" :src="x227601_Right_Arrow_Icon1" />
        </div>
        <div class="group-77">
          <img class="x-svgrepo-com-1-2" :src="alertSvgrepoCom1" />
          <div class="text-820 myriadgeo-medium-cinnabar-18px">{{ text820 }}</div>
        </div>
        <div class="overlap-group5-16">
          <group712
            :starSvgrepoCom5="group712Props.starSvgrepoCom5"
            :starSvgrepoCom6="group712Props.starSvgrepoCom6"
            :starSvgrepoCom7="group712Props.starSvgrepoCom7"
            :starSvgrepoCom8="group712Props.starSvgrepoCom8"
            :starSvgrepoCom9="group712Props.starSvgrepoCom9"
            :className="group712Props.className"
          />
          <group69 :planeSvgrepoCom1="group69Props.planeSvgrepoCom1" :className="group69Props.className" />
          <group70
            :packageSvgrepoCom11="group70Props.packageSvgrepoCom11"
            :text371="group70Props.text371"
            :className="group70Props.className"
          />
          <div class="text-823 myriadgeo-bold-green-36px">
            <span class="myriadgeo-bold-green-36px">{{ spanText1 }}</span
            ><span class="myriadgeo-medium-green-16px">{{ spanText2 }}</span>
          </div>
        </div>
        <div class="rectangle-35"></div>
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
import Group30 from "./Group30";
import Group22973 from "./Group22973";
import Group22974 from "./Group22974";
import Rectangle24 from "./Rectangle24";
import Group22 from "./Group22";
import Group53 from "./Group53";
import Frame92 from "./Frame92";
import DateSvgrepoCom13 from "./DateSvgrepoCom13";
import Frame10 from "./Frame10";
import Group712 from "./Group712";
import Group69 from "./Group69";
import Group70 from "./Group70";
import Group57 from "./Group57";
export default {
  name: "ResultDetailed",
  components: {
    Group30,
    Group22973,
    Group22974,
    Rectangle24,
    Group22,
    Group53,
    Frame92,
    DateSvgrepoCom13,
    Frame10,
    Group712,
    Group69,
    Group70,
    Group57,
  },
  props: [
    "text804",
    "logo",
    "packageSvgrepoCom1",
    "text809",
    "ellipse10",
    "text808",
    "x211688_Forward_Arrow_Icon1",
    "frame4",
    "text819",
    "x227601_Right_Arrow_Icon1",
    "alertSvgrepoCom1",
    "text820",
    "spanText1",
    "spanText2",
    "group301Props",
    "group302Props",
    "group22973Props",
    "group22974Props",
    "rectangle241Props",
    "rectangle242Props",
    "rectangle243Props",
    "dateSvgrepoCom13Props",
    "group712Props",
    "group69Props",
    "group70Props",
    "group57Props",
  ],
};
</script>

<style>
.result-detailed-1 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1692px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group6-16 {
  height: 1342px;
  position: relative;
  width: 1791px;
}

.group-22975 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 691px;
  min-height: 1028px;
  padding: 59px 109px;
  position: absolute;
  top: 290px;
  width: 850px;
}

.group-container-32 {
  align-items: flex-start;
  display: flex;
  height: 74px;
  margin-left: 1px;
  min-width: 326px;
  position: relative;
}

.group-container-33 {
  align-items: flex-start;
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  margin-top: 47px;
  min-height: 740px;
  position: relative;
  width: 630px;
}

.group-22972 {
  display: flex;
  height: 60px;
  left: 771px;
  position: absolute;
  top: 629px;
  width: 250px;
}

.group-3-30 {
  align-items: flex-start;
  display: flex;
  min-width: 252px;
}

.overlap-group-144 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 60px;
  min-width: 250px;
  padding: 0 56px;
}

.text-804 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 138px;
}

.group-25-20 {
  display: flex;
  height: 50px;
  left: 242px;
  position: absolute;
  top: 33px;
  width: 1299px;
}

.logo-24 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-26 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-44 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.x-svgrepo-com-1-2 {
  height: 24px;
  width: 24px;
}

.text-809 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-31 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-145 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-22 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-808 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-73 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-5 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 667px;
  position: absolute;
  top: 81px;
  width: 147px;
}

.group-65 {
  align-items: center;
  display: flex;
  height: 64px;
  left: 252px;
  position: absolute;
  top: 267px;
  width: 745px;
}

.frame-4-34 {
  align-items: center;
  display: flex;
  width: 744.99px;
}

.frame-4-35 {
  display: flex;
  height: 64.11px;
  width: 744.99px;
}

.location-54 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 66.11px;
  margin-left: -1px;
  margin-top: -1px;
  position: relative;
  width: 321.5px;
}

.frame-4-36 {
  height: 24.5px;
  margin-left: 18.8px;
  margin-top: 19.8px;
  width: 24.5px;
}

.location-56 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 66.11px;
  margin-left: 18.8px;
  margin-top: -1px;
  position: relative;
  width: 363.5px;
}

.text-819 {
  left: 320px;
  letter-spacing: 0;
  position: absolute;
  top: 172px;
}

.overlap-group4-18 {
  border-radius: 20px;
  height: 40px;
  left: 252px;
  position: absolute;
  top: 168px;
  width: 40px;
}

.ellipse-7 {
  background-color: var(--st-tropaz);
  border-radius: 20px;
  height: 40px;
  left: 0;
  position: absolute;
  top: 0;
  transform: rotate(-180deg);
  width: 40px;
}

.x227601_right_arrow_icon-1-14 {
  height: 20px;
  left: 10px;
  position: absolute;
  top: 10px;
  width: 20px;
}

.group-77 {
  display: flex;
  height: 24px;
  left: 1299px;
  position: absolute;
  top: 178px;
  width: 244px;
}

.text-820 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 8px;
  margin-top: 3px;
  width: 210px;
}

.overlap-group5-16 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 10px;
  display: flex;
  height: 98px;
  left: 251px;
  min-width: 1290px;
  padding: 0 29px;
  position: absolute;
  top: 384px;
}

.text-823 {
  letter-spacing: 0;
  margin-left: 497px;
  margin-top: 6px;
  min-height: 36px;
  min-width: 104px;
}

.rectangle-35 {
  background-color: #d5eaef;
  height: 1px;
  left: 251px;
  position: absolute;
  top: 576px;
  width: 1290px;
}
</style>
