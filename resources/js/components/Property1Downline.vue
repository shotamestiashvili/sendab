<template>
  <router-link to="/my-profilemy-orders">
    <div class="x2-4"><x42 :text_Label="x42Props.text_Label" :className="x42Props.className" /></div
  ></router-link>
</template>

<script>
import X42 from "./X42";
export default {
  name: "Property1Downline",
  components: {
    X42,
  },
  props: ["x42Props"],
};
</script>

<style>
.x2-4,
.link,
.link-1,
.link-2,
.link-3,
.x4-21,
.x3-3,
.x3-4,
.link-4 {
  cursor: pointer;
  display: flex;
  height: 60px;
  margin-left: 27.5px;
  position: relative;
  width: 355px;
}
</style>
