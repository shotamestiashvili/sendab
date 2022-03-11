<template>
  <div class="container-center-horizontal">
    <div class="messenger screen">
      <div class="overlap-group5-20">
        <div class="overlap-group6-19">
          <div class="group-25-26">
            <router-link to="/home-v2-0"><img class="logo-30" :src="logo" /></router-link><group22 />
            <group53 />
            <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
              <div class="group-4-32">
                <div class="overlap-group1-51">
                  <img class="package-svgrepo-com-1-34" :src="packageSvgrepoCom1" />
                  <div class="text-955 myriadgeo-bold-white-16px">{{ text955 }}</div>
                </div>
              </div></a
            ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
              <div class="group-3-37">
                <div class="overlap-group-161 border-1px-botticelli-2">
                  <img class="ellipse-10-28" :src="ellipse10" />
                  <div class="text-954 myriadgeo-bold-st-tropaz-16px">{{ text954 }}</div>
                  <img class="x211688_forward_arrow_icon-1-88" :src="x211688_Forward_Arrow_Icon1" />
                </div></div
            ></a>
          </div>
          <div class="rectangle-29-6"></div>
        </div>
        <rectangle24 :className="rectangle241Props.className" />
        <div class="group-22982-1">
          <router-link to="/messenger-1">
            <div class="group-22981-6">
              <img class="chat-svgrepo-com-1-2" :src="chatSvgrepoCom1" />
              <div class="text-962 myriadgeo-bold-shadow-green-24px">{{ text962 }}</div>
            </div></router-link
          >
          <div class="rectangle-181-1"></div>
          <div class="group-22980-1">
            <img class="notification-svgrepo-com-1-2" :src="notificationSvgrepoCom1" />
            <div class="text-961 myriadgeo-bold-st-tropaz-24px">{{ text961 }}</div>
          </div>
        </div>
        <rectangle24 :className="rectangle242Props.className" />
        <div class="group-22970-1"></div>
        <group22983
          :ellipse9="group229831Props.ellipse9"
          :text325="group229831Props.text325"
          :className="group229831Props.className"
        />
        <div class="overlap-group4-22">
          <img class="ellipse-9-16" :src="ellipse9" />
          <div class="text-container-8">
            <div class="text-966 myriadgeo-medium-black-16px">{{ text966 }}</div>
            <div class="text-965 myriadgeo-medium-smalt-blue-14px">{{ text965 }}</div>
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
import Group57 from "./Group57";
export default {
  name: "Messenger2",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group22983,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text955",
    "ellipse10",
    "text954",
    "x211688_Forward_Arrow_Icon1",
    "chatSvgrepoCom1",
    "text962",
    "notificationSvgrepoCom1",
    "text961",
    "ellipse9",
    "text966",
    "text965",
    "rectangle241Props",
    "rectangle242Props",
    "group229831Props",
    "group229832Props",
    "group229833Props",
    "group57Props",
  ],
};
</script>

<style>
.messenger {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1250px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group5-20 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 1020px;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.overlap-group6-19 {
  height: 50px;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.group-25-26 {
  display: flex;
  height: 50px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1299px;
}

.logo-30 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-32 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-51 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-34 {
  height: 24px;
  width: 24px;
}

.text-955 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-37 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-161 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-28 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-954 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-88 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-6 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 425px;
  position: absolute;
  top: 48px;
  width: 147px;
}

.group-22982-1 {
  display: flex;
  margin-left: 1px;
  margin-top: 40px;
  width: 624px;
}

.group-22981-6 {
  align-items: center;
  cursor: pointer;
  display: flex;
  height: 46px;
  min-width: 256px;
}

.chat-svgrepo-com-1-2 {
  height: 38px;
  width: 38px;
}

.text-962 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 15px;
  min-height: 46px;
  min-width: 201px;
  white-space: nowrap;
}

.rectangle-181-1 {
  background-color: var(--botticelli-2);
  height: 46px;
  margin-left: 67px;
  width: 1px;
}

.group-22980-1 {
  display: flex;
  margin-left: 65px;
  width: 237px;
}

.notification-svgrepo-com-1-2 {
  height: 38px;
  margin-top: 4px;
  width: 38px;
}

.text-961 {
  height: 46px;
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 15px;
  white-space: nowrap;
  width: 182px;
}

.group-22970-1 {
  align-self: flex-end;
  height: 28px;
  margin-right: 288px;
  margin-top: 35px;
  width: 28px;
}

.overlap-group4-22 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 10px;
  display: flex;
  height: 80px;
  margin-left: 3px;
  margin-top: 20px;
  min-width: 320px;
  padding: 0 16px;
}

.ellipse-9-16 {
  height: 50px;
  object-fit: cover;
  width: 50px;
}

.text-container-8 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 3px;
  min-height: 39px;
  width: 197px;
}

.text-966 {
  letter-spacing: 0;
  min-height: 16px;
}

.text-965 {
  letter-spacing: 0;
  margin-top: 9px;
  min-height: 14px;
}
</style>
