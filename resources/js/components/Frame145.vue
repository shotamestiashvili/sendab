<template>
  <div :class="[`frame-14-17 border-2px-botticelli`, className || ``]">
    <div class="address-1 myriadgeo-bold-st-tropaz-18px">{{ address }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame145",
  props: ["address", "className"],
};
</script>

<style>
.frame-14-17 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 125px;
}

.address-1 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 75px;
}

.frame-14-17.frame-17-7,
.frame-14-17.frame-17-8 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 125px;
}
</style>
