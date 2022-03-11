<template>
  <div :class="[`group-9-2-1`, className || ``]">
    <div class="rectangle-43-2"></div>
    <div class="flex-row-49 myriadgeo-medium-black-18px">
      <div class="text-489">მიღებული შეკვეთები</div>
      <div class="number-68">0</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group93",
  props: ["text489", "number", "className"],
};
</script>

<style>
.group-9-2-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-top: 24px;
  min-height: 43px;
  width: 634px;
}

.rectangle-43-2 {
  background-color: var(--botticelli-2);
  height: 1px;
  width: 630px;
}

.flex-row-49 {
  align-items: flex-start;
  display: flex;
  height: 18px;
  margin-top: 24px;
  min-width: 629px;
}

.text-489 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 222px;
}

.number-68 {
  letter-spacing: 0;
  margin-left: 397px;
  min-height: 18px;
  min-width: 10px;
  text-align: right;
}

.group-9-2-1.group-9-2 .text-489 {
  min-width: 212px;
}

.group-9-2-1.group-9-2 .number-68 {
  margin-left: 407px;
}
</style>
