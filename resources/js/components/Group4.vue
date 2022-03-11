<template>
  <div class="group-4-7">
    <div class="overlap-group1-17">
      <img class="package-svgrepo-com-1-9" :src="packageSvgrepoCom1" />
      <div class="text-281 myriadgeo-bold-white-16px">ამანათი</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group4",
  props: ["packageSvgrepoCom1"],
};
</script>

<style>
.group-4-7,
.group-4-8,
.group-4-9 {
  align-items: flex-start;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-17,
.overlap-group1-18,
.overlap-group1-19 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-9,
.package-svgrepo-com-1-10,
.package-svgrepo-com-1-11 {
  height: 24px;
  width: 24px;
}

.text-281,
.text-557,
.text-996 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}
</style>
