<template>
  <div :class="[`group-31 myriadgeo-medium-loblolly-16px`, className || ``]">
    <div class="number-11">1</div>
    <div class="number-9">2</div>
    <div class="number-9">3</div>
    <div class="number-12">4</div>
    <div class="number-9">5</div>
    <div class="number-13">6</div>
    <div class="number-14">7</div>
  </div>
</template>

<script>
export default {
  name: "Group31",
  props: ["className"],
};
</script>

<style>
.group-31 {
  display: flex;
  margin-left: 8px;
  margin-top: 25px;
  width: 294px;
}

.number-11 {
  height: 16px;
  letter-spacing: 0;
  text-align: center;
  width: 9px;
}

.number-9 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 37px;
  text-align: center;
  width: 9px;
}

.number-12 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 39px;
  text-align: center;
  width: 9px;
}

.number-13 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 34px;
  text-align: center;
  width: 9px;
}

.number-14 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 33px;
  text-align: center;
  width: 9px;
}

.group-31.group-31-1 {
  margin-left: 16px;
}
</style>
