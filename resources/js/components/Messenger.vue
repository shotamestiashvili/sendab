<template>
  <div class="container-center-horizontal">
    <div class="messenger-1 screen">
      <div class="flex-col-2">
        <div class="flex-col-3">
          <div class="overlap-group6-10">
            <div class="group-25-5">
              <router-link to="/home-v2-0"><img class="logo-7" :src="logo" /></router-link><group22 />
              <group53 />
              <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
                <div class="group-4-10">
                  <div class="overlap-group1-20">
                    <img class="package-svgrepo-com-1-12" :src="packageSvgrepoCom1" />
                    <div class="text-316 myriadgeo-bold-white-16px">{{ text316 }}</div>
                  </div>
                </div></a
              ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
                <div class="group-3-13">
                  <div class="overlap-group-58 border-1px-botticelli-2">
                    <img class="ellipse-10-5" :src="ellipse101" />
                    <div class="text-315 myriadgeo-bold-st-tropaz-16px">{{ text315 }}</div>
                    <img class="x211688_forward_arrow_icon-1-36" :src="x211688_Forward_Arrow_Icon1" />
                  </div></div
              ></a>
            </div>
            <div class="rectangle-29-2"></div>
          </div>
          <rectangle24 :className="rectangle241Props.className" />
          <div class="group-22982">
            <div class="group-22981-3">
              <img class="chat-svgrepo-com-1-1" :src="chatSvgrepoCom1" />
              <div class="text-323 myriadgeo-bold-st-tropaz-24px">{{ text323 }}</div>
            </div>
            <div class="rectangle-181"></div>
            <router-link to="/messenger">
              <div class="group-22980">
                <img class="notification-svgrepo-com-1-1" :src="notificationSvgrepoCom1" />
                <div class="text-322 myriadgeo-bold-shadow-green-24px">{{ text322 }}</div>
              </div></router-link
            >
          </div>
          <rectangle24 :className="rectangle242Props.className" />
        </div>
        <div class="flex-row-5">
          <div class="rectangle-18"></div>
          <div class="group-container-8">
            <group22983 :ellipse9="group229831Props.ellipse9" :text325="group229831Props.text325" />
            <div class="overlap-group4-7">
              <img class="ellipse" :src="ellipse9" />
              <div class="text-container-2">
                <div class="text-3-7 myriadgeo-medium-black-16px">{{ text327 }}</div>
                <div class="text-326 myriadgeo-medium-smalt-blue-14px">{{ text326 }}</div>
              </div>
            </div>
            <group22983
              :ellipse9="group229832Props.ellipse9"
              :text325="group229832Props.text325"
              :className="group229832Props.className"
            />
            <group22983
              :ellipse9="group229833Props.ellipse9"
              :text325="group229833Props.text325"
              :className="group229833Props.className"
            />
          </div>
          <div class="flex-row-6">
            <div class="rectangle-18"></div>
            <div class="flex-col-4">
              <div class="group-22970">
                <div class="group-71">
                  <img class="ellipse" :src="ellipse102" />
                  <div class="flex-col-5">
                    <div class="text-3-7 myriadgeo-medium-black-16px">{{ text332 }}</div>
                    <div class="star-svgrepo-com-container">
                      <img class="star-svgrepo-com-5-1" :src="starSvgrepoCom5" /><img
                        class="star-svgrepo-com-1"
                        :src="starSvgrepoCom6"
                      /><img class="star-svgrepo-com-1" :src="starSvgrepoCom7" /><img
                        class="star-svgrepo-com-1"
                        :src="starSvgrepoCom8"
                      /><img class="star-svgrepo-com-1" :src="starSvgrepoCom9" />
                    </div>
                  </div>
                </div>
                <a href="javascript:ShowOverlay('frame-13', 'animate-appear');">
                  <div class="group-90"><group88 :src="group88Props.src" /></div
                ></a>
              </div>
              <div class="rectangle-187"></div>
              <div class="rectangle-177 border-1px-botticelli"></div>
              <div class="rectangle-186"></div>
              <div class="overlap-group7-6">
                <div class="text-333 myriadgeo-bold-white-18px">{{ text333 }}</div>
              </div>
            </div>
            <div class="rectangle-18"></div>
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
</template>

<script>
import Group22 from "./Group22";
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group22983 from "./Group22983";
import Group88 from "./Group88";
import Group57 from "./Group57";
export default {
  name: "Messenger",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group22983,
    Group88,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text316",
    "ellipse101",
    "text315",
    "x211688_Forward_Arrow_Icon1",
    "chatSvgrepoCom1",
    "text323",
    "notificationSvgrepoCom1",
    "text322",
    "ellipse9",
    "text327",
    "text326",
    "ellipse102",
    "text332",
    "starSvgrepoCom5",
    "starSvgrepoCom6",
    "starSvgrepoCom7",
    "starSvgrepoCom8",
    "starSvgrepoCom9",
    "text333",
    "rectangle241Props",
    "rectangle242Props",
    "group229831Props",
    "group229832Props",
    "group229833Props",
    "group88Props",
    "group57Props",
  ],
};
</script>

<style>
.messenger-1 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1250px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.flex-col-2 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 1020px;
  width: 1791px;
}

.flex-col-3 {
  align-items: center;
  display: flex;
  flex-direction: column;
  margin-top: 33px;
  min-height: 211px;
  position: relative;
  width: 1791px;
}

.overlap-group6-10 {
  height: 50px;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.group-25-5 {
  display: flex;
  height: 50px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1299px;
}

.logo-7 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-10 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-20 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-12 {
  height: 24px;
  width: 24px;
}

.text-316 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-13 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-58 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-5 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-315 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-36 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-2 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 425px;
  position: absolute;
  top: 48px;
  width: 147px;
}

.group-22982 {
  display: flex;
  margin-left: 1px;
  margin-top: 40px;
  width: 624px;
}

.group-22981-3 {
  align-items: center;
  display: flex;
  height: 46px;
  min-width: 256px;
}

.chat-svgrepo-com-1-1 {
  height: 38px;
  width: 38px;
}

.text-323 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 15px;
  min-height: 46px;
  min-width: 201px;
  white-space: nowrap;
}

.rectangle-181 {
  background-color: var(--botticelli-2);
  height: 46px;
  margin-left: 67px;
  width: 1px;
}

.group-22980 {
  cursor: pointer;
  display: flex;
  margin-left: 65px;
  width: 237px;
}

.notification-svgrepo-com-1-1 {
  height: 38px;
  margin-top: 4px;
  width: 38px;
}

.text-322 {
  height: 46px;
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 15px;
  white-space: nowrap;
  width: 182px;
}

.flex-row-5 {
  align-items: flex-start;
  display: flex;
  margin-left: 8px;
  min-width: 1285px;
}

.rectangle-18 {
  background-color: var(--botticelli-2);
  height: 776px;
  width: 1px;
}

.group-container-8 {
  align-items: center;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 28px;
  min-height: 305px;
  position: relative;
  width: 320px;
}

.overlap-group4-7 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 10px;
  display: flex;
  height: 80px;
  margin-top: 20px;
  min-width: 320px;
  padding: 0 16px;
}

.ellipse {
  height: 50px;
  object-fit: cover;
  width: 50px;
}

.text-container-2 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 3px;
  min-height: 39px;
  width: 197px;
}

.text-3-7 {
  letter-spacing: 0;
  min-height: 16px;
}

.text-326 {
  letter-spacing: 0;
  margin-top: 9px;
  min-height: 14px;
}

.flex-row-6 {
  align-items: center;
  display: flex;
  margin-left: 13px;
  min-width: 939px;
}

.flex-col-4 {
  align-items: flex-end;
  display: flex;
  flex-direction: column;
  margin-bottom: 14px;
  min-height: 724px;
  width: 937px;
}

.group-22970 {
  align-self: center;
  display: flex;
  margin-left: 15px;
  width: 878px;
}

.group-71 {
  align-items: center;
  display: flex;
  margin-top: 8px;
  min-width: 186px;
}

.flex-col-5 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 1px;
  min-height: 37px;
  width: 122px;
}

.star-svgrepo-com-container {
  align-items: flex-start;
  display: flex;
  margin-top: 7px;
  min-width: 82px;
}

.star-svgrepo-com-5-1 {
  height: 14px;
  width: 14px;
}

.star-svgrepo-com-1 {
  height: 14px;
  margin-left: 3px;
  width: 14px;
}

.group-90 {
  cursor: pointer;
  display: flex;
  height: 60px;
  margin-left: 632px;
  position: relative;
  width: 60px;
}

.rectangle-187 {
  background-color: var(--botticelli-3);
  height: 1px;
  margin-top: 20px;
  width: 937px;
}

.rectangle-177 {
  border-radius: 30px;
  height: 190px;
  margin-right: 35px;
  margin-top: 308px;
  width: 540px;
}

.rectangle-186 {
  background-color: var(--botticelli-3);
  height: 1px;
  margin-top: 51px;
  width: 937px;
}

.overlap-group7-6 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 60px;
  margin-right: 27px;
  margin-top: 33px;
  min-width: 130px;
  padding: 0 26px;
}

.text-333 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 78px;
}
</style>
