<template>
  <div class="frame-1-7"><frame144 :address="frame144Props.address" /></div>
</template>

<script>
import Frame144 from "./Frame144";
export default {
  name: "Frame162",
  components: {
    Frame144,
  },
  props: ["frame144Props"],
};
</script>

<style>
.frame-1-7 {
  display: flex;
  height: 63px;
  margin-left: 10px;
  position: relative;
  width: 115px;
}
</style>
