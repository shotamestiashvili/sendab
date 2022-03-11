<template>
  <div class="group-2-27">
    <div class="overlap-group-194 border-2px-mystic">
      <div class="ellipse-5-3"></div>
      <div class="number-79 myriadgeo-bold-white-36px">
        <span class="myriadgeo-bold-white-36px">{{ spanText1 }}</span>
      </div>
    </div>
    <div class="text-134-1 myriadgeo-medium-heavy-metal-24px">
      <span class="myriadgeo-medium-heavy-metal-24px">{{ spanText2 }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group213",
  props: ["spanText1", "spanText2"],
};
</script>

<style>
.group-2-27 {
  align-items: center;
  display: flex;
  margin-top: 40px;
  min-width: 681px;
}

.overlap-group-194 {
  border-radius: 65px;
  height: 130px;
  position: relative;
  width: 130px;
}

.ellipse-5-3 {
  background-color: var(--scooter);
  border-radius: 50px;
  height: 100px;
  left: 13px;
  position: absolute;
  top: 13px;
  width: 100px;
}

.number-79 {
  left: 43px;
  letter-spacing: 0;
  position: absolute;
  text-shadow: 0px 2px 0px #000000bf;
  top: 47px;
}

.text-134-1 {
  letter-spacing: 0;
  line-height: 34px;
  margin-left: 50px;
  margin-top: 4px;
  min-height: 68px;
  width: 497px;
}
</style>
