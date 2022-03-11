<template>
  <div :class="[`frame-14-22 border-2px-botticelli`, className || ``]">
    <div class="text-70-2 myriadgeo-bold-st-tropaz-18px">{{ text708 }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame147",
  props: ["text708", "className"],
};
</script>

<style>
.frame-14-22 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 121px;
}

.text-70-2 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 71px;
}

.frame-14-22.frame-15-18 {
  margin-left: 10px;
}
</style>
