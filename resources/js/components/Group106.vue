<template>
  <div :class="[`group-106 myriadgeo-medium-black-18px`, className || ``]">
    <div class="text-947">{{ text947 }}</div>
    <div class="group-87">
      <div class="overlap-group-160 border-3px-white">
        <img
          class="check-svgrepo-com-1-3"
          src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/check-svgrepo-com-1-1@2x.png"
        />
      </div>
    </div>
    <div class="text-948">ვერიფიცირებულია</div>
  </div>
</template>

<script>
export default {
  name: "Group106",
  props: ["text947", "className"],
};
</script>

<style>
.group-106,
.group-106.group-10-1 {
  display: flex;
  margin-top: 30px;
  width: 635px;
}

.text-947 {
  height: 18px;
  letter-spacing: 0;
  margin-top: 6px;
  width: 193px;
}

.group-87 {
  align-items: flex-start;
  display: flex;
  height: 30px;
  justify-content: center;
  margin-left: 228px;
  min-width: 30px;
}

.overlap-group-160 {
  align-items: flex-start;
  background-color: var(--green);
  border-radius: 18px;
  display: flex;
  height: 36px;
  margin-top: -3px;
  min-width: 36px;
  padding: 8px;
}

.check-svgrepo-com-1-3 {
  height: 14px;
  width: 14px;
}

.text-948 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 18px;
  margin-top: 6px;
  text-align: right;
  width: 162px;
}

.group-106.group-10-1-1 .text-947 {
  width: 272px;
}

.group-106.group-10-1-1 .group-87 {
  margin-left: 149px;
}
</style>
