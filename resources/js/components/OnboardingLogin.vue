<template>
  <div class="container-center-horizontal" v-if="!this.$store.getters['backend/LOGGED_IN']">
    <div class="onboarding-login screen">
      <div class="group-25-17">
        <router-link to="/home-v2-0"><img class="logo-21" :src="logo" /></router-link
        ><group2 :className="group2Props.className" />
        <group53 />
        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
          <div class="group-4-23">
            <div class="overlap-group1-41">
              <img class="package-svgrepo-com-1-26" :src="packageSvgrepoCom1" />
              <div class="text-722 myriadgeo-bold-white-16px">{{ text722 }}</div>
            </div>
          </div></a
        ><group3 :account="group3Props.account" />
      </div>

      <div class="text-733 myriadgeo-medium-black-48px">{{ text733 }}</div>
      <div class="overlap-group5-13">

          <div v-if="errors">
              <li v-for="(error, index) in errors" :key="index">
                  {{ error }}
              </li>
          </div>

          <form @submit.prevent="submit">

          <div>
              <label> ელ.ფოსტა </label>

              <input type="text" v-model="userForm.email"  placeholder="ელ.ფოსტა" class="border-1px-link-water"/>
          </div>

          <div>
              <label> პაროლი </label>
              <input type="password" v-model="userForm.password"  size="3" placeholder="პაროლი" class="border-1px-link-water"/>
          </div>


        <div class="text-734 myriadgeo-medium-st-tropaz-16px" >
            <router-link to="/password-reset">
                პაროლის აღდგენა!
            </router-link>

        </div>

          <div class="group-8-5">
              <div class="overlap-group4-16 border-1px-st-tropaz">
                  <div class="text-732 myriadgeo-bold-st-tropaz-16px">
                      <button  ref="submit" type="submit">
                          {{ text732 }}
                      </button>
                  </div>
              </div>
          </div>
          </form>

        <div class="rectangle-37"></div>

        <router-link to="/onboarding-registration-1" className="align-self-flex-center">
          <p class="text-735">
            <span class="myriadgeo-medium-black-16px">{{ spanText1 }}</span
            ><span class="myriadgeo-bold-black-16px">{{ spanText2 }}</span
            ><span class="span2-5 myriadgeo-bold-st-tropaz-16px">{{ spanText3 }}</span>
          </p>
        </router-link>
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
import Group3 from "./Group3";
import Group583 from "./Group583";
import Group57 from "./Group57";


export default {

  name: "OnboardingLogin",

  components: {
    Group2,
    Group53,
    Group3,
    Group583,
    Group57,
  },

  props: [
    "logo",
    "packageSvgrepoCom1",
    "text722",
    "text733",
    "text734",
    "text732",
    "spanText1",
    "spanText2",
    "spanText3",
    "group2Props",
    "group3Props",
    "group5831Props",
    "group5832Props",
    "group57Props",
  ],

    data(){
      return {
          authenticated: null,
          status: '',
          userForm: {
              email: '',
              password: '',
          },

          errors: null,
      }
    },

    methods: {

       async submit ()  {
          await this.$store.dispatch("backend/LOGIN", this.userForm)
              .catch(err => {
              this.errors = err.response.data.errors
          });
           this.$router.push('/home-v2-0');
       },

    },


    created() {


    },
    mounted() {

    }
};
</script>

<style >

.onboarding-login {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1252px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-17 {
  display: flex;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-21 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.group-4-23 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 86px;
  min-width: 142px;
}

.overlap-group1-41 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-26 {
  height: 24px;
  width: 24px;
}

.text-722 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.text-733 {
  letter-spacing: 0;
  line-height: 60px;
  margin-top: 95px;
  min-height: 60px;
  min-width: 305px;
  text-align: center;
  white-space: nowrap;
}

.overlap-group5-13 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  margin-top: 100px;
  min-height: 460px;
  padding: 33px 28px;
  position: relative;
  width: 470px;
}

.text-734 {
  align-self: flex-start;
  letter-spacing: 0;
  margin-left: 24px;
  margin-top: 28px;
  min-height: 16px;
  text-decoration: underline;
}

.group-8-5 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-top: 41px;
  min-width: 412px;
}

.overlap-group4-16 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  min-width: 410px;
  padding: 16px 146px;
}

.text-732 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 107px;
  text-align: center;
}

.rectangle-37 {
  align-self: center;
  background-color: #d1e5e9;
  height: 1px;
  margin-top: 29px;
  width: 410px;
}

.text-735 {
  align-self: center;
  color: transparent;
  cursor: pointer;
  font-family: var(--font-family-myriad_geo-medium);
  font-size: var(--font-size-m);
  font-weight: 500;
  letter-spacing: 0;
  margin-top: 33px;
  min-height: 16px;
  min-width: 312px;
  text-align: center;
}

.span2-5 {
  text-decoration: underline;
}

</style>

<style scoped>
input {
    /*border-top-style: hidden;*/
    /*border-right-style: hidden;*/
    /*border-left-style: hidden;*/
    /*border-bottom-style: hidden;*/
    align-items: flex-start;
    background-color: transparent;
    border-radius: 40px;
    /*box-shadow: 0px 2px 1px #d1eaf140;*/
    display: flex;
    height: 50px;
    min-width: 410px;
    padding: 16px 21px;
    margin-top: 15px;
    margin-bottom: 20px;
}
</style>
