<template>
  <div class="group-22974">
    <div class="group-120-3">
      <div class="overlap-group-88">
        <img
          class="rectangle-53"
          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/rectangle-53-1@1x.png"
        />
        <div class="rectangle-47 border-5px-cyan--aqua"></div>
        <div class="text-359 myriadgeo-bold-green-18px">
          <span class="myriadgeo-bold-green-18px">14,59</span><span class="myriadgeo-medium-green-18px"> ₾</span>
        </div>
        <div class="frame-4-14">
          <location />
          <img
            class="frame-20"
            src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-5-11@2x.png"
          />
          <div class="location-48 border-1px-botticelli-2">
            <div class="text-361 myriadgeo-bold-cinnabar-16px">ციურიხი</div>
          </div>
          <img
            class="frame-20"
            src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-5-11@2x.png"
          />
          <div class="location-49 border-1px-botticelli-2">
            <div class="text-362 myriadgeo-bold-cinnabar-16px">ბერლინი</div>
          </div>
        </div>
        <group71 :className="group71Props.className" />
        <div class="rectangle-52-2"></div>
        <div class="phone-83 myriadgeo-medium-white-14px">
          <span class="myriadgeo-medium-bali-hai-14px">გამგზავრების თარიღი:</span
          ><span class="span1-4 myriadgeo-medium-black-16px"></span
          ><span class="span2-3 myriadgeo-medium-black-18px">11/25/2021</span>
        </div>
        <div class="id4352-2 myriadgeo-medium-white-14px">
          <span class="myriadgeo-medium-bali-hai-14px">შეკვეთის ID:</span
          ><span class="span1-4 myriadgeo-medium-black-16px"></span
          ><span class="span2-3 myriadgeo-medium-black-18px">#4352</span>
        </div>
        <div class="phone-84 myriadgeo-medium-white-14px">
          <span class="myriadgeo-medium-bali-hai-14px-2">ჩასვლის თარიღი:</span
          ><span class="span1-4 myriadgeo-medium-black-16px"></span
          ><span class="span2-3 myriadgeo-medium-black-18px">11/27/2021</span>
        </div>
        <div class="text-364 myriadgeo-medium-white-14px">
          <span class="myriadgeo-medium-bali-hai-14px">შეკვეთის სტატუსი:</span
          ><span class="span1-4 myriadgeo-medium-black-16px"></span
          ><span class="span2-3 myriadgeo-medium-cinnabar-18px">ელოდება დადასტურებას</span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Location from "./Location";
import Group71 from "./Group71";
export default {
  name: "Group22974",
  components: {
    Location,
    Group71,
  },
  props: ["group71Props"],
};
</script>

<style>
.group-22974,
.group-22974-1 {
  display: flex;
  margin-top: 40px;
  width: 630px;
}

.group-120-3,
.group-120-4 {
  align-items: flex-start;
  display: flex;
  height: 330px;
  min-width: 640px;
}

.overlap-group-88,
.overlap-group-89 {
  border-radius: 20px;
  height: 340px;
  margin-left: -5px;
  margin-top: -5px;
  position: relative;
  width: 640px;
}

.rectangle-53,
.rectangle-53-1 {
  height: 101px;
  left: 5px;
  position: absolute;
  top: 5px;
  width: 630px;
}

.rectangle-47,
.rectangle-47-1 {
  border-radius: 20px;
  height: 340px;
  left: 0;
  position: absolute;
  top: 0;
  width: 640px;
}

.text-359,
.text-798 {
  left: 542px;
  letter-spacing: 0;
  position: absolute;
  top: 130px;
}

.frame-4-14,
.frame-4-15 {
  display: flex;
  height: 36px;
  left: 36px;
  opacity: 0.5;
  position: absolute;
  top: 39px;
  width: 418px;
}

.frame-20,
.frame-21 {
  height: 24px;
  margin-left: 19px;
  margin-top: 6px;
  width: 24px;
}

.location-48,
.location-50 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  width: 95px;
}

.text-361,
.text-800 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 67px;
}

.location-49,
.location-51 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  width: 100px;
}

.text-362,
.text-801 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 72px;
}

.rectangle-52-2,
.rectangle-52-3 {
  background-color: var(--botticelli-2);
  height: 1px;
  left: 38px;
  position: absolute;
  top: 172px;
  width: 565px;
}

.phone-83,
.phone-85 {
  left: 38px;
  letter-spacing: 0;
  line-height: 18.2px;
  position: absolute;
  top: 198px;
}

.span1-4,
.span1-5 {
  line-height: 20.8px;
}

.span2-3,
.span2-4 {
  line-height: 23.4px;
}

.id4352-2,
.id4352-3 {
  left: 448px;
  letter-spacing: 0;
  line-height: 18.2px;
  position: absolute;
  top: 198px;
}

.phone-84,
.phone-86 {
  left: 260px;
  letter-spacing: 0;
  line-height: 18.2px;
  position: absolute;
  top: 198px;
}

.text-364,
.text-803 {
  left: 36px;
  letter-spacing: 0;
  line-height: 18.2px;
  position: absolute;
  top: 260px;
}
</style>
