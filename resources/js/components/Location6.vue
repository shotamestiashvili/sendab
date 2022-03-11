<template>
  <div :class="[`location-71 border-1px-botticelli`, className || ``]">
    <div class="frame-10-9">
      <div class="text-1273 myriadgeo-bold-st-tropaz-16px">{{ text1273 }}</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Location6",
  props: ["text1273", "className"],
};
</script>

<style>
.location-71 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 8px;
  margin-top: -1px;
  width: 119px;
}

.frame-10-9 {
  display: flex;
  margin-left: 13px;
  margin-top: 10px;
  width: 91px;
}

.text-1273 {
  height: 16px;
  letter-spacing: 0;
  width: 91px;
}

.location-71.location-72 {
  width: 121px;
}

.location-71.location-72 .frame-10-9,
.location-71.location-72 .text-1273 {
  width: 93px;
}
</style>
