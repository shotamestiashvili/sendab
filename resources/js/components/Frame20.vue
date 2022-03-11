<template>
  <div class="frame-20-1 screen">
    <div class="group-22999-1">
      <div class="overlap-group6-15">
        <div class="group-25-16">
          <router-link to="/home-v2-0"><img class="logo-19" :src="logo" /></router-link><group22 />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-21">
              <div class="overlap-group1-37">
                <img class="package-svgrepo-com-1-24" :src="packageSvgrepoCom1" />
                <div class="text-648 myriadgeo-bold-white-16px">{{ text648 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-26">
              <div class="overlap-group-135 border-1px-botticelli-2">
                <img class="ellipse-10-18" :src="ellipse10" />
                <div class="text-647 myriadgeo-bold-st-tropaz-16px">{{ text647 }}</div>
                <img class="x211688_forward_arrow_icon-1-66" :src="x211688_Forward_Arrow_Icon1" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="text-650 myriadgeo-bold-black-36px">{{ text650 }}</div>
        <div class="group-22996-1">
          <div class="group-22995-1 border-1px-swans-down">
            <div class="overlap-group5-12">
              <div class="overlap-group-136">
                <img class="account-22" :src="account" />
                <div class="text-664 myriadgeo-regular-normal-st-tropaz-16px">{{ text664 }}</div>
              </div>
              <img class="loading-svgrepo-com-1-1" :src="loadingSvgrepoCom1" />
            </div>
            <div class="group-22990-3">
              <div class="text-665 myriadgeo-bold-st-tropaz-18px">{{ text665 }}</div>
            </div>
            <div class="group-22991-1">
              <div class="text-666 myriadgeo-bold-st-tropaz-18px">{{ text666 }}</div>
            </div>
            <div class="overlap-group1-38 border-2px-cyan--aqua">
              <div class="text-667 myriadgeo-bold-st-tropaz-18px">{{ text667 }}</div>
            </div>
            <div class="group-22993">
              <div class="text-668 myriadgeo-bold-st-tropaz-18px">{{ text668 }}</div>
            </div>
          </div>
          <div class="group-36-1">
            <div class="overlap-group4-15 border-1px-swans-down">
              <div class="flex-row-71">
                <img class="x2561331_right_arrow_icon-2-1" :src="x2561331_Right_Arrow_Icon2" />
                <div class="text-663 myriadgeo-medium-st-tropaz-20px">{{ text663 }}</div>
                <img class="x2561331_right_arrow_icon-1-1" :src="x2561331_Right_Arrow_Icon1" />
              </div>
              <div class="rectangle-22-1"></div>
              <group302 />
              <group31 :className="group31Props.className" />
              <group32 />
              <group33 :className="group33Props.className" />
              <group34 :className="group34Props.className" />
              <group35 :className="group35Props.className" />
              <div class="rectangle-23"></div>
              <div class="flex-row-72">
                <div class="flex-col-45">
                  <div class="text-651 myriadgeo-medium-black-16px">{{ text651 }}</div>
                  <div class="overlap-group-137 border-1px-link-water">
                    <div class="text-652 myriadgeo-medium-bali-hai-16px">{{ text652 }}</div>
                    <div class="overlap-group1-39">
                      <div class="text-653 myriadgeo-medium-white-14px-2">{{ text653 }}</div>
                    </div>
                  </div>
                </div>
                <div class="overlap-group2-32 border-1px-link-water">
                  <div class="text-654 myriadgeo-medium-bali-hai-16px">{{ text654 }}</div>
                  <div class="overlap-group-138">
                    <div class="text-655 myriadgeo-medium-white-14px-2">{{ text655 }}</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <group22998 :className="group22998Props.className" />
      </div>
    </div>
  </div>
</template>

<script>
import Group22 from "./Group22";
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group302 from "./Group302";
import Group31 from "./Group31";
import Group32 from "./Group32";
import Group33 from "./Group33";
import Group34 from "./Group34";
import Group35 from "./Group35";
import Group22998 from "./Group22998";
export default {
  name: "Frame20",
  components: {
    Group22,
    Group53,
    Rectangle24,
    Group302,
    Group31,
    Group32,
    Group33,
    Group34,
    Group35,
    Group22998,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text648",
    "ellipse10",
    "text647",
    "x211688_Forward_Arrow_Icon1",
    "text650",
    "account",
    "text664",
    "loadingSvgrepoCom1",
    "text665",
    "text666",
    "text667",
    "text668",
    "x2561331_Right_Arrow_Icon2",
    "text663",
    "x2561331_Right_Arrow_Icon1",
    "text651",
    "text652",
    "text653",
    "text654",
    "text655",
    "rectangle24Props",
    "group31Props",
    "group33Props",
    "group34Props",
    "group35Props",
    "group22998Props",
  ],
};
</script>

<style>
.frame-20-1 {
  display: flex;
  height: 100vh;
  min-height: 910px;
  min-width: 1791px;
  overflow-x: hidden;
  width: 100%;
}

.overlay .frame-20-1 {
  background-color: #00000000;
}

.group-22999-1 {
  align-items: flex-start;
  display: flex;
  height: 910px;
  min-width: 1793px;
}

.overlap-group6-15 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 910px;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-16 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-19 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-21 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-37 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-24,
.x2561331_right_arrow_icon-2-1 {
  height: 24px;
  width: 24px;
}

.text-648 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-26 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-135 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-18 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-647 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-66 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.text-650 {
  letter-spacing: 0;
  line-height: 46px;
  margin-top: 51px;
  min-height: 46px;
  min-width: 471px;
  white-space: nowrap;
}

.group-22996-1 {
  display: flex;
  margin-left: 1px;
  margin-top: 51px;
  width: 800px;
}

.group-22995-1 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 470px;
  padding: 18px 0;
  width: 370px;
}

.overlap-group5-12 {
  align-self: center;
  border-radius: 15px;
  height: 63px;
  position: relative;
  width: 340px;
}

.overlap-group-136 {
  align-items: center;
  background-color: var(--solitude);
  border-radius: 15px;
  display: flex;
  height: 63px;
  left: 0;
  min-width: 340px;
  padding: 8px 23px;
  position: absolute;
  top: 0;
}

.account-22 {
  height: 26px;
  margin-bottom: 1px;
  width: 26px;
}

.text-664 {
  align-self: flex-end;
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 20px;
  min-height: 46px;
  min-width: 120px;
  white-space: nowrap;
}

.loading-svgrepo-com-1-1 {
  height: 30px;
  left: 294px;
  position: absolute;
  top: 17px;
  width: 30px;
}

.group-22990-3 {
  display: flex;
  margin-left: 46px;
  margin-top: 18px;
  opacity: 0.5;
  width: 77px;
}

.text-665 {
  height: 46px;
  letter-spacing: 0;
  line-height: 46px;
  white-space: nowrap;
  width: 75px;
}

.group-22991-1 {
  display: flex;
  margin-left: 46px;
  margin-top: 4px;
  opacity: 0.5;
  width: 83px;
}

.text-666 {
  height: 46px;
  letter-spacing: 0;
  line-height: 46px;
  white-space: nowrap;
  width: 81px;
}

.overlap-group1-38 {
  align-items: flex-start;
  align-self: center;
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-top: 6px;
  min-width: 340px;
  padding: 7px 30px;
}

.text-667 {
  letter-spacing: 0;
  line-height: 46px;
  min-height: 46px;
  white-space: nowrap;
}

.group-22993 {
  display: flex;
  margin-left: 46px;
  margin-top: 5px;
  opacity: 0.5;
  width: 131px;
}

.text-668 {
  height: 46px;
  letter-spacing: 0;
  line-height: 46px;
  white-space: nowrap;
  width: 129px;
}

.group-36-1 {
  align-items: flex-start;
  display: flex;
  height: 470px;
  margin-left: 60px;
  min-width: 374px;
}

.overlap-group4-15 {
  align-items: center;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 470px;
  padding: 30px 22px;
  position: relative;
  width: 370px;
}

.flex-row-71 {
  align-items: flex-start;
  display: flex;
  margin-left: 0;
  min-width: 300px;
}

.text-663 {
  align-self: center;
  letter-spacing: 0;
  margin-left: 79px;
  margin-top: 0;
  min-height: 20px;
  min-width: 94px;
  text-align: center;
}

.x2561331_right_arrow_icon-1-1 {
  align-self: flex-end;
  height: 24px;
  margin-left: 79px;
  width: 24px;
}

.rectangle-22-1 {
  background-color: var(--swans-down);
  height: 1px;
  margin-right: 2px;
  margin-top: 19px;
  width: 300px;
}

.rectangle-23 {
  background-color: var(--swans-down);
  height: 1px;
  margin-right: 2px;
  margin-top: 27px;
  width: 300px;
}

.flex-row-72 {
  align-items: flex-end;
  display: flex;
  height: 74px;
  margin-top: 25px;
  min-width: 300px;
}

.flex-col-45 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 74px;
  width: 145px;
}

.text-651 {
  letter-spacing: 0;
  min-height: 16px;
}

.overlap-group-137 {
  align-items: center;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  justify-content: flex-end;
  margin-top: 18px;
  min-width: 145px;
  padding: 0 3px;
}

.text-652 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 46px;
}

.overlap-group1-39 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 43px;
  min-width: 35px;
  padding: 0 8px;
}

.text-653 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 19px;
}

.overlap-group2-32 {
  align-items: center;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  justify-content: flex-end;
  margin-left: 10px;
  min-width: 145px;
  padding: 0 3px;
}

.text-654 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 39px;
}

.overlap-group-138 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 50px;
  min-width: 35px;
  padding: 0 8px;
}

.text-655 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 19px;
  text-align: center;
}

#overlay-frame-20 {
  background-color: transparent;
}
</style>
