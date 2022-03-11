<template>
  <div :class="[`frame-14-9 border-2px-botticelli`, className || ``]">
    <div class="text-4-1">{{ text40 }}</div>
  </div>
</template>

<script>
export default {
  name: "Frame142",
  props: ["text40", "className"],
};
</script>

<style>
.frame-14-9 {
  background-color: var(--white);
  border-radius: 15px;
  display: flex;
  height: 63px;
  width: 273px;
}

.text-4-1 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 25px;
  margin-top: 22.5px;
  width: 223px;
}

.frame-14-9.frame-15-11,
.frame-14-9.frame-15-10 {
  margin-left: 10px;
}
</style>
