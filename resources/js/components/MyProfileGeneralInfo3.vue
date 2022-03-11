<template>
    <v-app>


  <div class="container-center-horizontal">

    <div class="my-profilegeneral-info2 screen">
      <div class="group-25-13">
        <div class="flex-row-64">
          <router-link to="/home-v2-0"><img class="logo-15" :src="logo" /></router-link>
          <div class="overlap-group2-30 border-1px-botticelli-2">
            <div class="text-535 myriadgeo-medium-mid-gray-14px">{{ text535 }}</div>
            <img class="x211688_forward_arrow_icon-1-57" :src="x211688_Forward_Arrow_Icon11" />
          </div>
          <group53 :className="group53Props.className" />
          <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
            <div class="group-4-18">
              <div class="overlap-group1-33">
                <img class="x-svgrepo-com-1-1" :src="packageSvgrepoCom11" />
                <div class="text-534 myriadgeo-bold-white-16px">{{ text534 }}</div>
              </div>
            </div></a
          ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
            <div class="group-3-23">
              <div class="overlap-group-127 border-1px-botticelli-2">
                <img class="ellipse-10-14" :src="ellipse101" />
                <div class="text-533 myriadgeo-bold-st-tropaz-16px">{{ text533 }}</div>
                <img class="x211688_forward_arrow_icon-1-60" :src="x211688_Forward_Arrow_Icon12" />
              </div></div
          ></a>
        </div>
        <rectangle24 :className="rectangle24Props.className" />
        <div class="group-86-5">
          <group82 :account="group82Props.account" />
          <router-link to="/my-profile-my-orders-1">
            <div class="group-83-6">
              <img class="x-svgrepo-com-1-1" :src="packageSvgrepoCom12" />
              <div class="text-526 myriadgeo-medium-st-tropaz-16px">{{ text526 }}</div>
            </div></router-link
          ><router-link to="/my-profile-account-settings-2">
            <div class="group-84-7">
              <img class="setting-svgrepo-com-1-8" :src="settingSvgrepoCom1" />
              <div class="text-527 myriadgeo-medium-st-tropaz-16px">{{ text527 }}</div>
            </div></router-link
          ><router-link to="/my-profile-wallet-3">
            <div class="group-85-8">
              <img class="wallet-svgrepo-com-1-1-9" :src="walletSvgrepoCom11" />
              <div class="text-529 myriadgeo-medium-st-tropaz-16px">{{ text529 }}</div>
            </div></router-link
          >
        </div>
        <div class="rectangle-33-7"></div>
      </div>
      <div class="flex-row-65">
        <div class="settings-frame-5">

            <div>
                <template>
                    <div class="rectangle-42-21"
                         style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>
                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 active"
                             @click.prevent="generalinfo_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ზოგადი ინფორმაცია</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div>
                <template>
                    <!--                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>-->
                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81 overlap-group-60"
                             @click.prevent="profileedit_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30 ">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px"
                                style="width: 250px">პროფილის რედაქტირება</div>
                                <img
                                    style="margin-left: 40px"
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div>
                <template>
                    <!--                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>-->

                    <div :class="[`x4-22`]">

                        <div class="overlap-group-81"
                             @click.prevent="grade_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">შეფასებები</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <div>
                <template>
                    <!--                    <div class="rectangle-42-21" style= "margin-left: 30px;border-left-width: 10px;padding-left: 34px;"></div>-->

                    <div :class="[`x4-22`]">
                        <div class="overlap-group-81"
                             @click.prevent="verification_route"
                             style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;">
                            <div class="flex-row-30">
                                <div class="text_label myriadgeo-medium-st-tropaz-16px">ვერიფიკაცია</div>
                                <img
                                    class="x211688_forward_arrow_icon-1-41"
                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-37@2x.png"
                                />
                            </div>
                            <div class="rectangle-42-21" style="margin-left: 10px; border-left-width: 10px; padding-left: 34px;"></div>
                        </div>
                    </div>
                </template>
            </div>

            <!--          <property1-headline :x43Props="property1HeadlineProps.x43Props" />-->
<!--          <property1-active :className="property1ActiveProps.className" :x4Props="property1ActiveProps.x4Props" />-->
<!--          <property1-downline :x42Props="property1Downline1Props.x42Props" />-->
<!--          <property1-downline :x42Props="property1Downline2Props.x42Props" />-->
        </div>




        <div class="overlap-group6-13">
          <div class="flex-row-66">
<!--            <img class="ellipse-10-15" :src="ellipse102" />-->
              <v-avatar
              color="primary"
              size="80px">
                  <v-img v-if="avatar" :src="avatarUrl" ></v-img>
              </v-avatar>
            <div class="group-96">
              <div class="text-551" style="width: 400px;">პროფილის ფოტოს განახლება</div>
              <p class="png-jpg-or-gif-max-3-mb myriadgeo-medium-black-14px">{{ pngJpgOrGifMax3Mb }}</p>
            </div>
<!--            <router-link to="/my-profile-general-info-6">-->
              <div class="group-8-4" style="margin-left: 40px;">
                <div class="overlap-group5-10 border-1px-st-tropaz">
                  <img class="x-svgrepo-com-1-1" :src="attachSvgrepoCom1" />
                  <div class="text-550 myriadgeo-bold-st-tropaz-16px ">
<!--                      {{ text550 }}-->
                          <v-file-input
                              style="width: 160px;"
                              @change="preview_avatar"
                              v-model="avatar"
                              placeholder= "აირჩიე ფოტო"
                              :prefix="Photo"
                          >
                          </v-file-input>


                     </div>
                </div>
             </div>
<!--              </router-link>-->
          </div>
          <div class="rectangle-43-3"></div>

          <div class="group-container-25">

              <div>
                  <template>
                      <div :class="[`group-12-1`]">
                          <div class="text-541 myriadgeo-medium-black-16px">სახელი</div>
                          <div class="group-5-17">
                              <div class="overlap-group-128 border-1px-link-water">
                                  <div class="text-542 ">
                                      <input v-model="form.name"  class="myriadgeo-medium-bali-hai-16px" placeholder="შეიყვანეთ სახელი">
                                      </div>
                              </div>
                          </div>
                      </div>
                  </template>
              </div>


           <div>
               <template>
                   <div :class="[`group-12-1`]">
                       <div class="text-541 myriadgeo-medium-black-16px" style="margin-left: 32px;"> გვარი</div>
                       <div class="group-12-1">
                           <div class="overlap-group-128
                            border-1px-link-water" style="margin-top: 18px;margin-left: 28px;">

                               <div class="text-542 ">
                                   <input v-model="form.lastname" class="myriadgeo-medium-bali-hai-16px" placeholder="შეიყვანეთ გვარი">
                               </div>
                           </div>
                       </div>
                   </div>
               </template>
           </div>

          </div>

          <div class="group-container-26">


                  <div>
                      <template>
                          <div :class="[`group-12-1`]">
                              <div class="text-541 myriadgeo-medium-black-16px">ელ.ფოსტა</div>
                              <div class="group-5-17">
                                  <div class="overlap-group-128 border-1px-link-water">
                                      <div class="text-542 ">
                                          <input v-model="form.email" class="myriadgeo-medium-bali-hai-16px" placeholder="ელ. ფოსტა">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </template>
                  </div>



                  <div>
                      <template>
                          <div :class="[`group-12-1`]">
                              <div class="text-541 myriadgeo-medium-black-16px" style="margin-left: 32px; width: 200px"> საკონტაქტო ნომერი</div>
                              <div class="group-12-1">
                                  <div class="overlap-group-128
                            border-1px-link-water" style="margin-top: 18px;margin-left: 28px;">

                                      <div class="text-542 ">
                                          <input v-model="form.phone" class="myriadgeo-medium-bali-hai-16px" placeholder="საკონტაქტო ნომერი">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </template>
                  </div>

          </div>
          <div class="group-container-27">


                  <div>
                      <template>
                          <div :class="[`group-12-1`]">
                              <div class="text-541 myriadgeo-medium-black-16px">ლოკაცია</div>
                              <div class="group-5-17">
                                  <div class="overlap-group-128 border-1px-link-water">
                                      <div class="text-542 ">
                                          <input v-model="form.address1" class="myriadgeo-medium-bali-hai-16px" placeholder="ლოკაცია">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </template>
                  </div>


                  <div>
                      <template>
                          <div :class="[`group-12-1`]">
                              <div class="text-541 myriadgeo-medium-black-16px" style="margin-left: 32px; width: 200px"> დაბადების თარიღი</div>
                              <div class="group-12-1">
                                  <div class="overlap-group-128
                            border-1px-link-water" style="margin-top: 18px;margin-left: 28px;">

                                      <div class="text-542 ">
                                          <input v-model="form.birthdate" class="myriadgeo-medium-bali-hai-16px" placeholder="დაბადების თარიღი">
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </template>
                  </div>

          </div>
          <div class="overlap-group4-12 border-1px-st-tropaz">
            <div class="text-540 ">
                <button type="submit" class="myriadgeo-bold-st-tropaz-16px" @click.prevent="updateUserData">
                    <div style="color: #0a53be">
                        მონაცემების განახლება
                    </div>

                </button>

            </div>
          </div>
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
 </v-app>
</template>

<script>
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group82 from "./Group82";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Property1Downline from "./Property1Downline";
import Group98 from "./Group98";
import Group102 from "./Group102";
import Group57 from "./Group57";
import axios from "axios";
export default {
  name: "MyProfileGeneralInfo3",
  components: {
    Group53,
    Rectangle24,
    Group82,
    Property1Headline,
    Property1Active,
    Property1Downline,
    Group98,
    Group102,
    Group57,
  },
  props: [
    "logo",
    "text535",
    "x211688_Forward_Arrow_Icon11",
    "packageSvgrepoCom11",
    "text534",
    "ellipse101",
    "text533",
    "x211688_Forward_Arrow_Icon12",
    "packageSvgrepoCom12",
    "text526",
    "settingSvgrepoCom1",
    "text527",
    "walletSvgrepoCom11",
    "text529",
    "ellipse102",
    "text551",
    "pngJpgOrGifMax3Mb",
    "attachSvgrepoCom1",
    "text550",
    "text540",
    "group53Props",
    "rectangle24Props",
    "group82Props",
    "property1HeadlineProps",
    "property1ActiveProps",
    "property1Downline1Props",
    "property1Downline2Props",
    "group981Props",
    "group982Props",
    "group983Props",
    "group984Props",
    "group1021Props",
    "group1022Props",
    "group57Props",
  ],
    data () {
        return {
            visible: false,
            userData: null,
            avatar: null,
            avatarUrl: '',

            form: {
                name: '',
                lastname: '',
                email: '',
                phone: '',
                address1: '',
                birthdate: '',
            }
        }
    },

    watch: {
      // avatar: function(){
      //     this.avatarUrl = URL.createObjectURL(this.avatar)
      // },

    },

    methods: {


        preview_avatar() {
            this.avatarUrl = URL.createObjectURL(this.avatar)
        },

        generalinfo_route(){
            this.$router.push("/my-profile-general-info-6");
        },
        verification_route (){
            this.$router.push("/my-profilegeneral-info4");
        },

        profileedit_route(){
            this.$router.push("/my-profilegeneral-info2");
        },

        grade_route(){
            this.$router.push("/my-profilegeneral-info3");
        },

        getAvatar(){
              axios({
                        method: 'get',
                        url: '/api/getAvatar',
                        headers: { "Content-Type": "multipart/form-data" },
                    }
                ).then((response) => {
                     this.avatarUrl = response.data;
                     this.avatar = true;
                     console.log(response.data);
              });
        },

        getUserData(){
            axios({
                method: 'post',
                url: '/api/userdata',
            }).then((response)=>{

                this.form.name = response.data.data[0].name;
                this.form.lastname = response.data.data[0].lastname;
                this.form.email = response.data.data[0].email;
                this.form.phone = response.data.data[0].phone;
                this.form.address1 = response.data.data[0].address1;
                this.form.birthdate = response.data.data[0].birthdate;

                console.log(this.form.name);

            });

        },

        updateUserData(){
            axios({
                method: 'post',
                url: '/api/updateuser',
                data: {
                         name:     this.form.name,
                     lastname:     this.form.lastname ,
                        email:     this.form.email,
                        phone:     this.form.phone,
                     address1:     this.form.address1,
                    birthdate:     this.form.birthdate,

                },

            }).then((response)=>{
                this.getUserData();

            }).catch((e)=>{
                console.log(e);
            });

            if (this.avatar){
                this.$store.dispatch("ADD_AVATAR", this.avatar).then(()=>{
                    this.getAvatar();
                });
            }


        }

    },

    mounted() {
      this.getUserData();
      this.getAvatar();
    }
};
</script>

<style>
.my-profilegeneral-info2 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1388px;
  overflow: hidden;
  position: relative;
  width: 1791px;
}

.group-25-13 {
  align-items: center;
  background-color: var(--white);
  display: flex;
  flex-direction: column;
  min-height: 210px;
  position: relative;
  width: 1791px;
}

.flex-row-64 {
  align-items: center;
  display: flex;
  margin-right: 6.15px;
  margin-top: 33px;
  min-width: 1301px;
  position: relative;
}

.logo-15 {
  cursor: pointer;
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-30 {
  align-items: flex-start;
  border-radius: 40px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  margin-bottom: 1px;
  margin-left: 36px;
  min-width: 110px;
  padding: 9px 13px;
}

.text-535 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-57 {
  align-self: center;
  height: 14px;
  margin-bottom: 1px;
  margin-left: 4px;
  width: 14px;
}

.group-4-18 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-33 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.x-svgrepo-com-1-1 {
  height: 24px;
  width: 24px;
}

.text-534 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.group-3-23 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-127 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 9px 11px;
}

.ellipse-10-14 {
  align-self: flex-start;
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-533 {
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-60 {
  height: 14px;
  margin-bottom: 2px;
  margin-left: 21px;
  width: 14px;
}

.group-86-5 {
  display: flex;
  margin-top: 32px;
  position: relative;
  width: 887px;
}

.group-83-6 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 3px;
  width: 157px;
}

.text-526 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 14px;
  margin-top: 5px;
  width: 117px;
}

.group-84-7 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  width: 226px;
}

.setting-svgrepo-com-1-8 {
  height: 30px;
  width: 30px;
}

.text-527 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 11px;
  margin-top: 7px;
  width: 183px;
}

.group-85-8 {
  cursor: pointer;
  display: flex;
  margin-left: 58px;
  margin-top: 2px;
  width: 176px;
}

.wallet-svgrepo-com-1-1-9 {
  height: 26px;
  width: 26px;
}

.text-529 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 7px;
  width: 135px;
}

.rectangle-33-7 {
  background-color: var(--st-tropaz);
  height: 5px;
  margin-right: 730px;
  margin-top: 26px;
  width: 155px;
}

.flex-row-65 {
  align-items: flex-start;
  display: flex;
  height: 660px;
  margin-left: 1px;
  margin-top: 80px;
  min-width: 1290px;
}

.settings-frame-5 {
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  height: 300px;
  overflow: hidden;
  position: relative;
  width: 410px;
}

.overlap-group6-13 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 30px;
  min-height: 660px;
  padding: 55px 108px;
  width: 850px;
}

.flex-row-66 {
  align-items: center;
  display: flex;
  min-width: 632px;
}

.ellipse-10-15 {
  height: 80px;
  object-fit: cover;
  width: 80px;
}

.group-96 {
  display: flex;
  flex-direction: column;
  height: 43px;
  margin-left: 22px;
  margin-top: 1px;
  width: 275px;
}

.text-551 {
  color: var(--black);
  font-family: var(--font-family-myriad_geo-medium);
  font-size: 19px;
  font-weight: 500;
  height: 19px;
  letter-spacing: 0;
  width: 271px;
}

.png-jpg-or-gif-max-3-mb {
  height: 14px;
  letter-spacing: 0;
  margin-top: 10px;
  width: 156px;
}

.group-8-4 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 68px;
  min-width: 187px;
}

.overlap-group5-10 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  min-width: 185px;
  padding: 12px 16px;
}

.text-550 {
  align-self: center;
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 12px;
  min-height: 16px;
  min-width: 108px;
  text-align: center;
}

.rectangle-43-3 {
  align-self: center;
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 35px;
  width: 630px;
}

.group-container-25 {
  align-items: flex-start;
  display: flex;
  height: 74px;
  margin-top: 40px;
  min-width: 630px;
  position: relative;
}

.group-container-26 {
  align-items: flex-start;
  display: flex;
  height: 74px;
  margin-top: 26px;
  min-width: 630px;
  position: relative;
}

.group-container-27 {
  align-items: flex-start;
  display: flex;
  height: 74px;
  margin-top: 36px;
  min-width: 630px;
  position: relative;
}

.overlap-group4-12 {
  align-items: flex-start;
  align-self: center;
  border-radius: 50px;
  display: flex;
  height: 50px;
  margin-top: 56px;
  min-width: 630px;
  padding: 16px 218px;
}

.text-540 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 192px;
  text-align: center;
}


.group-12-1 {
    display: flex;
    flex-direction: column;
    height: 74px;
    width: 300px;
}

.text-541 {
    height: 16px;
    letter-spacing: 0;
    width: 58px;
}

.group-5-17 {
    align-items: flex-start;
    display: flex;
    margin-top: 18px;
    min-width: 300px;
}

.overlap-group-128 {
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 40px;
    min-width: 298px;
    padding: 11px 18px;
}

.text-542 {
    letter-spacing: 0;
    min-height: 16px;
}

.group-12-1.group-15,
.group-12-1.group-15-1 {
    margin-left: 30px;
}

.group-12-1.group-15-1 .text-541 {
    width: 45px;
}

.group-12-1.group-12 .text-541 {
    width: 83px;
}

.group-12-1.group-15 .text-541 {
    width: 156px;
}
</style>
