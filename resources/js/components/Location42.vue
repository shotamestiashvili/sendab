<template>
  <div class="location-79 border-1px-botticelli">
    <div class="text-13-18 myriadgeo-bold-cinnabar-16px">
      <span class="myriadgeo-bold-cinnabar-16px">{{ children }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Location42",
  props: ["children"],
};
</script>

<style>
.location-79 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  min-width: 143px;
  padding: 10px 13px;
}

.text-13-18 {
  letter-spacing: 0;
  min-height: 16px;
}
</style>
