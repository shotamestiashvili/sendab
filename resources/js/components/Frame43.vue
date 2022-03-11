<template>
  <div class="frame-4-28">
    <location2 :className="location2Props.className" />
    <img
      class="frame-23"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
    />
    <location5 :text381="location51Props.text381" />
    <img
      class="frame-23"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
    />
    <location5 :text381="location52Props.text381" :className="location52Props.className" />
  </div>
</template>

<script>
import Location2 from "./Location2";
import Location5 from "./Location5";
export default {
  name: "Frame43",
  components: {
    Location2,
    Location5,
  },
  props: ["location2Props", "location51Props", "location52Props"],
};
</script>

<style>
.frame-4-28,
.frame-4-29,
.frame-4-30,
.frame-4-31,
.frame-4-32,
.frame-4-33 {
  display: flex;
  height: 36px;
  margin-left: 1px;
  margin-top: 27px;
  position: relative;
  width: 401px;
}

.frame-23,
.frame-26,
.frame-27,
.frame-28,
.frame-29,
.frame-30 {
  height: 24px;
  margin-left: 19px;
  margin-top: 6px;
  width: 24px;
}
</style>
