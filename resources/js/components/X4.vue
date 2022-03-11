<template>
  <div :class="[`x4-5`, className || ``]">
    <div class="overlap-group-60">
      <div class="flex-row-9">
        <div class="text-365 myriadgeo-medium-st-tropaz-16px">{{ text365 }}</div>
        <img
          class="x211688_forward_arrow_icon-1-40"
          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-36@2x.png"
        />
      </div>
      <div class="rectangle-42"></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "X4",
  props: ["text365", "className"],
};
</script>

<style>
.x4-5 {
  align-items: flex-start;
  display: flex;
  height: 60px;
  min-width: 357px;
}

.overlap-group-60 {
  align-items: center;
  background-image: url(https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/rectangle-41@2x.png);
  background-size: 100% 100%;
  display: flex;
  flex-direction: column;
  min-height: 60px;
  width: 355px;
}

.flex-row-9 {
  align-items: center;
  display: flex;
  height: 16px;
  margin-left: 15px;
  margin-top: 22px;
  min-width: 304px;
}

.text-365 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 167px;
}

.x211688_forward_arrow_icon-1-40 {
  height: 14px;
  margin-left: 123px;
  margin-top: 0;
  width: 14px;
}

.rectangle-42 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-left: 5px;
  margin-top: 21px;
  width: 350px;
}

.x4-5.x4-6 .text-365 {
  min-width: 134px;
}

.x4-5.x4-6 .x211688_forward_arrow_icon-1-40 {
  margin-left: 156px;
}

.x4-5.x4-7 .text-365 {
  min-width: 103px;
}

.x4-5.x4-7 .x211688_forward_arrow_icon-1-40 {
  margin-left: 187px;
}

.x4-5.x4-8 .text-365 {
  min-width: 156px;
}

.x4-5.x4-8 .x211688_forward_arrow_icon-1-40 {
  margin-left: 134px;
}

.x4-5.x4-9 .text-365,
.x4-5.x4-18 .text-365,
.x4-5.x4-19 .text-365,
.x4-5.x4-20 .text-365 {
  min-width: 98px;
}

.x4-5.x4-9 .x211688_forward_arrow_icon-1-40,
.x4-5.x4-18 .x211688_forward_arrow_icon-1-40,
.x4-5.x4-19 .x211688_forward_arrow_icon-1-40,
.x4-5.x4-20 .x211688_forward_arrow_icon-1-40 {
  margin-left: 192px;
}

.x4-5.x4-10 .text-365 {
  min-width: 193px;
}

.x4-5.x4-10 .x211688_forward_arrow_icon-1-40 {
  margin-left: 97px;
}

.x4-5.x4-11 .text-365 {
  min-width: 88px;
}

.x4-5.x4-11 .x211688_forward_arrow_icon-1-40 {
  margin-left: 202px;
}

.x4-5.x4-12 .text-365 {
  min-width: 160px;
}

.x4-5.x4-12 .x211688_forward_arrow_icon-1-40 {
  margin-left: 130px;
}

.x4-5.x4-13 .text-365 {
  min-width: 147px;
}

.x4-5.x4-13 .x211688_forward_arrow_icon-1-40 {
  margin-left: 143px;
}

.x4-5.x4-14 .text-365 {
  min-width: 211px;
}

.x4-5.x4-14 .x211688_forward_arrow_icon-1-40 {
  margin-left: 79px;
}

.x4-5.x4-15 .text-365 {
  min-width: 110px;
}

.x4-5.x4-15 .x211688_forward_arrow_icon-1-40 {
  margin-left: 180px;
}

.x4-5.x4-16 .text-365 {
  min-width: 136px;
}

.x4-5.x4-16 .x211688_forward_arrow_icon-1-40 {
  margin-left: 154px;
}

.x4-5.x4-17 .text-365 {
  min-width: 188px;
}

.x4-5.x4-17 .x211688_forward_arrow_icon-1-40 {
  margin-left: 102px;
}
</style>
