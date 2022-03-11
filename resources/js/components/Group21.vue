<template>
  <div class="group-2-26">
    <div class="overlap-group-46 border-2px-mystic">
      <div class="ellipse-5-1"></div>
      <div class="number-6 myriadgeo-bold-white-36px">{{ number }}</div>
    </div>
    <div class="text-13-5 myriadgeo-medium-heavy-metal-24px">
      დააზუსტე შენი ამანათის მონაცემები და მოძებნე სასურველი მარშუტი
    </div>
  </div>
</template>

<script>
export default {
  name: "Group21",
  props: ["number"],
};
</script>

<style>
.group-2-26 {
  align-items: center;
  display: flex;
  margin-top: 40px;
  min-width: 681px;
}

.overlap-group-46 {
  border-radius: 65px;
  height: 130px;
  position: relative;
  width: 130px;
}

.ellipse-5-1 {
  background-color: var(--scooter);
  border-radius: 50px;
  height: 100px;
  left: 13px;
  position: absolute;
  top: 13px;
  width: 100px;
}

.number-6 {
  left: 43px;
  letter-spacing: 0;
  position: absolute;
  text-shadow: 0px 2px 0px #000000bf;
  top: 47px;
}

.text-13-5 {
  letter-spacing: 0;
  line-height: 34px;
  margin-left: 50px;
  margin-top: 4px;
  min-height: 68px;
  width: 497px;
}
</style>
