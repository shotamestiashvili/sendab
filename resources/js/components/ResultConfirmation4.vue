<template>
  <div class="container-center-horizontal">
    <div class="result-confirmation3 screen">
      <div class="overlap-group7-13">
        <div class="group-container-46">
          <group78 v-bind="group78Props" />
          <div class="group-22970-2">
            <group585 :text1217="group5851Props.text1217" :text1218="group5851Props.text1218" />
            <group585
              :text1217="group5852Props.text1217"
              :text1218="group5852Props.text1218"
              :className="group5852Props.className"
            />
            <group585
              :text1217="group5853Props.text1217"
              :text1218="group5853Props.text1218"
              :className="group5853Props.className"
            />
            <group585
              :text1217="group5854Props.text1217"
              :text1218="group5854Props.text1218"
              :className="group5854Props.className"
            />
          </div>
        </div>
        <rectangle24 :className="rectangle241Props.className" />
        <rectangle24 :className="rectangle242Props.className" />
        <div class="overlap-group4-28">
          <div class="text-1205 myriadgeo-bold-white-18px">{{ text1205 }}</div>
        </div>
        <div class="group-25-32">
          <router-link to="/home-v2-0"><img class="logo-37" :src="logo" /></router-link><group22 />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-38">
              <div class="overlap-group1-57">
                <img class="package-svgrepo-com-1-40" :src="packageSvgrepoCom1" />
                <div class="text-1210 myriadgeo-bold-white-16px">{{ text1210 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-43">
              <div class="overlap-group-172 border-1px-botticelli-2">
                <img class="ellipse-10-34" :src="ellipse10" />
                <div class="text-1209 myriadgeo-bold-st-tropaz-16px">{{ text1209 }}</div>
                <img class="x211688_forward_arrow_icon-1-96" :src="x211688_Forward_Arrow_Icon1" />
              </div></div
          ></a>
        </div>
        <div class="rectangle-29-9"></div>
        <rectangle24 :className="rectangle243Props.className" />
        <div class="text-1216 myriadgeo-bold-black-36px">{{ text1216 }}</div>
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
import Group78 from "./Group78";
import Group585 from "./Group585";
import Rectangle24 from "./Rectangle24";
import Group22 from "./Group22";
import Group53 from "./Group53";
import Group57 from "./Group57";
export default {
  name: "ResultConfirmation4",
  components: {
    Group78,
    Group585,
    Rectangle24,
    Group22,
    Group53,
    Group57,
  },
  props: [
    "text1205",
    "logo",
    "packageSvgrepoCom1",
    "text1210",
    "ellipse10",
    "text1209",
    "x211688_Forward_Arrow_Icon1",
    "text1216",
    "group78Props",
    "group5851Props",
    "group5852Props",
    "group5853Props",
    "group5854Props",
    "rectangle241Props",
    "rectangle242Props",
    "rectangle243Props",
    "group57Props",
  ],
};
</script>

<style>
.result-confirmation3 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1692px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group7-13 {
  height: 1342px;
  position: relative;
  width: 1791px;
}

.group-container-46 {
  height: 940px;
  left: 470px;
  position: absolute;
  top: 272px;
  width: 850px;
}

.group-22970-2 {
  display: flex;
  flex-direction: column;
  height: 428px;
  left: 193px;
  position: absolute;
  top: 64px;
  width: 475px;
}

.overlap-group4-28 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 60px;
  justify-content: flex-end;
  left: 751px;
  min-width: 290px;
  padding: 0 47px;
  position: absolute;
  top: 813px;
}

.text-1205 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 195px;
}

.group-25-32 {
  display: flex;
  height: 50px;
  left: 242px;
  position: absolute;
  top: 33px;
  width: 1299px;
}

.logo-37 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-38 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-57 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-40 {
  height: 24px;
  width: 24px;
}

.text-1210 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-43 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-172 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-34 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-1209 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-96 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-9 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 667px;
  position: absolute;
  top: 81px;
  width: 147px;
}

.text-1216 {
  left: 587px;
  letter-spacing: 0;
  line-height: 46px;
  position: absolute;
  text-align: center;
  top: 177px;
  width: 618px;
}
</style>
