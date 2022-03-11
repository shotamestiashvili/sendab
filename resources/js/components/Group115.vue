<template>
  <div :class="[`group-115-1`, className || ``]">
    <img class="x-svgrepo-com-1" :src="lockSvgrepoCom1" />
    <div class="text-465 myriadgeo-bold-black-24px">{{ text465 }}</div>
  </div>
</template>

<script>
export default {
  name: "Group115",
  props: ["lockSvgrepoCom1", "text465", "className"],
};
</script>

<style>
.group-115-1 {
  display: flex;
  width: 321px;
}

.x-svgrepo-com-1 {
  height: 30px;
  width: 30px;
}

.text-465 {
  height: 24px;
  letter-spacing: 0;
  margin-left: 10px;
  margin-top: 3px;
  width: 279px;
}

.group-115-1.group-116-1 {
  align-items: center;
  align-self: flex-start;
  margin-left: 109px;
  margin-top: 70px;
  min-width: 319px;
  width: unset;
}

.group-115-1.group-116-1 .text-465 {
  height: unset;
  margin-top: unset;
  min-height: 24px;
  min-width: 277px;
  width: unset;
}
</style>
