<template>
  <div :class="[`group-50-2`, className || ``]">
    <div class="rectangle-17-121"></div>
    <div class="text-1399 myriadgeo-medium-waterloo--18px">
      <span class="span-30 myriadgeo-medium-waterloo--18px">{{ children }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group503",
  props: ["children", "className"],
};
</script>

<style>
.group-50-2 {
  align-items: center;
  display: flex;
  height: 20px;
  left: 396px;
  min-width: 177px;
  position: absolute;
  top: 2491px;
}

.rectangle-17-121 {
  background-color: var(--cyan--aqua);
  border-radius: 20px;
  height: 5px;
  margin-bottom: 1px;
  width: 5px;
}

.text-1399 {
  letter-spacing: 0;
  line-height: 108.9px;
  margin-left: 11px;
  min-height: 20px;
  min-width: 159px;
  white-space: nowrap;
}

.group-50-2.group-52-39 {
  left: 732px;
  min-width: 175px;
}

.group-50-2.group-52-39 .text-1399 {
  min-width: 157px;
}
</style>
