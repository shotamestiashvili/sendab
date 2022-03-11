<template>
  <div :class="[`group-57`, className || ``]">
    <div class="overlap-group3 myriadgeo-regular-normal-amethyst-16px">
      <rectangle24 :className="rectangle24Props.className" />
      <contact-informations :support1="contactInformationsProps.support1" />
      <div class="rectangle-28"></div>
      <div class="ellipse-2 border-1px-martinique"></div>
      <img
        class="iconfinder_ic_keyboa"
        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/iconfinder-ic-keyboard-arrow-right-48px-352468-1@2x.png"
      />
      <p class="copyright-2018-n-cr">Copyright © 2018 NCrypted Technologies Pvt. Ltd. All Rights Reserved.</p>
      <p class="terms-of-use-privacy">
        Terms of use&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cookie Policy
      </p>
      <group49 />
      <group50 :text8="group501Props.text8" />
      <group51 />
      <group50 :text8="group502Props.text8" :className="group502Props.className" />
    </div>
  </div>
</template>

<script>
import Rectangle24 from "./Rectangle24";
import ContactInformations from "./ContactInformations";
import Group49 from "./Group49";
import Group50 from "./Group50";
import Group51 from "./Group51";
export default {
  name: "Group57",
  components: {
    Rectangle24,
    ContactInformations,
    Group49,
    Group50,
    Group51,
  },
  props: ["className", "rectangle24Props", "contactInformationsProps", "group501Props", "group502Props"],
};
</script>

<style>
.group-57 {
  align-items: flex-start;
  display: flex;
  margin-top: 1705px;
  min-width: 1795px;
}

.overlap-group3 {
  height: 350px;
  position: relative;
  width: 1791px;
}

.rectangle-28 {
  background-color: var(--haiti);
  height: 1px;
  left: 251px;
  position: absolute;
  top: 210px;
  width: 1220px;
}

.ellipse-2 {
  border-radius: 25px;
  height: 50px;
  left: 1491px;
  position: absolute;
  top: 185px;
  width: 50px;
}

.iconfinder_ic_keyboa {
  height: 25px;
  left: 1504px;
  position: absolute;
  top: 198px;
  width: 25px;
}

.copyright-2018-n-cr {
  left: 251px;
  letter-spacing: 0;
  line-height: 16.1px;
  position: absolute;
  top: 275px;
  white-space: nowrap;
}

.terms-of-use-privacy {
  left: 1237px;
  letter-spacing: 0;
  line-height: 17.4px;
  position: absolute;
  top: 274px;
  white-space: nowrap;
}

.group-57.group-57-1 {
  margin-left: 4px;
  margin-top: 94px;
}

.group-57.group-57-2 {
  margin-left: 4px;
  margin-top: 274px;
}

.group-57.group-57-3,
.group-57.group-57-14 {
  margin-left: 4px;
  margin-top: 84px;
}

.group-57.group-57-4 {
  margin-left: 4px;
  margin-top: 194px;
}

.group-57.group-57-5,
.group-57.group-57-7,
.group-57.group-57-19,
.group-57.group-57-25,
.group-57.group-57-29,
.group-57.group-57-30,
.group-57.group-57-32,
.group-57.group-57-33 {
  margin-top: unset;
}

.group-57.group-57-6 {
  margin-left: 4px;
  margin-top: 110px;
}

.group-57.group-57-8,
.group-57.group-57-13 {
  margin-left: 4px;
  margin-top: 128px;
}

.group-57.group-57-9 {
  margin-left: 4px;
  margin-top: 113px;
}

.group-57.group-57-10,
.group-57.group-57-12 {
  margin-left: 4px;
  margin-top: 88px;
}

.group-57.group-57-11,
.group-57.group-57-22,
.group-57.group-57-24,
.group-57.group-57-31 {
  margin-left: 4px;
  margin-top: 148px;
}

.group-57.group-57-15 {
  margin-left: 4px;
  margin-top: 64px;
}

.group-57.group-57-16 {
  margin-left: 4px;
  margin-top: 104px;
}

.group-57.group-57-17,
.group-57.group-57-20 {
  margin-left: 4px;
  margin-top: 98px;
}

.group-57.group-57-18 {
  margin-left: 4px;
  margin-top: 108px;
}

.group-57.group-57-21 {
  margin-left: 4px;
  margin-top: 131px;
}

.group-57.group-57-23 {
  margin-left: 4px;
  margin-top: 160px;
}

.group-57.group-57-26 {
  margin-left: 4px;
  margin-top: 100px;
}

.group-57.group-57-27 {
  margin-left: 4px;
  margin-top: 120px;
}

.group-57.group-57-28 {
  margin-left: 4px;
  margin-top: 124px;
}

.group-57.group-57-34 {
  margin-left: 4px;
  margin-top: 130px;
}
</style>
