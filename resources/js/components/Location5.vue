<template>
  <div :class="[`location-52 border-1px-botticelli`, className || ``]">
    <div class="text-381 myriadgeo-bold-cinnabar-16px">{{ text381 }}</div>
  </div>
</template>

<script>
export default {
  name: "Location5",
  props: ["text381", "className"],
};
</script>

<style>
.location-52 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  width: 91px;
}

.text-381 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 63px;
}

.location-52.location-53,
.location-52.location-55,
.location-52.location-57,
.location-52.location-59,
.location-52.location-61,
.location-52.location-63 {
  width: 93px;
}

.location-52.location-53 .text-381,
.location-52.location-55 .text-381,
.location-52.location-57 .text-381,
.location-52.location-59 .text-381,
.location-52.location-61 .text-381,
.location-52.location-63 .text-381 {
  width: 65px;
}
</style>
