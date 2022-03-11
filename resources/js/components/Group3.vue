<template>
  <div class="group-3-9">
    <div class="overlap-group-52">
      <img class="account-7" :src="account" />
      <div class="text-280 myriadgeo-bold-white-16px">ავტორიზაცია</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group3",
  props: ["account"],
};
</script>

<style>
.group-3-9,
.group-3-10,
.group-3-11,
.group-3-12 {
  align-items: flex-start;
  display: flex;
  margin-left: 8px;
  min-width: 184px;
}

.overlap-group-52,
.overlap-group-53,
.overlap-group-54,
.overlap-group-55 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 0 15px;
}

.account-7,
.account-8,
.account-9,
.account-10 {
  height: 30px;
  width: 30px;
}

.text-280,
.text-556,
.text-721,
.text-995 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 107px;
}
</style>
