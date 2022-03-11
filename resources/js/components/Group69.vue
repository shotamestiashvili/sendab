<template>
  <div :class="[`group-69-7`, className || ``]">
    <img class="plane-svgrepo-com-1-7" :src="planeSvgrepoCom1" />
    <div class="text-3-15 myriadgeo-medium-black-16px">თვითმფრინავი</div>
  </div>
</template>

<script>
export default {
  name: "Group69",
  props: ["planeSvgrepoCom1", "className"],
};
</script>

<style>
.group-69-7 {
  display: flex;
  width: 160px;
}

.plane-svgrepo-com-1-7 {
  height: 33px;
  margin-left: -0.1px;
  margin-top: -0.1px;
  width: 33px;
}

.text-3-15 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 9.1px;
  margin-top: 8px;
  width: 116px;
}

.group-69-7.group-69-6 {
  display: flex;
  margin-left: 64px;
  margin-top: 0.78px;
  width: 160px;
}
</style>
