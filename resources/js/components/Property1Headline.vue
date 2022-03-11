<template>
  <router-link to="/my-profile-general-info-6">
    <div :class="[`x1-2`, className || ``]">
      <x43 :text_Label="x43Props.text_Label" :className="x43Props.className" /></div
  ></router-link>
</template>

<script>
import X43 from "./X43";
export default {
  name: "Property1Headline",
  components: {
    X43,
  },
  props: ["className", "x43Props"],
};
</script>

<style>
.x1-2 {
  cursor: pointer;
  display: flex;
  height: 60px;
  margin-left: 27.5px;
  margin-top: 30px;
  position: relative;
  width: 355px;
}

.x1-2.link-5,
.x1-2.x2-5,
.x1-2.x2-6,
.x1-2.x4-38,
.x1-2.link-6,
.x1-2.link-7,
.x1-2.link-8,
.x1-2.link-9 {
  margin-top: unset;
}
</style>
