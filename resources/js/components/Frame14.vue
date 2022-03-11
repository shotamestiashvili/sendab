<template>
  <div :class="[`frame-14-3 border-2px-botticelli`, className || ``]">
    <div class="text-3-1 myriadgeo-bold-st-tropaz-18px">{{ text33 }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame14",
  props: ["text33", "className"],
};
</script>

<style>
.frame-14-3 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 80px;
}

.text-3-1 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 30px;
}

.frame-14-3.frame-1,
.frame-14-3.frame-1-3,
.frame-14-3.frame-1-1,
.frame-14-3.frame-1-1-1,
.frame-14-3.frame-1-2,
.frame-14-3.frame-1-2-1 {
  margin-left: 10px;
}
</style>
