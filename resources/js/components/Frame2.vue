<template>
  <div class="frame-2-1 screen">
    <div class="group-30-1">
      <div class="text-432 myriadgeo-medium-black-16px">{{ text432 }}</div>
      <div class="overlap-group-105 border-1px-link-water">
        <div class="text-431 myriadgeo-medium-cyan--aqua-16px">{{ text431 }}</div>
        <img class="x211688_forward_arrow_icon-1-48" :src="x211688_Forward_Arrow_Icon1" />
      </div>
    </div>
    <div class="group-36">
      <div class="overlap-group1-26 border-5px-cyan--aqua">
        <div class="flex-row-40">
          <img class="x2561331_right_arrow_icon-2" :src="x2561331_Right_Arrow_Icon2" />
          <div class="text-440 myriadgeo-medium-st-tropaz-20px">{{ text440 }}</div>
          <img class="x2561331_right_arrow_icon-1" :src="x2561331_Right_Arrow_Icon1" />
        </div>
        <div class="rectangle-22"></div>
        <group302 />
        <group31 />
        <group32 />
        <group33 />
        <group34 />
        <group35 />
      </div>
    </div>
  </div>
</template>

<script>
import Group302 from "./Group302";
import Group31 from "./Group31";
import Group32 from "./Group32";
import Group33 from "./Group33";
import Group34 from "./Group34";
import Group35 from "./Group35";
export default {
  name: "Frame2",
  components: {
    Group302,
    Group31,
    Group32,
    Group33,
    Group34,
    Group35,
  },
  props: [
    "text432",
    "text431",
    "x211688_Forward_Arrow_Icon1",
    "x2561331_Right_Arrow_Icon2",
    "text440",
    "x2561331_Right_Arrow_Icon1",
  ],
};
</script>

<style>
.frame-2-1 {
  display: flex;
  flex-direction: column;
  height: 100vh;
  min-height: 434px;
  min-width: 370px;
  overflow-x: hidden;
  width: 100%;
}

.overlay .frame-2-1 {
  background-color: #00000000;
}

.group-30-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 6px;
  min-height: 74px;
  width: 156px;
}

.text-432 {
  letter-spacing: 0;
  min-height: 16px;
}

.overlap-group-105 {
  align-items: center;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-top: 18px;
  min-width: 152px;
  padding: 12px 18px;
}

.text-431 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 54px;
}

.x211688_forward_arrow_icon-1-48 {
  align-self: flex-end;
  height: 16px;
  margin-left: 45px;
  width: 16px;
}

.group-36 {
  align-items: flex-start;
  display: flex;
  height: 340px;
  margin-top: 14px;
  min-width: 372px;
}

.overlap-group1-26 {
  align-items: center;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 340px;
  padding: 30px 26px;
  position: relative;
  width: 370px;
}

.flex-row-40 {
  align-items: flex-start;
  display: flex;
  margin-left: 0;
  min-width: 300px;
}

.x2561331_right_arrow_icon-2 {
  height: 24px;
  width: 24px;
}

.text-440 {
  align-self: center;
  letter-spacing: 0;
  margin-left: 79px;
  margin-top: 0;
  min-height: 20px;
  min-width: 94px;
  text-align: center;
}

.x2561331_right_arrow_icon-1 {
  align-self: flex-end;
  height: 24px;
  margin-left: 79px;
  width: 24px;
}

.rectangle-22 {
  align-self: flex-start;
  background-color: var(--swans-down);
  height: 1px;
  margin-left: 4px;
  margin-top: 15px;
  width: 300px;
}

#overlay-frame-2 .container-center-horizontal {
  justify-content: normal;
}

#overlay-frame-2 .frame-2 {
  left: 304px;
  top: 618px;
}

#overlay-frame-2 {
  background-color: transparent;
}
</style>
