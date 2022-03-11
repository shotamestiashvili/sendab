<template>
    <div class="sendab-offer">
        <div class="video-instruction">
            <h1>{{ $t('გამოიმუშავე დამატებითი შემოსავალი მოგზაურობისას') }}</h1>
            <h3>{{
                    $t('ცნობილი ფაქტია, რომ გვერდის წაკითხვად შიგთავსს შეუძლია მკითხველის ყურადღება მიიზიდოს და დიზაინის აღქმაში ხელი შეუშალოს')
                }}</h3>
            <div class="activation-button">
                <img src="/images/play-icon.png" alt="">
                <span>{{ $t('ვიდეო ინსტრუქცია') }}</span>
            </div>
        </div>
        <PopularRoads class="popular-roads"/>
        <ContactForm/>
    </div>

</template>

<script>
import PopularRoads from "../components/Home/popularRoads";
import ContactForm from "../components/Help/ContactForm";

export default {
    name: 'sendABOffer',
    components: {
        PopularRoads,
        ContactForm
    }
}
</script>

<style scoped lang="scss">
.sendab-offer {

    .video-instruction {
        padding: 80px 0;
        background-color: #0D0D25;

        h1 {
            font-weight: bold;
            font-size: 36px;
            line-height: 45px;
            text-align: center;
            color: #FFFFFF;
            margin: 0 auto 35px;
            max-width: 680px;
        }

        h3 {
            font-weight: 500;
            font-size: 18px;
            line-height: 25px;
            text-align: center;
            color: #FFFFFF;
            margin: 0 auto 50px;
            max-width: 780px;
        }

        .activation-button {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 30px;
            width: 256px;
            height: 65px;
            border: 3px solid #303054;
            box-sizing: border-box;
            border-radius: 40px;
            margin: 0 auto;
            cursor: pointer;

            img {
                width: 14px;
                margin: 0 12px 0 0;
            }

            span {
                font-weight: bold;
                font-size: 18px;
                line-height: 25px;
                color: #FAFF00;
            }
        }
    }

    .popular-roads {
        margin: 40px 0 130px;
    }
}
</style>
