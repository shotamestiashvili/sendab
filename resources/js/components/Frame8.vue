<template>
  <div class="frame-8-1 screen">
    <img class="edit-svgrepo-com-2" :src="editSvgrepoCom2" />
    <div class="group-37-3">
      <div class="overlap-group5-18 myriadgeo-medium-black-16px border-5px-cyan--aqua">
        <div class="text-840">{{ text840 }}</div>
        <div class="overlap-group-148 border-1px-link-water">
          <div class="text-84 myriadgeo-medium-bali-hai-16px">{{ text842 }}</div>
          <img class="x211688_forward_arrow_icon-1-78" :src="x211688_Forward_Arrow_Icon11" />
        </div>
        <div class="overlap-group-149 border-1px-link-water">
          <p class="zip-3 myriadgeo-medium-bali-hai-16px">{{ zip1 }}</p>
        </div>
        <div class="text-841">{{ text841 }}</div>
        <div class="overlap-group-148 border-1px-link-water">
          <div class="text-84 myriadgeo-medium-bali-hai-16px">{{ text843 }}</div>
          <img class="x211688_forward_arrow_icon-1-78" :src="x211688_Forward_Arrow_Icon12" />
        </div>
        <div class="overlap-group-149 border-1px-link-water">
          <p class="zip-4 myriadgeo-medium-bali-hai-16px">{{ zip2 }}</p>
        </div>
        <div class="overlap-group-150 border-1px-st-tropaz">
          <div class="text-839 myriadgeo-bold-st-tropaz-16px">{{ text839 }}</div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Frame8",
  props: [
    "editSvgrepoCom2",
    "text840",
    "text842",
    "x211688_Forward_Arrow_Icon11",
    "zip1",
    "text841",
    "text843",
    "x211688_Forward_Arrow_Icon12",
    "zip2",
    "text839",
  ],
};
</script>

<style>
.frame-8-1 {
  display: flex;
  flex-direction: column;
  height: 100vh;
  min-height: 450px;
  min-width: 370px;
  overflow-x: hidden;
  width: 100%;
}

.overlay .frame-8-1 {
  background-color: #00000000;
}

.edit-svgrepo-com-2 {
  height: 24px;
  margin-left: 8px;
  width: 24px;
}

.group-37-3 {
  align-items: flex-start;
  display: flex;
  height: 410px;
  margin-top: 16px;
  min-width: 374px;
}

.overlap-group5-18 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 410px;
  padding: 23px 18px;
  width: 370px;
}

.text-840 {
  letter-spacing: 0;
  margin-left: 1px;
  min-height: 16px;
}

.overlap-group-148 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-left: 1px;
  margin-top: 18px;
  min-width: 320px;
  padding: 11px 18px;
}

.text-84 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 115px;
}

.x211688_forward_arrow_icon-1-78 {
  align-self: center;
  height: 16px;
  margin-bottom: 0;
  margin-left: 152px;
  width: 16px;
}

.overlap-group-149 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-left: 1px;
  margin-top: 10px;
  min-width: 320px;
  padding: 11px 18px;
}

.zip-3,
.zip-4 {
  letter-spacing: 0;
  min-height: 16px;
}

.text-841 {
  letter-spacing: 0;
  margin-left: 1px;
  margin-top: 30px;
  min-height: 16px;
}

.overlap-group-150 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  margin-top: 28px;
  min-width: 321px;
  padding: 16px 63px;
}

.text-839 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 192px;
  text-align: center;
}

#overlay-frame-8 .container-center-horizontal {
  justify-content: normal;
}

#overlay-frame-8 .frame-8 {
  left: 632px;
  top: 151px;
}

#overlay-frame-8 {
  background-color: transparent;
}
</style>
