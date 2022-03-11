<template>
  <div :class="[`group-102`, className || ``]">
    <div class="text-544 myriadgeo-medium-black-16px">{{ text544 }}</div>
    <div class="group-5-18">
      <div class="overlap-group-129 border-1px-link-water">
        <div class="text-545 myriadgeo-medium-bali-hai-16px">{{ text545 }}</div>
        <img
          class="x211688_forward_arrow_icon-1-61"
          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-18@2x.png"
        />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group102",
  props: ["text544", "text545", "className"],
};
</script>

<style>
.group-102 {
  display: flex;
  flex-direction: column;
  height: 74px;
  width: 300px;
}

.text-544 {
  height: 16px;
  letter-spacing: 0;
  width: 69px;
}

.group-5-18 {
  align-items: flex-start;
  display: flex;
  margin-top: 18px;
  min-width: 300px;
}

.overlap-group-129 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  justify-content: flex-end;
  min-width: 298px;
  padding: 11px 17px;
}

.text-545 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 66px;
}

.x211688_forward_arrow_icon-1-61 {
  align-self: center;
  height: 16px;
  margin-bottom: 0;
  margin-left: 181px;
  width: 16px;
}

.group-102.group-103 {
  margin-left: 30px;
}

.group-102.group-103 .text-544 {
  width: 148px;
}

.group-102.group-103 .text-545 {
  min-width: 115px;
}

.group-102.group-103 .x211688_forward_arrow_icon-1-61 {
  margin-left: 132px;
}
</style>
