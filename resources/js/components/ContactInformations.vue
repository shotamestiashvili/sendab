<template>
  <div :class="[`contact-informations`, className || ``]">
    <div class="phone">
      <img class="support-1" :src="support1" />
      <div class="phone-1 myriadgeo-regular-normal-white-20px">(323) 905-0125</div>
    </div>
    <div class="e-mail">
      <img
        class="at-1-1"
        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/at--1--1@2x.png"
      />
      <div class="supportsendabcom myriadgeo-regular-normal-white-20px">support@sendab.com</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "ContactInformations",
  props: ["support1", "className"],
};
</script>

<style>
.contact-informations {
  align-items: center;
  display: flex;
  height: 50px;
  left: 1032px;
  min-width: 512px;
  position: absolute;
  top: 80px;
}

.phone {
  display: flex;
  width: 192px;
}

.support-1 {
  height: 50px;
  width: 50px;
}

.phone-1 {
  height: 20px;
  letter-spacing: 0;
  line-height: 20.2px;
  margin-left: 15px;
  margin-top: 13px;
  white-space: nowrap;
  width: 125px;
}

.e-mail {
  align-items: center;
  display: flex;
  margin-left: 77px;
  margin-top: 1px;
  min-width: 245px;
}

.at-1-1 {
  height: 45px;
  width: 45px;
}

.supportsendabcom {
  letter-spacing: 0;
  line-height: 20.2px;
  margin-bottom: 3px;
  margin-left: 15px;
  min-height: 20px;
  min-width: 183px;
  white-space: nowrap;
}

.contact-informations.contact-informations-4 {
  top: 2476px;
}
</style>
