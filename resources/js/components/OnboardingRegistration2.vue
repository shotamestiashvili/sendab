<template>
  <div class="container-center-horizontal">
    <div class="onboarding-registration screen">
      <div class="group-25-28">
        <router-link to="/home-v2-0"><img class="logo-32" :src="logo" /></router-link
        ><group2 :className="group2Props.className" />
        <group53 />
        <group4 :packageSvgrepoCom1="group4Props.packageSvgrepoCom1" />
        <group3 :account="group3Props.account" />
      </div>
      <div class="text-1002 myriadgeo-medium-black-48px">{{ text1002 }}</div>
      <div class="overlap-group6-20">
        <img class="id-badge-identity-card-svgrepo-com-1" :src="idBadgeIdentityCardSvgrepoCom1" />
        <p class="irakli myriadgeo-medium-black-16px">{{$store.state["backend/email"]}}, {{ welcometext }}</p>
        <div class="group-container-40">


<!--          <div class="overlap-group4-24">-->
<!--              <button class="my_button myriadgeo-bold-st-tropaz-16px" @click="submit" type="button" >ვერიფიკაციის მოთხოვნა</button>-->
<!--              <div class="text-1005 myriadgeo-bold-st-tropaz-16px">ვერიფიკაციის მოთხოვნა</div>-->
<!--              <button> this is button</button>-->
<!--          </div>-->

<!--            <div class="group-108-3" @click.once="submit">-->
<!--              <div class="overlap-group5-22">-->

<!--               <button @click="submit" type="button" >{{ text1006 }}</button>&ndash;&gt;-->
<!--              </div>-->
<!--            </div>-->

          <div class="group-107-3">
            <div class="rectangle-43-8"></div>
            <div class="group-105-3">
              <div class="text-1004 myriadgeo-medium-black-18px">ელქტრონული ფოსტა</div>
            </div>
            <div class="rectangle-4"></div>
            <div class="group-106-1">
              <div class="text-1003 myriadgeo-medium-black-18px">პერსონალური დოკუმენტაცია</div>
            </div>
            <div class="rectangle-4"></div>
          </div>
        </div>
      </div>
        <div>
            <button class="my_button myriadgeo-bold-st-tropaz-16px" style="width: 150px" @click.prevent="verify" type="button" > ვერიფიკაციის მოთხოვნა</button>
        </div>

        <div  v-if="verification">
            <button class="my_button myriadgeo-bold-st-tropaz-16px" style="width: 100px;margin-bottom: 100px;top: 780px;"  @click="submit"  type="button" >ატვირთე დოკუმენტები </button>
        </div>
        <div v-else class="disabled">
            <button class="my_button myriadgeo-bold-st-tropaz-16px " style="width: 100px;margin-bottom: 100px;top: 780px;" >ატვირთე დოკუმენტები</button>

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
import Group2 from "./Group2";
import Group53 from "./Group53";
import Group4 from "./Group4";
import Group3 from "./Group3";
import Group57 from "./Group57";
export default {
  name: "OnboardingRegistration2",
  components: {
    Group2,
    Group53,
    Group4,
    Group3,
    Group57,
  },
  props: [
    "logo",
    "text1002",
    "idBadgeIdentityCardSvgrepoCom1",
    "welcometext",
    "text1005",
    "text1006",
    "text1004",
    "text1003",
    "group2Props",
    "group4Props",
    "group3Props",
    "group57Props",
      "firstname",
  ],

    data(){
      return{
          documents: '',
          verification: false,
      }
    },

    methods:{
      submit(){
          console.log('this works');
          this.$router.push("/my-profilegeneral-info");
      },

        verify () {
          this.verification = true;
        }
    }
};
</script>

<style>
.onboarding-registration {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1405px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-28 {
  display: flex;
  height: 50px;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-32 {
  /*cursor: pointer;*/
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.text-1002 {
  letter-spacing: 0;
  line-height: 60px;
  margin-right: 1px;
  margin-top: 95px;
  min-height: 60px;
  min-width: 294px;
  text-align: center;
  white-space: nowrap;
}

.overlap-group6-20 {
  align-items: center;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  margin-top: 100px;
  min-height: 597px;
  padding: 86px 108px;
  width: 850px;
}

.id-badge-identity-card-svgrepo-com-1 {
  height: 84px;
  margin-left: 4px;
  margin-top: 1px;
  width: 84px;
}

.irakli {
  letter-spacing: 0;
  line-height: 26px;
  margin-right: 1px;
  margin-top: 32px;
  min-height: 52px;
  text-align: center;
  width: 611px;
}

.group-container-40 {
  align-self: flex-end;
  height: 183px;
  margin-top: 73px;
  position: relative;
  width: 632px;
}

.overlap-group4-24 {
  align-items: center;
  background-color: var(--cyan--aqua-2);
  border-radius: 10px;
  display: flex;
  height: 50px;
  left: 380px;
  min-width: 250px;
  padding: 0 30px;
  position: absolute;
  top: 112px;
}

.text-1005 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 189px;
  text-align: center;
}

.group-108-3 {
  align-items: flex-start;
  /*cursor: pointer;*/
  display: flex;
  height: 50px;
  left: 380px;
  min-width: 252px;
  position: absolute;
  top: 22px;
}

.overlap-group5-22 {
  align-items: center;
  background-color: var(--cyan--aqua-2);
  border-radius: 10px;
  display: flex;
  height: 50px;
  min-width: 250px;
  padding: 0 33px;
}

.text-1006 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 182px;
  text-align: center;
}

.group-107-3 {
  display: flex;
  flex-direction: column;
  height: 183px;
  left: 0;
  position: absolute;
  top: 0;
  width: 630px;
}

.rectangle-43-8 {
  background-color: var(--botticelli-2);
  height: 1px;
}

.group-105-3 {
  display: flex;
  margin-top: 36px;
  width: 274px;
}

.text-1004 {
  height: 18px;
  letter-spacing: 0;
  width: 272px;
}

.rectangle-4 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-top: 36px;
}

.group-106-1 {
  display: flex;
  margin-top: 36px;
  width: 195px;
}

.text-1003 {
  height: 18px;
  letter-spacing: 0;
  width: 193px;
}


</style>

<style scoped>
.my_button{
    align-items: center;
    background-color: var(--cyan--aqua-2);
    border-radius: 10px;
    display: flex;
    /*height: 50px;*/
    /*left: 380px;*/
    min-width: 250px;
    /*padding: 0 30px;*/
    position: absolute;
    /*top: 112px;*/
    top: 690px;
    padding-top: 0px;
    bottom: 20px;
    border-top-width: 0px;
    border-right-width: 0px;
    border-left-width: 0px;
    left: 950px;
    right: 0px;
    height: 52.99219px;
    /*padding-left: 30px;*/
    /*padding-right: 30px;*/
    padding-bottom: 0px;
    border-bottom-width: 0px;
    padding-left: 30px;
    margin-left: 10px;
    margin-right: 0px;
    padding-right: 20px;

}
</style>
