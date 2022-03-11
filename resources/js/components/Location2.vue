<template>
  <div :class="[`location-12-1 border-1px-botticelli`, className || ``]">
    <div class="text-1-5 myriadgeo-bold-st-tropaz-16px">ქუთაისი</div>
  </div>
</template>

<script>
export default {
  name: "Location2",
  props: ["className"],
};
</script>

<style>
.location-12-1 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  width: 95px;
}

.text-1-5 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 67px;
}

.location-12-1.location-15,
.location-12-1.location-17,
.location-12-1.location-19,
.location-12-1.location-21,
.location-12-1.location-23,
.location-12-1.location-25 {
  margin-left: -1px;
}
</style>
