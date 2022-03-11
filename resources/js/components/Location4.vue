<template>
  <div :class="[`location-36 border-1px-botticelli`, className || ``]">
    <div class="text-1-9 myriadgeo-bold-cinnabar-16px">დუსელდორფი</div>
  </div>
</template>

<script>
export default {
  name: "Location4",
  props: ["className"],
};
</script>

<style>
.location-36 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  width: 143px;
}

.text-1-9 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 13px;
  margin-top: 10px;
  width: 115px;
}

.location-36.location-44,
.location-36.location-45 {
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  opacity: 0.4;
  width: 143px;
}
</style>
