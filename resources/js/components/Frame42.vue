<template>
  <div class="frame-4-16">
    <location2 :className="location2Props.className" />
    <img
      class="frame-4-17"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
    />
    <location4 />
  </div>
</template>

<script>
import Location2 from "./Location2";
import Location4 from "./Location4";
export default {
  name: "Frame42",
  components: {
    Location2,
    Location4,
  },
  props: ["location2Props"],
};
</script>

<style>
.frame-4-16,
.frame-4-18,
.frame-4-20,
.frame-4-22,
.frame-4-24,
.frame-4-26 {
  display: flex;
  height: 36px;
  margin-left: 1px;
  margin-top: 27px;
  position: relative;
  width: 298px;
}

.frame-4-17,
.frame-4-19,
.frame-4-21,
.frame-4-23,
.frame-4-25,
.frame-4-27 {
  height: 24px;
  margin-left: 19px;
  margin-top: 6px;
  width: 24px;
}
</style>
