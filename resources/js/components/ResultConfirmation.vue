<template>
  <div class="container-center-horizontal">
    <div class="result-confirmation-3 screen">
      <div class="overlap-group7-7">
<!--        <group78 v-bind="group78Props" />-->
        <rectangle24 :className="rectangle241Props.className" />
        <rectangle24 :className="rectangle242Props.className" />
        <div class="overlap-group4-8">
          <div class="text-395 myriadgeo-bold-white-18px">
              <button type="button" @click.prevent="routingNext">
                  ჩემი შეკვეთები
              </button>
          </div>
        </div>
        <div class="group-25-7">
          <router-link to="/home-v2-0"><img class="logo-9" :src="logo" /></router-link><group22 />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-12">
              <div class="overlap-group1-24">
                <img class="package-svgrepo-com-1-16" :src="packageSvgrepoCom1" />
                <div class="text-400 myriadgeo-bold-white-16px">{{ text400 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-15">
              <div class="overlap-group-90 border-1px-botticelli-2">
                <img class="ellipse-10-7" :src="ellipse10" />
                <div class="text-399 myriadgeo-bold-st-tropaz-16px">{{ text399 }}</div>
                <img class="x211688_forward_arrow_icon-1-45" :src="x211688_Forward_Arrow_Icon1" />
              </div></div
          ></a>
        </div>
        <div class="rectangle-29-3"></div>
        <rectangle24 :className="rectangle243Props.className" />
        <div class="text-406 myriadgeo-bold-black-36px">{{ text406 }}</div>
        <div class="overlap-group6-12">
          <div class="group-91">
            <router-link to="/messenger-1">
              <div class="group-89"><group882 /></div></router-link
            ><a href="javascript:ShowOverlay('frame-13', 'animate-appear');">
              <div class="group-90-1"><group88 :src="group88Props.src" /></div
            ></a>
          </div>
          <div class="rectangle-177-1 border-1px-botticelli"></div>
          <div class="date-svgrepo-com-1-7">
              <template>
                  <div :class="[`group-22989-8-1`,]">
                      <img
                          class="vector"
                          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/vector@2x.png"
                      />
                      <div class="text-12-1 myriadgeo-bold-st-tropaz-16px">27.02.2021&nbsp;&nbsp; 18:30</div>
                  </div>
              </template>
          </div>
<!--          <group712-->
<!--            :starSvgrepoCom5="group712Props.starSvgrepoCom5"-->
<!--            :starSvgrepoCom6="group712Props.starSvgrepoCom6"-->
<!--            :starSvgrepoCom7="group712Props.starSvgrepoCom7"-->
<!--            :starSvgrepoCom8="group712Props.starSvgrepoCom8"-->
<!--            :starSvgrepoCom9="group712Props.starSvgrepoCom9"-->
<!--            :className="group712Props.className"-->
<!--          />-->
          <div class="text-409 myriadgeo-bold-green-36px">
            <span class="myriadgeo-bold-green-36px">434 </span
            ><span class="myriadgeo-medium-green-16px">ლ</span>
          </div>
          <div class="rectangle-178"></div>
        </div>
      </div>
      <group57
        :className="group57Props.className"
        :rectangle24Props="group57Props.rectangle24Props"
        :contactInformationsProps="group57Props.contactInformationsProps"
        :group501Props="group57Props.group501Props"
        :group502Props="group57Props.group502Props"
      />
    </div>
  </div>
</template>

<script>
import Group78 from "./Group78";
import Rectangle24 from "./Rectangle24";
import Group22 from "./Group22";
import Group53 from "./Group53";
import Group882 from "./Group882";
import Group88 from "./Group88";
import Group229892 from "./Group229892";
import Group712 from "./Group712";
import Group57 from "./Group57";
export default {
  name: "ResultConfirmation",
  components: {
    Group78,
    Rectangle24,
    Group22,
    Group53,
    Group882,
    Group88,
    Group229892,
    Group712,
    Group57,
  },
  props: [
    "text395",
    "logo",
    "packageSvgrepoCom1",
    "text400",
    "ellipse10",
    "text399",
    "x211688_Forward_Arrow_Icon1",
    "text406",
    "spanText1",
    "spanText2",
    "group78Props",
    "rectangle241Props",
    "rectangle242Props",
    "rectangle243Props",
    "group88Props",
    "group229892Props",
    "group712Props",
    "group57Props",
  ],

    data(){

    },

    methods:{
      routingNext(){
          this.$router.push('/my-profile-my-orders-1')
      }
    }
};
</script>

<style>
.result-confirmation-3 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1692px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group7-7 {
  height: 1342px;
  position: relative;
  width: 1791px;
}

.overlap-group4-8 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 60px;
  left: 771px;
  min-width: 250px;
  padding: 0 56px;
  position: absolute;
  top: 583px;
}

.text-395 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 138px;
}

.group-25-7 {
  display: flex;
  height: 50px;
  left: 242px;
  position: absolute;
  top: 33px;
  width: 1299px;
}

.logo-9 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-12 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-24 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-16 {
  height: 24px;
  width: 24px;
}

.text-400 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-15 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-90 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-7 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-399 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-45 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-3 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 667px;
  position: absolute;
  top: 81px;
  width: 147px;
}

.text-406 {
  left: 587px;
  letter-spacing: 0;
  line-height: 46px;
  position: absolute;
  text-align: center;
  top: 177px;
  width: 618px;
}

.overlap-group6-12 {
  border-radius: 30px;
  height: 190px;
  left: 626px;
  position: absolute;
  top: 331px;
  width: 540px;
}

.group-91 {
  align-items: flex-start;
  display: flex;
  height: 60px;
  left: 382px;
  min-width: 130px;
  position: absolute;
  top: 21px;
}

.group-89 {
  cursor: pointer;
  display: flex;
  height: 60px;
  position: relative;
  width: 60px;
}

.group-90-1 {
  cursor: pointer;
  display: flex;
  height: 60px;
  margin-left: 10px;
  position: relative;
  width: 60px;
}

.rectangle-177-1 {
  border-radius: 30px;
  height: 190px;
  left: 0;
  position: absolute;
  top: 0;
  width: 540px;
}

.date-svgrepo-com-1-7 {
  align-items: center;
  display: flex;
  height: 24px;
  left: 34px;
  overflow: hidden;
  position: absolute;
  top: 133px;
  width: 162px;
}

.text-409 {
  left: 408px;
  letter-spacing: 0;
  position: absolute;
  top: 129px;
}

.rectangle-178 {
  background-color: var(--botticelli);
  height: 1px;
  left: 0;
  position: absolute;
  top: 102px;
  width: 540px;
}
</style>
