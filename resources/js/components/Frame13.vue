<template>
  <div class="frame-13-1 screen">
    <div class="group-22971">
      <div class="overlap-group-51"><img class="phone-svgrepo-com-1" :src="phoneSvgrepoCom1" /></div>
      <div class="frame-12-1">
        <div class="phone-78 myriadgeo-bold-white-18px">{{ phone }}</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Frame13",
  props: ["phoneSvgrepoCom1", "phone"],
};
</script>

<style>
.frame-13-1 {
  display: flex;
  height: 100vh;
  min-height: 104px;
  min-width: 191px;
  width: 100%;
}

.overlay .frame-13-1 {
  background-color: #00000000;
}

.group-22971 {
  align-items: center;
  display: flex;
  flex-direction: column;
  min-height: 104px;
  width: 191px;
}

.overlap-group-51 {
  align-items: flex-start;
  background-color: var(--iceberg);
  border: 4px solid var(--cyan--aqua);
  border-radius: 30px;
  display: flex;
  height: 60px;
  margin-left: 1px;
  min-width: 60px;
  padding: 12px;
}

.phone-svgrepo-com-1 {
  height: 28px;
  width: 28px;
}

.frame-12-1 {
  background-color: var(--black);
  border-radius: 30px;
  display: flex;
  height: 38px;
  margin-top: 6px;
  width: 191px;
}

.phone-78 {
  height: 18px;
  letter-spacing: 0;
  margin-left: 15px;
  margin-top: 10px;
  width: 161px;
}

#overlay-frame-13 {
  background-color: transparent;
}

#overlay-frame-13 .frame-13 {
  left: 1393px;
  top: 263px;
}

#overlay-frame-13 .container-center-horizontal {
  justify-content: normal;
}
</style>
