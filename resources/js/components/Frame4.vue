<template>
  <div :class="[`frame-4-2-1`]">
    <location />
    <img
      class="frame-5"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
    />
    <location2 />
    <img
      class="frame-5"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
    />
    <location3 />
    <img
      class="frame-5"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
    />
    <location4 />
  </div>
</template>

<script>
import Location from "./Location";
import Location2 from "./Location2";
import Location3 from "./Location3";
import Location4 from "./Location4";
export default {
  name: "Frame4",
  components: {
    Location,
    Location2,
    Location3,
    Location4,
  },
  props: ["className"],
};
</script>

<style>
.frame-4-2-1 {
  display: flex;
  height: 36px;
  position: relative;
  width: 638px;
}

.frame-5 {
  height: 24px;
  margin-left: 19px;
  margin-top: 6px;
  width: 24px;
}

.frame-4-2-1.frame-4-4,
.frame-4-2-1.frame-4-5,
.frame-4-2-1.frame-4-6,
.frame-4-2-1.frame-4-7,
.frame-4-2-1.frame-4-8,
.frame-4-2-1.frame-4-9 {
  margin-left: 1px;
  margin-top: 27px;
}
</style>
