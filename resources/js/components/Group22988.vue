<template>
  <div class="group-22988">
    <div class="text-32 myriadgeo-medium-black-18px">მონიშნე, დაახლოებით რამდენი კილოს წაღება შეგიძლია</div>
    <div class="frame-16-9">
      <frame14 :text33="frame141Props.text33" />
      <frame14 :text33="frame142Props.text33" :className="frame142Props.className" />
      <frame14 :text33="frame143Props.text33" :className="frame143Props.className" />
      <frame17 :text36="frame171Props.text36" />
      <frame17 :text36="frame172Props.text36" />
      <div class="frame-19 border-2px-botticelli"><div class="text-38 myriadgeo-bold-st-tropaz-18px">20კგ +</div></div>
    </div>
    <div class="rectangle-190-4"></div>
  </div>
</template>

<script>
import Frame14 from "./Frame14";
import Frame17 from "./Frame17";
export default {
  name: "Group22988",
  components: {
    Frame14,
    Frame17,
  },
  props: ["frame141Props", "frame142Props", "frame143Props", "frame171Props", "frame172Props"],
};
</script>

<style>
.group-22988,
.group-22988-1,
.group-22988-2 {
  display: flex;
  flex-direction: column;
  height: 129px;
  margin-left: 2.86px;
  margin-top: 40px;
  width: 1292px;
}

.text-32,
.text-628,
.text-690 {
  height: 18px;
  letter-spacing: 0;
  width: 485px;
}

.frame-16-9,
.frame-16-10,
.frame-16-11 {
  display: flex;
  margin-top: 20px;
  position: relative;
  width: 575px;
}

.frame-19,
.frame-19-1,
.frame-19-2 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 105px;
}

.text-38,
.text-634,
.text-696 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 55px;
}

.rectangle-190-4,
.rectangle-190-5,
.rectangle-190-6 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 27px;
  width: 1289.86px;
}
</style>
