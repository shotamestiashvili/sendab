<template>
  <div class="location-77 border-1px-botticelli">
    <div class="text-13-16 myriadgeo-bold-st-tropaz-16px">
      <span class="myriadgeo-bold-st-tropaz-16px">{{ children }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Location22",
  props: ["children"],
};
</script>

<style>
.location-77 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 7px;
  display: flex;
  height: 38px;
  margin-left: 19px;
  margin-top: -1px;
  min-width: 95px;
  padding: 10px 13px;
}

.text-13-16 {
  letter-spacing: 0;
  min-height: 16px;
}
</style>
