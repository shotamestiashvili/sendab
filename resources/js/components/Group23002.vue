<template>
  <div :class="[`group-23002`, className || ``]">
    <div class="text-518 myriadgeo-bold-black-18px">{{ text518 }}</div>
    <div class="frame-17-9">
      <frame143 />
      <frame142 :text40="frame142Props.text40" :className="frame142Props.className" />
    </div>
  </div>
</template>

<script>
import Frame143 from "./Frame143";
import Frame142 from "./Frame142";
export default {
  name: "Group23002",
  components: {
    Frame143,
    Frame142,
  },
  props: ["text518", "className", "frame142Props"],
};
</script>

<style>
.group-23002 {
  display: flex;
  flex-direction: column;
  height: 94px;
  margin-left: 25px;
  margin-top: 27px;
  width: 592px;
}

.text-518 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 5px;
  width: 82px;
}

.frame-17-9 {
  display: flex;
  height: 63px;
  margin-top: 13px;
  position: relative;
  width: 590px;
}

.group-23002.group-23003 {
  margin-top: 46px;
}

.group-23002.group-23003 .text-518 {
  width: 78px;
}

.group-23002.group-23004 {
  margin-top: 36px;
}

.group-23002.group-23004 .text-518 {
  width: 75px;
}
</style>
