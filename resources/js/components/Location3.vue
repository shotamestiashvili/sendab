<template>
  <div :class="[`location-26-1 border-1px-botticelli`, className || ``]">
    <div class="text-1-7 myriadgeo-bold-cinnabar-16px">ბუდაპეშტი</div>
  </div>
</template>

<script>
export default {
  name: "Location3",
  props: ["className"],
};
</script>

<style>
.location-26-1 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  width: 115px;
}

.text-1-7 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 87px;
}

.location-26-1.location-34,
.location-26-1.location-35 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  opacity: 0.4;
  width: 115px;
}
</style>
