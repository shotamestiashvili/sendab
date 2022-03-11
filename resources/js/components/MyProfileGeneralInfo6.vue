<template>
    <v-app>


        <div class="container-center-horizontal">
            <div class="my-profilegeneral-info5 screen">
                <div class="group-25-27">
                    <div class="flex-row-90">
                        <router-link to="/home-v2-0"><img class="logo-31" :src="logo"/></router-link>
                        <div class="overlap-group2-40 border-1px-botticelli-2">
                            <div class="text-980 myriadgeo-medium-mid-gray-14px">{{ text980 }}</div>
                            <img class="x211688_forward_arrow_icon-1-89" :src="x211688_Forward_Arrow_Icon11"/>
                        </div>
                        <group53 :className="group53Props.className"/>
                        <a href="javascript:ShowOverlay('track-your-item', 'animate-appear');">
                            <div class="group-4-33">
                                <div class="overlap-group1-52">
                                    <img class="package-svgrepo-com-1-35" :src="packageSvgrepoCom11"/>
                                    <div class="text-979 myriadgeo-bold-white-16px">{{ text979 }}</div>
                                </div>
                            </div>
                        </a
                        ><a href="javascript:ShowOverlay('frame-9', 'animate-appear');">
                        <div class="group-3-38">
                            <div class="overlap-group-162 border-1px-botticelli-2">
<!--                                <img class="ellipse-10-29" :src="ellipse10"/>-->
                                <v-avatar color="primary" size="38px">
                                    <v-img v-if="avatar" :src="avatarUrl" ></v-img>
                                </v-avatar>
                                <div class="text-978 myriadgeo-bold-st-tropaz-16px">{{ text978 }}</div>
                                <img class="x211688_forward_arrow_icon-1-90" :src="x211688_Forward_Arrow_Icon12"/>
                            </div>
                        </div
                        >
                    </a>
                    </div>
                    <rectangle24 :className="rectangle24Props.className"/>
                    <div class="group-86-14">
                        <group82 :account="group82Props.account"/>
                        <router-link to="/my-profile-my-orders-1">
                            <div class="group-83-14">
                                <img class="package-svgrepo-com-1-35" :src="packageSvgrepoCom12"/>
                                <div class="text-971 myriadgeo-medium-st-tropaz-16px">{{ text971 }}</div>
                            </div>
                        </router-link
                        >
                        <router-link to="/my-profile-account-settings-2">
                            <div class="group-84-14">
                                <img class="setting-svgrepo-com-1-15" :src="settingSvgrepoCom1"/>
                                <div class="text-972 myriadgeo-medium-st-tropaz-16px">{{ text972 }}</div>
                            </div>
                        </router-link
                        >
                        <router-link to="/my-profile-wallet-3">
                            <div class="group-85-14">
                                <img class="wallet-svgrepo-com-1-1-15" :src="walletSvgrepoCom11"/>
                                <div class="text-974 myriadgeo-medium-st-tropaz-16px">{{ text974 }}</div>
                            </div>
                        </router-link
                        >
                    </div>
                    <div class="rectangle-33-16"></div>
                </div>
                <div class="flex-row-91" style="margin-top: 40px; margin-bottom: 230px;">
                    <div class="settings-frame-14">
                        <property1-headline :x43Props="property1Headline1Props.x43Props"/>
                        <property1-headline
                            :className="property1Headline2Props.className"
                            :x43Props="property1Headline2Props.x43Props"
                        />
                        <property1-headline
                            :className="property1Headline3Props.className"
                            :x43Props="property1Headline3Props.x43Props"
                        />
                        <property1-active :className="property1ActiveProps.className"
                                          :x4Props="property1ActiveProps.x4Props"/>
                    </div>
                    <div class="overlap-group7-11">
                        <div class="group-107-2">
                            <div class="group-105-2">
                                <router-link to="/my-profilegeneral-info"
                                ><img class="x227601_right_arrow_icon-1-18" :src="x227601_Right_Arrow_Icon1"
                                /></router-link>
                                <div class="id-3 myriadgeo-medium-st-tropaz-18px">{{ id }}</div>
                            </div>
                        </div>
                        <div class="rectangle-207"></div>



                        <br>
                        <br>

                        <div>
                            <div class="group-108-2">
                                <div class="overlap-group-163">
                                    <img
                                        class="upload-svgrepo-com-1"
                                        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/upload-svgrepo-com-1@2x.png"
                                    />
                                    <div class="text-9-6 myriadgeo-bold-st-tropaz-16px">
                                        <v-file-input
                                            @change="preview_front"
                                            placeholder="ფოტოს არჩევა"
                                            v-model="frontId"

                                        >
                                            <template v-slot:selection="{ text }">
                                                <v-chip
                                                    small
                                                    label
                                                    color="primary"
                                                >
                                                </v-chip>
                                            </template>
                                        </v-file-input>
                                    </div>
                                    <div>
                                    </div>
                                </div>

                                <v-spacer>
                                    <div style="margin-top: 12px; margin-left: 20px; font-size: 18px">
                                        აირჩიე პირადობის მოწმობის წინა მხარე
                                    </div>
                                </v-spacer>
                            </div>
                        </div>

                        <div v-if="frontId">
                            <v-card>
                                <v-img :src="frontUrl"  id="frontImg" style="width: 265px!important;"></v-img>
                            </v-card>
                        </div>



                        <br>
                        <br>
                        <div>
                            <div class="group-108-2">
                                <div class="overlap-group-163">
                                    <img
                                        class="upload-svgrepo-com-1"
                                        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/upload-svgrepo-com-1@2x.png"
                                    />
                                    <div class="text-9-6 myriadgeo-bold-st-tropaz-16px">
                                        <v-file-input
                                            @change="preview_back"
                                            v-model="backId"
                                            placeholder="ფოტოს არჩევა"

                                        >
                                            <template v-slot:selection="{ text }">
                                                <v-chip
                                                    small
                                                    label
                                                    color="primary"
                                                >
                                                </v-chip>
                                            </template>
                                        </v-file-input>
                                    </div>
                                </div>

                                <v-spacer>
                                    <div style="margin-top: 12px; margin-left: 20px; font-size: 18px">
                                        აირჩიე პირადობის მოწმობის უკანა მხარე
                                    </div>
                                </v-spacer>

                            </div>
                        </div>

                        <div v-if="backId">
                            <v-card>
                                <v-img :src="backUrl" style="width: 265px!important;"></v-img>
                            </v-card>
                        </div>

                        <br>
                        <br>
                        <div>
                            <div class="group-108-2">
                                <div class="overlap-group-163">
                                    <img
                                        class="upload-svgrepo-com-1"
                                        src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/upload-svgrepo-com-1@2x.png"
                                    />
                                    <div class="text-9-6 myriadgeo-bold-st-tropaz-16px">
                                        <v-file-input
                                            @change="preview_selfie"
                                            v-model="selfie"
                                            placeholder="სელფის არჩევა"

                                        >
                                            <template v-slot:selection="{ text }">
                                                <v-chip
                                                    small
                                                    label
                                                    color="primary"
                                                >
                                                </v-chip>
                                            </template>
                                        </v-file-input>
                                    </div>

                                </div>

                                <v-spacer>
                                <div style="margin-top: 12px; margin-left: 20px; font-size: 18px">
                                       გადაიღეთ პირადობასთან სელფი
                                </div>
                                </v-spacer>
                                <div style="width: 75px;margin-top: 5px;">
                                    <img src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/group-23024@2x.png"
                                         style="width: 70px;">
                                </div>


                            </div>
                        </div>

                        <div v-if="selfie">
                            <v-card>
                                <v-img :src="selfieUrl" style="width: 265px!important;"></v-img>
                            </v-card>
                        </div>


<!--                        <div class="group-23026">-->
<!--                            <group22961/>-->
<!--                            <div class="rectangle-208"></div>-->
<!--                        </div>-->
<!--                        <div class="group-container-39">-->
<!--                            <img class="group-23024" :src="group23024"/>-->
<!--                            <div class="group-23027">-->
<!--                                <div class="group-22961-1">-->
<!--                                    <div class="group-22963-1">-->


<!--                                        <div class="group-108-2">-->
<!--                                            <div class="overlap-group-163">-->
<!--                                                <img-->
<!--                                                    class="upload-svgrepo-com-1"-->
<!--                                                    src="https://anima-uploads.s3.amazonaws.com/projects/61e1e09328216c88160db713/releases/61ee79e780522405aeddf24c/img/upload-svgrepo-com-1@2x.png"-->
<!--                                                />-->
<!--                                                <div class="text-9-6 myriadgeo-bold-st-tropaz-16px">-->

<!--                                                </div>-->
<!--                                            </div>-->
<!--                                        </div>-->


<!--                                        <div class="text-990 myriadgeo-medium-black-18px">{{ text990 }}</div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="rectangle-208"></div>-->
<!--                            </div>-->
<!--&lt;!&ndash;                        </div>&ndash;&gt;to="/my-profile-general-info-6"-->
                        <div  class="align-self-flex-center">
                            <div class="group-8-6">
                                <div class="overlap-group4-23" style="margin-left: 166px;" >
                                    <button class="text-985 myriadgeo-bold-white-16px" type="button" @click="submitDocuments"> მოითხოვე ვერიფიკაცია</button>
<!--                                    <div class="text-985 myriadgeo-bold-white-16px">მოითხოვე ვერიფიკაცია</div>-->
                                </div>
                            </div>
                        </div
                        >

                    </div>

                </div>
                <group57
                    :className="group57Props.className"
                    :rectangle24Props="group57Props.rectangle24Props"
                    :contactInformationsProps="group57Props.contactInformationsProps"
                    :group501Props="group57Props.group501Props"
                    :group502Props="group57Props.group502Props"
                />
            </div>

        </div>
    </v-app>
</template>

<script>
import Group53 from "./Group53";
import Rectangle24 from "./Rectangle24";
import Group82 from "./Group82";
import Property1Headline from "./Property1Headline";
import Property1Active from "./Property1Active";
import Group22961 from "./Group22961";
import Group108 from "./Group108";
import Group57 from "./Group57";
import axios from "axios";

export default {
    name: "MyProfileGeneralInfo6",
    components: {
        Group53,
        Rectangle24,
        Group82,
        Property1Headline,
        Property1Active,
        Group22961,
        Group108,
        Group57,
    },
    props: [
        "logo",
        "text980",
        "x211688_Forward_Arrow_Icon11",
        "packageSvgrepoCom11",
        "text979",
        "ellipse10",
        "text978",
        "x211688_Forward_Arrow_Icon12",
        "packageSvgrepoCom12",
        "text971",
        "settingSvgrepoCom1",
        "text972",
        "walletSvgrepoCom11",
        "text974",
        "x227601_Right_Arrow_Icon1",
        "id",
        "maskGroup",
        "closeSvgrepoCom11",
        "group23024",
        "text990",
        "text985",
        "group53Props",
        "rectangle24Props",
        "group82Props",
        "property1Headline1Props",
        "property1Headline2Props",
        "property1Headline3Props",
        "property1ActiveProps",
        "group57Props",
    ],

    data() {
        return {
            frontId: null,
            backId: null,
            selfie: null,

            frontUrl: null,
            backUrl: null,
            selfieUrl: null,
            uploadedFile: '',
        }
    },

    methods: {
        preview_front() {

            this.frontUrl = URL.createObjectURL(this.frontId)
        },

        preview_back() {

            this.backUrl = URL.createObjectURL(this.backId)
        },

        preview_selfie() {

            this.selfieUrl = URL.createObjectURL(this.selfie)
        },


        submitDocuments(){
            if( this.frontId && this.backId && this.selfie){
                let formData = {
                    frontId: this.frontId,
                    backId:  this.backId,
                    selfie:  this.selfie,
                }
                this.$store.dispatch( 'ADD_DOCUMENT', formData);
            }
                this.$router.push("/my-profile-general-info-6");
        },


        getDocuments(){
            axios({
                    method: 'get',
                    url: '/getDocument',
                    headers: { "Content-Type": "multipart/form-data" },
                }
            ).then((response) => {

                console.log(response.data.data[0]);
                this.frontId = true;
                this.backId  = true;
                this.selfie  = true;

                this.frontUrl = response.data.data[0].frontImage
                this.backUrl = response.data.data[0].backImage
                this.selfieUrl = response.data.data[0].selfieImage
            });
        },


    },

    mounted(){
        this.getDocuments();
    }
};
</script>

<style>
.my-profilegeneral-info5 {
    align-items: center;
    background-color: var(--swans-down-2);
    display: flex;
    flex-direction: column;
    height: 1518px;
    overflow: hidden;
    position: relative;
    width: 1791px;
}

.group-25-27 {
    align-items: center;
    background-color: var(--white);
    display: flex;
    flex-direction: column;
    min-height: 210px;
    position: relative;
    width: 1791px;
}

.flex-row-90 {
    align-items: center;
    display: flex;
    margin-right: 6.15px;
    margin-top: 33px;
    min-width: 1301px;
    position: relative;
}

.logo-31 {
    cursor: pointer;
    height: 42px;
    margin-bottom: 2px;
    object-fit: cover;
    width: 157px;
}

.overlap-group2-40 {
    align-items: flex-start;
    border-radius: 40px;
    display: flex;
    height: 35px;
    justify-content: flex-end;
    margin-bottom: 1px;
    margin-left: 36px;
    min-width: 110px;
    padding: 9px 13px;
}

.text-980 {
    letter-spacing: 0;
    min-height: 14px;
    min-width: 64px;
}

.x211688_forward_arrow_icon-1-89 {
    align-self: center;
    height: 14px;
    margin-bottom: 1px;
    margin-left: 4px;
    width: 14px;
}

.group-4-33 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-left: 86px;
    min-width: 142px;
}

.overlap-group1-52 {
    align-items: center;
    background-color: var(--st-tropaz);
    border-radius: 40px;
    display: flex;
    height: 50px;
    min-width: 140px;
    padding: 0 19px;
}

.package-svgrepo-com-1-35 {
    height: 24px;
    width: 24px;
}

.text-979 {
    letter-spacing: 0;
    margin-left: 10px;
    min-height: 16px;
    min-width: 66px;
}

.group-3-38 {
    align-items: flex-start;
    cursor: pointer;
    display: flex;
    margin-left: 8px;
    min-width: 184px;
}

.overlap-group-162 {
    align-items: center;
    background-color: var(--white);
    border-radius: 40px;
    display: flex;
    height: 50px;
    min-width: 182px;
    padding: 9px 11px;
}

.ellipse-10-29 {
    align-self: flex-start;
    height: 30px;
    object-fit: cover;
    width: 30px;
}

.text-978 {
    letter-spacing: 0;
    margin-bottom: 2px;
    margin-left: 11px;
    min-height: 16px;
    min-width: 74px;
}

.x211688_forward_arrow_icon-1-90 {
    height: 14px;
    margin-bottom: 2px;
    margin-left: 21px;
    width: 14px;
}

.group-86-14 {
    display: flex;
    margin-top: 32px;
    position: relative;
    width: 887px;
}

.group-83-14 {
    cursor: pointer;
    display: flex;
    margin-left: 58px;
    margin-top: 3px;
    width: 157px;
}

.text-971 {
    height: 16px;
    letter-spacing: 0;
    margin-left: 14px;
    margin-top: 5px;
    width: 117px;
}

.group-84-14 {
    cursor: pointer;
    display: flex;
    margin-left: 58px;
    width: 226px;
}

.setting-svgrepo-com-1-15 {
    height: 30px;
    width: 30px;
}

.text-972 {
    height: 16px;
    letter-spacing: 0;
    margin-left: 11px;
    margin-top: 7px;
    width: 183px;
}

.group-85-14 {
    cursor: pointer;
    display: flex;
    margin-left: 58px;
    margin-top: 2px;
    width: 176px;
}

.wallet-svgrepo-com-1-1-15 {
    height: 26px;
    width: 26px;
}

.text-974 {
    height: 16px;
    letter-spacing: 0;
    margin-left: 13px;
    margin-top: 7px;
    width: 135px;
}

.rectangle-33-16 {
    background-color: var(--st-tropaz);
    height: 5px;
    margin-right: 730px;
    margin-top: 26px;
    width: 155px;
}

.flex-row-91 {
    align-items: flex-start;
    display: flex;
    height: 780px;
    margin-left: 1px;
    margin-top: 78px;
    min-width: 1290px;
}

.settings-frame-14 {
    background-color: var(--white);
    border-radius: 30px;
    box-shadow: 0px 22px 70px #c9e6ec;
    display: flex;
    flex-direction: column;
    height: 300px;
    margin-top: 2px;
    overflow: hidden;
    position: relative;
    width: 410px;
}

.overlap-group7-11 {
    align-items: flex-start;
    background-color: var(--white);
    border-radius: 30px;
    box-shadow: 0px 22px 70px #c9e6ec;
    display: flex;
    flex-direction: column;
    margin-left: 30px;
    min-height: 780px;
    padding: 62px 108px;
    width: 850px;
}

.group-107-2 {
    display: flex;
    height: 24px;
    margin-top: 12px;
    width: 253px;
}

.group-105-2 {
    display: flex;
    height: 24px;
    width: 255px;
}

.x227601_right_arrow_icon-1-18 {
    cursor: pointer;
    height: 24px;
    margin-left: 0;
    margin-top: 0;
    width: 24px;
}

.id-3 {
    height: 18px;
    letter-spacing: 0;
    margin-left: 16px;
    margin-top: 4px;
    width: 213px;
}

.rectangle-207 {
    align-self: center;
    background-color: var(--botticelli-2);
    height: 1px;
    margin-top: 40px;
    width: 630px;
}

.group-container-38 {
    height: 256px;
    margin-top: 25px;
    position: relative;
    width: 632px;
}

.overlap-group5-21 {
    height: 146px;
    left: 2px;
    position: absolute;
    top: 79px;
    width: 197px;
}

.mask-group {
    height: 140px;
    left: 0;
    position: absolute;
    top: 6px;
    width: 190px;
}

.ellipse-15 {
    background-color: var(--cinnabar);
    border-radius: 15px;
    height: 30px;
    left: 167px;
    position: absolute;
    top: 0;
    width: 30px;
}

.close-svgrepo-com-1-1 {
    height: 18px;
    left: 173px;
    position: absolute;
    top: 6px;
    width: 18px;
}

.group-23025 {
    display: flex;
    flex-direction: column;
    height: 256px;
    left: 0;
    position: absolute;
    top: 0;
    width: 632px;
}

.rectangle-208-1 {
    background-color: var(--botticelli-2);
    height: 1px;
    margin-left: 2px;
    margin-top: 205px;
    width: 630px;
}

.group-23026 {
    display: flex;
    flex-direction: column;
    height: 76px;
    margin-top: 25px;
    position: relative;
    width: 632px;
}

.rectangle-208 {
    background-color: var(--botticelli-2);
    height: 1px;
    margin-left: 2px;
    margin-top: 25px;
    width: 630px;
}

.group-container-39 {
    height: 76px;
    margin-top: 25px;
    position: relative;
    width: 632px;
}

.group-23024 {
    height: 48px;
    left: 560px;
    position: absolute;
    top: 0;
    width: 70px;
}

.group-23027 {
    display: flex;
    flex-direction: column;
    height: 76px;
    left: 0;
    position: absolute;
    top: 0;
    width: 632px;
}

.group-22961-1 {
    display: flex;
    height: 50px;
    width: 467px;
}

.group-22963-1 {
    align-items: center;
    display: flex;
    flex: 1;
    min-width: 469px;
    position: relative;
}

.text-990 {
    letter-spacing: 0;
    margin-left: 18px;
    min-height: 18px;
    min-width: 257px;
}

.group-8-6 {
    align-items: flex-start;
    align-self: center;
    cursor: pointer;
    display: flex;
    margin-left: 2px;
    margin-top: 46px;
    min-width: 282px;
}

.overlap-group4-23 {
    align-items: center;
    background-color: var(--cyan--aqua);
    border-radius: 50px;
    display: flex;
    height: 50px;
    justify-content: flex-end;
    min-width: 280px;
    padding: 0 45px;
}

.text-985 {
    letter-spacing: 0;
    min-height: 16px;
    min-width: 189px;
    text-align: center;
}

.group-108-2 {
    align-items: flex-start;
    display: flex;
    min-width: 192px;
}

.overlap-group-163 {
    align-items: center;
    background-color: var(--cyan--aqua-2);
    border-radius: 40px;
    display: flex;
    height: 50px;
    min-width: 190px;
    padding: 0 18px;
}

.upload-svgrepo-com-1 {
    height: 24px;
    width: 24px;
}

.text-9-6 {
    letter-spacing: 0;
    margin-left: 13px;
    min-height: 16px;
    min-width: 117px;
    text-align: center;
}

.group-22961-2 {
    display: flex;
    height: 50px;
    width: 534px;
}

.group-22963-2 {
    align-items: center;
    display: flex;
    flex: 1;
    min-width: 536px;
    position: relative;
}

.text-98 {
    letter-spacing: 0;
    margin-left: 18px;
    min-height: 18px;
    min-width: 324px;
}

.group-108-2 {
    align-items: flex-start;
    display: flex;
    min-width: 192px;
}

.overlap-group-163 {
    align-items: center;
    background-color: var(--cyan--aqua-2);
    border-radius: 40px;
    display: flex;
    height: 50px;
    min-width: 190px;
    padding: 0 18px;
}

.upload-svgrepo-com-1 {
    height: 24px;
    width: 24px;
}

.text-9-6 {
    letter-spacing: 0;
    margin-left: 13px;
    min-height: 16px;
    min-width: 117px;
    text-align: center;
}
</style>
