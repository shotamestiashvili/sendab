<template>
  <div :class="[`group-33`, className || ``]">
    <div class="number-35 myriadgeo-medium-loblolly-16px">15</div>
    <div class="number-33 myriadgeo-medium-loblolly-16px">16</div>
    <div class="overlap-group-106"><div class="number-36 myriadgeo-bold-white-16px">17</div></div>
    <div class="number-37 myriadgeo-medium-st-tropaz-16px">18</div>
    <div class="number-33 myriadgeo-medium-st-tropaz-16px">19</div>
    <div class="number-38 myriadgeo-medium-st-tropaz-16px">20</div>
    <div class="number-39 myriadgeo-medium-st-tropaz-16px">21</div>
  </div>
</template>

<script>
export default {
  name: "Group33",
  props: ["className"],
};
</script>

<style>
.group-33 {
  align-items: center;
  display: flex;
  margin-left: 8px;
  margin-top: 10px;
  min-width: 302px;
}

.number-35 {
  letter-spacing: 0;
  margin-top: 2px;
  min-height: 16px;
  min-width: 17px;
  text-align: center;
}

.number-33 {
  letter-spacing: 0;
  margin-left: 29px;
  margin-top: 2px;
  min-height: 16px;
  min-width: 17px;
  text-align: center;
}

.overlap-group-106 {
  align-items: flex-end;
  background-color: var(--cyan--aqua);
  border-radius: 20px;
  display: flex;
  height: 40px;
  margin-left: 17px;
  min-width: 40px;
  padding: 11px;
}

.number-36 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 18px;
  text-align: center;
}

.number-37 {
  letter-spacing: 0;
  margin-left: 20px;
  margin-top: 2px;
  min-height: 16px;
  min-width: 17px;
  text-align: center;
}

.number-38 {
  letter-spacing: 0;
  margin-left: 26px;
  margin-top: 2px;
  min-height: 16px;
  min-width: 17px;
  text-align: center;
}

.number-39 {
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 2px;
  min-height: 16px;
  min-width: 17px;
  text-align: center;
}

.group-33.group-33-1 {
  align-self: flex-end;
  margin-left: unset;
  margin-right: 4px;
}
</style>
