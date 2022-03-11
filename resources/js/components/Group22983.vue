<template>
  <div :class="[`group-22983-3`, className || ``]">
    <img class="ellipse-9" :src="ellipse9" />
    <div class="text-container-3">
      <div class="text-3-8 myriadgeo-medium-black-16px">{{ text325 }}</div>
      <div class="text-3-9 myriadgeo-medium-smalt-blue-14px">შენი ამანათი იმყოფება: ქუთ...</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group22983",
  props: ["ellipse9", "text325", "className"],
};
</script>

<style>
.group-22983-3 {
  align-items: center;
  display: flex;
  margin-right: 25px;
  min-width: 263px;
}

.ellipse-9 {
  height: 50px;
  object-fit: cover;
  width: 50px;
}

.text-container-3 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 12px;
  margin-top: 3px;
  min-height: 39px;
  width: 197px;
}

.text-3-8 {
  letter-spacing: 0;
  min-height: 16px;
}

.text-3-9 {
  letter-spacing: 0;
  margin-top: 9px;
  min-height: 14px;
}

.group-22983-3.group-22985-3 {
  margin-top: 20px;
}

.group-22983-3.group-22986-1 {
  margin-top: 35px;
}

.group-22983-3.group-22983-4 {
  margin-right: 22px;
  margin-top: 92px;
}

.group-22983-3.group-22985-4 {
  margin-right: 22px;
  margin-top: 20px;
}

.group-22983-3.group-22986-2 {
  margin-right: 22px;
  margin-top: 35px;
}
</style>
