<template>
 <v-app>
  <div class="container-center-horizontal">
    <div class="search-result screen">
      <div class="overlap-group8-6">
        <div class="overlap-group9-4">
          <div class="group-25-34">
            <router-link to="/home-v2-0"><img class="logo-39" :src="logo" /></router-link><group22 />
            <group53 :className="group53Props.className" />
            <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
              <div class="group-4-40">
                <div class="overlap-group1-60">
                  <img class="package-svgrepo-com-1-42" :src="packageSvgrepoCom1" />
                  <div class="text-1300 myriadgeo-bold-white-16px">{{ text1300 }}</div>
                </div>
              </div></a
            ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
              <div class="group-3-46">
                <div class="overlap-group-178 border-1px-botticelli-2">
                  <img class="ellipse-10-36" :src="ellipse10" />
                  <div class="text-1299 myriadgeo-bold-st-tropaz-16px">{{ text1299 }}</div>
                  <img class="x211688_forward_arrow_icon-1-98" :src="x211688_Forward_Arrow_Icon1" />
                </div></div
            ></a>
          </div>
          <div class="rectangle-29-11"></div>
        </div>
        <button @click.prevent="get_order"> GET ORDER </button>
        {{order}}
        <rectangle24 :className="rectangle24Props.className" />
        <div class="flex-row-96">
          <div class="group-65-2">
            <img class="location-svgrepo-com-1" :src="locationSvgrepoCom1" />
            <div class="frame-4-46">
<!--                <template>-->
<!--                    <div class="location-2 border-1px-botticelli">-->
<!--                        <div class="text-1-3 myriadgeo-bold-st-tropaz-16px">-->
<!--                           {{$store.state.order.order.sourceCountry[0]}}-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </template>-->
              <template>
                <div :class="[`location-36 border-1px-botticelli`]">
                  <div class="text-1-9 myriadgeo-bold-cinnabar-16px">
                    {{$store.state.order.order.sourceCountry[0]}}
                  </div>
                </div>
              </template>
                <img class="frame-3-2" :src="frame3" />
                <template>
                    <div :class="[`location-36 border-1px-botticelli`]">
                        <div class="text-1-9 myriadgeo-bold-cinnabar-16px">
                          {{$store.state.order.order.destinationCountry[0]}}
                        </div>
                    </div>
                </template>
            </div>
          </div>

          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
        <div>
            <img class="edit-svgrepo-com-1" :src="editSvgrepoCom1"/>
        </div>


          <div class="flex-col-46">

            <div class="group-66">
              <div class="text-1293 myriadgeo-bold-st-tropaz-16px">ყველა</div>
                <div :class="[`frame-7-2`]">
                    <div class="number-77 myriadgeo-bold-white-16px">23</div>
                </div>
            </div>
<!--            <div class="rectangle-33-18">-->
<!--            </div>-->
          </div>


            <div class="group-68">
                <div class="text-1295 myriadgeo-bold-regent-gray-16px">თვითმფრინავი</div>
                <div>
                    <div class="frame-7-1" style="width: 40px; margin-left: 25px;">

                        <div class="number-76 myriadgeo-bold-white-16px" >40</div>
                    </div>
                </div>
            </div>


          <div class="group-68">
            <div class="text-1295 myriadgeo-bold-regent-gray-16px">ავტომობილი</div>
            <div class="frame-7-1" style="width: 50px;border-left-width: 30px;padding-right: 20px;">
              <div class="number-76 myriadgeo-bold-white-16px">34</div>
            </div>
          </div>
        </div>
      </div>
<!--        :starSvgrepoCom5="group7121Props.starSvgrepoCom5"-->
<!--        :starSvgrepoCom6="group7121Props.starSvgrepoCom6"-->
<!--        :starSvgrepoCom7="group7121Props.starSvgrepoCom7"-->
<!--        :starSvgrepoCom8="group7121Props.starSvgrepoCom8"-->
<!--        :starSvgrepoCom9="group7121Props.starSvgrepoCom9"-->
<!--        :className="group7121Props.className"-->
        <template>
            <div class="group-72-5">
                <div class="overlap-group-176" @click.p.prevent="route">
                    <div class="flex-row-95">
<!--                        <group712-->

<!--                        />-->
                        <div style="margin-left: 50px;">
                            <v-avatar
                            color="primary"
                            size="65">
                            </v-avatar>
                        </div>
                        <div>
                            &nbsp;
                        </div>

                        <div style="width: 200px">
                            <p style="margin-bottom: 0px;">შოთა მესტიაშვილი</p>
                            <star-rating
                                star-size="18"
                            >

                            </star-rating>
                        </div>

                        <div v-if="gel" class="overlap-group-177">
                                <div class="overlap-group1-59"
                                     >
                                    <div style="height: 23px;" @click.prevent="currency" class="text-13-9 myriadgeo-bold-white-18px">₾</div>
                                </div>
                            &nbsp;
                                <div>
                                    <div @click.prevent="currency"  class="price myriadgeo-bold-st-tropaz-18px">$</div>
                            </div>
                        </div>

                            <div v-else class="overlap-group-177">
                                <div >
                                    <div
                                        style="height: 23px;"
                                        @click.prevent="currency"
                                        class="price myriadgeo-bold-st-tropaz-18px">₾</div>
                                </div>
                                &nbsp;
                                <div >
                                    <div
                                        @click.prevent="currency"
                                        style="margin-left: 0px;padding-left: 10px;padding-right: 10px;height: 32px;padding-bottom: 0px;padding-top: 0px;"
                                        class="text-13-9 overlap-group1-59 myriadgeo-bold-white-18px">$</div>
                                </div>
                            </div>

                        <div>
                            <div class="text-13-10 myriadgeo-bold-green-36px"
                            style="height: 50px;margin-right: 17px;margin-left: 0px; margin-top: 0px;">
                                <span class="myriadgeo-bold-green-36px"> 1000</span>
<!--                                <span class="myriadgeo-medium-green-16px">{{ spanText2 }}</span>-->
                            </div>
                        </div>

                    </div>




<!--                    აქედან ქვემოთ იკონები-->
<!--                    <frame4 :className="frame41Props.className" />-->
                    <template>
                        <div style="width: 130px;padding-top: 30px;">
                            <div :class="[`frame-4-2-1`] ">
                                <template>
                                    <div class="location-2 border-1px-botticelli" style="width: 130px;">
                                        <div class="text-1-3 myriadgeo-bold-st-tropaz-16px">
                                            თბილისი
                                        </div>
                                    </div>
                                </template>

                                <div>
                                    <img
                                        class="frame-5"
                                        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
                                    />
                                    &nbsp;
                                    &nbsp;
                                </div>



                                <template>

                                    <div class="location-2 border-1px-botticelli"  style="width: 130px;">
                                        <div class="text-1-3 myriadgeo-bold-st-tropaz-16px">
                                            ფრანკფურტი
                                        </div>
                                    </div>
                                </template>
                            </div>

                        </div>

                    </template>



                    <div class="group-container-49">
<!--                        თვითმფრინავი-->
                        <group69 :planeSvgrepoCom1="group691Props.planeSvgrepoCom1" />
<!--                        <group70 :packageSvgrepoCom11="group701Props.packageSvgrepoCom11" :text371="group701Props.text371" />-->

<!--                        პაკეიჯი-->
                        <div class="group-72-6">
                            <img class="package-svgrepo-com-1-42" :src="packageSvgrepoCom111" />
                            <div class="text-1315 myriadgeo-medium-black-16px"> 1,5 კგ</div>
                        </div>

                        <!--პაკეიჯი-->
                        <div class="group-72-6">
                            <img class="package-svgrepo-com-1-42" :src="packageSvgrepoCom111" />
                            <div class="text-1315 myriadgeo-medium-black-16px"> მოცულობა</div>
                        </div>
                    </div>
                </div>
            </div>
        </template>




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
import Location from "./Location";
import Location4 from "./Location4";
import Frame7 from "./Frame7";
import Group712 from "./Group712";
import Frame4 from "./Frame4";
import Group69 from "./Group69";
import Group70 from "./Group70";
import Frame42 from "./Frame42";
import Frame43 from "./Frame43";
import Group57 from "./Group57";
import StarRating from 'vue-star-rating'
export default {
  name: "SearchResult",
  components: {
      StarRating,
    Group22,
    Group53,
    Rectangle24,
    Location,
    Location4,
    Frame7,
    Group712,
    Frame4,
    Group69,
    Group70,
    Frame42,
    Frame43,
    Group57,
  },
  props: [
    "logo",
    "packageSvgrepoCom1",
    "text1300",
    "ellipse10",
    "text1299",
    "x211688_Forward_Arrow_Icon1",
    "locationSvgrepoCom1",
    "frame3",
    "editSvgrepoCom1",
    "text1293",
    "text1294",
    "text1295",
    "number",
    "text1308",
    "price1",
    "spanText1",
    "spanText2",
    "packageSvgrepoCom111",
    "text1315",
    "ellipse91",
    "text1323",
    "starSvgrepoCom51",
    "starSvgrepoCom61",
    "starSvgrepoCom71",
    "starSvgrepoCom81",
    "starSvgrepoCom91",
    "text1318",
    "price2",
    "spanText3",
    "spanText4",
    "packageSvgrepoCom112",
    "text1322",
    "ellipse92",
    "text1331",
    "starSvgrepoCom52",
    "starSvgrepoCom62",
    "starSvgrepoCom72",
    "starSvgrepoCom82",
    "starSvgrepoCom92",
    "text1325",
    "price3",
    "spanText5",
    "spanText6",
    "text1332",
    "price4",
    "spanText7",
    "spanText8",
    "group53Props",
    "rectangle24Props",
    "frame71Props",
    "frame72Props",
    "group7121Props",
    "frame41Props",
    "group691Props",
    "group701Props",
    "frame42Props",
    "group692Props",
    "frame43Props",
    "group693Props",
    "group702Props",
    "group7122Props",
    "frame42Props2",
    "group694Props",
    "group703Props",
    "group57Props",
  ],

    data(){
      return {
          gel: false,
          order: '',
      }
    },

  computed : {
    // GET_ORDER(){
    //   return this.$store.getters["order/GET_ORDER"];
    // },

  },

    methods: {
      currency(){
          this.gel = !this.gel;
      },

      get_order(){
        this.order = this.$store.getters["order/GET_ORDER"];
      },

        route(){
          this.$router.push("/result-detailed");
        },
    }
};
</script>

<style>
.search-result {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1692px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.overlap-group8-6 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.overlap-group9-4 {
  height: 50px;
  margin-right: 8px;
  margin-top: 33px;
  position: relative;
  width: 1299px;
}

.group-25-34 {
  display: flex;
  height: 50px;
  left: 0;
  position: absolute;
  top: 0;
  width: 1299px;
}

.logo-39 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-40 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-60 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-42 {
  height: 24px;
  width: 24px;
}

.text-1300 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-46 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-178 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-36 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-1299 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-98 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.rectangle-29-11 {
  background-color: var(--st-tropaz);
  border-radius: 10px;
  height: 2px;
  left: 425px;
  position: absolute;
  top: 48px;
  width: 147px;
}

.flex-row-96 {
  align-items: flex-start;
  display: flex;
  height: 67px;
  margin-right: 1px;
  margin-top: 26px;
  min-width: 1296px;
}

.group-65-2 {
  display: flex;
  width: 364px;
}

.location-svgrepo-com-1 {
  height: 38px;
  width: 38px;
}

.frame-4-46 {
  align-self: center;
  display: flex;
  height: 36px;
  margin-left: 22px;
  margin-top: 2px;
  position: relative;
  width: 304px;
}

.frame-3-2 {
  height: 24px;
  margin-left: 19px;
  margin-top: 6px;
  width: 24px;
}

.edit-svgrepo-com-1 {
  cursor: pointer;
  height: 24px;
  margin-left: 29px;
  margin-top: 8px;
  width: 24px;
}

.flex-col-46 {
  align-items: flex-start;
  align-self: flex-end;
  display: flex;
  flex-direction: column;
  margin-left: 393px;
  min-height: 63px;
  width: 102px;
}

.group-66 {
  display: flex;
  height: 36px;
  margin-left: 1px;
  position: relative;
  width: 101px;
}

.text-1293 {
  height: 16px;
  letter-spacing: 0;
  margin-top: 9px;
  width: 51px;
}

.rectangle-33-18 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-top: 22px;
  width: 102px;
}

.group-67 {
  display: flex;
  height: 36px;
  margin-left: 34px;
  margin-top: 4px;
  position: relative;
  width: 171px;
}

.text-1294 {
  height: 16px;
  letter-spacing: 0;
  margin-top: 9px;
  width: 121px;
}

.group-68 {
  display: flex;
  margin-left: 34px;
  margin-top: 4px;
  width: 145px;
}

.text-1295 {
  height: 16px;
  letter-spacing: 0;
  margin-top: 9px;
  width: 104px;
}

.frame-7-1 {
  background-color: var(--regent-gray);
  border-radius: 13px;
  display: flex;
  height: 36px;
  margin-left: 10px;
  width: 29px;
}

.number-76 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 10px;
  margin-top: 10px;
  width: 9px;
}

.group-72-5 {
  align-items: flex-start;
  display: flex;
  height: 220px;
  margin-left: 1px;
  margin-top: 62px;
  min-width: 852px;
}

.overlap-group-176 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  min-height: 220px;
  padding: 24px 29px;
  position: relative;
  width: 850px;
}

.flex-row-95 {
  align-items: center;
  align-self: center;
  display: flex;
  height: 50px;
  margin-right: 1px;
  min-width: 789px;
  position: relative;
}

.overlap-group-177 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 30px;
  display: flex;
  height: 35px;
  margin-bottom: 5px;
  margin-left: 395px;
  min-width: 65px;
  padding: 0 3px;
}

.overlap-group1-59 {
  align-items: flex-end;
  background-color: var(--st-tropaz);
  border-radius: 30px;
  display: flex;
  height: 29px;
  justify-content: flex-end;
  min-width: 29px;
  padding: 4px 7px;
}

.text-13-9 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 13px;
}

.price {
  letter-spacing: 0;
  margin-left: 8px;
  margin-top: 3px;
  min-height: 18px;
  min-width: 10px;
}

.text-13-10 {
  letter-spacing: 0;
  margin-left: 17px;
  margin-top: 4px;
  min-height: 36px;
  min-width: 104px;
}

.group-container-49 {
  align-items: center;
  display: flex;
  height: 33px;
  margin-top: 24px;
  min-width: 497px;
  position: relative;
}

.group-72-6 {
  display: flex;
  margin-bottom: 0.78px;
  margin-left: 29px;
  width: 122px;
}

.text-1315 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 4px;
  width: 83px;
}

.group-7-9 {
  align-items: flex-start;
  display: flex;
  height: 220px;
  margin-left: 1px;
  margin-top: 20px;
  min-width: 852px;
}

.flex-row-97 {
  align-items: center;
  align-self: center;
  display: flex;
  margin-right: 1px;
  min-width: 789px;
}

.group-71-24 {
  align-items: center;
  display: flex;
  min-width: 174px;
}

.ellipse-9-18 {
  height: 50px;
  object-fit: cover;
  width: 50px;
}

.flex-col-47 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 1px;
  min-height: 37px;
  width: 110px;
}

.text-13-11 {
  letter-spacing: 0;
  min-height: 16px;
}

.star-svgrepo-com-container-13 {
  align-items: flex-start;
  display: flex;
  margin-top: 7px;
  min-width: 82px;
}

.star-svgrepo-com-5-18 {
  height: 14px;
  width: 14px;
}

.star-svgrepo-com-19 {
  height: 14px;
  margin-left: 3px;
  width: 14px;
}

.overlap-group-179 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 30px;
  display: flex;
  height: 35px;
  margin-bottom: 5px;
  margin-left: 429px;
  min-width: 65px;
  padding: 0 3px;
}

.group-container-50 {
  align-items: center;
  display: flex;
  height: 33px;
  margin-top: 24px;
  min-width: 367px;
  position: relative;
}

.group-70-7 {
  display: flex;
  margin-bottom: 0.78px;
  margin-left: 35px;
  width: 172px;
}

.text-1322 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 4px;
  width: 133px;
}

.flex-row-98 {
  align-items: center;
  display: flex;
  margin-left: 1px;
  min-width: 787px;
}

.group-71-25 {
  align-items: center;
  display: flex;
  min-width: 167px;
}

.flex-col-48 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 1px;
  min-height: 37px;
  width: 103px;
}

.overlap-group-180 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 30px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  margin-bottom: 5px;
  margin-left: 436px;
  min-width: 65px;
  padding: 0 3px;
}

.text-1325 {
  letter-spacing: 0;
  margin-top: 3px;
  min-height: 18px;
  min-width: 13px;
}

.overlap-group1-61 {
  align-items: flex-end;
  background-color: var(--st-tropaz);
  border-radius: 30px;
  display: flex;
  height: 29px;
  justify-content: flex-end;
  margin-left: 8px;
  min-width: 29px;
  padding: 4px 9px;
}

.price-1 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 10px;
}

.price-2 {
  letter-spacing: 0;
  margin-left: 17px;
  margin-top: 4px;
  min-height: 36px;
  min-width: 102px;
}

.group-container-48 {
  align-items: center;
  display: flex;
  height: 33px;
  margin-top: 24px;
  min-width: 346px;
  position: relative;
}


.frame-7-2 {
    background-color: var(--st-tropaz);
    border-radius: 13px;
    display: flex;
    height: 36px;
    margin-left: 10px;
    width: 38px;
}

.number-77 {
    height: 16px;
    letter-spacing: 0;
    margin-left: 10px;
    margin-top: 10px;
    width: 18px;
}

.frame-7-2.frame-7-3 {
    background-color: var(--regent-gray);
}

.frame-4-2-1 {
    display: flex;
    height: 36px;
    position: relative;
    width: 638px;
}

.frame-5 {
    height: 24px;
    margin-left: 19px;
    margin-top: 6px;
    width: 24px;
}

.frame-4-2-1.frame-4-4,
.frame-4-2-1.frame-4-5,
.frame-4-2-1.frame-4-6,
.frame-4-2-1.frame-4-7,
.frame-4-2-1.frame-4-8,
.frame-4-2-1.frame-4-9 {
    margin-left: 1px;
    margin-top: 27px;
}
</style>
