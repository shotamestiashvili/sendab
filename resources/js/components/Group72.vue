<template>
  <div :class="[`group-72`, className || ``]">
    <div class="overlap-group-96">
      <div class="flex-col-32">
        <group712
          :starSvgrepoCom5="group712Props.starSvgrepoCom5"
          :starSvgrepoCom6="group712Props.starSvgrepoCom6"
          :starSvgrepoCom7="group712Props.starSvgrepoCom7"
          :starSvgrepoCom8="group712Props.starSvgrepoCom8"
          :starSvgrepoCom9="group712Props.starSvgrepoCom9"
        />
        <frame4 :className="frame4Props.className" />
        <div class="group-container-15">
          <group69 :planeSvgrepoCom1="group69Props.planeSvgrepoCom1" />
          <group70 :packageSvgrepoCom11="group70Props.packageSvgrepoCom11" :text371="group70Props.text371" />
        </div>
      </div>
      <div class="text-3-14">
        <span class="span-10 myriadgeo-bold-green-36px">14,59</span
        ><span class="span-10 myriadgeo-medium-green-16px"> ₾</span>
      </div>
    </div>
  </div>
</template>

<script>
import Group712 from "./Group712";
import Frame4 from "./Frame4";
import Group69 from "./Group69";
import Group70 from "./Group70";
export default {
  name: "Group72",
  components: {
    Group712,
    Frame4,
    Group69,
    Group70,
  },
  props: ["className", "group712Props", "frame4Props", "group69Props", "group70Props"],
};
</script>

<style>
.group-72 {
  align-items: flex-start;
  display: flex;
  min-width: 852px;
}

.overlap-group-96 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  height: 220px;
  min-width: 850px;
  padding: 24px 29px;
}

.flex-col-32 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 170px;
  position: relative;
  width: 639px;
}

.group-container-15 {
  align-items: center;
  display: flex;
  height: 33px;
  margin-top: 24px;
  min-width: 346px;
  position: relative;
}

.text-3-14 {
  letter-spacing: 0;
  margin-left: 47px;
  margin-top: 9px;
  min-height: 36px;
}

.group-72.group-75,
.group-72.group-75-1,
.group-72.group-75-2,
.group-72.group-75-3,
.group-72.group-75-4 {
  margin-top: 20px;
}
</style>
