<template>
  <div class="location-78 border-1px-botticelli">
    <div class="text-13-17 myriadgeo-bold-cinnabar-16px">
      <span class="myriadgeo-bold-cinnabar-16px">{{ children }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Location32",
  props: ["children"],
};
</script>

<style>
.location-78 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  min-width: 115px;
  padding: 10px 13px;
}

.text-13-17 {
  letter-spacing: 0;
  min-height: 16px;
}
</style>
