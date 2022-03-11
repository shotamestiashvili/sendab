<template>
  <div :class="[`group-70`, className || ``]">
    <img class="package-svgrepo-com-1-1-1" :src="packageSvgrepoCom11" />
    <div class="text-3-16 myriadgeo-medium-black-16px"> {{ text371 }} </div>
  </div>
</template>

<script>
export default {
  name: "Group70",
  props: ["packageSvgrepoCom11", "text371", "className"],
};
</script>

<style>
.group-70 {
  display: flex;
  margin-bottom: 0.78px;
  margin-left: 35px;
  width: 151px;
}

.package-svgrepo-com-1-1-1 {
  height: 24px;
  width: 24px;
}

.text-3-16 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 4px;
  width: 112px;
}

.group-70.group-70-6 {
  display: flex;
  margin-left: 38px;
  width: 151px;
}
</style>
