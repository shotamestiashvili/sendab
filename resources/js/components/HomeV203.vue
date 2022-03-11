<template>
  <div class="container-center-horizontal">
    <div class="home-v20 screen">
      <div class="group-25-35">
        <img class="logo-40" :src="logo" />
        <div class="overlap-group2-42">
          <div class="text-1390 myriadgeo-medium-mid-gray-14px">
            <span class="myriadgeo-medium-mid-gray-14px">{{ spanText1 }}</span>
          </div>
          <img class="x211688_forward_arrow_icon-1-100" :src="x211688_Forward_Arrow_Icon11" />
        </div>
        <div class="group-53-4 myriadgeo-bold-st-tropaz-16px">
          <div class="text-1385">
            <span class="myriadgeo-bold-st-tropaz-16px">{{ spanText2 }}</span>
          </div>
          <div class="text-1386">
            <span class="myriadgeo-bold-st-tropaz-16px">{{ spanText3 }}</span>
          </div>
          <div class="text-1387">
            <span class="myriadgeo-bold-st-tropaz-16px">{{ spanText4 }}</span>
          </div>
        </div>
        <div class="overlap-group1-62">
          <img class="package-svgrepo-com-1-43" :src="packageSvgrepoCom1" />
          <div class="text-1389 myriadgeo-bold-white-16px">
            <span class="myriadgeo-bold-white-16px">{{ spanText5 }}</span>
          </div>
        </div>
        <div class="overlap-group-184">
          <img class="account-29" :src="account1" />
          <div class="text-1388 myriadgeo-bold-white-16px">
            <span class="myriadgeo-bold-white-16px">{{ spanText6 }}</span>
          </div>
        </div>
      </div>
      <div class="overlap-group17-1">
        <div class="text-1341 myriadgeo-medium-black-48px">
          <span class="myriadgeo-medium-black-48px">{{ spanText7 }}</span>
        </div>
        <div class="overlap-group16-1">
          <div class="overlap-group9-5">
            <div class="text-container-9 myriadgeo-medium-black-16px">
              <div class="text-1346">
                <span class="myriadgeo-medium-black-16px">{{ spanText8 }}</span>
              </div>
              <div class="text-1347">
                <span class="myriadgeo-medium-black-16px">{{ spanText9 }}</span>
              </div>
            </div>
            <div class="overlap-group-container-7">
              <div class="overlap-group-181 border-1px-link-water">
                <text1 :spanText="text11Props.spanText" />
                <img class="x211688_forward_arrow_icon-1-99" :src="x211688_Forward_Arrow_Icon12" />
              </div>
              <div class="overlap-group-182 border-1px-link-water">
                <text1 :spanText="text12Props.spanText" />
                <img class="x211688_forward_arrow_icon-1-99" :src="x211688_Forward_Arrow_Icon13" />
              </div>
            </div>
            <div class="overlap-group-container-8">
              <div class="overlap-group-181 border-1px-link-water">
                <text1 :spanText="text13Props.spanText" :className="text13Props.className" />
              </div>
              <div class="overlap-group-182 border-1px-link-water">
                <text1 :spanText="text14Props.spanText" :className="text14Props.className" />
              </div>
            </div>
            <div class="rectangle-13-1"></div>
            <div class="group-container-51">
              <div class="group-13-3">
                <div class="text-13-12 myriadgeo-medium-black-16px">
                  <span class="myriadgeo-medium-black-16px">{{ spanText14 }}</span>
                </div>
                <div class="overlap-group5-25 border-1px-link-water">
                  <text1 :spanText="text15Props.spanText" :className="text15Props.className" />
                  <img class="x211688_forward_arrow_icon-1-101" :src="x211688_Forward_Arrow_Icon14" />
                </div>
              </div>
              <div class="group-29-2">
                <div class="text-13-12 myriadgeo-medium-black-16px">
                  <span class="myriadgeo-medium-black-16px">{{ spanText16 }}</span>
                </div>
                <div class="overlap-group-container-9">
                  <div class="overlap-group-185 border-1px-link-water">
                    <text1 :spanText="text16Props.spanText" :className="text16Props.className" />
                    <div class="overlap-group1-63">
                      <div class="kg-2 myriadgeo-medium-white-14px-2">
                        <span class="myriadgeo-medium-white-14px-2">{{ spanText10 }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="overlap-group-183 border-1px-link-water">
                    <text1 :spanText="text17Props.spanText" :className="text17Props.className" />
                    <div class="overlap-group-186">
                      <div class="cm-6 myriadgeo-medium-white-14px-2">
                        <span class="myriadgeo-medium-white-14px-2">{{ spanText11 }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="overlap-group-183 border-1px-link-water">
                    <text1 :spanText="text18Props.spanText" :className="text18Props.className" />
                    <div class="overlap-group-187">
                      <div class="cm-7 myriadgeo-medium-white-14px-2">
                        <span class="myriadgeo-medium-white-14px-2">{{ spanText12 }}</span>
                      </div>
                    </div>
                  </div>
                  <div class="overlap-group-183 border-1px-link-water">
                    <text1 :spanText="text19Props.spanText" :className="text19Props.className" />
                    <div class="overlap-group-188">
                      <div class="cm-8 myriadgeo-medium-white-14px-2">
                        <span class="myriadgeo-medium-white-14px-2">{{ spanText13 }}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <group8 :account="group211Props.account" :spanText="group211Props.spanText" />
          </div>
          <img class="asset-2-2-1-1" :src="asset221" />
        </div>
      </div>
      <group483 v-bind="group212Props" />
      <div class="overlap-group15-1">
        <img class="group-14-1" :src="x227601_Right_Arrow_Icon14" />
        <div class="group-43-1">
          <img class="rectangle-17-120" :src="frame31" /><group213
            :spanText1="group211Props2.spanText1"
            :spanText2="group211Props2.spanText2"
          />
          <img class="rectangle-18-1" :src="group14" />
          <div class="group-22-1">
            <div class="text-1344 myriadgeo-medium-heavy-metal-24px">
              <span class="myriadgeo-medium-heavy-metal-24px">{{ spanText34 }}</span>
            </div>
            <div class="overlap-group-189 border-2px-mystic">
              <div class="ellipse-5-2"></div>
              <div class="number-78 myriadgeo-bold-white-36px">
                <span class="myriadgeo-bold-white-36px">{{ spanText30 }}</span>
              </div>
            </div>
          </div>
          <img class="rectangle-19-1" :src="rectangle17" /><group213
            :spanText1="group212Props2.spanText1"
            :spanText2="group212Props2.spanText2"
          />
        </div>
        <img class="rectangle-24-41" :src="rectangle18" />
        <div class="text-1391 myriadgeo-bold-st-tropaz-48px">
          <span class="myriadgeo-bold-st-tropaz-48px">{{ spanText28 }}</span>
        </div>
        <div class="text-1392 myriadgeo-medium-waikawa-gray-24px">
          <span class="myriadgeo-medium-waikawa-gray-24px">{{ spanText27 }}</span>
        </div>
        <rectangle24 :className="group212Props22.className" />
        <rectangle24 :className="group212Props23.className" />
        <div class="text-1393 myriadgeo-bold-st-tropaz-48px">
          <span class="myriadgeo-bold-st-tropaz-48px">{{ spanText38 }}</span>
        </div>
        <div class="overlap-group11-1">
          <div class="standard-chunk-of-lo-2 myriadgeo-regular-normal-black-18px">
            <span class="myriadgeo-regular-normal-black-18px">{{ spanText32 }}</span>
          </div>
          <div class="flex-row-99">
            <div class="flex-col-49">
              <div class="text-139-1 myriadgeo-bold-black-16px">
                <span class="myriadgeo-bold-black-16px">{{ spanText18 }}</span>
              </div>
              <div class="date-6 myriadgeo-medium-mountain-mist-14px">
                <span class="myriadgeo-medium-mountain-mist-14px">{{ spanText22 }}</span>
              </div>
            </div>
            <img class="star-svgrepo-com-5-19" :src="account2" /><img
              class="star-svgrepo-com-20"
              :src="x227601_Right_Arrow_Icon15"
            /><img class="star-svgrepo-com-20" :src="frame51" /><img class="star-svgrepo-com-20" :src="frame44" /><img
              class="star-svgrepo-com-20"
              :src="x227601_Right_Arrow_Icon11"
            />
          </div>
        </div>
        <div class="overlap-group12-1">
          <div class="standard-chunk-of-lo-2 myriadgeo-regular-normal-black-18px">
            <span class="myriadgeo-regular-normal-black-18px">{{ spanText39 }}</span>
          </div>
          <div class="flex-row-99">
            <div class="flex-col-49">
              <div class="text-139-1 myriadgeo-bold-black-16px">
                <span class="myriadgeo-bold-black-16px">{{ spanText19 }}</span>
              </div>
              <div class="date-6 myriadgeo-medium-mountain-mist-14px">
                <span class="myriadgeo-medium-mountain-mist-14px">{{ spanText23 }}</span>
              </div>
            </div>
            <img class="star-svgrepo-com-5-19" :src="frame32" /><img class="star-svgrepo-com-20" :src="frame35" /><img
              class="star-svgrepo-com-20"
              :src="frame52"
            /><img class="star-svgrepo-com-20" :src="frame6" /><img class="star-svgrepo-com-20" :src="frame41" />
          </div>
        </div>
        <div class="overlap-group13-1">
          <div class="standard-chunk-of-lo-2 myriadgeo-regular-normal-black-18px">
            <span class="myriadgeo-regular-normal-black-18px">{{ spanText33 }}</span>
          </div>
          <div class="flex-row-99">
            <div class="flex-col-49">
              <div class="text-139-1 myriadgeo-bold-black-16px">
                <span class="myriadgeo-bold-black-16px">{{ spanText20 }}</span>
              </div>
              <div class="date-6 myriadgeo-medium-mountain-mist-14px">
                <span class="myriadgeo-medium-mountain-mist-14px">{{ spanText24 }}</span>
              </div>
            </div>
            <img class="star-svgrepo-com-5-19" :src="frame33" /><img class="star-svgrepo-com-20" :src="frame45" /><img
              class="star-svgrepo-com-20"
              :src="frame53"
            /><img class="star-svgrepo-com-20" :src="rectangle241" /><img class="star-svgrepo-com-20" :src="frame42" />
          </div>
        </div>
        <div class="overlap-group14-1">
          <div class="standard-chunk-of-lo-2 myriadgeo-regular-normal-black-18px">
            <span class="myriadgeo-regular-normal-black-18px">{{ spanText40 }}</span>
          </div>
          <div class="flex-row-99">
            <div class="flex-col-49">
              <div class="text-139-1 myriadgeo-bold-black-16px">
                <span class="myriadgeo-bold-black-16px">{{ spanText21 }}</span>
              </div>
              <div class="date-6 myriadgeo-medium-mountain-mist-14px">
                <span class="myriadgeo-medium-mountain-mist-14px">{{ spanText26 }}</span>
              </div>
            </div>
            <img class="star-svgrepo-com-5-19" :src="frame34" /><img
              class="star-svgrepo-com-20"
              :src="x227601_Right_Arrow_Icon16"
            /><img class="star-svgrepo-com-20" :src="frame54" /><img class="star-svgrepo-com-20" :src="frame55" /><img
              class="star-svgrepo-com-20"
              :src="frame43"
            />
          </div>
        </div>
        <div class="contact-informations-2">
          <div class="phone-89">
            <img class="support-1-39" :src="x227601_Right_Arrow_Icon13" />
            <div class="phone-90 myriadgeo-regular-normal-white-20px">
              <span class="myriadgeo-regular-normal-white-20px">{{ spanText35 }}</span>
            </div>
          </div>
          <div class="e-mail-40">
            <img class="at-1-1-39" :src="x227601_Right_Arrow_Icon12" />
            <div class="supportsendabcom-39 myriadgeo-regular-normal-white-20px">
              <span class="myriadgeo-regular-normal-white-20px">{{ spanText41 }}</span>
            </div>
          </div>
        </div>
        <div class="rectangle-28-39"></div>
        <div class="ellipse-2-39 border-1px-martinique"></div>
        <img class="iconfinder_ic_keyboa-39" :src="rectangle19" />
        <p class="copyright-2018-n-cr-39 myriadgeo-regular-normal-amethyst-16px">
          <span class="myriadgeo-regular-normal-amethyst-16px">{{ spanText43 }}</span>
        </p>
        <p class="terms-of-use-privacy-39 myriadgeo-regular-normal-amethyst-16px">
          <span class="myriadgeo-regular-normal-amethyst-16px">{{ spanText42 }}</span>
        </p>
        <div class="group-49-2">
          <div class="rectangle-17-119"></div>
          <div class="text-1398 myriadgeo-medium-waterloo--18px">
            <span class="myriadgeo-medium-waterloo--18px">{{ spanText15 }}</span>
          </div>
        </div>
        <group503 :children="group501Props.children" />
        <div class="group-51-1">
          <div class="rectangle-17-119"></div>
          <div class="text-1400 myriadgeo-medium-waterloo--18px">
            <span class="myriadgeo-medium-waterloo--18px">{{ spanText17 }}</span>
          </div>
        </div>
        <group503 :children="group502Props.children" :className="group502Props.className" />
      </div>
    </div>
  </div>
</template>
<script>
import Text1 from "./Text1";
import Group8 from "./Group8";
import Group483 from "./Group483";
import Group213 from "./Group213";
import Rectangle24 from "./Rectangle24";
import Group503 from "./Group503";
export default {
  name: "HomeV203",
  components: {
    Text1,
    Group8,
    Group483,
    Group213,
    Rectangle24,
    Group503,
  },
  props: [
    "logo",
    "spanText1",
    "x211688_Forward_Arrow_Icon11",
    "spanText2",
    "spanText3",
    "spanText4",
    "packageSvgrepoCom1",
    "spanText5",
    "account1",
    "spanText6",
    "spanText7",
    "spanText8",
    "spanText9",
    "x211688_Forward_Arrow_Icon12",
    "x211688_Forward_Arrow_Icon13",
    "spanText14",
    "x211688_Forward_Arrow_Icon14",
    "spanText16",
    "spanText10",
    "spanText11",
    "spanText12",
    "spanText13",
    "asset221",
    "x227601_Right_Arrow_Icon14",
    "frame31",
    "group14",
    "spanText34",
    "spanText30",
    "rectangle17",
    "rectangle18",
    "spanText28",
    "spanText27",
    "spanText38",
    "spanText32",
    "spanText18",
    "spanText22",
    "account2",
    "x227601_Right_Arrow_Icon15",
    "frame51",
    "frame44",
    "x227601_Right_Arrow_Icon11",
    "spanText39",
    "spanText19",
    "spanText23",
    "frame32",
    "frame35",
    "frame52",
    "frame6",
    "frame41",
    "spanText33",
    "spanText20",
    "spanText24",
    "frame33",
    "frame45",
    "frame53",
    "rectangle241",
    "frame42",
    "spanText40",
    "spanText21",
    "spanText26",
    "frame34",
    "x227601_Right_Arrow_Icon16",
    "frame54",
    "frame55",
    "frame43",
    "x227601_Right_Arrow_Icon13",
    "spanText35",
    "x227601_Right_Arrow_Icon12",
    "spanText41",
    "rectangle19",
    "spanText43",
    "spanText42",
    "spanText15",
    "spanText17",
    "text11Props",
    "text12Props",
    "text13Props",
    "text14Props",
    "text15Props",
    "text16Props",
    "text17Props",
    "text18Props",
    "text19Props",
    "group211Props",
    "group212Props",
    "group211Props2",
    "group212Props2",
    "group212Props22",
    "group212Props23",
    "group501Props",
    "group502Props",
  ],
};
</script>

<style>
.home-v20 {
  align-items: center;
  background-color: var(--swans-down-2);
  display: flex;
  flex-direction: column;
  height: 4416px;
  overflow: hidden;
  padding: 33px 0;
  position: relative;
  width: 1791px;
}

.group-25-35 {
  align-items: center;
  display: flex;
  margin-right: 8px;
  min-width: 1299px;
}

.logo-40 {
  height: 42px;
  margin-bottom: 2px;
  object-fit: cover;
  width: 157px;
}

.overlap-group2-42 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 40px;
  display: flex;
  height: 35px;
  justify-content: flex-end;
  margin-bottom: 1px;
  margin-left: 36px;
  min-width: 110px;
  padding: 10px 12px;
}

.text-1390 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 64px;
}

.x211688_forward_arrow_icon-1-100 {
  align-self: flex-end;
  height: 14px;
  margin-bottom: 0;
  margin-left: 4px;
  width: 14px;
}

.group-53-4 {
  align-items: flex-start;
  display: flex;
  height: 16px;
  margin-left: 122px;
  min-width: 456px;
}

.text-1385 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 147px;
}

.text-1386 {
  letter-spacing: 0;
  margin-left: 30px;
  min-height: 16px;
  min-width: 87px;
  text-align: center;
}

.text-1387 {
  letter-spacing: 0;
  margin-left: 30px;
  min-height: 16px;
  min-width: 156px;
  text-align: right;
}

.overlap-group1-62 {
  align-items: center;
  background-color: var(--st-tropaz);
  border-radius: 40px;
  display: flex;
  height: 50px;
  margin-left: 86px;
  min-width: 140px;
  padding: 0 19px;
}

.package-svgrepo-com-1-43 {
  height: 24px;
  width: 24px;
}

.text-1389 {
  letter-spacing: 0;
  margin-left: 10px;
  min-height: 16px;
  min-width: 66px;
}

.overlap-group-184 {
  align-items: center;
  background-color: var(--scooter);
  border-radius: 40px;
  display: flex;
  height: 50px;
  margin-left: 10px;
  min-width: 182px;
  padding: 0 15px;
}

.account-29 {
  height: 30px;
  width: 30px;
}

.text-1388 {
  letter-spacing: 0;
  margin-left: 11px;
  min-height: 16px;
  min-width: 107px;
}

.overlap-group17-1 {
  height: 662px;
  margin-left: 23px;
  margin-top: 85px;
  position: relative;
  width: 1312px;
}

.text-1341 {
  left: 0;
  letter-spacing: 0;
  line-height: 60px;
  position: absolute;
  top: 0;
  width: 660px;
}

.overlap-group16-1 {
  height: 635px;
  left: 0;
  position: absolute;
  top: 27px;
  width: 1312px;
}

.overlap-group9-5 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 0;
  min-height: 440px;
  padding: 44px 53px;
  position: absolute;
  top: 195px;
  width: 1290px;
}

.text-container-9 {
  align-items: flex-start;
  display: flex;
  height: 16px;
  min-width: 548px;
}

.text-1346 {
  letter-spacing: 0;
  min-height: 16px;
  min-width: 209px;
}

.text-1347 {
  letter-spacing: 0;
  margin-left: 144px;
  min-height: 16px;
}

.overlap-group-container-7 {
  align-items: flex-start;
  display: flex;
  margin-top: 18px;
  min-width: 672px;
}

.overlap-group-181 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  min-width: 320px;
  padding: 11px 18px;
  position: relative;
}

.x211688_forward_arrow_icon-1-99 {
  align-self: center;
  height: 16px;
  margin-bottom: 0;
  margin-left: 152px;
  width: 16px;
}

.overlap-group-182 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-left: 32px;
  min-width: 320px;
  padding: 11px 18px;
  position: relative;
}

.overlap-group-container-8 {
  align-items: flex-start;
  display: flex;
  margin-top: 10px;
  min-width: 672px;
}

.rectangle-13-1 {
  background-color: var(--concrete);
  height: 1px;
  margin-top: 31px;
  width: 672px;
}

.group-container-51 {
  align-items: flex-start;
  display: flex;
  height: 74px;
  margin-top: 34px;
  min-width: 674px;
}

.group-13-3 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 74px;
  width: 156px;
}

.text-13-12 {
  letter-spacing: 0;
  min-height: 16px;
}

.overlap-group5-25 {
  align-items: flex-start;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  margin-top: 18px;
  min-width: 152px;
  padding: 12px 18px;
  position: relative;
}

.x211688_forward_arrow_icon-1-101 {
  height: 16px;
  margin-left: 45px;
  width: 16px;
}

.group-29-2 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  margin-left: 26px;
  min-height: 74px;
  width: 492px;
}

.overlap-group-container-9 {
  align-items: flex-start;
  display: flex;
  margin-top: 18px;
  min-width: 490px;
}

.overlap-group-185 {
  align-items: center;
  background-color: var(--coconut);
  border-radius: 40px;
  box-shadow: 0px 2px 1px #d1eaf140;
  display: flex;
  height: 40px;
  justify-content: flex-end;
  min-width: 115px;
  padding: 0 3px;
  position: relative;
}

.overlap-group1-63 {
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

.kg-2 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 15px;
}

.overlap-group-183 {
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
  position: relative;
}

.overlap-group-186 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 22px;
  min-width: 35px;
  padding: 0 8px;
}

.cm-6,
.cm-7,
.cm-8 {
  letter-spacing: 0;
  min-height: 14px;
  min-width: 19px;
  text-align: center;
}

.overlap-group-187 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 21px;
  min-width: 35px;
  padding: 0 8px;
}

.overlap-group-188 {
  align-items: center;
  background-color: var(--cyan--aqua);
  border-radius: 40px;
  display: flex;
  height: 34px;
  margin-left: 18px;
  min-width: 35px;
  padding: 0 8px;
}

.asset-2-2-1-1 {
  height: 517px;
  left: 798px;
  object-fit: cover;
  position: absolute;
  top: 0;
  width: 514px;
}

.overlap-group15-1 {
  align-self: flex-start;
  height: 2746px;
  margin-left: 0;
  margin-top: 110px;
  position: relative;
  width: 2001px;
}

.group-14-1 {
  height: 2543px;
  left: 0;
  position: absolute;
  top: 0;
  width: 2001px;
}

.group-43-1 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  left: 555px;
  min-height: 1111px;
  position: absolute;
  top: 476px;
  width: 682px;
}

.rectangle-17-120 {
  height: 187px;
  margin-left: 61px;
  width: 286px;
}

.rectangle-18-1 {
  height: 0;
  margin-left: 61px;
  margin-top: 40px;
  width: 0;
}

.group-22-1 {
  align-items: center;
  align-self: flex-end;
  display: flex;
  margin-right: -2px;
  margin-top: 207px;
  min-width: 679px;
}

.text-1344 {
  letter-spacing: 0;
  line-height: 34px;
  margin-top: 4px;
  min-height: 68px;
  text-align: right;
  width: 497px;
}

.overlap-group-189 {
  border-radius: 65px;
  height: 130px;
  margin-left: 50px;
  position: relative;
  width: 130px;
}

.ellipse-5-2 {
  background-color: var(--scooter);
  border-radius: 50px;
  height: 100px;
  left: 13px;
  position: absolute;
  top: 13px;
  width: 100px;
}

.number-78 {
  left: 43px;
  letter-spacing: 0;
  position: absolute;
  text-shadow: 0px 2px 0px #000000bf;
  top: 47px;
}

.rectangle-19-1 {
  align-self: center;
  height: 167px;
  margin-right: 4px;
  margin-top: 40px;
  width: 556px;
}

.rectangle-24-41 {
  height: 350px;
  left: 0;
  position: absolute;
  top: 2396px;
  width: 1791px;
}

.text-1391 {
  left: 506px;
  letter-spacing: 0;
  line-height: 65px;
  position: absolute;
  text-align: center;
  top: 209px;
  width: 780px;
}

.text-1392 {
  left: 699px;
  letter-spacing: 0;
  line-height: 45px;
  position: absolute;
  text-align: center;
  top: 376px;
  white-space: nowrap;
}

.text-1393 {
  left: 506px;
  letter-spacing: 0;
  line-height: 65px;
  position: absolute;
  text-align: center;
  top: 1887px;
  white-space: nowrap;
  width: 780px;
}

.overlap-group11-1 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 251px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.standard-chunk-of-lo-2 {
  letter-spacing: 0;
  line-height: 130px;
  margin-bottom: -61px;
  margin-top: 7px;
  min-height: 69px;
  white-space: nowrap;
}

.flex-row-99 {
  align-items: center;
  display: flex;
  height: 39px;
  margin-top: 33px;
  min-width: 341px;
}

.flex-col-49 {
  align-items: flex-start;
  display: flex;
  flex-direction: column;
  min-height: 39px;
  width: 89px;
}

.text-139-1 {
  letter-spacing: 0;
  line-height: 100px;
  margin-bottom: -84px;
  min-height: 16px;
  white-space: nowrap;
}

.date-6 {
  letter-spacing: 0;
  line-height: 100px;
  margin-bottom: -86px;
  margin-top: 9px;
  min-height: 14px;
  white-space: nowrap;
}

.star-svgrepo-com-5-19 {
  height: 20px;
  margin-left: 132px;
  margin-top: 3px;
  width: 20px;
}

.star-svgrepo-com-20 {
  height: 20px;
  margin-left: 5px;
  margin-top: 3px;
  width: 20px;
}

.overlap-group12-1 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 691px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.overlap-group13-1 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 1131px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.overlap-group14-1 {
  align-items: flex-start;
  background-color: var(--white);
  border-radius: 30px;
  box-shadow: 0px 22px 70px #c9e6ec;
  display: flex;
  flex-direction: column;
  left: 1571px;
  min-height: 200px;
  padding: 26px 34px;
  position: absolute;
  top: 2057px;
  width: 410px;
}

.contact-informations-2 {
  align-items: center;
  display: flex;
  height: 50px;
  left: 1032px;
  min-width: 512px;
  position: absolute;
  top: 2476px;
}

.phone-89 {
  align-items: center;
  display: flex;
  min-width: 192px;
}

.support-1-39 {
  height: 50px;
  width: 50px;
}

.phone-90 {
  letter-spacing: 0;
  line-height: 100.8px;
  margin-bottom: 4px;
  margin-left: 15px;
  min-height: 20px;
  min-width: 125px;
  white-space: nowrap;
}

.e-mail-40 {
  align-items: center;
  display: flex;
  margin-left: 77px;
  margin-top: 1px;
  min-width: 245px;
}

.at-1-1-39 {
  height: 45px;
  width: 45px;
}

.supportsendabcom-39 {
  letter-spacing: 0;
  line-height: 100.8px;
  margin-bottom: 3px;
  margin-left: 15px;
  min-height: 20px;
  min-width: 183px;
  white-space: nowrap;
}

.rectangle-28-39 {
  background-color: var(--haiti);
  height: 1px;
  left: 251px;
  position: absolute;
  top: 2606px;
  width: 1220px;
}

.ellipse-2-39 {
  border-radius: 25px;
  height: 50px;
  left: 1491px;
  position: absolute;
  top: 2581px;
  width: 50px;
}

.iconfinder_ic_keyboa-39 {
  height: 25px;
  left: 1504px;
  position: absolute;
  top: 2594px;
  width: 25px;
}

.copyright-2018-n-cr-39 {
  left: 251px;
  letter-spacing: 0;
  line-height: 100.8px;
  position: absolute;
  top: 2671px;
  white-space: nowrap;
}

.terms-of-use-privacy-39 {
  left: 1237px;
  letter-spacing: 0;
  line-height: 108.9px;
  position: absolute;
  top: 2670px;
  white-space: nowrap;
}

.group-49-2 {
  align-items: center;
  display: flex;
  height: 20px;
  left: 251px;
  min-width: 117px;
  position: absolute;
  top: 2491px;
}

.rectangle-17-119 {
  background-color: var(--cyan--aqua);
  border-radius: 20px;
  height: 5px;
  margin-bottom: 1px;
  width: 5px;
}

.text-1398 {
  letter-spacing: 0;
  line-height: 108.9px;
  margin-left: 11px;
  min-height: 20px;
  min-width: 99px;
  white-space: nowrap;
}

.group-51-1 {
  align-items: center;
  display: flex;
  height: 20px;
  left: 601px;
  min-width: 103px;
  position: absolute;
  top: 2491px;
}

.text-1400 {
  letter-spacing: 0;
  line-height: 108.9px;
  margin-left: 11px;
  min-height: 20px;
  min-width: 85px;
  white-space: nowrap;
}
</style>
