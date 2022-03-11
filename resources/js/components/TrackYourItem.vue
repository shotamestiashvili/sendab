<template>
  <div class="track-your-item screen">
    <div class="group-55">
      <div class="overlap-group1-4">
        <img class="package-svgrepo-com-1-3" :src="packageSvgrepoCom1" />
        <p class="enter-your-own-reference-number myriadgeo-medium-st-tropaz-16px">{{ enterYourOwnReferenceNumber }}</p>
      </div>
    </div>
    <router-link to="/onboarding-login">
      <div class="group-54">
        <div class="overlap-group-14">
          <img class="account-2" :src="account" />
          <div class="text-69-2 myriadgeo-bold-white-16px">{{ text69 }}</div>
        </div>
      </div></router-link
    >
  </div>
</template>

<script>
export default {
  name: "TrackYourItem",
  props: ["packageSvgrepoCom1", "enterYourOwnReferenceNumber", "account", "text69"],
};
</script>

<style>
.track-your-item {
  background-color: var(--white);
  display: flex;
  height: 100vh;
  min-height: 116px;
  min-width: 1791px;
  width: 100%;
}

.overlay .track-your-item {
  background-color: #00000000;
}

.group-55 {
  align-items: flex-start;
  display: flex;
  margin-left: 250px;
  margin-top: 33px;
  min-width: 1071px;
}

.overlap-group1-4 {
  align-items: center;
  background-color: var(--swans-down);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 1069px;
  padding: 0 24px;
}

.package-svgrepo-com-1-3 {
  height: 24px;
  width: 24px;
}

.enter-your-own-reference-number {
  letter-spacing: 0;
  margin-left: 15px;
  min-height: 16px;
  min-width: 229px;
}

.group-54 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-left: 8px;
  margin-top: 33px;
  min-width: 214px;
}

.overlap-group-14 {
  align-items: flex-start;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 212px;
  padding: 11px 15px;
}

.account-2 {
  height: 26px;
  width: 26px;
}

.text-69-2 {
  align-self: center;
  letter-spacing: 0;
  margin-left: 15px;
  min-height: 16px;
  min-width: 135px;
}

#overlay-track-your-item .container-center-horizontal {
  justify-content: normal;
}

#overlay-track-your-item .track-your-item {
  left: 0px;
  top: 6.48e-5px;
}

#overlay-track-your-item {
  background-color: var(--white);
}
</style>
