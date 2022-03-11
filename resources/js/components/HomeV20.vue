<template>
<v-app app>
  <div class="container-center-horizontal">
    <div class="home-v2-0 screen">
      <div class="group-25-2">

          <img class="logo-3" :src="logo" />
          <div>
          </div>
<!--          <a href="javascript:ShowOverlay('frame-24', 'animate-appear');">-->
          <div class="group-2-25">
<!--            <div class="overlap-group2-24">-->

                <select style="padding-bottom: 0px!important;" class="form-control my_language border-1px-link-water" @change="changeLanguage($event)" required>
                    <option value="georgian" selected>ქართული</option>
                    <option value="georgian" >ინგლისური</option>
                    <option value="georgian" >გერმანული</option>
                </select>



<!--              <input style="padding-bottom: 0px!important;" class="form-control my_language border-1px-link-water" type="text" placeholder="ქალაქი, სოფელი"/>-->
<!--              <div class="text-180 myriadgeo-medium-mid-gray-14px">{{ text180 }}</div>-->
<!--              <img class="x211688_forward_arrow_icon-1-30" :src="x211688_Forward_Arrow_Icon11" />-->
<!--            </div>-->
          </div>

<!--      </a>-->

        <div class="group-53-3">
          <div class="text-175 myriadgeo-bold-st-tropaz-16px">ამანათის გაგზავნა</div>
          <router-link to="/faq">
            <div class="text-176 myriadgeo-bold-st-tropaz-16px">დახმარება</div> </router-link
          ><router-link to="/make-an-offer5">
            <div class="text-177 myriadgeo-bold-st-tropaz-16px">გახდი პარტნიორი</div>
          </router-link>
        </div>
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-4">
            <div class="overlap-group1-8">
                <img data-v-4b05b773="" src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/package-svgrepo-com-1-9@2x.png" class="package-svgrepo-com-1-26">
<!--              <img class="package-svgrepo-com-1-6" :src="packageSvgrepoCom1" />-->
              <div class="text-179 myriadgeo-bold-white-16px">{{ text179 }}</div>
            </div>
          </div></a
        >
          <div>
              <v-btn  @click="logout"> logout </v-btn>
          </div>
          <router-link v-if="!$store.getters['backend/LOGGED_IN']" to="/onboarding-login">
          <div class="group-3-6">
            <div class="overlap-group-28">
              <img class="account-4" :src="account1" />
              <div class="text-178 myriadgeo-bold-white-16px">{{ text178 }}</div>
            </div>
          </div>
          </router-link>


          <div v-else>
              <div class="group-3-18" >
                  <div class="overlap-group-108 border-1px-botticelli-2" @click.prevent="visible = !visible">
<!--                      <img class="ellipse-10-10" :src="ellipse101" />-->
                      <v-avatar color="primary" size="38px">
                          <v-img v-if="avatar" :src="avatarUrl" ></v-img>
                      </v-avatar>
                      <div class="text-480 myriadgeo-bold-st-tropaz-16px">ანგარიში</div>
                      <img class="x211688_forward_arrow_icon-1-52" :src="x211688_Forward_Arrow_Icon12" />
                  </div>
              </div>

          </div>
      </div>



      <div class="overlap-group17">
        <div class="text-131 myriadgeo-medium-black-48px">{{ text131 }}</div>
        <div class="overlap-group16">
          <div class="overlap-group9-2">



            <div class="text-container-1 myriadgeo-medium-black-16px">
              <div class="text-136">{{ text136 }}</div>
              <div class="text-137">{{ text137 }}</div>
            </div>

              <div class="large-12 medium-12 small-12 cell">

<!--                  <label>Photo-->
<!--                      <input type="file" id="avatar-photo" ref="photo" v-on:change="handleFileUpload()"/>-->
<!--                  </label>-->

              </div>
<div>

<!--<v>-->
<!--    <v-btn  @click="logout"> logout </v-btn>-->
<!--</v>-->



</div>

          <form id="frontForm" @submit.prevent="createAccount">
            <div class="overlap-group-container-1 myriadgeo-medium-bali-hai-16px">
                <div>
                    <v-select
                        class="form-control my_country_select border-1px-link-water"
                        :items="countries"
                        v-model="order.sourceCountry"
                        style="padding-bottom: 0px!important;"
                        dense
                        solo
                        placeholder="აირჩიეთ ქვეყანა"
                    >
                    </v-select>
                </div>

                <div style="padding-left: 32px!important;">
                    <v-select
                        class="form-control my_destination_country_select border-1px-link-water"
                        :items="countries"
                        v-model="order.destinationCountry"
                        style="padding-bottom: 0px!important; "
                        dense
                        solo
                        placeholder="აირჩიეთ ქვეყანა"
                    >
                    </v-select>
                </div>
            </div>

            <div class="overlap-group-container-2">
                <input v-model="order.sourceCity" class="my_city_input1 border-1px-link-water" type="text" placeholder="ქალაქი, სოფელი"/>
                <input v-model="order.destinationCity" class="my_city_input2 border-1px-link-water" type="text" placeholder="ქალაქი, სოფელი"/>
            </div>

            <div class="rectangle-13"></div>
            <div class="group-container-2">
              <a href="javascript:ShowOverlay('frame-2', 'animate-appear');">
                <div class="group-13">
                  <div class="text-145 myriadgeo-medium-black-16px">{{ text145 }}</div>
                    <datepicker
                        placeholder="აირჩიე თარიღი"
                        :inputClass="$style.datepicker"
                        v-model="order.date"
                    >

                    </datepicker>
                </div>
              </a>

                <template>
                    <div>
                        <div class="text-139 myriadgeo-medium-black-16px">შეფუთვის დეტალები</div>
                        <div class="overlap-group-container-3" style="margin-left: 32px;">
                            <div class="overlap-group-32 border-1px-link-water">
                                <div class="text-14 myriadgeo-medium-bali-hai-16px">
                                    <input v-model="order.parcelWeight" size="3" class="parcel_details1" type="text" placeholder="წონა"/>
                                </div>
                                <div class="overlap-group1-9"><div class="kg myriadgeo-medium-white-14px-2">kg</div></div>
                            </div>
                            <div class="overlap-group-30 border-1px-link-water">
                                <div class="text-141 myriadgeo-medium-bali-hai-16px">
                                    <input  v-model="order.parcelWidth" size="3" class="parcel_details1" type="text" placeholder="სიგა."/>
                                </div>
                                <div class="overlap-group-33"><div class="cm myriadgeo-medium-white-14px-2">cm</div></div>
                            </div>
                            <div class="overlap-group-30 border-1px-link-water">
                                <div class="text-14 myriadgeo-medium-bali-hai-16px">
                                    <input  v-model="order.parcelHeight" size="3" class="parcel_details1" type="text" placeholder="სიმა."/>
                                </div>
                                <div class="overlap-group-34"><div class="cm-1 myriadgeo-medium-white-14px-2">cm</div></div>
                            </div>
                            <div class="overlap-group-30 border-1px-link-water">
                                <div class="text-143 myriadgeo-medium-bali-hai-16px">
                                    <input  v-model="order.parcelLength" size="3" class="parcel_details1" type="text" placeholder="სიგრ."/>
                                </div>
                                <div class="overlap-group-35"><div class="cm-2 myriadgeo-medium-white-14px-2">cm</div></div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>


              <div class="group-8-1 border-1px-st-tropaz">
              <div class="group-13-1">
                <img class="account-5" :src="account2"  />
                  <button type="submit" class="text-135 myriadgeo-bold-st-tropaz-16px">
                      ანგარიში და შეკვეთა
                  </button>
<!--                <div class="text-135 myriadgeo-bold-st-tropaz-16px">ანგარიში და შეკვეთა</div>-->
              </div>
            </div>
           </form>
          </div>


            <img class="asset-2-2-1" :src="asset221" />

            <div>
                <transition v-if="visible" name="fade" appear>
                    <v-card style="bottom: 110px;right: 240px;left: 940px;">
                        <div class="overlap-group5-3 border-5px-cyan--aqua">
                            <div class="flex-row">
                                <div class="overlap-group6-5">
                                    <v-avatar color="primary" size="74px">
                                        <v-img v-if="avatar" :src="avatarUrl" ></v-img>
                                    </v-avatar>
<!--                                    <img class="ellipse-10-2" :src="ellipse102" />-->
                                    <div class="ellipse-11 border-3px-white"></div>
                                    <img class="check-svgrepo-com-1" :src="checkSvgrepoCom1" />
                                </div>
                                <div class="text-container">
                                    <div class="text-59">{{ userName }}</div>
                                    <div class="text-60">
                                        <span class="span0">{{ spanText1 }}</span>
                                        <span class="span1">{{  }}</span>
                                        <span class="span2">{{ 0 }}</span>
                                    </div>
                                </div>
                                <div class="overlap-group7-1 border-1px-ziggurat">
                                    <div class="text-61 myriadgeo-bold-st-tropaz-20px">{{ text61 }}</div>
                                </div>
                            </div>
                            <div class="group-23018">
                                <router-link to="/messenger-1">
                                    <div class="group-10">
                                        <div class="overlap-group-11 border-2px-cyan--aqua">
                                            <img class="chat-svgrepo-com-1" :src="chatSvgrepoCom1" />
                                            <div class="overlap-group1-3" :style="{ 'background-image': 'url(' + overlapGroup1 + ')' }">
                                                <div class="number-2 myriadgeo-bold-white-18px">0</div>
                                            </div>
                                        </div>
                                    </div></router-link
                                ><router-link to="/messenger">
                                <div class="group-11"><img class="notification-svgrepo-com-1" :src="notificationSvgrepoCom1" /></div
                                ></router-link>
                            </div>
                            <div class="group-23019">
                                <router-link to="/my-profile-general-info-6">
                                    <div class="group-8">
                                        <div class="overlap-group-10">
                                            <img class="account-1" :src="account" />
                                            <div class="text-65 myriadgeo-medium-st-tropaz-16px">{{ text65 }}</div>
                                        </div>
                                    </div></router-link
                                ><router-link to="/my-profile-my-orders-1">
                                <div class="group">
                                    <div class="overlap-group-12">
                                        <img class="package-svgrepo-com-1-2" :src="packageSvgrepoCom1" />
                                        <div class="text-63-1 myriadgeo-medium-st-tropaz-16px">{{ text63 }}</div>
                                    </div>
                                </div></router-link
                            ><router-link to="/my-profile-account-settings-2">
                                <div class="group">
                                    <div class="overlap-group-10">
                                        <img class="setting-svgrepo-com-1" :src="settingSvgrepoCom1" />
                                        <div class="text-64 myriadgeo-medium-st-tropaz-16px">{{ text64 }}</div>
                                    </div>
                                </div></router-link
                            ><router-link to="/my-profile-wallet-3">
                                <div class="group">
                                    <div class="overlap-group3-24">
                                        <img class="wallet-svgrepo-com-1-1" :src="walletSvgrepoCom11" />
                                        <div class="text-66 myriadgeo-medium-st-tropaz-16px">{{ text66 }}</div>
                                    </div>
                                </div></router-link
                            >
                            </div>
                            <router-link to="/make-an-offer">
                                <div class="group-3-3">
                                    <div class="overlap-group-13">
                                        <div class="text-62">{{ text62 }}</div>
                                    </div>
                                </div></router-link
                            >
                            <div class="overlap-group4-2">
                                <div class="text-67 myriadgeo-medium-cinnabar-16px"  @click.prevent="logout">
                                    ანგარიშიდან გამოსვლა</div>
                            </div>
                        </div>
                        <div class="rectangle-39"></div>
                    </v-card>
                </transition>
            </div>
        </div>
      </div>
      <group48 />
      <div class="overlap-group15">
        <img class="group-14" :src="group14" />
        <div class="group-43">
          <img class="rectangle-17-117" :src="rectangle17" /><group21 :number="group211Props.number" />
          <img class="rectangle-1" :src="rectangle18" />
          <div class="group-22">
            <div class="text-134 myriadgeo-medium-heavy-metal-24px">{{ text134 }}</div>
            <div class="group-42">


                <!--              <div class="overlap-group-29 border-2px-mystic">-->
<!--                <div class="ellipse-5"></div>-->
<!--                <div class="number-5 myriadgeo-bold-white-36px">{{ number }}</div>-->
<!--              </div>-->
            </div>
          </div>
          <img class="rectangle-1" :src="rectangle19" /><group21 :number="group212Props.number" />
        </div>
        <rectangle24 :className="rectangle241Props.className" />
        <div class="text-181 myriadgeo-bold-st-tropaz-48px">{{ text181 }}</div>
        <div class="text-182 myriadgeo-medium-waikawa-gray-24px">{{ text182 }}</div>
        <rectangle24 :className="rectangle242Props.className" />
        <rectangle24 :className="rectangle243Props.className" />
        <div class="text-183 myriadgeo-bold-st-tropaz-48px">{{ text183 }}</div>
        <div class="overlap-group11">
          <div class="standard-chunk-of-lo myriadgeo-regular-normal-black-18px">{{ standardChunkOfLo1 }}</div>
          <div class="flex-row-1">
            <div class="flex-col">
              <div class="text-18-1 myriadgeo-bold-black-16px">{{ text184 }}</div>
              <div class="date myriadgeo-medium-mountain-mist-14px">{{ date1 }}</div>
            </div>
            <img class="star-svgrepo-com-5" :src="starSvgrepoCom51" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom41"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom31" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom21"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom11" />
          </div>
        </div>
        <div class="overlap-group12">
          <div class="standard-chunk-of-lo myriadgeo-regular-normal-black-18px">{{ standardChunkOfLo2 }}</div>
          <div class="flex-row-1">
            <div class="flex-col">
              <div class="text-18-1 myriadgeo-bold-black-16px">{{ text185 }}</div>
              <div class="date myriadgeo-medium-mountain-mist-14px">{{ date2 }}</div>
            </div>
            <img class="star-svgrepo-com-5" :src="starSvgrepoCom52" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom42"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom32" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom22"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom12" />
          </div>
        </div>
        <div class="overlap-group13">
          <div class="standard-chunk-of-lo myriadgeo-regular-normal-black-18px">{{ standardChunkOfLo3 }}</div>
          <div class="flex-row-1">
            <div class="flex-col">
              <div class="text-18-1 myriadgeo-bold-black-16px">{{ text186 }}</div>
              <div class="date myriadgeo-medium-mountain-mist-14px">{{ date3 }}</div>
            </div>
            <img class="star-svgrepo-com-5" :src="starSvgrepoCom53" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom43"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom33" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom23"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom13" />
          </div>
        </div>
        <div class="overlap-group14">
          <div class="standard-chunk-of-lo myriadgeo-regular-normal-black-18px">{{ standardChunkOfLo4 }}</div>
          <div class="flex-row-1">
            <div class="flex-col">
              <div class="text-18-1 myriadgeo-bold-black-16px">{{ text187 }}</div>
              <div class="date myriadgeo-medium-mountain-mist-14px">{{ date4 }}</div>
            </div>
            <img class="star-svgrepo-com-5" :src="starSvgrepoCom54" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom44"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom34" /><img
              class="star-svgrepo-com"
              :src="starSvgrepoCom24"
            /><img class="star-svgrepo-com" :src="starSvgrepoCom14" />
          </div>
        </div>
        <contact-informations
          :support1="contactInformationsProps.support1"
          :className="contactInformationsProps.className"
        />
        <div class="rectangle-28-36"></div>
        <div class="ellipse-2-36 border-1px-martinique"></div>
        <img class="iconfinder_ic_keyboa-36" :src="iconfinder_Ic_Keyboard_Arrow_Right_" />
        <p class="copyright-2018-n-cr-36 myriadgeo-regular-normal-amethyst-16px">{{ copyright2018Ncr }}</p>
        <p class="terms-of-use-privacy-36 myriadgeo-regular-normal-amethyst-16px">{{ termsOfUsePrivacy }}</p>
        <group49 :className="group49Props.className" />
        <div class="group-50-1">
          <div class="rectangle-17-118"></div>
          <router-link to="/about-sendab">
            <div class="text-189 myriadgeo-medium-waterloo--18px">{{ text189 }}</div>
          </router-link>
        </div>
        <group51 :className="group51Props.className" />
        <group50 :text8="group50Props.text8" :className="group50Props.className" />
      </div>
    </div>
  </div>
    </v-app>
</template>

<script>
import Group29 from "./Group29";
import Group48 from "./Group48";
import Group21 from "./Group21";
import Rectangle24 from "./Rectangle24";
import ContactInformations from "./ContactInformations";
import Group49 from "./Group49";
import Group51 from "./Group51";
import Group50 from "./Group50";
import Datepicker from 'vuejs-datepicker';
import { authComputed } from '../store/helpers';
import axios from 'axios'

export default {
  name: "HomeV20",
  components: {

    Datepicker,
    Group29,
    Group48,
    Group21,
    Rectangle24,
    ContactInformations,
    Group49,
    Group51,
    Group50,
  },
  props: [
    "logo",
    "text180",
    "x211688_Forward_Arrow_Icon11",
    "text175",
    "text176",
    "text177",
    "packageSvgrepoCom1",
    "text179",
    "account1",
    "text178",
    "text131",
    "text136",
    "text137",
    "text138",
    "x211688_Forward_Arrow_Icon12",
    "text146",
    "x211688_Forward_Arrow_Icon13",
    "zip1",
    "zip2",
    "text145",
    "text144",
    "x211688_Forward_Arrow_Icon14",
    "account2",
    "text135",
    "asset221",
    "group14",
    "rectangle17",
    "rectangle18",
    "text134",
    "number",
    "rectangle19",
    "text181",
    "text182",
    "text183",
    "standardChunkOfLo1",
    "text184",
    "date1",
    "starSvgrepoCom51",
    "starSvgrepoCom41",
    "starSvgrepoCom31",
    "starSvgrepoCom21",
    "starSvgrepoCom11",
    "standardChunkOfLo2",
    "text185",
    "date2",
    "starSvgrepoCom52",
    "starSvgrepoCom42",
    "starSvgrepoCom32",
    "starSvgrepoCom22",
    "starSvgrepoCom12",
    "standardChunkOfLo3",
    "text186",
    "date3",
    "starSvgrepoCom53",
    "starSvgrepoCom43",
    "starSvgrepoCom33",
    "starSvgrepoCom23",
    "starSvgrepoCom13",
    "standardChunkOfLo4",
    "text187",
    "date4",
    "starSvgrepoCom54",
    "starSvgrepoCom44",
    "starSvgrepoCom34",
    "starSvgrepoCom24",
    "starSvgrepoCom14",
    "iconfinder_Ic_Keyboard_Arrow_Right_",
    "copyright2018Ncr",
    "termsOfUsePrivacy",
    "text189",
    "group211Props",
    "group212Props",
    "rectangle241Props",
    "rectangle242Props",
    "rectangle243Props",
    "contactInformationsProps",
    "group49Props",
    "group51Props",
    "group50Props",

      "ellipse101",
      "text68",
      "x211688_Forward_Arrow_Icon1",
      "ellipse102",
      "checkSvgrepoCom1",
      "text59",
      "spanText1",
      "spanText2",
      "spanText3",
      "text61",
      "chatSvgrepoCom1",
      "overlapGroup1",
      "number",
      "notificationSvgrepoCom1",
      "account",
      "text65",
      "packageSvgrepoCom1",
      "text63",
      "settingSvgrepoCom1",
      "text64",
      "walletSvgrepoCom11",
      "text66",
      "text62",
      "text67",
  ],



    data(){
      return {
          accountText: 'ანგარიშის და შეკვეთა',
          token: '',
          picture: '',
          avatarName: '',
          visible: false,
          countries: [],

          order: {
              date: '',
              sourceCountry: '',
              destinationCountry: '',
              sourceCity: '',
              destinationCity: '',
              parcelWeight: '',
              parcelLength: '',
              parcelHeight: '',
              parcelWidth: '',
          },



      }
    },

    watch: {

    },

    computed: {
        ...authComputed
    },

    methods: {

         runGetSourceCountry(){
             axios.get("/country", {
                         headers: {
                             "Content-Type": 'application/json',
                             "Accept": 'application/json',
                             "Access-Control-Allow-Origin": "*",
                         },
                 })
                 .then((res) => {
                     this.countries = res.data.data;
                 })
                 .catch((error) => {
                     console.log(error);
                 })
                 .finally(() => {
                 });
        },



        createAccount(){
             this.$store.dispatch("order/FIRST", this.order);
             this.$router.push("/search-result");
        },
        backend(){
            this.$store.dispatch("backend/SANCTUM_CSRF");
        },
        getToken(){
           this.token = this.$store.getters["backend/GET_TOKEN"];
        },

        check(){
            this.$store.dispatch("user/USER_NAME");
          this.avatarName = this.$store.getters["user/GET_USER_NAME"];
          console.log(this.avatarName);
            },

        getUserName(){
           this.$store.dispatch("user/USER_NAME");
        },


        logout(){
            this.$store.dispatch("backend/LOGOUT");
        },

        saveData(){

        }

    },

    mounted() {
        this.runGetSourceCountry();
    },


};
</script>

<style>
.home-v2-0 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 4416px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-2 {
  display: flex;
  margin-right: 8px;
  width: 1299px;
}

.logo-3 {
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-2-25 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 36.2px;
  margin-top: 7px;
  min-width: 112px;
    background: transparent;
}

.overlap-group2-24 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  min-width: 110px;
  padding: 10px 12px;
}

.text-180 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-30 {
  align-self: flex-end;
  height: 14px;
  margin-bottom: 0;
  margin-left: 4px;
  width: 14px;
}

.group-53-3 {
  display: flex;
  margin-left: 120px;
  margin-top: 17px;
  width: 456px;
}

.text-175 {
  height: 16px;
  letter-spacing: 0;
  width: 147px;
}

.text-176 {
  cursor: pointer;
  height: 16px;
  letter-spacing: 0;
  margin-left: 30px;
  text-align: center;
  width: 87px;
}

.text-177 {
  cursor: pointer;
  height: 16px;
  letter-spacing: 0;
  margin-left: 30px;
  text-align: right;
  width: 156px;
}

.group-4-4 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-8 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-6,
.account-5 {
  height: 24px;
  width: 24px;
}

.text-179 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-6 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-28 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 0 15px;
}

.account-4 {
  height: 30px;
  width: 30px;
}

.text-178 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 107px;
}

.overlap-group17 {
  height: 662px;
  margin-left: 23px;
  margin-top: 85px;
  position: relative;
  width: 1312px;
}

.text-131 {
  left: 0;
  letter-spacing: 0;
  line-height: 60px;
  position: absolute;
  top: 0;
  width: 660px;
}

.overlap-group16 {
  height: 635px;
  left: 0;
  position: absolute;
  top: 27px;
  width: 1312px;
}

.overlap-group9-2 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 440px;
  padding: 44px 53px;
  position: absolute;
  top: 195px;
  width: 1290px;
}

.text-container-1 {
  align-items: flex-start;
  display: flex;
  height: 16px;
  min-width: 548px;
}

.text-136 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 209px;
}

.text-137 {
  letter-spacing: 0;
  margin-left: 144px;
  min-height: 16px;
}

.overlap-group-container-1 {
  align-items: flex-start;
  display: flex;
  margin-top: 18px;
  min-width: 672px;
}

.overlap-group-26 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  min-width: 320px;
  padding: 11px 18px;
}

.text-1-1 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 115px;
}

.x211688_forward_arrow_icon-1-29 {
  align-self: center;
  height: 16px;
  margin-bottom: 0;
  margin-left: 152px;
  width: 16px;
}

.overlap-group-27 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-left: 32px;
  min-width: 320px;
  padding: 11px 18px;
}

.overlap-group-container-2 {
  align-items: flex-start;
  display: flex;
  margin-top: 10px;
  min-width: 672px;
}

.zip,
.zip-1,
.text-145 {
  letter-spacing: 0;
  min-height: 16px;
}

.rectangle-13 {
  background-color: var(--concrete);
  height: 1px;
  margin-top: 31px;
  width: 672px;
}

.group-container-2 {
  align-items: flex-start;
  display: flex;
  height: 74px;
  margin-top: 34px;
  min-width: 674px;
  position: relative;
}

.group-13 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  flex-direction: column;
  min-height: 74px;
  width: 156px;
}

.overlap-group5-5 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-top: 18px;
  min-width: 152px;
  padding: 12px 18px;
}

.text-144 {
  align-self: center;
  letter-spacing: 0;
  min-height: 16px;
  min-width: 54px;
}

.x211688_forward_arrow_icon-1-31 {
  height: 16px;
  margin-left: 45px;
  width: 16px;
}

.group-8-1 {
  border-radius: 50px;
  display: flex;
  height: 50px;
  margin-top: 36px;
  opacity: 0.5;
  width: 672px;
}

.group-13-1 {
  align-items: center;
  display: flex;
  margin-left: 234px;
  margin-top: 13px;
  min-width: 207px;
}

.text-135 {
  letter-spacing: 0;
  margin-left: 14px;
  min-height: 16px;
  min-width: 167px;
}

.asset-2-2-1 {
  height: 517px;
  left: 798px;
  object-fit: cover;
  position: absolute;
  top: 0;
  width: 514px;
}

.overlap-group15 {
  align-self: flex-start;
  height: 2746px;
  margin-left: 0;
  margin-top: 110px;
  position: relative;
  width: 2001px;
}

.group-14 {
  height: 2543px;
  left: 0;
  position: absolute;
  top: 0;
  width: 2001px;
}

.group-43 {
  display: flex;
  flex-direction: column;
  height: 1111px;
  left: 555px;
  position: absolute;
  top: 476px;
  width: 682px;
}

.rectangle-17-117 {
  height: 187px;
  margin-left: 55px;
  width: 298px;
}

.rectangle-1 {
  height: 167px;
  margin-left: 55px;
  margin-top: 40px;
  width: 568px;
}

.group-22 {
  display: flex;
  margin-left: 5px;
  margin-top: 40px;
  width: 679px;
}

.text-134 {
  height: 68px;
  letter-spacing: 0;
  line-height: 34px;
  margin-top: 33px;
  text-align: right;
  width: 497px;
}

.group-42 {
  align-items: flex-start;
  display: flex;
  margin-left: 50px;
  min-width: 132px;
}

.overlap-group-29 {
  border-radius: 65px;
  height: 130px;
  position: relative;
  width: 130px;
}

.ellipse-5 {
  background-color: var(--scooter);
  border-radius: 50px;
  height: 100px;
  left: 13px;
  position: absolute;
  top: 13px;
  width: 100px;
}

.number-5 {
  left: 43px;
  letter-spacing: 0;
  position: absolute;
  text-shadow: 0px 2px 0px #000000bf;
  top: 47px;
}

.text-181 {
  left: 506px;
  letter-spacing: 0;
  line-height: 65px;
  position: absolute;
  text-align: center;
  top: 209px;
  width: 780px;
}

.text-182 {
  left: 699px;
  letter-spacing: 0;
  line-height: 45px;
  position: absolute;
  text-align: center;
  top: 376px;
  white-space: nowrap;
}

.text-183 {
  left: 506px;
  letter-spacing: 0;
  line-height: 65px;
  position: absolute;
  text-align: center;
  top: 1887px;
  white-space: nowrap;
  width: 780px;
}

.overlap-group11 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 251px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.standard-chunk-of-lo {
  letter-spacing: 0;
  line-height: 23.4px;
  margin-top: 7px;
  min-height: 69px;
  width: 340px;
}

.flex-row-1 {
  align-items: center;
  display: flex;
  height: 39px;
  margin-top: 33px;
  min-width: 341px;
}

.flex-col {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 39px;
  width: 89px;
}

.text-18-1 {
  letter-spacing: 0;
  line-height: 16px;
  min-height: 16px;
  white-space: nowrap;
}

.date {
  letter-spacing: 0;
  line-height: 14px;
  margin-top: 9px;
  min-height: 14px;
  white-space: nowrap;
}

.star-svgrepo-com-5 {
  height: 20px;
  margin-left: 132px;
  margin-top: 3px;
  width: 20px;
}

.star-svgrepo-com {
  height: 20px;
  margin-left: 5px;
  margin-top: 3px;
  width: 20px;
}

.overlap-group12 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 691px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.overlap-group13 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 1131px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.overlap-group14 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 1571px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.rectangle-28-36 {
  background-color: var(--haiti);
  height: 1px;
  left: 251px;
  position: absolute;
  top: 2606px;
  width: 1220px;
}

.ellipse-2-36 {
  border-radius: 25px;
  height: 50px;
  left: 1491px;
  position: absolute;
  top: 2581px;
  width: 50px;
}

.iconfinder_ic_keyboa-36 {
  height: 25px;
  left: 1504px;
  position: absolute;
  top: 2594px;
  width: 25px;
}

.copyright-2018-n-cr-36 {
  left: 251px;
  letter-spacing: 0;
  line-height: 16.1px;
  position: absolute;
  top: 2671px;
  white-space: nowrap;
}

.terms-of-use-privacy-36 {
  left: 1237px;
  letter-spacing: 0;
  line-height: 17.4px;
  position: absolute;
  top: 2670px;
  white-space: nowrap;
}

.group-50-1 {
  display: flex;
  height: 20px;
  left: 396px;
  position: absolute;
  top: 2491px;
  width: 177px;
}

.rectangle-17-118 {
  background-color: var(--cyan--aqua);
  border-radius: 20px;
  height: 5px;
  margin-top: 7px;
  width: 5px;
}

.text-189 {
  cursor: pointer;
  height: 20px;
  letter-spacing: 0;
  line-height: 19.6px;
  margin-left: 11px;
  white-space: nowrap;
  width: 159px;
}
</style>

<style scoped>
.my_city_input1 {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    min-width: 320px;
    padding: 11px 18px;
}

.my_city_input2 {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    margin-left: 32px;
    min-width: 320px;
    padding: 11px 18px;
}

.my_country_select {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    min-width: 320px;
    padding: 11px 18px;

}

.my_destination_country_select {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    min-width: 320px;
    padding: 11px 18px;
    margin-left: 32px;
    padding-bottom: 0px;
}

.my_language {
    align-items: flex-start;
    background-color: white;
    border-radius: 40px;
    display: flex;
    /*height: 35px;*/
    justify-content: flex-end;
    min-width: 110px;
    padding: 10px 12px;
    height: 41.5px;
    padding-right: 0px;
    box-shadow: 0px 2px 1px #d1eaf140;
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
    border: 1px solid var(--link-water);
    align-items: flex-start;
    background-color: var(--coconut);
    box-shadow: 0px 2px 1px #d1eaf140;
    border-radius: 40px;
    display: flex;
    height: 40px;
    margin-top: 18px;
    min-width: 152px;
    padding: 12px 18px;
    border-right-width: 0px;
    padding-right: 0px;
    padding-left: 10px;
}

.wrap {
    border: 1px solid #ff0000;
}




.frame-9 {
    align-items: flex-end;
    display: flex;
    flex-direction: column;
    min-height: 430px;
    overflow-x: hidden;
    width: 370px;
}

.overlay .frame-9 {
    background-color: #00000000;
}

.group-3-2 {
    align-items: flex-start;
    display: flex;
    margin-right: -2px;
    min-width: 184px;
}

.overlap-group8 {
    align-items: center;
    background-color: var(--white);
    border-radius: 40px;
    display: flex;
    height: 50px;
    min-width: 182px;
    padding: 0 12px;
}

.ellipse-10-1 {
    height: 30px;
    object-fit: cover;
    width: 30px;
}

.text-68 {
    letter-spacing: 0;
    margin-left: 11px;
    min-height: 16px;
    min-width: 74px;
}

.x211688_forward_arrow_icon-1-26 {
    height: 14px;
    margin-left: 21px;
    margin-top: 0;
    width: 14px;
}

.overlap-group9-1 {
    height: 620px;
    margin-right: -6px;
    margin-top: 20px;
    position: relative;
    width: 376px;
}

.overlap-group5-3 {
    align-items: flex-start;
    background-color: var(--white);
    border-radius: 20px;
    box-shadow: 0px 22px 70px #c9e6ec;
    display: flex;
    flex-direction: column;
    left: 0;
    min-height: 620px;
    padding: 25px 20px;
    position: absolute;
    top: 0;
    width: 370px;
}

.flex-row {
    align-items: center;
    display: flex;
    margin-left: 10px;
    min-width: 268px;
}

.overlap-group6-5 {
    height: 65px;
    position: relative;
    width: 65px;
}

.ellipse-10-2 {
    height: 60px;
    left: 0;
    object-fit: cover;
    position: absolute;
    top: 5px;
    width: 60px;
}

.ellipse-11 {
    background-color: var(--green);
    border-radius: 13px;
    height: 26px;
    left: 39px;
    position: absolute;
    top: 0;
    width: 26px;
}

.check-svgrepo-com-1 {
    height: 10px;
    left: 47px;
    position: absolute;
    top: 8px;
    width: 10px;
}

.text-container {
    align-items: flex-start;
    display: flex;
    flex-direction: column;
    margin-left: 13px;
    margin-top: 6px;
    min-height: 41px;
    width: 147px;
}

.text-59 {
    color: var(--black);
    font-family: var(--font-family-myriad_geo-bold);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0;
    margin-left: 1px;
    min-height: 12px;
}

.text-60 {
    color: transparent;
    font-family: var(--font-family-myriad_geo-medium);
    font-size: var(--font-size-xl);
    font-weight: 500;
    letter-spacing: 0;
    margin-top: 9px;
    min-height: 20px;
}

.span0 {
    color: var(--black);
    font-weight: 500;
}

.span1 {
    color: var(--black);
    font-family: var(--font-family-myriad_geo-bold);
    font-weight: 700;
}

.span2 {
    color: var(--green);
    font-family: var(--font-family-myriad_geo-bold);
    font-weight: 700;
}

.overlap-group7-1 {
    align-items: flex-start;
    align-self: flex-end;
    border-radius: 15px;
    display: flex;
    height: 30px;
    margin-bottom: 6px;
    margin-left: 13px;
    min-width: 30px;
    padding: 4px 8px;
}

.text-61 {
    letter-spacing: 0;
    min-height: 20px;
}

.group-23018 {
    display: flex;
    margin-top: 25px;
    width: 320px;
}

.group-10 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    min-width: 157px;
}

.overlap-group-11 {
    align-items: flex-start;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 65px;
    justify-content: flex-end;
    min-width: 155px;
}

.chat-svgrepo-com-1 {
    align-self: center;
    height: 30px;
    margin-bottom: 3px;
    width: 30px;
}

.overlap-group1-3 {
    align-items: flex-end;
    background-size: 100% 100%;
    display: flex;
    height: 30px;
    margin-left: 34px;
    min-width: 30px;
    padding: 5px 10px;
}

.number-2 {
    letter-spacing: 0;
    min-height: 18px;
    min-width: 10px;
}

.group-11 {
    background-color: var(--lily-white);
    border-radius: 10px;
    cursor: pointer;
    display: flex;
    height: 65px;
    margin-left: 8px;
    width: 155px;
}

.notification-svgrepo-com-1 {
    height: 30px;
    margin-left: 63px;
    margin-top: 18px;
    width: 30px;
}

.group-23019 {
    display: flex;
    flex-direction: column;
    height: 215px;
    margin-top: 14px;
    width: 320px;
}

.group-8 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    min-width: 322px;
}

.overlap-group-10 {
    align-items: center;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 0 18px;
}

.account-1,
.setting-svgrepo-com-1 {
    height: 30px;
    width: 30px;
}

.text-65 {
    letter-spacing: 0;
    margin-left: 11px;
    min-height: 16px;
    min-width: 113px;
}

.group {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-top: 5px;
    min-width: 322px;
}

.overlap-group-12 {
    align-items: flex-start;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 12px 21px;
}

.package-svgrepo-com-1-2 {
    height: 24px;
    width: 24px;
}

.text-63-1 {
    align-self: center;
    letter-spacing: 0;
    margin-left: 14px;
    min-height: 16px;
    min-width: 117px;
}

.text-64 {
    letter-spacing: 0;
    margin-left: 11px;
    min-height: 16px;
    min-width: 183px;
}

.overlap-group3-24 {
    align-items: flex-start;
    background-color: var(--lily-white);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 10px 20px;
}

.wallet-svgrepo-com-1-1 {
    height: 26px;
    width: 26px;
}

.text-66 {
    align-self: center;
    letter-spacing: 0;
    margin-left: 13px;
    min-height: 16px;
    min-width: 135px;
}

.group-3-3 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-top: 61px;
    min-width: 322px;
}

.overlap-group-13 {
    align-items: center;
    background-color: var(--st-tropaz);
    border-radius: 10px;
    display: flex;
    height: 50px;
    min-width: 320px;
    padding: 0 103px;
}

.text-62 {
    color: var(--white);
    font-family: var(--font-family-myriad_geo-medium);
    font-size: var(--font-size-m);
    font-weight: 500;
    letter-spacing: 0;
    min-height: 16px;
    min-width: 114px;
}

.overlap-group4-2 {
    align-items: center;
    background-color: var(--carousel-pink);
    border-radius: 10px;
    display: flex;
    height: 50px;
    justify-content: flex-end;
    margin-top: 15px;
    min-width: 320px;
    padding: 0 70px;
}

.text-67 {
    letter-spacing: 0;
    min-height: 16px;
    min-width: 179px;
}

.rectangle-39 {
    background-color: #d5e6ea;
    height: 1px;
    left: 25px;
    position: absolute;
    top: 444px;
    width: 320px;
}

#overlay-frame-9 {
    background-color: transparent;
}

#overlay-frame-9 .frame-9 {
    left: 1171px;
    top: 33px;
}

#overlay-frame-9 .container-center-horizontal {
    justify-content: normal;
}
</style>
