<template>
  <div :class="[`group-54-1`, className || ``]">
    <div class="text-86 myriadgeo-medium-black-24px">{{ text86 }}</div>
    <group37 :text82="group371Props.text82" :className="group371Props.className" />
    <group37 :text82="group372Props.text82" :className="group372Props.className" />
    <group37 :text82="group373Props.text82" :className="group373Props.className" />
    <group37 :text82="group374Props.text82" :className="group374Props.className" />
  </div>
</template>

<script>
import Group37 from "./Group37";
export default {
  name: "Group54",
  components: {
    Group37,
  },
  props: ["text86", "className", "group371Props", "group372Props", "group373Props", "group374Props"],
};
</script>

<style>
.group-54-1 {
  display: flex;
  flex-direction: column;
  height: 388px;
  left: 53px;
  position: absolute;
  top: 151px;
  width: 1186px;
}

.text-86 {
  height: 60px;
  letter-spacing: 0;
  line-height: 60px;
  margin-left: 1px;
  white-space: nowrap;
  width: 180px;
}

.group-54-1.group-55-1 {
  top: 571px;
}

.group-54-1.group-55-1 .text-86 {
  width: 56px;
}
</style>
