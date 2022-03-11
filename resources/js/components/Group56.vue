<template>
  <div :class="[`group-56`, className || ``]">
    <div class="text-93 myriadgeo-medium-black-24px">შეფუთვა და ეტიკეტირება</div>
    <group37 :text82="group371Props.text82" :className="group371Props.className" />
    <group37 :text82="group372Props.text82" :className="group372Props.className" />
  </div>
</template>

<script>
import Group37 from "./Group37";
export default {
  name: "Group56",
  components: {
    Group37,
  },
  props: ["className", "group371Props", "group372Props"],
};
</script>

<style>
.group-56 {
  display: flex;
  flex-direction: column;
  height: 228px;
  left: 53px;
  position: absolute;
  top: 991px;
  width: 1186px;
}

.text-93 {
  height: 60px;
  letter-spacing: 0;
  line-height: 60px;
  margin-left: 1px;
  white-space: nowrap;
  width: 291px;
}

.group-56.group-56-1 {
  top: 1441px;
}
</style>
