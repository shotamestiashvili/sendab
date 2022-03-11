<template>
  <div :class="[`date-svgrepo-com-1-8`, className || ``]">
    <img
      class="vector-2"
      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/vector-3@2x.png"
    />
    <div class="text-81-1 myriadgeo-bold-cyan--aqua-16px">27.02.2021&nbsp;&nbsp; 18:30</div>
  </div>
</template>

<script>
export default {
  name: "DateSvgrepoCom13",
  props: ["className"],
};
</script>

<style>
.date-svgrepo-com-1-8 {
  align-items: center;
  display: flex;
  height: 24.11px;
  margin-left: 20px;
  margin-top: 20px;
  padding: 0 1px;
  width: 162.5px;
}

.vector-2 {
  height: 20px;
  width: 22px;
}

.text-81-1 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 129px;
}

.date-svgrepo-com-1-8.date-svgrepo-com-1-9 {
  margin-left: 10px;
  padding: 0 0.7px;
}
</style>
