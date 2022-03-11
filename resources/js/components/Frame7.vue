<template>
  <div :class="[`frame-7-2`, className || ``]">
    <div class="number-77 myriadgeo-bold-white-16px">{{ number }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame7",
  props: ["number", "className"],
};
</script>

<style>
.frame-7-2 {
  background-color: var(--st-tropaz);
  border-radius: 13px;
  display: flex;
  height: 36px;
  margin-left: 10px;
  width: 38px;
}

.number-77 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 10px;
  margin-top: 10px;
  width: 18px;
}

.frame-7-2.frame-7-3 {
  background-color: var(--regent-gray);
}
</style>
