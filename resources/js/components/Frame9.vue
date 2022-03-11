<template>
  <div class="container-center-horizontal">
<!--    <div class="frame-9 screen">-->
<!--      <div class="group-3-2">-->
<!--        <div class="overlap-group8">-->
<!--          <img class="ellipse-10-1" :src="ellipse101" />-->
<!--          <div class="text-68 myriadgeo-bold-st-tropaz-16px">{{ text68 }}</div>-->
<!--          <img class="x211688_forward_arrow_icon-1-26" :src="x211688_Forward_Arrow_Icon1" />-->
<!--        </div>-->
<!--      </div>-->
<!--      <div class="overlap-group9-1">-->
        <div class="overlap-group5-3 border-5px-cyan--aqua">
          <div class="flex-row">
            <div class="overlap-group6-5">
              <img class="ellipse-10-2" :src="ellipse102" />
              <div class="ellipse-11 border-3px-white"></div>
              <img class="check-svgrepo-com-1" :src="checkSvgrepoCom1" />
            </div>
            <div class="text-container">
              <div class="text-59">{{ text59 }}</div>
              <div class="text-60">
                <span class="span0">{{ spanText1 }}</span
                ><span class="span1">{{ spanText2 }}</span
                ><span class="span2">{{ spanText3 }}</span>
              </div>
            </div>
            <div class="overlap-group7-1 border-1px-ziggurat">
              <div class="text-61 myriadgeo-bold-st-tropaz-20px">{{ text61 }}</div>
            </div>
          </div>
          <div class="group-23018">
            <router-link to="/messenger-1">
              <div class="group-10">
                <div class="overlap-group-11 border-2px-cyan--aqua">
                  <img class="chat-svgrepo-com-1" :src="chatSvgrepoCom1" />
                  <div class="overlap-group1-3" :style="{ 'background-image': 'url(' + overlapGroup1 + ')' }">
                    <div class="number-2 myriadgeo-bold-white-18px">{{ number }}</div>
                  </div>
                </div>
              </div></router-link
            ><router-link to="/messenger">
              <div class="group-11"><img class="notification-svgrepo-com-1" :src="notificationSvgrepoCom1" /></div
            ></router-link>
          </div>
          <div class="group-23019">
            <router-link to="/my-profile-general-info-6">
              <div class="group-8">
                <div class="overlap-group-10">
                  <img class="account-1" :src="account" />
                  <div class="text-65 myriadgeo-medium-st-tropaz-16px">{{ text65 }}</div>
                </div>
              </div></router-link
            ><router-link to="/my-profile-my-orders-1">
              <div class="group">
                <div class="overlap-group-12">
                  <img class="package-svgrepo-com-1-2" :src="packageSvgrepoCom1" />
                  <div class="text-63-1 myriadgeo-medium-st-tropaz-16px">{{ text63 }}</div>
                </div>
              </div></router-link
            ><router-link to="/my-profile-account-settings-2">
              <div class="group">
                <div class="overlap-group-10">
                  <img class="setting-svgrepo-com-1" :src="settingSvgrepoCom1" />
                  <div class="text-64 myriadgeo-medium-st-tropaz-16px">{{ text64 }}</div>
                </div>
              </div></router-link
            ><router-link to="/my-profile-wallet-3">
              <div class="group">
                <div class="overlap-group3-24">
                  <img class="wallet-svgrepo-com-1-1" :src="walletSvgrepoCom11" />
                  <div class="text-66 myriadgeo-medium-st-tropaz-16px">{{ text66 }}</div>
                </div>
              </div></router-link
            >
          </div>
          <router-link to="/make-an-offer">
            <div class="group-3-3">
              <div class="overlap-group-13">
                <div class="text-62">{{ text62 }}</div>
              </div>
            </div></router-link
          >
          <div class="overlap-group4-2">
            <div class="text-67 myriadgeo-medium-cinnabar-16px">{{ text67 }}</div>
          </div>
        </div>
        <div class="rectangle-39"></div>
      </div>
<!--    </div>-->
<!--  </div>-->
</template>

<script>
export default {
  name: "Frame9",
  props: [
    "ellipse101",
    "text68",
    "x211688_Forward_Arrow_Icon1",
    "ellipse102",
    "checkSvgrepoCom1",
    "text59",
    "spanText1",
    "spanText2",
    "spanText3",
    "text61",
    "chatSvgrepoCom1",
    "overlapGroup1",
    "number",
    "notificationSvgrepoCom1",
    "account",
    "text65",
    "packageSvgrepoCom1",
    "text63",
    "settingSvgrepoCom1",
    "text64",
    "walletSvgrepoCom11",
    "text66",
    "text62",
    "text67",
  ],
};
</script>

<style>
.frame-9 {
  align-items: flex-end;
  display: flex;
  flex-direction: column;
  min-height: 430px;
  overflow-x: hidden;
  width: 370px;
}

.overlay .frame-9 {
  background-color: #00000000;
}

.group-3-2 {
  align-items: flex-start;
  display: flex;
  margin-right: -2px;
  min-width: 184px;
}

.overlap-group8 {
  align-items: center;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 50px;
  min-width: 182px;
  padding: 0 12px;
}

.ellipse-10-1 {
  height: 30px;
  object-fit: cover;
  width: 30px;
}

.text-68 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 74px;
}

.x211688_forward_arrow_icon-1-26 {
  height: 14px;
  margin-left: 21px;
  margin-top: 0;
  width: 14px;
}

.overlap-group9-1 {
  height: 620px;
  margin-right: -6px;
  margin-top: 20px;
  position: relative;
  width: 376px;
}

.overlap-group5-3 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 20px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 620px;
  padding: 25px 20px;
  position: absolute;
  top: 0;
  width: 370px;
}

.flex-row {
  align-items: center;
  display: flex;
  margin-left: 10px;
  min-width: 268px;
}

.overlap-group6-5 {
  height: 65px;
  position: relative;
  width: 65px;
}

.ellipse-10-2 {
  height: 60px;
  left: 0;
  object-fit: cover;
  position: absolute;
  top: 5px;
  width: 60px;
}

.ellipse-11 {
  background-color: var(--green);
  border-radius: 13px;
  height: 26px;
  left: 39px;
  position: absolute;
  top: 0;
  width: 26px;
}

.check-svgrepo-com-1 {
  height: 10px;
  left: 47px;
  position: absolute;
  top: 8px;
  width: 10px;
}

.text-container {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 13px;
  margin-top: 6px;
  min-height: 41px;
  width: 147px;
}

.text-59 {
  color: var(--black);
  font-family: var(--font-family-myriad_geo-bold);
  font-size: 12px;
  font-weight: 700;
  letter-spacing: 0;
  margin-left: 1px;
  min-height: 12px;
}

.text-60 {
  color: transparent;
  font-family: var(--font-family-myriad_geo-medium);
  font-size: var(--font-size-xl);
  font-weight: 500;
  letter-spacing: 0;
  margin-top: 9px;
  min-height: 20px;
}

.span0 {
  color: var(--black);
  font-weight: 500;
}

.span1 {
  color: var(--black);
  font-family: var(--font-family-myriad_geo-bold);
  font-weight: 700;
}

.span2 {
  color: var(--green);
  font-family: var(--font-family-myriad_geo-bold);
  font-weight: 700;
}

.overlap-group7-1 {
  align-items: flex-start;
  align-self: flex-end;
  border-radius: 15px;
  display: flex;
  height: 30px;
  margin-bottom: 6px;
  margin-left: 13px;
  min-width: 30px;
  padding: 4px 8px;
}

.text-61 {
  letter-spacing: 0;
  min-height: 20px;
}

.group-23018 {
  display: flex;
  margin-top: 25px;
  width: 320px;
}

.group-10 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  min-width: 157px;
}

.overlap-group-11 {
  align-items: flex-start;
  background-color: var(--lily-white);
  border-radius: 10px;
  display: flex;
  height: 65px;
  justify-content: flex-end;
  min-width: 155px;
}

.chat-svgrepo-com-1 {
  align-self: center;
  height: 30px;
  margin-bottom: 3px;
  width: 30px;
}

.overlap-group1-3 {
  align-items: flex-end;
  background-size: 100% 100%;
  display: flex;
  height: 30px;
  margin-left: 34px;
  min-width: 30px;
  padding: 5px 10px;
}

.number-2 {
  letter-spacing: 0;
  min-height: 18px;
  min-width: 10px;
}

.group-11 {
  background-color: var(--lily-white);
  border-radius: 10px;
  cursor: pointer;
  display: flex;
  height: 65px;
  margin-left: 8px;
  width: 155px;
}

.notification-svgrepo-com-1 {
  height: 30px;
  margin-left: 63px;
  margin-top: 18px;
  width: 30px;
}

.group-23019 {
  display: flex;
  flex-direction: column;
  height: 215px;
  margin-top: 14px;
  width: 320px;
}

.group-8 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  min-width: 322px;
}

.overlap-group-10 {
  align-items: center;
  background-color: var(--lily-white);
  border-radius: 10px;
  display: flex;
  height: 50px;
  min-width: 320px;
  padding: 0 18px;
}

.account-1,
.setting-svgrepo-com-1 {
  height: 30px;
  width: 30px;
}

.text-65 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 113px;
}

.group {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-top: 5px;
  min-width: 322px;
}

.overlap-group-12 {
  align-items: flex-start;
  background-color: var(--lily-white);
  border-radius: 10px;
  display: flex;
  height: 50px;
  min-width: 320px;
  padding: 12px 21px;
}

.package-svgrepo-com-1-2 {
  height: 24px;
  width: 24px;
}

.text-63-1 {
  align-self: center;
  letter-spacing: 0;
  margin-left: 14px;
  min-height: 16px;
  min-width: 117px;
}

.text-64 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 183px;
}

.overlap-group3-24 {
  align-items: flex-start;
  background-color: var(--lily-white);
  border-radius: 10px;
  display: flex;
  height: 50px;
  min-width: 320px;
  padding: 10px 20px;
}

.wallet-svgrepo-com-1-1 {
  height: 26px;
  width: 26px;
}

.text-66 {
  align-self: center;
  letter-spacing: 0;
  margin-left: 13px;
  min-height: 16px;
  min-width: 135px;
}

.group-3-3 {
  align-items: flex-start;
  cursor: pointer;
  display: flex;
  margin-top: 61px;
  min-width: 322px;
}

.overlap-group-13 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 10px;
  display: flex;
  height: 50px;
  min-width: 320px;
  padding: 0 103px;
}

.text-62 {
  color: var(--white);
  font-family: var(--font-family-myriad_geo-medium);
  font-size: var(--font-size-m);
  font-weight: 500;
  letter-spacing: 0;
  min-height: 16px;
  min-width: 114px;
}

.overlap-group4-2 {
  align-items: center;
  background-color: var(--carousel-pink);
  border-radius: 10px;
  display: flex;
  height: 50px;
  justify-content: flex-end;
  margin-top: 15px;
  min-width: 320px;
  padding: 0 70px;
}

.text-67 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 179px;
}

.rectangle-39 {
  background-color: #d5e6ea;
  height: 1px;
  left: 25px;
  position: absolute;
  top: 444px;
  width: 320px;
}

#overlay-frame-9 {
  background-color: transparent;
}

#overlay-frame-9 .frame-9 {
  left: 1171px;
  top: 33px;
}

#overlay-frame-9 .container-center-horizontal {
  justify-content: normal;
}
</style>
