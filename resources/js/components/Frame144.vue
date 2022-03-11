<template>
  <div :class="[`frame-14-16 border-2px-botticelli`, className || ``]">
    <div class="address myriadgeo-bold-st-tropaz-18px">{{ address }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame144",
  props: ["address", "className"],
};
</script>

<style>
.frame-14-16 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 115px;
}

.address {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 65px;
}

.frame-14-16.frame-16-27,
.frame-14-16.frame-16-28 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 115px;
}
</style>
