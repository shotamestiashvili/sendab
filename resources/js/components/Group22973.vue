<template>
  <div :class="[`group-22973`, className || ``]">
    <div class="group-120-1">
      <div class="flex-col-6 border-1px-botticelli-2">
        <div class="flex-col-7">
          <div class="overlap-group1-22 myriadgeo-bold-st-tropaz-16px">
            <div class="frame-4-10">
              <div class="location-46 border-3px-cyan--aqua"><div class="text-354">ქუთაისი</div></div>
              <img
                class="frame-5-1"
                src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
              />
              <location3 :className="location3Props.className" />
              <img
                class="frame-4-11"
                src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/frame-3-1@2x.png"
              />
              <location4 :className="location4Props.className" />
            </div>
            <div class="text-352">თქვენი ამანათი იმყოფება ქუთაისში</div>
          </div>
          <div class="flex-row-34">
            <group71 />
            <div class="text-353 myriadgeo-bold-green-18px">
              <span class="span myriadgeo-bold-green-18px">14,59</span
              ><span class="span myriadgeo-medium-green-18px"> ₾</span>
            </div>
          </div>
          <div class="rectangle-52"></div>
        </div>
        <div class="flex-row-35 myriadgeo-medium-white-14px">
          <div class="flex-col-8">
            <div class="phone-79">
              <span class="span myriadgeo-medium-bali-hai-14px">გამგზავრების თარიღი:</span
              ><span class="span1-2 myriadgeo-medium-black-16px"></span
              ><span class="span2-1 myriadgeo-medium-black-18px">11/25/2021</span>
            </div>
            <div class="text-358">
              <span class="span myriadgeo-medium-bali-hai-14px">შეკვეთის სტატუსი:</span
              ><span class="span1-2 myriadgeo-medium-black-16px"></span
              ><span class="span2-1 myriadgeo-medium-st-tropaz-18px">ამანათი იმყოფება გზაში</span>
            </div>
          </div>
          <div class="phone-80">
            <span class="span myriadgeo-medium-bali-hai-14px-2">ჩასვლის თარიღი:</span
            ><span class="span1-2 myriadgeo-medium-black-16px"></span
            ><span class="span2-1 myriadgeo-medium-black-18px">11/27/2021</span>
          </div>
          <div class="id4352">
            <span class="span myriadgeo-medium-bali-hai-14px">შეკვეთის ID:</span
            ><span class="span1-2 myriadgeo-medium-black-16px"></span
            ><span class="span2-1 myriadgeo-medium-black-18px">#4352</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Location3 from "./Location3";
import Location4 from "./Location4";
import Group71 from "./Group71";
export default {
  name: "Group22973",
  components: {
    Location3,
    Location4,
    Group71,
  },
  props: ["className", "location3Props", "location4Props"],
};
</script>

<style>
.group-22973 {
  display: flex;
  margin-top: 47px;
  width: 630px;
}

.group-120-1 {
  align-items: flex-start;
  display: flex;
  height: 370px;
  min-width: 642px;
}

.flex-col-6 {
  align-items: flex-start;
  border-radius: 20px;
  display: flex;
  flex-direction: column;
  min-height: 370px;
  width: 630px;
}

.flex-col-7 {
  align-items: center;
  display: flex;
  flex-direction: column;
  min-height: 208px;
  width: 630px;
}

.overlap-group1-22 {
  align-items: flex-start;
  background-image: url(https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/rectangle-53@1x.png);
  background-size: 100% 100%;
  display: flex;
  flex-direction: column;
  min-height: 140px;
  padding: 28px;
  width: 630px;
}

.frame-4-10 {
  display: flex;
  height: 36px;
  margin-left: 3px;
  margin-top: 6px;
  position: relative;
  width: 475px;
}

.location-46 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 42px;
  margin-left: -3px;
  margin-top: -3px;
  width: 99px;
}

.text-354 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 67px;
}

.frame-5-1 {
  height: 24px;
  margin-left: 17px;
  margin-top: 6px;
  width: 24px;
}

.frame-4-11 {
  height: 24px;
  margin-left: 19px;
  margin-top: 6px;
  width: 24px;
}

.text-352 {
  letter-spacing: 0;
  margin-top: 26px;
  min-height: 16px;
}

.flex-row-34 {
  align-items: center;
  display: flex;
  height: 30px;
  margin-right: 1px;
  margin-top: 19px;
  min-width: 567px;
  position: relative;
}

.text-353 {
  letter-spacing: 0;
  margin-left: 238px;
  min-height: 18px;
  min-width: 61px;
}

.rectangle-52 {
  background-color: var(--botticelli-2);
  height: 1px;
  margin-left: 1px;
  margin-top: 18px;
  width: 565px;
}

.flex-row-35 {
  align-items: flex-start;
  display: flex;
  height: 107px;
  margin-left: 31px;
  margin-top: 25px;
  min-width: 494px;
}

.flex-col-8 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 107px;
  width: 208px;
}

.phone-79 {
  letter-spacing: 0;
  line-height: 18.2px;
  margin-left: 2px;
  min-height: 45px;
}

.span1-2 {
  line-height: 20.8px;
}

.span2-1 {
  line-height: 23.4px;
}

.text-358 {
  letter-spacing: 0;
  line-height: 18.2px;
  margin-top: 17px;
  min-height: 45px;
}

.phone-80 {
  letter-spacing: 0;
  line-height: 18.2px;
  margin-left: 16px;
  min-height: 45px;
  min-width: 116px;
}

.id4352 {
  letter-spacing: 0;
  line-height: 18.2px;
  margin-left: 72px;
  min-height: 45px;
}

.group-22973.group-22973-1 {
  margin-top: unset;
}
</style>
