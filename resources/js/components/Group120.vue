<template>
  <div :class="[`group-120`, className || ``]">
    <div class="text-292 myriadgeo-medium-black-16px">{{ text292 }}</div>
    <div class="group-5-13">
      <div class="overlap-group-57 border-1px-link-water">
        <div class="text-293 myriadgeo-medium-bali-hai-16px">{{ text293 }}</div>
        <img
          class="x211688_forward_arrow_icon-1-35"
          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-18@2x.png"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group120",
  props: ["text292", "text293", "className"],
};
</script>

<style>
.group-120 {
  display: flex;
  flex-direction: column;
  height: 78px;
  width: 332px;
}

.text-292 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 22px;
  width: 62px;
}

.group-5-13 {
  align-items: flex-start;
  display: flex;
  margin-top: 12px;
  min-width: 332px;
}

.overlap-group-57 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 50px;
  min-width: 330px;
  padding: 16px 21px;
}

.text-293 {
  letter-spacing: 0;
  margin-top: 0;
  min-height: 16px;
  min-width: 115px;
}

.x211688_forward_arrow_icon-1-35 {
  height: 16px;
  margin-left: 156px;
  width: 16px;
}

.group-120.group-121 {
  margin-left: 29px;
}

.group-120.group-121 .text-292 {
  width: 60px;
}

.group-120.group-121 .text-293 {
  min-width: 113px;
}

.group-120.group-121 .x211688_forward_arrow_icon-1-35 {
  margin-left: 158px;
}
</style>
