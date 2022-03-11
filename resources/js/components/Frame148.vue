<template>
  <div :class="[`frame-14-25 border-2px-botticelli`, className || ``]">
    <div class="text-107-2 myriadgeo-bold-st-tropaz-18px">{{ text1076 }}</div>
    <div class="date-svgrepo-com-1-10">
      <div class="group-22989-12"><div class="text-107-3 myriadgeo-medium-gothic-14px">შეიყვანე მისამართი</div></div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Frame148",
  props: ["text1076", "className"],
};
</script>

<style>
.frame-14-25 {
  align-items: center;
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  justify-content: flex-end;
  min-width: 412px;
  padding: 0 15px;
}

.text-107-2 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 121px;
}

.date-svgrepo-com-1-10 {
  background-color: var(--swans-down);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 32px;
  overflow: hidden;
  width: 219px;
}

.group-22989-12 {
  display: flex;
  margin-left: 15px;
  margin-top: 12px;
  width: 136px;
}

.text-107-3 {
  height: 14px;
  letter-spacing: 0;
  width: 134px;
}

.frame-14-25.frame-15-20 {
  margin-left: 10px;
}
</style>
