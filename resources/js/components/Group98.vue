<template>
  <div :class="[`group-12-1`, className || ``]">
    <div class="text-541 myriadgeo-medium-black-16px">{{ text541 }}</div>
    <div class="group-5-17">
      <div class="overlap-group-128 border-1px-link-water">
        <div class="text-542 myriadgeo-medium-bali-hai-16px">{{ text542 }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group98",
  props: ["text541", "text542", "className"],
};
</script>

<style>
.group-12-1 {
  display: flex;
  flex-direction: column;
  height: 74px;
  width: 300px;
}

.text-541 {
  height: 16px;
  letter-spacing: 0;
  width: 58px;
}

.group-5-17 {
  align-items: flex-start;
  display: flex;
  margin-top: 18px;
  min-width: 300px;
}

.overlap-group-128 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  min-width: 298px;
  padding: 11px 18px;
}

.text-542 {
  letter-spacing: 0;
  min-height: 16px;
}

.group-12-1.group-15,
.group-12-1.group-15-1 {
  margin-left: 30px;
}

.group-12-1.group-15-1 .text-541 {
  width: 45px;
}

.group-12-1.group-12 .text-541 {
  width: 83px;
}

.group-12-1.group-15 .text-541 {
  width: 156px;
}
</style>
