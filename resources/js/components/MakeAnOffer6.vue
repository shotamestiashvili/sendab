<template>
    <v-app>
  <div class="container-center-horizontal">
    <div class="make-an-offer5 screen">
      <div class="group-22983-7">
        <router-link to="/home-v2-0"><img class="logo-33" :src="logo" /></router-link><group22 />
        <group53 />

          <div class="group-4-34">
            <div class="overlap-group1-53">
              <img class="package-svgrepo-com-1-36" :src="packageSvgrepoCom1" />
              <div class="text-1015 myriadgeo-bold-white-16px">{{ text1015 }}</div>
            </div>
          </div>
          <div class="group-3-39">
            <div class="overlap-group-165 border-1px-botticelli-2">
              <img class="ellipse-10-30" :src="ellipse10" />
              <div class="text-1014 myriadgeo-bold-st-tropaz-16px">{{ text1014 }}</div>
              <img class="x211688_forward_arrow_icon-1-91" :src="x211688_Forward_Arrow_Icon1" />
            </div></div
        >
      </div>
      <rectangle24 :className="rectangle24Props.className" />
      <div class="group-container-41">
        <div class="group-22981-7 myriadgeo-bold-st-tropaz-24px">
          <div class="overlap-group-164 border-3px-st-tropaz">
            <div class="number-74">{{ number1 }}</div>
          </div>
          <div class="text-1017">{{ text1017 }}</div>
        </div>
        <div class="group-22984-5 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-164 border-3px-bali-hai">
            <div class="number-73">{{ number2 }}</div>
          </div>
          <div class="text-1018">{{ text1018 }}</div>
        </div>
        <div class="group-22985-7 myriadgeo-bold-bali-hai-24px">
          <div class="overlap-group-164 border-3px-bali-hai">
            <div class="number-73">{{ number3 }}</div>
          </div>
          <div class="text-1019">{{ text1019 }}</div>
        </div>
      </div>
      <div class="overlap-group7-12">
        <div class="rectangle-189-5"></div>
      </div>
      <div class="frame-18-2">
        <div class="group-22989-11">
          <div class="text-1020 myriadgeo-medium-black-18px" style=" height: 20px;width: 240px;"> მიუთითე შენი მარშუტი</div>
          <div class="frame-16-33">
            <div class="group-22988-9">
              <div class="frame-19-5" style="width: 900px;">

                  <div class="frame-14-23 border-2px-botticelli">
                    <div class="text-1021 myriadgeo-bold-st-tropaz-18px">
                        <div style="top: 12px;margin-top: 26px;">
                            <v-select
                                class="text-1021 myriadgeo-bold-st-tropaz-18px "
                                :items="cities"
                                v-model="partner.sourceCity"
                                style="padding-bottom: 0px!important;"
                                dense
                                solo
                                placeholder="ქალაქი"
                            >
                            </v-select>
                        </div>
                    </div>
                      <div>
                          <datepicker
                              placeholder="თარიღი"
                              :inputClass="$style.datepicker"
                              v-model="partner.sourceDate"
                          >
                          </datepicker>
                      </div>
                      <div>
                          <input class="source_time" type="time">
                      </div>
                  </div>

                  <img class="frame-3-1" :src="frame3" />




                  <template>
                      <div class="frame-15-12 border-2px-botticelli">
                          <div class="text-122 myriadgeo-bold-st-tropaz-18px">

                                  <div style="top: 12px;margin-top: 26px;">
                                      <v-select
                                          class="text-1021 myriadgeo-bold-st-tropaz-18px "
                                          :items="cities"
                                          v-model="partner.destinationCity1"
                                          style="padding-bottom: 0px!important;"
                                          dense
                                          solo
                                          placeholder="ქალაქი"
                                      >
                                      </v-select>
                                  </div>
                              </div>
                              <div>
                                  <datepicker
                                      placeholder="თარიღი"
                                      :inputClass="$style.datepicker"
                                      v-model="partner.destinationDate1"
                                  >
                                  </datepicker>
                              </div>
                              <div>
                                  <input class="source_time" type="time">
                              </div>
                          </div>
                  </template>
<!--                  <frame152 />-->
<!--                <frame16 />-->
              </div>
              <div class="rectangle-190-19"></div>
            </div>
          </div>
        </div>


<!--        <group229872 :className="group229872Props.className" />-->

          <template>
              <div :class="[`group-22987-3`]">
                  <div class="text-125 myriadgeo-medium-black-18px" style="width: 200px;">რითი მიდიხარ</div>
                  <div class="frame-16-23">
                      <div class="group-22988-4">
                          <div class="frame-container">
                              <div class="frame-14-13 border-2px-botticelli" @click="classAirplane"  :class="[partner.airplaneChanger ? activly : passively]">
                                  <img
                                      class="plane-svgrepo-com-1-5"
                                      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/plane-svgrepo-com-1-2@2x.png"
                                  />
                                  <div class="text-126 myriadgeo-bold-st-tropaz-18px">თვითმფრინავი</div>
                              </div>
                              <div class="frame-15-14 border-2px-botticelli" @click="classCar"  :class="[partner.carChanger ? activly : passively]">
                                  <img
                                      class="car-svgrepo-com-1-6"
                                      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/car-svgrepo-com-1-2@2x.png"
                                  />
                                  <div class="text-127 myriadgeo-bold-st-tropaz-18px">ავტომობილი</div>
                              </div>
                              <div class="frame-16-24 border-2px-botticelli"  @click="classMinibus"  :class="[partner.minibusChanger ? activly : passively]">
                                  <img
                                      class="truck-svgrepo-com-1-3"
                                      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/truck-svgrepo-com-1-1@2x.png"
                                  />
                                  <div class="text-128 myriadgeo-bold-st-tropaz-18px">ფურგონი</div>
                              </div>
                              <div class="frame-17-5 border-2px-botticelli"  @click="classRailway"  :class="[partner.railwayChanger ? activly : passively]">
                                  <img
                                      class="train-svgrepo-com-1-3"
                                      src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/train-svgrepo-com-1-1@2x.png"
                                  />
                                  <div class="text-129 myriadgeo-bold-st-tropaz-18px">მატარებელი</div>
                              </div>
                          </div>

                          <div class="rectangle-190-13"></div>
                      </div>
                  </div>
              </div>
          </template>


        <div class="group-22990-4">
          <div class="text-1031 myriadgeo-medium-black-18px" style="width: 400px">შეიყვანეთ ავტომობილის მონაცემები</div>
          <div class="frame-16-34">
            <div class="group-22988-10">
              <div class="frame-container-2">
                <div class="frame-14-24 border-2px-botticelli">
                  <div class="text-1032 myriadgeo-bold-st-tropaz-18px">სანომრე ნიშანი</div>
<!--                  <date-svgrepo-com1 />-->
                    <template>
                        <div class="date-svgrepo-com-1">
                            <div class="group-22989-3">
                                <div class="text ">
                                    <input type="text" style="font-size: 19px" class="myriadgeo-medium-gothic-14px" placeholder="ნომერი" >
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
                <div class="frame-15-19 border-2px-botticelli">
                  <div class="text-1034 myriadgeo-bold-st-tropaz-18px">მანქანის მოდელი</div>
<!--                  <date-svgrepo-com1 />-->
                    <template>
                        <div class="date-svgrepo-com-1">
                            <div class="group-22989-3">
                                <div class="text ">
                                    <input type="text" style="font-size: 19px" class="myriadgeo-medium-gothic-14px" placeholder="მოდელი" >
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
              </div>
              <div class="rectangle-190-20"></div>
            </div>
          </div>
        </div>
      </div>
      <group22969 :className="group22969Props.className" />
      <group57
        :className="group57Props.className"
        :rectangle24Props="group57Props.rectangle24Props"
        :contactInformationsProps="group57Props.contactInformationsProps"
        :group501Props="group57Props.group501Props"
        :group502Props="group57Props.group502Props"
      />
    </div>
  </div>
    </v-app>
</template>

<script>
import Group22 from "./Group22";
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import DateSvgrepoCom12 from "./DateSvgrepoCom12";
import Frame152 from "./Frame152";
import Frame16 from "./Frame16";
import Group229872 from "./Group229872";
import DateSvgrepoCom1 from "./DateSvgrepoCom1";
import Group22969 from "./Group22969";
import Group57 from "./Group57";
import axios from "axios";
import Datepicker from 'vuejs-datepicker';

export default {
  name: "MakeAnOffer6",
  components: {
    Group22,
    Group53,
    Rectangle24,
    DateSvgrepoCom12,
    Frame152,
    Frame16,
    Group229872,
    DateSvgrepoCom1,
    Group22969,
    Group57,
    Datepicker,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text1015",
    "ellipse10",
    "text1014",
    "x211688_Forward_Arrow_Icon1",
    "number1",
    "text1017",
    "number2",
    "text1018",
    "number3",
    "text1019",
    "text1020",
    "text1021",
    "frame3",
    "text1031",
    "text1032",
    "text1034",
    "rectangle24Props",
    "group229872Props",
    "group22969Props",
    "group57Props",
  ],

    data(){
      return {
          cities: [],
          partner: {
              sourceCity: '',
              sourceDate: '',
              destinationDate1: '',
              destinationCity1: '',
              transportAirplane: false,
              transportCar: false,
              transportMinibus: false,
              transportRailway: false,
              airplaneChanger: false,
              carChanger: false,
              minibusChanger: false,
              railwayChanger: false,

          },

          activly: 'border-3px-cyan--aqua',
          passively: 'border-2px-botticelli',
          airplaneChanger: false,
          carChanger: false,
          minibusChanger: false,
          railwayChanger: false,

      }
    },

    methods: {

        runGetCities(){
            axios({
                method: 'get',
                url: '/city',
                headers: {
                    "Content-Type": 'application/json',
                    "Accept": 'application/json',
                    "Access-Control-Allow-Origin": "*",
                },
            }).then((res) => {
                this.cities = res.data.data;
                console.log( res.data.data);
            })
                .catch((error) => {
                    console.log(error);
                });
        },

        classAirplane(){
            this.partner.airplaneChanger = !this.partner.airplaneChanger;
        },
        classCar(){
            this.partner.carChanger = !this.partner.carChanger;
        },
        classMinibus(){
            this.partner.minibusChanger = !this.partner.minibusChanger;
        },
        classRailway(){
            this.partner.railwayChanger = !this.partner.railwayChanger;
        },


    },

    mounted() {
        this.runGetCities();
    }
};
</script>

<style>
.make-an-offer5 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  height: 1405px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-22983-7 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-33 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-34 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-53 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-36 {
  height: 24px;
  width: 24px;
}

.text-1015 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-39 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-165 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-30 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-1014 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-91 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-container-41 {
  align-items: flex-start;
  display: flex;
  margin-right: 43px;
  margin-top: 33px;
  min-width: 1246px;
}

.group-22981-7 {
  align-items: center;
  display: flex;
  min-width: 374px;
}

.overlap-group-164 {
  align-items: flex-start;
  border-radius: 25px;
  display: flex;
  height: 50px;
  min-width: 50px;
  padding: 12px 10px;
}

.number-74 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  white-space: nowrap;
}

.text-1017 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 307px;
  white-space: nowrap;
}

.group-22984-5 {
  align-items: center;
  display: flex;
  margin-left: 66px;
  min-width: 334px;
}

.number-73 {
  letter-spacing: -2.4px;
  line-height: 24px;
  min-height: 24px;
  min-width: 25px;
  text-align: center;
  white-space: nowrap;
}

.text-1018 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 267px;
  white-space: nowrap;
}

.group-22985-7 {
  align-items: center;
  display: flex;
  margin-left: 106px;
  min-width: 366px;
}

.text-1019 {
  letter-spacing: 0;
  line-height: 46px;
  margin-left: 13px;
  margin-top: 2px;
  min-height: 46px;
  min-width: 299px;
  white-space: nowrap;
}

.overlap-group7-12 {
  align-items: flex-start;
  background-color: var(--swans-down-2);
  display: flex;
  margin-left: 1px;
  margin-top: 33px;
  min-width: 1290px;
}

.rectangle-189-5 {
  background-color: var(--cyan--aqua);
  height: 5px;
  width: 410px;
}

.frame-18-2 {
  display: flex;
  flex-direction: column;
  height: 479px;
  margin-left: 6px;
  margin-top: 62px;
  position: relative;
  width: 1295px;
}

.group-22989-11 {
  display: flex;
  flex-direction: column;
  height: 133px;
  width: 1297px;
}

.text-1020 {
  height: 18px;
  letter-spacing: 0;
  width: 195px;
}

.frame-16-33 {
  display: flex;
  margin-top: 20px;
  width: 1295px;
}

.group-22988-9 {
  display: flex;
  flex-direction: column;
  height: 95px;
  width: 1295px;
}

.frame-19-5 {
  display: flex;
  position: relative;
  width: 849.99px;
}

.frame-14-23 {
  align-items: center;
  background-color: var(--white);
  border-radius: 15px;
  cursor: pointer;
  display: flex;
  height: 63px;
  justify-content: flex-end;
  min-width: 334.5px;
  padding: 0 15px;
  position: relative;
}

.text-1021 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 82px;
}

.frame-3-1 {
  height: 24px;
  margin-left: 29.8px;
  margin-top: 19.5px;
  width: 24.5px;
}

.rectangle-190-19 {
  background-color: var(--swans-down);
  height: 1px;
  margin-left: 5.1px;
  margin-top: 31px;
  width: 1289.86px;
}

.group-22990-4 {
  display: flex;
  flex-direction: column;
  height: 133px;
  margin-top: 40px;
  width: 1292px;
}

.text-1031 {
  height: 18px;
  letter-spacing: 0;
  width: 320px;
}

.frame-16-34 {
  display: flex;
  height: 95px;
  margin-top: 20px;
  width: 1290px;
}

.group-22988-10 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 95px;
  width: 1290px;
}

.frame-container-2 {
  align-items: flex-start;
  display: flex;
  min-width: 772px;
}

.frame-14-24 {
  align-items: center;
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  justify-content: flex-end;
  min-width: 372px;
  padding: 0 15px;
  position: relative;
}

.text-1032 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 141px;
}

.frame-15-19 {
  align-items: center;
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  justify-content: flex-end;
  margin-left: 10px;
  min-width: 390px;
  padding: 0 15px;
  position: relative;
}

.text-1034 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 159px;
}

.rectangle-190-20 {
  background-color: var(--swans-down);
  height: 1px;
  margin-left: 0.14px;
  margin-top: 31px;
  width: 1290px;
}
.source_time{
    align-items: center;
    background-color: var(--swans-down);
    border-radius: 7px;
    display: flex;
    height: 34px;
    overflow: hidden;
    padding: 0 8px;
    position: relative;
    width: 96px;
    margin-left: 0px;
    bottom: 100px;
    right: 0px;
    top: 0px;
    left: 0px;

}
</style>


<style module>
.vdp.datepicker {
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    margin-top: 18px;
    min-width: 152px;
    padding: 12px 18px;
    border-right-width: 0px;
    padding-right: 0px;
    padding-left: 10px;

}

.datepicker {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    /*border: 1px solid var(--link-water);*/
    /*align-items: flex-start;*/
    /*background-color: var(--coconut);*/
    /*box-shadow: 0px 2px 1px #d1eaf140;*/
    /*border-radius: 40px;*/
    /*display: flex;*/
    /*height: 40px;*/
    /*margin-top: 18px;*/
    /*min-width: 152px;*/
    /*padding: 12px 18px;*/
    /*border-right-width: 0px;*/
    /*padding-right: 0px;*/
    /*padding-left: 10px;*/

    align-items: center;
    background-color: var(--swans-down);
    border-radius: 7px;
    display: flex;
    height: 34px;
    width: 114px;
    overflow: hidden;
    padding: 0 8px;
    position: relative;
    /*width: 180px;*/
    /*bottom: 12px;*/
    /*width: 120px;*/

    right: 0px;
    padding-right: 0px;
    margin-left: 0px;
    margin-bottom: 0px;
    left: 10px;
}

.group-22987-3 {
    display: flex;
    flex-direction: column;
    height: 133px;
    margin-top: 40px;
    width: 1292px;
}

.text-125 {
    height: 18px;
    letter-spacing: 0;
    width: 125px;
}

.frame-16-23 {
    display: flex;
    height: 95px;
    margin-top: 20px;
    width: 1290px;
}

.group-22988-4 {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    min-height: 95px;
    width: 1290px;
}

.frame-container {
    align-items: flex-start;
    display: flex;
    min-width: 857px;
}

.frame-14-13 {
    background-color: var(--white);
    border-radius: 15px;
    display: flex;
    height: 63px;
    width: 231px;
}

.plane-svgrepo-com-1-5 {
    height: 33px;
    margin-left: 25px;
    margin-top: 15px;
    width: 33px;
}

.text-126 {
    height: 18px;
    letter-spacing: 0;
    margin-left: 11.9px;
    margin-top: 22.5px;
    width: 136px;
}

.frame-15-14 {
    background-color: var(--white);
    border-radius: 15px;
    display: flex;
    height: 63px;
    margin-left: 10px;
    width: 212px;
}

.car-svgrepo-com-1-6 {
    height: 30px;
    margin-left: 26.5px;
    margin-top: 16.5px;
    width: 30px;
}

.text-127 {
    height: 18px;
    letter-spacing: 0;
    margin-left: 12px;
    margin-top: 22.5px;
    width: 117px;
}

.frame-16-24 {
    background-color: var(--white);
    border-radius: 15px;
    display: flex;
    height: 63px;
    margin-left: 10px;
    width: 176px;
}

.truck-svgrepo-com-1-3 {
    height: 26px;
    margin-left: 28px;
    margin-top: 18.5px;
    width: 26px;
}

.text-128 {
    height: 18px;
    letter-spacing: 0;
    margin-left: 12px;
    margin-top: 22.5px;
    width: 82px;
}

.frame-17-5 {
    background-color: var(--white);
    border-radius: 15px;
    display: flex;
    height: 63px;
    margin-left: 10px;
    width: 208px;
}

.train-svgrepo-com-1-3 {
    height: 24px;
    margin-left: 29.5px;
    margin-top: 19.5px;
    width: 24px;
}

.text-129 {
    height: 18px;
    letter-spacing: 0;
    margin-left: 12px;
    margin-top: 22.5px;
    width: 113px;
}

.rectangle-190-13 {
    background-color: var(--swans-down);
    height: 1px;
    margin-left: 0.14px;
    margin-top: 31px;
    width: 1290px;
}

.group-22987-3.group-22987-4 .frame-14-13,
.group-22987-3.group-22987-4 .frame-16-24,
.group-22987-3.group-22987-4 .frame-17-5 {
    opacity: 0.5;
}


</style>
