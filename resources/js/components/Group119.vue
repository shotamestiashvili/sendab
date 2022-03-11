<template>
  <div :class="[`group-119-1`, className || ``]">
    <div class="overlap-group-153">
      <div class="rectangle-46-2"></div>
    </div>
    <p class="text-868 myriadgeo-medium-white-14px">
      <span class="span0-2 myriadgeo-medium-black-14px">წავიკითხე და ვეთანხმები სენდაბის <br /></span
      ><span class="span1-6 myriadgeo-medium-cyan--aqua-14px">წესებს და პირობებს</span>
    </p>
  </div>
</template>

<script>
export default {
  name: "Group119",
  props: ["className"],
};
</script>

<style>
.group-119-1 {
  align-items: center;
  display: flex;
  height: 42px;
  left: 0;
  min-width: 289px;
  position: absolute;
  top: 105px;
}

.overlap-group-153 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 30px;
  display: flex;
  height: 30px;
  min-width: 30px;
  padding: 0 7px;
}

.rectangle-46-2 {
  background-color: var(--white);
  border-radius: 30px;
  height: 16px;
  width: 16px;
}

.text-868 {
  letter-spacing: 0;
  line-height: 21px;
  margin-left: 18px;
  min-height: 42px;
  min-width: 239px;
}

.span1-6 {
  text-decoration: underline;
}

.group-119-1.group-119-2 {
  left: unset;
  margin-left: 2px;
  margin-top: 27px;
  position: unset;
  top: unset;
}
</style>
