<template>
  <div :class="[`group-58`, className || ``]">
    <div class="text-95 myriadgeo-medium-black-16px">{{ text95 }}</div>
    <div class="group-5-6">
      <div class="overlap-group-18 border-1px-link-water">
        <div class="text-10 myriadgeo-medium-bali-hai-16px">{{ text96 }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group58",
  props: ["text95", "text96", "className"],
};
</script>

<style>
.group-58 {
  display: flex;
  flex-direction: column;
  height: 78px;
  left: 571px;
  position: absolute;
  top: 283px;
  width: 322px;
}

.text-95 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 22px;
  width: 52px;
}

.group-5-6 {
  align-items: flex-start;
  display: flex;
  margin-top: 12px;
  min-width: 322px;
}

.overlap-group-18 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 50px;
  min-width: 320px;
  padding: 16px 21px;
}

.text-10 {
  letter-spacing: 0;
  min-height: 16px;
}

.group-58.group-60,
.group-58.group-60-1,
.group-58.group-60-2 {
  top: 383px;
}

.group-58.group-60 .text-95,
.group-58.group-60-1 .text-95,
.group-58.group-60-2 .text-95 {
  width: 97px;
}

.group-58.group-59,
.group-58.group-59-1,
.group-58.group-59-2 {
  left: 911px;
}

.group-58.group-59 .text-95,
.group-58.group-59-1 .text-95,
.group-58.group-59-2 .text-95 {
  width: 123px;
}

.group-58.group-61,
.group-58.group-61-1,
.group-58.group-61-2 {
  left: 911px;
  top: 383px;
}

.group-58.group-61 .text-95,
.group-58.group-61-1 .text-95,
.group-58.group-61-2 .text-95 {
  width: 263px;
}
</style>
