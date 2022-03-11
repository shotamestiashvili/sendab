<template>
  <div :class="[`group-6-1`, className || ``]">
    <div class="text-33 myriadgeo-medium-black-16px">{{ text288 }}</div>
    <div class="group-5-12">
      <div class="overlap-group-56 border-1px-link-water">
        <div class="text-34 myriadgeo-medium-bali-hai-16px">{{ text289 }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group582",
  props: ["text288", "text289", "className"],
};
</script>

<style>
.group-6-1 {
  display: flex;
  flex-direction: column;
  height: 78px;
  width: 332px;
}

.text-33 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 22px;
  width: 119px;
}

.group-5-12 {
  align-items: flex-start;
  display: flex;
  margin-top: 12px;
  min-width: 332px;
}

.overlap-group-56 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 50px;
  min-width: 330px;
  padding: 16px 21px;
}

.text-34 {
  letter-spacing: 0;
  min-height: 16px;
}

.group-6-1.group-7,
.group-6-1.group-7-1,
.group-6-1.group-7-2,
.group-6-1.group-7-3 {
  margin-left: 29px;
}

.group-6-1.group-7-1 .text-33 {
  width: 107px;
}

.group-6-1.group-6-2 .text-33,
.group-6-1.group-7 .text-33 {
  width: 144px;
}

.group-6-1.group-6-3 .text-33,
.group-6-1.group-7-3 .text-33 {
  width: 98px;
}

.group-6-1.group-124 {
  align-self: flex-start;
  display: flex;
  flex-direction: column;
  height: 78px;
  margin-left: 3px;
  margin-top: 32px;
  width: 332px;
}

.group-6-1.group-124 .text-33 {
  width: 143px;
}

.group-6-1.group-6 .text-33 {
  width: 67px;
}
</style>
