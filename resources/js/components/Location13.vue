<template>
  <div class="location-76 border-1px-botticelli">
    <div class="text-13-15 myriadgeo-bold-st-tropaz-16px">
      <span class="myriadgeo-bold-st-tropaz-16px">{{ children }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Location13",
  props: ["children"],
};
</script>

<style>
.location-76 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-top: -1px;
  min-width: 101px;
  padding: 10px 13px;
}

.text-13-15 {
  letter-spacing: 0;
  min-height: 16px;
}
</style>
