<template>
    <div class="help-page">
        <h1>{{ $t('ხშირად დასმული კითხვები') }}</h1>
        <div class="questions-wrapper">
            <div class="search-bar">
                <img src="/images/search-icon.png" alt="">
                <input type="text" :placeholder="$t('მოძებნე შეკითხვა')">
            </div>
            <h3>{{ $t('შენი ამანათი') }}</h3>
            <QuestionComponent>
                <template #head>
                    1. {{ $t('რისი გაგზავნა შემიძლია?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    2. {{ $t('შეზღუდულია თუ არა ამანათის ზომა და წონა და როგორ უნდა განისაზღვროს იგი?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    3. {{ $t('როგორ უნდა გავზომო ამანათის ზომა და წონა?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    4. {{
                        $t(`როგორ უნდა მოვიქცე იმ შემთხვევაში თუ კი ამანათის წონა იმაზე მეტია, ვიდრე შეკვეთაშია მითითებული?`)
                    }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <h3>{{ $t('ამანათის ღირებულება') }}</h3>
            <QuestionComponent>
                <template #head>
                    1. {{ $t('როგორ უნდა გავიგო გადაზიდვის ფასი?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    2. {{ $t('რა განსაზღვრავს ამანათის ღირებულებას?') }}
                </template>
                <template #body>
                    <p>
                        ეს დამოკიდებულია ამანათის წონაზე, ზომასა და მონიტორინგი ვერსიაზე, ასევე თქვენს მიერ შერჩეული<br>
                        დროის მანძილზე, რომლის განმავლობაშიც ამანათი უნდა მივიდეს მიმღებამდე.
                    </p>
                    <p>
                        გთხოვთ შეგახსენოთ, რომ თითოეულ ამანათს აქვს თავისი მოცულობითი წონა და იგი გამოითვლება ქვემოთ<br>
                        მოყვანილი ფორმულის მიხედვით:<br>
                        მოცულობითი წონა = L (სიგრძე) x W (სიგანე) x H (სიმაღლე) / 6000<br>
                        ასევე, გთხოვთ გაცნობოთ, რომ ფორმულა შეიძლება განსხვავდებოდეს, რადგან თითოეულ პროვაიდერს აქვს<br>
                        თავისი გაანგარიშება.<br>
                        გარდა ამისა, გთხოვთ გაითვალისწინოთ, რომ თუ თქვენი ამანათი არის არასტანდარტული (არ აქვს
                        თანაბარი<br>
                        მხარეები, არის ოვალური, ცილინდრული ან აქვს სხვადასხვა ფორმა), ის ასევე შეიძლება დამატებით<br>
                        დატენოთ.
                    </p>
                    <p>

                        ჩვენი მიზანია შემოგტავაზოთ მიწოდების ოპტიმალური მარშრუტი და საუკეთესო ფასი ხარისხისა და<br>
                        მომსახურეობის გათვალისწინებით. თუმცა, ჩვენ ყურადღებით ვაკვირდებით ყველა ამანათს.
                    </p>
                    <p>
                        Parcel ABC გპირდებათ საუკეთესო ფასს. თუმცა, თუ თქვენ ნახავთ უკეთეს შემოთავაზებას ონლაინში თქვენი<br>
                        ამანათისათვის, გთხოვთ დაგვიკავშირდეთ და ჩვენ გავაკეთებთ ყველაფერს, რათა გავამართლოთ თქვენი<br>
                        მოლოდინები.
                    </p>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    3. {{ $t('რას ითვალისწინებს გადმოზიდვის ფასი?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    4. {{ $t('რა განაპირობებს Sendab-ის ასეთ მინიმალურ ღირებულებას?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <h3>{{ $t('შეფუთვა და ეტიკეტირება') }}</h3>
            <QuestionComponent>
                <template #head>
                    1. {{ $t('როგორ უნდა შევფუთო ამანათი?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
            <QuestionComponent>
                <template #head>
                    2. {{ $t('რა სახით უნდა მოხდეს ამანათის მარკირება?') }}
                </template>
                <template #body>
                </template>
            </QuestionComponent>
        </div>
        <ContactForm/>
    </div>

</template>

<script>
import QuestionComponent from "../components/Help/QuestionComponent";
import ContactForm from "../components/Help/ContactForm";

export default {
    name: 'Help',
    components: {
        QuestionComponent,
        ContactForm
    }
}
</script>

<style scoped lang="scss">
.help-page {

    h1 {
        font-weight: 500;
        font-size: 48px;
        line-height: 60px;
        color: #000000;
        text-align: center;
        margin: 60px 0 120px;
    }

    .questions-wrapper {
        background: #FFFFFF;
        max-width: 1290px;
        margin: 0 auto 190px;
        box-shadow: 0 22px 70px #C9E6ED;
        border-radius: 30px;
        padding: 53px;

        .search-bar {
            display: flex;
            padding: 0 0 45px;
            border-bottom: 1px solid #D5E7EC;

            img {
                width: 28px;
                height: 28px;
                margin: 0 10px 0 0;
            }

            input {
                padding: 5px 10px;
                flex-grow: 1;
                font-weight: 500;
                font-size: 18px;
                line-height: 100%;
                color: #1D519A;

                &::placeholder {
                    color: #1D519A;
                }

                &:focus, &:focus-visible {
                    border-color: transparent;
                    outline: none;
                }
            }
        }

        h3 {
            font-weight: 500;
            font-size: 24px;
            line-height: 60px;
            color: #000000;
            margin: 22px 0 18px;
        }

        p {
            margin: 0 0 18px;
        }
    }
}
</style>
