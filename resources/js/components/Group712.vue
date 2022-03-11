<template>
    <v-app>
  <div :class="[`group-71-15-1`, className || ``]">
    <div class="flex-col-37">
      <div class="text-36 myriadgeo-medium-black-16px">ირაკლი კურტანიძე</div>
      <div class="star-svgrepo-com-container-6">
        <img class="star-svgrepo-com-5-9" :src="starSvgrepoCom5" /><img
          class="star-svgrepo-com-10"
          :src="starSvgrepoCom6"
        /><img class="star-svgrepo-com-10" :src="starSvgrepoCom7" /><img
          class="star-svgrepo-com-10"
          :src="starSvgrepoCom8"
        /><img class="star-svgrepo-com-10" :src="starSvgrepoCom9" />
      </div>
    </div>
  </div>

    </v-app>
</template>

<script>
export default {
  name: "Group712",
  props: ["starSvgrepoCom5", "starSvgrepoCom6", "starSvgrepoCom7", "starSvgrepoCom8", "starSvgrepoCom9", "className"],
};
</script>

<style>
.group-71-15-1 {
  align-items: center;
  display: flex;
  margin-left: 1px;
  min-width: 208px;
}

.ellipse-9-9 {
  height: 50px;
  object-fit: cover;
  width: 50px;
}

.flex-col-37 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 1px;
  min-height: 37px;
  width: 144px;
}

.text-36 {
  letter-spacing: 0;
  min-height: 16px;
}

.star-svgrepo-com-container-6 {
  align-items: flex-start;
  display: flex;
  margin-top: 7px;
  min-width: 82px;
}

.star-svgrepo-com-5-9 {
  height: 14px;
  width: 14px;
}

.star-svgrepo-com-10 {
  height: 14px;
  margin-left: 3px;
  width: 14px;
}

.group-71-15-1.group-71-21 {
  align-items: center;
  display: flex;
  height: 50px;
  left: 34px;
  min-width: 208px;
  position: absolute;
  top: 29px;
}

.group-71-15-1.group-71-22 {
  align-items: center;
  display: flex;
  min-width: 208px;
}

.group-71-15-1.group-71-20 {
  margin-left: unset;
}
</style>
