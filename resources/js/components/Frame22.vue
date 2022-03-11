<template>
  <div :class="[`frame-22-1-1`, className || ``]">
    <div class="frame-15-16 border-2px-botticelli">
      <div class="text-2-7 myriadgeo-bold-st-tropaz-18px">მიუთითე ფასი</div>
      <div class="date-svgrepo-com-1-6">
        <div class="group-22989-10"><div class="text-2-8 myriadgeo-medium-gothic-14px">შეიყვანე თანხა</div></div>
      </div>
    </div>
    <frame162 :frame144Props="frame1621Props.frame144Props" />
    <frame162 :frame144Props="frame1622Props.frame144Props" />
    <div class="frame-18-1"><frame145 :address="frame145Props.address" /></div>
  </div>
</template>

<script>
import Frame162 from "./Frame162";
import Frame145 from "./Frame145";
export default {
  name: "Frame22",
  components: {
    Frame162,
    Frame145,
  },
  props: ["className", "frame1621Props", "frame1622Props", "frame145Props"],
};
</script>

<style>
.frame-22-1-1 {
  display: flex;
  margin-top: 20px;
  position: relative;
  width: 743px;
}

.frame-15-16 {
  align-items: center;
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  justify-content: flex-end;
  min-width: 358px;
  padding: 0 15px;
}

.text-2-7 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 127px;
}

.date-svgrepo-com-1-6 {
  background-color: var(--swans-down);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 32px;
  overflow: hidden;
  width: 159px;
}

.group-22989-10 {
  display: flex;
  margin-left: 15px;
  margin-top: 12px;
  width: 104px;
}

.text-2-8 {
  height: 14px;
  letter-spacing: 0;
  width: 102px;
}

.frame-18-1 {
  display: flex;
  height: 63px;
  margin-left: 10px;
  position: relative;
  width: 125px;
}
</style>
