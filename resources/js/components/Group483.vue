<template>
  <div class="group-48-2">
    <div class="overlap-group10-2">
      <div class="flex-row-100">
        <div class="text-1357 myriadgeo-medium-black-24px">
          <span class="myriadgeo-medium-black-24px">{{ spanText1 }}</span>
        </div>
        <div class="text-1358 myriadgeo-medium-st-tropaz-18px">
          <span class="myriadgeo-medium-st-tropaz-18px">{{ spanText2 }}</span>
        </div>
        <img class="x227601_right_arrow_icon-1-24" :src="x227601_Right_Arrow_Icon11" />
      </div>
      <div class="overlap-group-192">
        <div class="frame-4-47">
          <location13 :children="location1Props.children" /> <img class="frame-31" :src="frame31" /><location22
            :children="location21Props.children"
          />
          <img class="frame-31" :src="frame51" /><location32 :children="location31Props.children" />
          <img class="frame-31" :src="frame41" /><location42 :children="location41Props.children" />
        </div>
        <div class="text-13-14 myriadgeo-bold-st-tropaz-18px">
          <span class="myriadgeo-bold-st-tropaz-18px">{{ spanText3 }}</span>
        </div>
        <div class="overlap-group-190">
          <img class="x227601_right_arrow_icon-1-23" :src="x227601_Right_Arrow_Icon12" />
        </div>
      </div>
      <div class="overlap-group-191">
        <div class="frame-4-47">
          <location13 :children="location2Props.children" /> <img class="frame-31" :src="frame32" /><location22
            :children="location22Props.children"
          />
          <img class="frame-31" :src="frame52" /><location32 :children="location32Props.children" />
          <img class="frame-31" :src="frame42" /><location42 :children="location42Props.children" />
        </div>
        <div class="text-13-14 myriadgeo-bold-st-tropaz-18px">
          <span class="myriadgeo-bold-st-tropaz-18px">{{ spanText4 }}</span>
        </div>
        <div class="overlap-group-190">
          <img class="x227601_right_arrow_icon-1-23" :src="x227601_Right_Arrow_Icon13" />
        </div>
      </div>
      <div class="overlap-group-191">
        <div class="frame-4-47">
          <location13 :children="location3Props.children" /> <img class="frame-31" :src="frame33" /><location22
            :children="location23Props.children"
          />
          <img class="frame-31" :src="frame53" /><location32 :children="location33Props.children" />
          <img class="frame-31" :src="frame43" /><location42 :children="location43Props.children" />
        </div>
        <div class="text-13-14 myriadgeo-bold-st-tropaz-18px">
          <span class="myriadgeo-bold-st-tropaz-18px">{{ spanText5 }}</span>
        </div>
        <div class="overlap-group-190">
          <img class="x227601_right_arrow_icon-1-23" :src="x227601_Right_Arrow_Icon14" />
        </div>
      </div>
      <div class="overlap-group4-29">
        <div class="overlap-group-193">
          <div class="frame-4-48">
            <location13 :children="location4Props.children" /> <img class="frame-31" :src="frame34" /><location22
              :children="location24Props.children"
            />
            <img class="frame-31" :src="frame54" /><location32 :children="location34Props.children" />
            <img class="frame-31" :src="frame44" /><location42 :children="location44Props.children" />
            <img class="frame-31" :src="frame6" />
            <div class="location-75 border-1px-botticelli">
              <div class="text-1378 myriadgeo-bold-cinnabar-16px">
                <span class="myriadgeo-bold-cinnabar-16px">{{ spanText6 }}</span>
              </div>
            </div>
          </div>
          <img class="rectangle-24-42" :src="rectangle24" />
        </div>
        <div class="text-1379 myriadgeo-bold-st-tropaz-18px">
          <span class="myriadgeo-bold-st-tropaz-18px">{{ spanText7 }}</span>
        </div>
        <div class="overlap-group-190">
          <img class="x227601_right_arrow_icon-1-23" :src="x227601_Right_Arrow_Icon15" />
        </div>
      </div>
      <div class="overlap-group-191">
        <div class="frame-4-47">
          <location13 :children="location5Props.children" /> <img class="frame-31" :src="frame35" /><location22
            :children="location25Props.children"
          />
          <img class="frame-31" :src="frame55" /><location32 :children="location35Props.children" />
          <img class="frame-31" :src="frame45" /><location42 :children="location45Props.children" />
        </div>
        <div class="text-13-14 myriadgeo-bold-st-tropaz-18px">
          <span class="myriadgeo-bold-st-tropaz-18px">{{ spanText8 }}</span>
        </div>
        <div class="overlap-group-190">
          <img class="x227601_right_arrow_icon-1-23" :src="x227601_Right_Arrow_Icon16" />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Location13 from "./Location13";
import Location22 from "./Location22";
import Location32 from "./Location32";
import Location42 from "./Location42";
export default {
  name: "Group483",
  components: {
    Location13,
    Location22,
    Location32,
    Location42,
  },
  props: [
    "spanText1",
    "spanText2",
    "x227601_Right_Arrow_Icon11",
    "frame31",
    "frame51",
    "frame41",
    "spanText3",
    "x227601_Right_Arrow_Icon12",
    "frame32",
    "frame52",
    "frame42",
    "spanText4",
    "x227601_Right_Arrow_Icon13",
    "frame33",
    "frame53",
    "frame43",
    "spanText5",
    "x227601_Right_Arrow_Icon14",
    "frame34",
    "frame54",
    "frame44",
    "frame6",
    "spanText6",
    "rectangle24",
    "spanText7",
    "x227601_Right_Arrow_Icon15",
    "frame35",
    "frame55",
    "frame45",
    "spanText8",
    "x227601_Right_Arrow_Icon16",
    "location1Props",
    "location21Props",
    "location31Props",
    "location41Props",
    "location2Props",
    "location22Props",
    "location32Props",
    "location42Props",
    "location3Props",
    "location23Props",
    "location33Props",
    "location43Props",
    "location4Props",
    "location24Props",
    "location34Props",
    "location44Props",
    "location5Props",
    "location25Props",
    "location35Props",
    "location45Props",
  ],
};
</script>

<style>
.group-48-2 {
  align-items: flex-start;
  display: flex;
  height: 650px;
  margin-left: 5px;
  margin-top: 80px;
  min-width: 1294px;
}

.overlap-group10-2 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 650px;
  padding: 36px 0;
  width: 1290px;
}

.flex-row-100 {
  align-items: center;
  display: flex;
  height: 60px;
  margin-right: 33px;
  min-width: 1149px;
}

.text-1357 {
  letter-spacing: 0;
  line-height: 60px;
  min-height: 60px;
  min-width: 285px;
  white-space: nowrap;
}

.text-1358 {
  letter-spacing: 0;
  line-height: 60px;
  margin-left: 644px;
  min-height: 60px;
  min-width: 172px;
  white-space: nowrap;
}

.x227601_right_arrow_icon-1-24 {
  height: 20px;
  margin-bottom: 2px;
  margin-left: 28px;
  width: 20px;
}

.overlap-group-192 {
  align-items: center;
  background-color: var(--solitude);
  border-radius: 10px;
  display: flex;
  height: 80px;
  justify-content: flex-end;
  margin-top: 28px;
  min-width: 1184px;
  padding: 0 24px;
}

.frame-4-47 {
  align-items: flex-start;
  display: flex;
  height: 36px;
  justify-content: center;
  min-width: 638px;
  position: relative;
}

.frame-31 {
  align-self: center;
  height: 24px;
  margin-left: 19px;
  width: 24px;
}

.text-13-14 {
  letter-spacing: 0;
  margin-left: 209px;
  margin-top: 2px;
  min-height: 18px;
  min-width: 229px;
}

.overlap-group-190 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 20px;
  display: flex;
  height: 40px;
  margin-left: 18px;
  min-width: 40px;
  padding: 0 10px;
}

.x227601_right_arrow_icon-1-23 {
  height: 20px;
  width: 20px;
}

.overlap-group-191 {
  align-items: center;
  background-color: var(--solitude);
  border-radius: 10px;
  display: flex;
  height: 80px;
  justify-content: flex-end;
  margin-top: 15px;
  min-width: 1184px;
  padding: 0 24px;
}

.overlap-group4-29 {
  align-items: center;
  background-color: var(--solitude);
  border-radius: 10px;
  display: flex;
  justify-content: flex-end;
  margin-top: 15px;
  min-width: 1184px;
  padding: 0 24px;
}

.overlap-group-193 {
  height: 80px;
  position: relative;
  width: 814px;
}

.frame-4-48 {
  align-items: flex-start;
  display: flex;
  height: 36px;
  justify-content: center;
  left: 0;
  min-width: 812px;
  position: absolute;
  top: 22px;
}

.location-75 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  min-width: 112px;
  padding: 10px 13px;
}

.text-1378 {
  letter-spacing: 0;
  min-height: 16px;
}

.rectangle-24-42 {
  height: 80px;
  left: 635px;
  position: absolute;
  top: 0;
  width: 179px;
}

.text-1379 {
  letter-spacing: 0;
  margin-left: 33px;
  margin-top: 2px;
  min-height: 18px;
  min-width: 229px;
}
</style>
