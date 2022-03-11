<template>
  <div :class="[`x1`, className || ``]"><x4 :text365="x4Props.text365" :className="x4Props.className" /></div>
</template>

<script>
import X4 from "./X4";
export default {
  name: "Property1Active",
  components: {
    X4,
  },
  props: ["className", "x4Props"],
};
</script>

<style>
.x1 {
  display: flex;
  height: 60px;
  margin-left: 27.5px;
  margin-top: 30px;
  position: relative;
  width: 355px;
}

.x1.x4,
.x1.x2,
.x1.x3,
.x1.x3-1,
.x1.x2-2,
.x1.x2-3,
.x1.x4-1,
.x1.x3-2,
.x1.x4-2,
.x1.x4-3,
.x1.x4-4 {
  margin-top: unset;
}

.x1.x2-1 {
  cursor: pointer;
  margin-top: unset;
}
</style>
