<template>
  <div class="frame-1-4 border-2px-botticelli">
    <div class="text-3-2 myriadgeo-bold-st-tropaz-18px">{{ text36 }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame17",
  props: ["text36"],
};
</script>

<style>
.frame-1-4,
.frame-1-5,
.frame-1-6 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  margin-left: 10px;
  width: 90px;
}

.text-3-2,
.text-63,
.text-69-1 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 40px;
}
</style>
