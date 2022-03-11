<template>
  <div :class="[`group-29`, className || ``]">
    <div class="text-139 myriadgeo-medium-black-16px">შეფუთვის დეტალები</div>
    <div class="overlap-group-container-3">
      <div class="overlap-group-32 border-1px-link-water">
        <div class="text-14 myriadgeo-medium-bali-hai-16px">
            <input size="3" class="parcel_details1" type="text" placeholder="წონა"/>
        </div>
        <div class="overlap-group1-9"><div class="kg myriadgeo-medium-white-14px-2">kg</div></div>
      </div>
      <div class="overlap-group-30 border-1px-link-water">
        <div class="text-141 myriadgeo-medium-bali-hai-16px">
            <input size="3" class="parcel_details1" type="text" placeholder="სიგა."/>
        </div>
        <div class="overlap-group-33"><div class="cm myriadgeo-medium-white-14px-2">cm</div></div>
      </div>
      <div class="overlap-group-30 border-1px-link-water">
        <div class="text-14 myriadgeo-medium-bali-hai-16px">
            <input size="3" class="parcel_details1" type="text" placeholder="სიმა."/>
        </div>
        <div class="overlap-group-34"><div class="cm-1 myriadgeo-medium-white-14px-2">cm</div></div>
      </div>
      <div class="overlap-group-30 border-1px-link-water">
        <div class="text-143 myriadgeo-medium-bali-hai-16px">
            <input size="3" class="parcel_details1" type="text" placeholder="სიგრ."/>
        </div>
        <div class="overlap-group-35"><div class="cm-2 myriadgeo-medium-white-14px-2">cm</div></div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Group29",
  props: ["className"],
};
</script>

<style>
.group-29 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 26px;
  min-height: 74px;
  width: 492px;
}

.text-139 {
  letter-spacing: 0;
  min-height: 16px;
}

.overlap-group-container-3 {
  align-items: flex-start;
  display: flex;
  margin-top: 18px;
  min-width: 490px;
}

.overlap-group-32 {
  align-items: center;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  justify-content: flex-end;
  min-width: 115px;
  padding: 0 3px;
}

.text-14 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 38px;
}

.overlap-group1-9 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  justify-content: flex-end;
  margin-left: 21px;
  min-width: 35px;
  padding: 0 9px;
}

.kg {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 15px;
}

.overlap-group-30 {
  align-items: center;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  justify-content: flex-end;
  margin-left: 10px;
  min-width: 115px;
  padding: 0 3px;
}

.text-141 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 37px;
}

.overlap-group-33 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 22px;
  min-width: 35px;
  padding: 0 8px;
}

.cm,
.cm-1,
.cm-2 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 19px;
  text-align: center;
}

.overlap-group-34 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 21px;
  min-width: 35px;
  padding: 0 8px;
}

.text-143 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 41px;
}

.overlap-group-35 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 18px;
  min-width: 35px;
  padding: 0 8px;
}

.group-29.group-29-1 {
  margin-left: 46px;
}
input:focus {
    outline:none;
}
</style>

<style scoped>
.parcel_details1 {
    border-top-style: hidden;
    border-right-style: hidden;
    border-left-style: hidden;
    border-bottom-style: hidden;
    border-radius: 40px;
    display: flex;
    height: 34px;
    justify-content: flex-end;
    min-width: 45px;
    align-items: center;
    background-color: transparent;
    /*border-radius: 40px;*/
    /*!*box-shadow: 0px 2px 1px #d1eaf140;*!*/
    /*height: 35px;*/
    /*justify-content: flex-end;*/
    /*min-width: 65px;*/
    padding: 0 3px;
    position: relative;
    border-color: inherit;
    -webkit-box-shadow: none;
    box-shadow: none;
}
</style>
