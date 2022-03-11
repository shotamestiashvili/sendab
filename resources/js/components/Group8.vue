<template>
  <div class="group-8-7 border-1px-st-tropaz">
    <img class="account-30" :src="account" />
    <div class="text-1345 myriadgeo-bold-st-tropaz-16px">
      <span class="myriadgeo-bold-st-tropaz-16px">{{ spanText }}</span>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group8",
  props: ["account", "spanText"],
};
</script>

<style>
.group-8-7 {
  align-items: flex-start;
  border-radius: 50px;
  display: flex;
  height: 50px;
  margin-top: 36px;
  min-width: 672px;
  opacity: 0.5;
  padding: 12px 233px;
}

.account-30 {
  height: 24px;
  width: 24px;
}

.text-1345 {
  align-self: center;
  letter-spacing: 0;
  margin-bottom: 2px;
  margin-left: 14px;
  min-height: 16px;
  min-width: 167px;
}
</style>
