<template>
  <div :class="[`frame-16-21 border-2px-botticelli`, className || ``]">
    <div class="text-124 myriadgeo-bold-st-tropaz-30px">+</div>
  </div>
</template>

<script>
export default {
  name: "Frame16",
  props: ["className"],
};
</script>

<style>
.frame-16-21 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 30px;
  width: 68px;
}

.text-124 {
  height: 30px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 16.5px;
  width: 18px;
}

.frame-16-21.frame-19-4 {
  margin-left: 10px;
}
</style>
