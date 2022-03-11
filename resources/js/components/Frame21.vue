<template>
  <div class="frame-21-1 screen">
    <div class="group-22999">
      <div class="overlap-group3-28">
        <div class="group-25-12">
          <router-link to="/home-v2-0"><img class="logo-14" :src="logo" /></router-link><group22 />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-17">
              <div class="overlap-group1-31">
                <img class="package-svgrepo-com-1-21" :src="packageSvgrepoCom1" />
                <div class="text-513 myriadgeo-bold-white-16px">{{ text513 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-20">
              <div class="overlap-group-123 border-1px-botticelli-2">
                <img class="ellipse-10-13" :src="ellipse10" />
                <div class="text-512 myriadgeo-bold-st-tropaz-16px">{{ text512 }}</div>
                <img class="x211688_forward_arrow_icon-1-56" :src="x211688_Forward_Arrow_Icon1" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="text-515 myriadgeo-bold-black-36px">{{ text515 }}</div>
        <div class="group-22996">
          <div class="group-22995 border-1px-swans-down">
            <div class="overlap-group1-32">
              <div class="overlap-group-124">
                <img class="account-21" :src="account" />
                <div class="text-525 myriadgeo-regular-normal-st-tropaz-16px">{{ text525 }}</div>
              </div>
              <img class="loading-svgrepo-com-1" :src="loadingSvgrepoCom1" />
            </div>
            <group23002 :text518="group230021Props.text518" :frame142Props="group230021Props.frame142Props" />
            <group23002
              :text518="group230022Props.text518"
              :className="group230022Props.className"
              :frame142Props="group230022Props.frame142Props"
            />
            <group23002
              :text518="group230023Props.text518"
              :className="group230023Props.className"
              :frame142Props="group230023Props.frame142Props"
            />
          </div>
        </div>
        <group22998 />
      </div>
    </div>
  </div>
</template>

<script>
import Group22 from "./Group22";
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group23002 from "./Group23002";
import Group22998 from "./Group22998";
export default {
  name: "Frame21",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group23002,
    Group22998,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text513",
    "ellipse10",
    "text512",
    "x211688_Forward_Arrow_Icon1",
    "text515",
    "account",
    "text525",
    "loadingSvgrepoCom1",
    "rectangle24Props",
    "group230021Props",
    "group230022Props",
    "group230023Props",
  ],
};
</script>

<style>
.frame-21-1 {
  display: flex;
  height: 100vh;
  min-height: 972px;
  min-width: 1791px;
  overflow-x: hidden;
  width: 100%;
}

.overlay .frame-21-1 {
  background-color: #00000000;
}

.group-22999 {
  align-items: flex-start;
  display: flex;
  height: 979px;
  min-width: 1793px;
}

.overlap-group3-28 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 979px;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-12 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-14 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-17 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-31 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-21 {
  height: 24px;
  width: 24px;
}

.text-513 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-20 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-123 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-13 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-512 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-56 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.text-515 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 1px;
  margin-top: 51px;
  min-height: 46px;
  min-width: 504px;
  white-space: nowrap;
}

.group-22996 {
  display: flex;
  height: 508px;
  margin-left: 1px;
  margin-top: 51px;
  width: 856px;
}

.group-22995 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 508px;
  padding: 18px 14px;
  position: relative;
  width: 856px;
}

.overlap-group1-32 {
  align-self: flex-end;
  border-radius: 15px;
  height: 63px;
  position: relative;
  width: 827px;
}

.overlap-group-124 {
  align-items: center;
  background-color: var(--solitude);
  border-radius: 15px;
  display: flex;
  height: 63px;
  left: 0;
  min-width: 827px;
  padding: 8px 23px;
  position: absolute;
  top: 0;
}

.account-21 {
  height: 26px;
  margin-bottom: 1px;
  width: 26px;
}

.text-525 {
  align-self: flex-end;
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 20px;
  min-height: 46px;
  min-width: 120px;
  white-space: nowrap;
}

.loading-svgrepo-com-1 {
  height: 30px;
  left: 774px;
  position: absolute;
  top: 17px;
  width: 30px;
}

#overlay-frame-21 {
  background-color: transparent;
}
</style>
