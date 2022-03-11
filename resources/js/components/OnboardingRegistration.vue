<template>
    <v-app>
  <div class="container-center-horizontal">
    <div class="onboarding-registration-1 screen">
      <div class="group-25-4">
        <router-link to="/home-v2-0"><img class="logo-6" :src="logo" /></router-link
        ><group2 :className="group2Props.className" />
        <group53 />
        <group4 :packageSvgrepoCom1="group4Props.packageSvgrepoCom1" />
        <group3 :account="group3Props.account" />
      </div>
      <div class="text-311 myriadgeo-medium-black-48px">{{ text311 }}</div>

    <form @submit.prevent="submit">
      <div class="overlap-group6-9">
        <div class="group-container-7">
            <div class="frame_for_first_input">
                <div class="my_input">
                    <label class="mylabel">თქვენი სახელი</label>
                    <input
                        v-model="firstname"
                        type="text"
                        class="form__input input_text border-1px-link-water"
                        placeholder="სახელი"
                        @blur= "!$v.firstname.$touch()" >

                    <template v-if="$v.firstname.$error">
                        <p v-if="!$v.firstname.required" class="error--text"> First name is required</p>
                    </template>
                </div>
            </div>

            <div class="frame_for_second_input">
                <div class="my_input">
                    <label class="mylabel">თქვენი გვარი</label>
                    <input  v-model="lastname" required type="text" class="input_text border-1px-link-water" placeholder="გვარი"

                            @blur= "!$v.lastname.$touch()" >

                    <template v-if="$v.lastname.$error">
                        <p v-if="!$v.lastname.required" class="error--text"> Lastname name is required</p>
                    </template>
                </div>
            </div>

        </div>

        <div class="group-container-6">

            <div class="frame_for_first_input">
                <div class="my_input">
                    <label class="mylabel">თქვენი ელ.ფოსტა</label>
                    <input  v-model="email" required type="text" class="input_text border-1px-link-water" placeholder="ელ.ფოსტა"

                            @blur= "!$v.email.$touch()" >

                    <template v-if="$v.email.$error">
                        <p v-if="!$v.email.required" class="error--text"> Email name is required</p>
                        <p v-if="!$v.email.email" class="error--text"> Email format is incorrect</p>
                    </template>

                </div>
            </div>

            <div class="frame_for_second_input">
                <div class="my_input">
                    <label class="mylabel">თქვენი ნომერი</label>
                    <input  v-model="phone" required type="text"  class="input_text border-1px-link-water" placeholder="ნომერი"
                            @blur= "!$v.phone.$touch()" >

                    <template v-if="$v.phone.$error">
                        <p v-if="!$v.phone.required" class="error--text">Phone number is required</p>
                        <p v-if="!$v.phone.numeric" class="error--text"> Phone number must be numeric</p>
                    </template>

                </div>
            </div>

        </div>
        <div class="group-container-6">


            <div class="frame_for_first_input">
                <div class="my_input">
                    <label class="mylabel">ქვეყანა</label>
<!--                    <input type="text" class="input_text border-1px-link-water" placeholder="ქვეყანა">-->

                    <select  class="form-control input_text border-1px-link-water"
                             style="padding-bottom: 10px;padding-top: 10px;"
                             @change="changeCountry($event)" required>
                        <option>არჩიე ქვეყანა</option>
                        <option value="georgia" >საქართველო</option>
<!--                        <option value="deutschland" >გერმანია</option>-->
<!--                        <option value="italy" >იტალია</option>-->
<!--                        <option value="France" >საფრანგეთი</option>-->
<!--                        <option value="uk" >დიდი ბრიტანეთი</option>-->
<!--                        <option value="usa" >ამერიკის შეერთებული შტატები</option>-->
                    </select>
                </div>
            </div>

            <div class="frame_for_second_input">
                <div class="my_input">
                    <label class="mylabel">ქალაქი</label>
                    <select  class="form-control input_text border-1px-link-water"
                             style="padding-bottom: 10px;padding-top: 10px;"
                             @change="changeCity($event)" required>
                        <option>აირჩიე ქალაქი</option>
                        <option value="tbilisi" >თბილისი</option>
                        <option value="mtskheta" >მცხეთა</option>
                        <option value="batumi" >ბათუმი</option>
                        <option value="kutaisi" >ქუთაისი</option>
                    </select>
                </div>
            </div>
        </div>



            <div class="group-container-6">
                <div class="frame_for_first_input">
                    <div class="my_input">
                        <label class="mylabel">მისამართი 1</label>
                        <input required v-model="address1" type="text" class="input_text border-1px-link-water" placeholder="მისამართი">
                    </div>
                </div>

                <div class="frame_for_second_input">
                    <div class="my_input">
                        <label class="mylabel">მისამართი 2</label>
                        <input  v-model="address2" type="text" class=" input_text border-1px-link-water" placeholder="მისამართი">
                    </div>
                </div>
            </div>



          <div class="postal_index">
              <div class="my_input">
                  <label class="mylabel">საფოსტო ინდექსი</label>
                  <input required v-model="postal" type="text" class="input_text  border-1px-link-water" placeholder="საფოსტო ინდექსი"
                         @blur= "!$v.postal.$touch()" >

                  <template v-if="$v.postal.$error">
                      <p v-if="!$v.postal.required" class="error--text">Postal code is required</p>
                      <p v-if="!$v.postal.numeric" class="error--text"> Postal code must be numeric</p>
                  </template>
              </div>
          </div>

        <div class="group-23029">
            <div class="frame_for_first_input">
                <div class="my_input">
                    <label class="mylabel">პაროლი</label>
                    <input required v-model="password" type="password" class="input_text border-1px-link-water" placeholder="პაროლი"

                           @blur= "!$v.password.$touch()" >

                    <template v-if="$v.password.$error">
                        <p v-if="!$v.password.required" class="error--text"> Password is required</p>
                        <p v-if="!$v.password.minLength" class="error--text"> Minimum 8 character is required</p>
                    </template>
                </div>
            </div>

            <div class="frame_for_second_input">
                <div class="my_input">
                    <label class="mylabel">გაიმეორეთ პაროლი</label>
                    <input required v-model="password_confirmation" type="password" class="input_text border-1px-link-water" placeholder="გაიმეორეთ პაროლი"

                           @blur= "!$v.password_confirmation.$touch()" >

                    <template v-if="$v.password_confirmation.$error">
                        <p v-if="!$v.password_confirmation.required" class="error--text"> Password is required</p>
                        <p v-if="!$v.password_confirmation.sameAsPassword" class="error--text"> Password did not match</p>
                    </template>
                </div>
            </div>
        </div>
          <br>
          <br>
        <div class="group-119">
          <div class="overlap-group4-6">
              <input type="radio" value="accept" @change="termFunc($event)" class="rectangle-46" />
          </div>
          <p class="text-287 myriadgeo-medium-white-14px">
            <span class="myriadgeo-medium-black-14px">{{ spanText1 }}</span
            ><span class="span1-1 myriadgeo-medium-cyan--aqua-14px">{{ spanText2 }}</span>
          </p>
        </div>
<!--        <router-link to="/onboarding-registration">-->
          <div class="group-8-2" >
            <div class="overlap-group5-7 border-1px-st-tropaz" >

                <div v-if="$v.$anyError">
                    <button ref="submit"
                            type="submit"
                            class="my_button disabled
                         text-310 myriadgeo-bold-st-tropaz-16px"
                    disabled>
                        დასტური
                    </button>
                </div>
                <div v-else>
                    <button ref="submit"
                            type="submit"
                            class="my_button
                            active
                         text-310 myriadgeo-bold-st-tropaz-16px">
                        დასტური
                    </button>
                </div>


            </div>
<!--              <p v-if="$v.$anyError" class="error"> Please fill out all required fields</p>-->
          </div>
<!--</router-link&ndash;&gt;-->
          </div>
        </form>
        <div>
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
import Group2 from "./Group2";
import Group53 from "./Group53";
import Group4 from "./Group4";
import Group3 from "./Group3";
import Group582 from "./Group582";
import Group120 from "./Group120";
import Group57 from "./Group57";
import { required, minLength, numeric, between, email, sameAs } from 'vuelidate/lib/validators';

export default {
  name: "OnboardingRegistration",
  components: {
    Group2,
    Group53,
    Group4,
    Group3,
    Group582,
    Group120,
    Group57,
  },
  props: [
    "logo",
    "text311",
    "spanText1",
    "spanText2",
    "text310",
    "group2Props",
    "group4Props",
    "group3Props",
    "group5821Props",
    "group5822Props",
    "group5823Props",
    "group5824Props",
    "group1201Props",
    "group1202Props",
    "group5825Props",
    "group5826Props",
    "group5827Props",
    "group5828Props",
    "group5829Props",
    "group57Props",
  ],

    data(){
      return {
          errors: [],
          submitButtonText: 'ანგარიშის შექმნა',

              firstname: '',
              lastname: '',
              email: '',
              phone: '',
              country: '',
              city: '',
              address1: '',
              address2: '',
              postal: '',
              password: '',
              password_confirmation: '',
              terms: '',

      }
    },

    validations: {
                firstname: {required},
                lastname: {required},
                email: {required, email},
                phone: {required, numeric},
                country: {required},
                city: {required},
                address1: {required},
                address2: {required},
                postal: {required, numeric},
                password: {required, minLength: minLength(8)},
                password_confirmation: { required, sameAsPassword: sameAs('password') },
                terms: {required},
    },

    methods: {
      submit(){
          var userData = {
              firstname: this.firstname,
              lastname: this.lastname,
              email: this.email,
              phone: this.phone,
              country: this.country,
              city: this.city,
              address1: this.address1,
              address2: this.address2,
              postal: this.postal,
              password: this.password,
              password_confirmation: this.password_confirmation,
              term: this.terms,
          }
          this.$store.dispatch('backend/REGISTER', userData).then((response)=>{
              this.$router.push('/onboarding-registration');
          });


      },

      changeCountry(event){
          this.country = event.target.value;
      },

      changeCity(event){
          this.city = event.target.value;
        },

        termFunc(event){
          this.terms = true;
        }

    },

};
</script>

<style>
.onboarding-registration-1 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 1825px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-4 {
  display: flex;
  height: 50px;
  margin-right: 8px;
  position: relative;
  width: 1299px;
}

.logo-6 {
  cursor: pointer;
  height: 42px;
  margin-left: -0.2px;
  margin-top: 3px;
  object-fit: cover;
  width: 157px;
}

.text-311 {
  letter-spacing: 0;
  line-height: 60px;
  margin-top: 95px;
  min-height: 60px;
  min-width: 397px;
  text-align: center;
  white-space: nowrap;
}

.overlap-group6-9 {
  align-items: flex-end;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  margin-left: 1px;
  margin-top: 100px;
  min-height: 943px;
  padding: 75px 77px;
  position: relative;
  width: 850px;
}

.group-container-7 {
  align-items: flex-start;
  display: flex;
  height: 78px;
  min-width: 693px;
  position: relative;
}

.group-container-6 {
  align-items: flex-start;
  display: flex;
  height: 78px;
  margin-top: 32px;
  min-width: 693px;
  position: relative;
}

.group-23029 {
  align-self: center;
  display: flex;
  height: 78px;
  margin-left: 1px;
  margin-top: 52px;
  position: relative;
  width: 691px;
}

.group-119 {
  align-items: center;
  align-self: flex-start;
  display: flex;
  margin-left: 3px;
  margin-top: 33px;
  min-width: 425px;
}

.overlap-group4-6 {
    align-items: center;
    background-color: var(--cyan--aqua);
    border-radius: 100px;
    display: flex;
    height: 31px;
    min-width: 13px;
    padding: 0 7px;
}

.rectangle-46 {
  background-color: var(--white);
  border-radius: 30px;
  height: 16px;
  width: 16px;
}

.text-287 {
  letter-spacing: 0;
  line-height: 21px;
  margin-left: 18px;
  margin-top: 1px;
  min-height: 21px;
  min-width: 375px;
  white-space: nowrap;
}

.span1-1 {
  text-decoration: underline;
}

.group-8-2 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-right: 1px;
  margin-top: 32px;
  min-width: 692px;
}

.overlap-group5-7 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  min-width: 690px;
  padding: 16px 248px;

}

.text-310 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 200px;
  text-align: center;
}


</style>


<style scoped>

.my_input {

}

.input_text {
    align-items: flex-start;
    background-color: var(--coconut);
    border-radius: 40px;
    box-shadow: 0px 2px 1px #d1eaf140;
    display: flex;
    height: 50px;
    min-width: 330px;
    padding: 16px 21px;
    margin-top: 15px;
}

.frame_for_first_input{
    align-items: flex-start;
    display: flex;
    margin-top: 12px;
    min-width: 332px;
}

.frame_for_second_input{
    align-items: flex-start;
    display: flex;
    margin-top: 12px;
    min-width: 332px;
    margin-left: 30px;
}

.mylabel{
    margin-left: 18px;
}

.postal_index{
    color: var(--black);
    font-family: var(--font-family-myriad_geo-medium);
    font-size: 15px;
    font-style: normal;
    font-weight: 500;
    margin-right: 365px;
    margin-top: 50px;
}

.my_button {
    background-color: transparent;
    border-top-style: hidden;
    border-right-style: hidden;
    border-left-style: hidden;
    border-bottom-style: hidden;
}

</style>

