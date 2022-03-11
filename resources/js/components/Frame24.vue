<template>
  <div class="frame-24 screen">
    <div class="group-2-24">
      <div class="overlap-group1-2">
        <div class="text-58 myriadgeo-medium-mid-gray-14px">{{ text58 }}</div>
        <img class="x211688_forward_arrow_icon-1-25" :src="x211688_Forward_Arrow_Icon1" />
      </div>
    </div>
    <div class="group-37">
      <div class="overlap-group-9 myriadgeo-medium-st-tropaz-16px border-5px-cyan--aqua">
        <div class="text-55">{{ text55 }}</div>
        <div class="rectangle-19"></div>
        <div class="text-5-3">{{ text56 }}</div>
        <div class="rectangle-19"></div>
        <div class="text-5-3">{{ text57 }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Frame24",
  props: ["text58", "x211688_Forward_Arrow_Icon1", "text55", "text56", "text57"],
};
</script>

<style>
.frame-24 {
  display: flex;
  flex-direction: column;
  height: 100vh;
  min-height: 201px;
  min-width: 203px;
  overflow-x: hidden;
  width: 100%;
}

.overlay .frame-24 {
  background-color: #00000000;
}

.group-2-24 {
  align-items: flex-start;
  display: flex;
  min-width: 112px;
}

.overlap-group1-2 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  min-width: 110px;
  padding: 10px 12px;
}

.text-58 {
  letter-spacing: 0;
  margin-top: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-25 {
  align-self: flex-end;
  height: 14px;
  margin-bottom: 0;
  margin-left: 4px;
  width: 14px;
}

.group-37 {
  align-items: flex-start;
  display: flex;
  height: 151px;
  margin-top: 15px;
  min-width: 209px;
}

.overlap-group-9 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 151px;
  padding: 20px 19px;
  width: 203px;
}

.text-55 {
  letter-spacing: 0;
  min-height: 16px;
}

.rectangle-19 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 13px;
  width: 154px;
}

.text-5-3 {
  letter-spacing: 0;
  margin-top: 13px;
  min-height: 16px;
  opacity: 0.5;
}

#overlay-frame-24 {
  background-color: transparent;
}
</style>
