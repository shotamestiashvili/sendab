<template>
  <div :class="[`group-22990`, className || ``]">
    <div class="text-29 myriadgeo-medium-black-18px">როგორ გიხერხდებათ ბარგის მიღება</div>
    <div class="frame-16-18">
      <div class="frame-14-8 border-2px-cyan--aqua">
        <img
          class="plane-svgrepo-com-1-3"
          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/plane-svgrepo-com-1@2x.png"
        />
        <div class="text-30 myriadgeo-bold-st-tropaz-18px">საწყობიდან გატანა</div>
      </div>
      <frame15 />
    </div>
    <div class="rectangle-190-10"></div>
  </div>
</template>

<script>
import Frame15 from "./Frame15";
export default {
  name: "Group22990",
  components: {
    Frame15,
  },
  props: ["className"],
};
</script>

<style>
.group-22990 {
  display: flex;
  flex-direction: column;
  height: 129px;
  margin-left: 2.86px;
  margin-top: 40px;
  width: 1292px;
}

.text-29 {
  height: 18px;
  letter-spacing: 0;
  width: 310px;
}

.frame-16-18 {
  display: flex;
  margin-top: 20px;
  position: relative;
  width: 542.78px;
}

.frame-14-8 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 268.78px;
}

.plane-svgrepo-com-1-3 {
  height: 33px;
  margin-left: 24.9px;
  margin-top: 15px;
  width: 33px;
}

.text-30 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 11.9px;
  margin-top: 22.5px;
  width: 174px;
}

.rectangle-190-10 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 27px;
  width: 1289.86px;
}

.group-22990.group-22990-1 .frame-14-8 {
  border: 2px solid #c9e1e8;
}
</style>
