<template>

  <div class="container-center-horizontal">
    <div class="result-confirmation screen">
      <div class="overlap-group8-3">
          <rectangle24 :className="rectangle241Props.className" />
          <rectangle24 :className="rectangle242Props.className" />
        <div class="group-container-42">
<!--          <group78 v-bind="group78Props" />-->
          <div class="group-22967">

            <div @click="classChanger"  :class="[changer ? activly : passively]" class="group-22965">
                  <div class="group-22964">
                <img class="delivery-man" :src="deliveryManCourierSvgrepoCom1" />
                <div class="text-1092 myriadgeo-bold-st-tropaz-18px">{{ text1092 }}</div>
              </div>

            </div>
            <div @click="classChanger"  :class="[!changer ? activly : passively]" class="group-22966">

                <div class="group-22964-1">
                <img class="delivery-man" :src="deliveryManSvgrepoCom1" />
                <div class="text-1093 myriadgeo-bold-st-tropaz-18px">{{ text1093 }}</div>
              </div>

          </div>
          </div>
        </div>


<!--          <div class="group-22965 border-3px-cyan&#45;&#45;aqua">-->
<!--              <div class="group-22964">-->
<!--                  <img class="delivery-man" :src="deliveryManCourierSvgrepoCom1" />-->
<!--                  <div class="text-1092 myriadgeo-bold-st-tropaz-18px">{{ text1092 }}</div>-->
<!--              </div>-->
<!--          </div>-->
<!--        <rectangle24 :className="rectangle241Props.className" />-->

<!--        <rectangle24 :className="rectangle242Props.className" />-->

        <div class="overlap-group4-25 border-2px-st-tropaz">
          <div class="text-1066 myriadgeo-bold-st-tropaz-16px">
              <button @click.prevent="routingOffer">
                  შესთავაზე შენი პირობები
              </button></div>
        </div>


        <div class="group-23007">

          <div class="text-1067 myriadgeo-medium-black-16px">მიტანის სავარაუდო ფასი</div>
          <div class="text-1068 myriadgeo-bold-green-36px">
            <span class="myriadgeo-bold-green-36px">543
            </span>
<!--              <span class="myriadgeo-medium-green-16px">ლ</span>-->
          </div>
        </div>


        <div class="group-23014">
          <div class="text-1069 myriadgeo-medium-black-18px">
              აირჩიე შესაძლებელი ქალაქები სადაც შეუძლია თქვენი ამანათის მიღება
          </div>
          <div class="frame-16-35">
              <template>
                  <div class="frame-14-20 border-2px-botticelli"><div class="text-701 myriadgeo-bold-st-tropaz-18px">თბილისი</div></div>
              </template>
<!--            <frame146 />-->
<!--            <frame153 />-->
<!--            <frame144 :address="frame144Props.address" :className="frame144Props.className" />-->
<!--            <frame145 :address="frame145Props.address" :className="frame145Props.className" />-->
<!--            <frame153 />-->
          </div>
          <div class="rectangle-190-21"></div>
        </div>
        <div class="group-23015">
          <div class="text-1075 myriadgeo-medium-black-18px">
              შეიყვანე ზუსტი მისამართი სადაც გინდათ როm მოვიდეს

          </div>
          <div class="frame-16-36">
              <template>
                  <div :class="[`frame-14-25 border-2px-botticelli`]">
                      <div class="text-107-2 myriadgeo-bold-st-tropaz-18px">მისამართი #1</div>
                      <div class="date-svgrepo-com-1-10">
                          <div class="group-22989-12"><div class="text-107-3 myriadgeo-medium-gothic-14px">
                              <input placeholder="შეიყვანე მისამართი">
                          </div>
                          </div>
                      </div>
                  </div>
                  &nbsp
              </template>
<!--            <frame148 :text1076="frame1481Props.text1076" />-->
<!--            <frame148 :text1076="frame1482Props.text1076" :className="frame1482Props.className" />-->

              <template>
                  <div :class="[`frame-14-25 border-2px-botticelli`]">
                      <div class="text-107-2 myriadgeo-bold-st-tropaz-18px">მისამართი #2</div>
                      <div class="date-svgrepo-com-1-10">
                          <div class="group-22989-12"><div class="text-107-3 myriadgeo-medium-gothic-14px">
                              <input placeholder="შეიყვანე მისამართი">
                          </div></div>
                      </div>
                  </div>
                  &nbsp
              </template>

          </div>
          <div class="rectangle-190-21"></div>
        </div>

        <div class="group-23013">
          <group79 />

          <div class="text-1080 myriadgeo-bold-black-24px">{{ text1080 }}</div>
        </div>




        <div class="overlap-group5-23">
          <div class="text-1081 myriadgeo-bold-white-18px">
              <button type="button" @click.prevent="routingNext">
                  სად აგზავნი ამანათს
              </button>
          </div>
          <img class="x227601_right_arrow_icon-1-19" :src="x227601_Right_Arrow_Icon1" />
        </div>


        <div class="group-25-29">
          <router-link to="/home-v2-0"><img class="logo-34" :src="logo" /></router-link><group22 />
          <group53 />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-35">
              <div class="overlap-group1-54">
                <img class="package-svgrepo-com-1-37" :src="packageSvgrepoCom1" />
                <div class="text-1086 myriadgeo-bold-white-16px">{{ text1086 }}</div>
              </div>
            </div>
          </a
          >

            <a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-40">
              <div class="overlap-group-166 border-1px-botticelli-2">
                <img class="ellipse-10-31" :src="ellipse10" />
                <div class="text-1085 myriadgeo-bold-st-tropaz-16px">{{ text1085 }}</div>
                <img class="x211688_forward_arrow_icon-1-92" :src="x211688_Forward_Arrow_Icon1" />
              </div></div
          ></a>
        </div>
        <div class="rectangle-29-7"></div>
        <rectangle24 :className="rectangle243Props.className" />
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
import Frame146 from "./Frame146";
import Frame153 from "./Frame153";
import Frame144 from "./Frame144";
import Frame145 from "./Frame145";
import Frame148 from "./Frame148";
import Group79 from "./Group79";
import Group22 from "./Group22";
import Group53 from "./Group53";
import Group57 from "./Group57";
export default {
  name: "ResultConfirmation2",
  components: {
    Group78,
    Rectangle24,
    Frame146,
    Frame153,
    Frame144,
    Frame145,
    Frame148,
    Group79,
    Group22,
    Group53,
    Group57,
  },
  props: [
    "deliveryManCourierSvgrepoCom1",
    "text1092",
    "deliveryManSvgrepoCom1",
    "text1093",
    "text1066",
    "text1067",
    "spanText1",
    "spanText2",
    "text1069",
    "text1075",
    "text1080",
    "text1081",
    "x227601_Right_Arrow_Icon1",
    "logo",
    "packageSvgrepoCom1",
    "text1086",
    "ellipse10",
    "text1085",
    "x211688_Forward_Arrow_Icon1",
    "group78Props",
    "rectangle241Props",
    "rectangle242Props",
    "frame144Props",
    "frame145Props",
    "frame1481Props",
    "frame1482Props",
    "rectangle243Props",
    "group57Props",
  ],
    data (){
      return {
          activly: 'border-3px-cyan--aqua',
          passively: 'border-1px-botticelli',
          changer: false,
      }
    },

    methods: {
      classChanger(){
          this.changer = !this.changer;
      },

        routingNext(){
          this.$router.push('/result-confirmation2');
        }
    }
};
</script>

<style>
.result-confirmation {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1692px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group8-3 {
  height: 1342px;
  position: relative;
  width: 1791px;
}

.group-container-42 {
  height: 943px;
  left: 261px;
  position: absolute;
  top: 269px;
  width: 1059px;
}

.group-22967 {
  display: flex;
  height: 130px;
  left: 0;
  position: absolute;
  top: 0;
  width: 590px;
}

.group-22965 {
  border-radius: 30px;
  display: flex;
  height: 130px;
  width: 300px;
}

.group-22964 {
  align-items: center;
  display: flex;
  margin-left: 42px;
  margin-top: 41px;
  min-width: 219px;
}

.delivery-man {
  height: 48px;
  width: 48px;
}

.text-1092 {
  letter-spacing: 0;
  margin-left: 22px;
  margin-top: 2px;
  min-height: 18px;
  min-width: 147px;
  text-align: center;
}

.group-22966 {
  border-radius: 30px;
  display: flex;
  height: 130px;
  margin-left: 20px;
  width: 270px;
}

.group-22964-1 {
  align-items: center;
  display: flex;
  margin-left: 46px;
  margin-top: 41px;
  min-width: 181px;
}

.text-1093 {
  letter-spacing: 0;
  margin-left: 22px;
  margin-top: 2px;
  min-height: 18px;
  min-width: 109px;
  text-align: center;
}

.overlap-group4-25 {
  align-items: flex-start;
  border-radius: 40px;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  left: 1306px;
  min-width: 235px;
  padding: 16px 20px;
  position: absolute;
  top: 163px;
}

.text-1066 {
  letter-spacing: 0;
  min-height: 16px;
}

.group-23007 {
  display: flex;
  height: 36px;
  left: 1025px;
  position: absolute;
  top: 173px;
  width: 262px;
}

.text-1067 {
  height: 16px;
  letter-spacing: 0;
  margin-top: 8px;
  text-align: right;
  width: 194px;
}

.text-1068 {
  height: 36px;
  letter-spacing: 0;
  margin-left: 10px;
  width: 54px;
}

.group-23014 {
  display: flex;
  flex-direction: column;
  height: 133px;
  left: 255px;
  position: absolute;
  top: 447px;
  width: 1292px;
}

.text-1069 {
  height: 18px;
  letter-spacing: 0;
  width: 616px;
}

.frame-16-35 {
  display: flex;
  height: 63px;
  margin-top: 20px;
  position: relative;
  width: 668px;
}

.rectangle-190-21 {
  background-color: var(--swans-down);
  height: 1px;
  margin-top: 31px;
  width: 1289.86px;
}

.group-23015 {
  display: flex;
  flex-direction: column;
  height: 133px;
  left: 255px;
  position: absolute;
  top: 617px;
  width: 1292px;
}

.text-1075 {
  height: 18px;
  letter-spacing: 0;
  width: 462px;
}

.frame-16-36 {
  display: flex;
  height: 63px;
  margin-top: 20px;
  position: relative;
  width: 834px;
}

.group-23013 {
  display: flex;
  height: 40px;
  left: 262px;
  position: absolute;
  top: 168px;
  width: 568px;
}

.text-1080 {
  height: 24px;
  letter-spacing: 0;
  margin-left: 31px;
  margin-top: 9px;
  width: 495px;
}

.overlap-group5-23 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 60px;
  left: 752px;
  min-width: 320px;
  padding: 0 48px;
  position: absolute;
  top: 791px;
}

.text-1081 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 184px;
}

.x227601_right_arrow_icon-1-19 {
  height: 20px;
  margin-left: 19px;
  width: 20px;
}

.group-25-29 {
  display: flex;
  height: 50px;
  left: 242px;
  position: absolute;
  top: 33px;
  width: 1299px;
}

.logo-34 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-35 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-54 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-37 {
  height: 24px;
  width: 24px;
}

.text-1086 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-40 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-166 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-31 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-1085 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-92 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-7 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 667px;
  position: absolute;
  top: 81px;
  width: 147px;
}

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
