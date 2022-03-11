<template>
  <div :class="[`text-13-13-1 myriadgeo-medium-bali-hai-16px`, className || ``]">
    <span class="span-23 myriadgeo-medium-bali-hai-16px">{{ spanText }}</span>
  </div>
</template>

<script>
export default {
  name: "Text1",
  props: ["spanText", "className"],
};
</script>

<style>
.text-13-13-1 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 115px;
}

.text-13-13-1.zip-5,
.text-13-13-1.zip-6 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 217px;
}

.text-13-13-1.text-1354 {
  align-self: center;
  letter-spacing: 0;
  min-height: 16px;
  min-width: 54px;
}

.text-13-13-1.text-135-1 {
  min-width: 38px;
}

.text-13-13-1.text-1351 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 37px;
}

.text-13-13-1.text-1353 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 41px;
}
</style>
