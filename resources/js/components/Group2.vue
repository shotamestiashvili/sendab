<template>
  <div :class="[`group-2`, className || ``]">
    <div class="overlap-group2">
      <div class="text-6 myriadgeo-medium-mid-gray-14px">ქართული</div>
      <img
        class="x211688_forward_arrow_icon-1"
        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/211688-forward-arrow-icon-1@2x.png"
      />
    </div>
  </div>
</template>

<script>
export default {
  name: "Group2",
  props: ["className"],
};
</script>

<style>
.group-2 {
  align-items: flex-start;
  display: flex;
  margin-left: 45px;
  margin-top: 7px;
  min-width: 112px;
}

.overlap-group2 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  min-width: 110px;
  padding: 10px 12px;
}

.text-6 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1 {
  align-self: flex-end;
  height: 14px;
  margin-bottom: 0;
  margin-left: 4px;
  width: 14px;
}

.group-2.group-2-1,
.group-2.group-2-2,
.group-2.group-2-3,
.group-2.group-2-4,
.group-2.group-2-5,
.group-2.group-2-6 {
  margin-left: 36.2px;
}
</style>
