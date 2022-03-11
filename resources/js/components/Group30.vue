<template>
  <div :class="[`group-30`, className || ``]">
    <div class="text-3-10 myriadgeo-medium-black-16px">{{ text349 }}</div>
    <div class="overlap-group-85 border-1px-link-water">
      <div class="text-3-11 myriadgeo-medium-bali-hai-16px">აირჩიე</div>
      <img
        class="x211688_forward_arrow_icon-1-42"
        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1-18@2x.png"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "Group30",
  props: ["text349", "className"],
};
</script>

<style>
.group-30 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 74px;
  width: 156px;
}

.text-3-10 {
  letter-spacing: 0;
  min-height: 16px;
}

.overlap-group-85 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-top: 18px;
  min-width: 152px;
  padding: 12px 18px;
}

.text-3-11 {
  align-self: center;
  letter-spacing: 0;
  min-height: 16px;
  min-width: 54px;
}

.x211688_forward_arrow_icon-1-42 {
  height: 16px;
  margin-left: 45px;
  width: 16px;
}

.group-30.group-58-2,
.group-30.group-58-3,
.group-30.group-58-4 {
  margin-left: 14px;
}
</style>
