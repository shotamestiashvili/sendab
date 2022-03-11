<template>
  <div :class="[`group-58-5`, className || ``]">
    <div class="text-424 myriadgeo-medium-black-16px" >{{ text424 }}</div>
    <div class="group-5-14">
      <div class="overlap-group-102 border-1px-link-water">
        <div class="text-42-1 myriadgeo-medium-bali-hai-16px">{{ text425 }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group583",
  props: ["text424", "text425", "className"],
};
</script>

<style>
.group-58-5 {
  display: flex;
  flex-direction: column;
  height: 78px;
  width: 412px;
}

.text-424 {
  height: 16px;
  letter-spacing: 0;
  margin-left: 22px;
  width: 150px;
}

.group-5-14 {
  align-items: flex-start;
  display: flex;
  margin-top: 12px;
  min-width: 412px;
}

.overlap-group-102 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 50px;
  min-width: 410px;
  padding: 16px 21px;
}

.text-42-1 {
  letter-spacing: 0;
  min-height: 16px;
}

.group-58-5.group-9,
.group-58-5.group-9-1,
.group-58-5.group-59-3 {
  margin-top: 22px;
}

.group-58-5.group-9-1 .text-424 {
  width: 129px;
}

.group-58-5.group-9 .text-424 {
  width: 206px;
}

.group-58-5.group-58-6 {
  margin-top: 2px;
}

.group-58-5.group-58-6 .text-424 {
  width: 97px;
}

.group-58-5.group-59-3 .text-424 {
  width: 77px;
}

.group-58-5.group-88-5 {
  align-self: flex-end;
  margin-top: 63px;
}

.group-58-5.group-88-5 .text-424 {
  width: 230px;
}
</style>
