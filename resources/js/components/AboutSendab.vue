<template>
  <div class="container-center-horizontal">
    <div class="about-sendab screen">
      <div class="overlap-group4">
        <rectangle24 />
        <div class="group-25">
          <img class="group-1-1" :src="group11" /><group2 />
          <div class="group-53 myriadgeo-bold-white-16px">
            <div class="text-1">{{ text1 }}</div>
            <div class="text-2">{{ text2 }}</div>
            <div class="text-3">{{ text3 }}</div>
          </div>
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4">
              <div class="overlap-group1">
                <img class="package-svgrepo-com-1" :src="packageSvgrepoCom1" />
                <div class="text-5 myriadgeo-bold-white-16px">{{ text5 }}</div>
              </div>
            </div></a
          ><router-link to="/onboarding-login">
            <div class="group-3">
              <div class="overlap-group">
                <img class="account" :src="account" />
                <div class="text-4 myriadgeo-bold-white-16px">{{ text4 }}</div>
              </div>
            </div></router-link
          >
        </div>
        <div class="rectangle-205"></div>
        <div class="rectangle-206"></div>
        <img class="play-svgrepo-com-1" :src="playSvgrepoCom1" />
      </div>
      <group57
        :rectangle24Props="group57Props.rectangle24Props"
        :contactInformationsProps="group57Props.contactInformationsProps"
        :group501Props="group57Props.group501Props"
        :group502Props="group57Props.group502Props"
      />
    </div>
  </div>
</template>

<script>
import Rectangle24 from "./Rectangle24";
import Group2 from "./Group2";
import Group57 from "./Group57";
export default {
  name: "AboutSendab",
  components: {
    Rectangle24,
    Group2,
    Group57,
  },
  props: [
    "group11",
    "text1",
    "text2",
    "text3",
    "packageSvgrepoCom1",
    "text5",
    "account",
    "text4",
    "playSvgrepoCom1",
    "group57Props",
  ],
};
</script>

<style>
.about-sendab {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 2902px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group4 {
  height: 847px;
  position: relative;
  width: 1791px;
}

.group-25 {
  display: flex;
  height: 50px;
  left: 252px;
  position: absolute;
  top: 33px;
  width: 1289px;
}

.group-1-1 {
  height: 31px;
  margin-top: 8.9px;
  object-fit: cover;
  width: 138px;
}

.group-53 {
  display: flex;
  margin-left: 120px;
  margin-top: 17px;
  width: 456px;
}

.text-1 {
  height: 16px;
  letter-spacing: 0;
  width: 147px;
}

.text-2 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 30px;
  text-align: center;
  width: 87px;
}

.text-3 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 30px;
  text-align: right;
  width: 156px;
}

.group-4 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1 {
  height: 24px;
  width: 24px;
}

.text-5 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 0 15px;
}

.account {
  height: 30px;
  width: 30px;
}

.text-4 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 107px;
}

.rectangle-205 {
  background-color: #c4c4c4;
  height: 640px;
  left: 901px;
  position: absolute;
  top: 207px;
  width: 640px;
}

.rectangle-206 {
  background-color: var(--white);
  border-radius: 10px;
  height: 100px;
  left: 1210px;
  position: absolute;
  top: 442px;
  width: 100px;
}

.play-svgrepo-com-1 {
  height: 34px;
  left: 1243px;
  position: absolute;
  top: 475px;
  width: 38px;
}
</style>
