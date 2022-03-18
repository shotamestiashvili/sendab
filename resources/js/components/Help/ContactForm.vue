<template>
    <section>
        <div class="contact-form">
            <div class="email-icon-wrapper">
                <div class="email-icon">
                    <img src="/images/email-icon.png" alt="">
                </div>
            </div>
            <h3>{{ $t('კითხვების შემთხვევაში შეავსეთ ქვემოთ მოცემული ველი') }}</h3>
            <div class="form-inputs">
                <div>
                    <p>{{ $t('თემა') }}: *</p>
                    <input v-model="formData.subject" name="subject" type="text" :placeholder="$t('რა საკითხზე გვწერთ')">
                </div>
                <div>
                    <p>{{ $t('სახელი, გვარი') }}: *</p>
                    <input v-model="formData.name" name="name" type="text" :placeholder="$t('თქვენი სახელი და გვარი')">
                </div>
                <div>
                    <p>{{ $t('ელ. ფოსტა') }}: *</p>
                    <input v-model="formData.email" name="email" type="email" :placeholder="$t('თქვენი ელ. ფოსტა')">
                </div>
                <div>
                    <p>{{ $t('ამანათის საიდენთიფიკაციო კოდი') }}:</p>
                    <input v-model="formData.parcel_code" name="parcel_code" type="text" :placeholder="$t('საიდენთიფიკაციო კოდი')">
                </div>
                <div style="grid-area: text">
                    <p>{{ $t('შეტყობინება') }}: *</p>
                    <textarea v-model="formData.comment" name="comment" type="text" :placeholder="$t('მოგვწერე შეტყობინება')"/>
                </div>
                <div class="submit" @click="submitForm">
                    <span>{{ $t('შეტყობინების გაგზავნა') }}</span>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import Swal from 'sweetalert2';
import {ajax, apiUrls} from "../../store/urls";

export default {
    name: 'ContactForm',
    data() {
        return {
            formData: {
                subject: '',
                name: '',
                email: '',
                parcel_code: '',
                comment: '',
            }
        }
    },
    methods: {
        submitForm() {
            ajax
                .post(apiUrls.submitMail, this.formData)
                .then(() => {
                    Swal.fire('Form Submitted');
                    this.formData = {
                        subject: '',
                        name: '',
                        email: '',
                        parcel_code: '',
                        comment: '',
                    }
                })
                .catch(() => {
                })
        }
    }
}
</script>

<style scoped lang="scss">
section {
    background-color: #FFFFFF;
    width: 100%;

    .contact-form {
        max-width: 680px;
        padding: 100px 10px 95px;
        margin: 0 auto;
        position: relative;

        .email-icon-wrapper {
            position: absolute;
            top: -70px;
            left: 0;
            width: 100%;

            .email-icon {
                background: #1D519A;
                border: 10px solid #FFFFFF;
                width: 140px;
                height: 140px;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto;

                img {
                    width: 58px;
                }
            }
        }

        h3 {
            width: 80%;
            margin: 0 auto;
            font-weight: 500;
            font-size: 24px;
            line-height: 30px;
            text-align: center;
            color: #1D519A;
        }

        .form-inputs {
            margin: 50px 0 0;
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-template-rows: 80px 80px 140px 70px;
            grid-gap: 20px;
            grid-template-areas:
                "subject name"
                "email id"
                "text text"
                "submit submit";

            p {
                font-weight: 500;
                font-size: 16px;
                color: #000000;
                margin: 0 0 12px 24px;
            }

            input, select, textarea {
                height: 50px;
                width: 100%;
                background: #FAFDFE;
                border: 1px solid #D1EAF1;
                box-sizing: border-box;
                box-shadow: 0 2px 1px rgba(209, 234, 241, 0.25);
                border-radius: 40px;
                padding: 2px 18px;
                font-weight: 500;
                font-size: 16px;
                color: #889CB9;
            }

            textarea {
                height: 110px;
                resize: none;
                border-radius: 20px;
                padding: 16px 18px;
            }

            input:focus, select:focus, textarea:focus, input:focus-visible, select:focus-visible, textarea:focus-visible {
                border-color: #1D519A;
                outline: none;
            }

            input::placeholder {
                color: #889CB9;
                font-size: 16px;
            }

            .submit {
                grid-area: submit;
                border: 1px solid #1D519A;
                box-sizing: border-box;
                border-radius: 50px;
                display: flex;
                align-items: center;
                justify-content: center;
                height: 50px;
                width: 100%;
                cursor: pointer;
                margin: 20px 0 0;

                span {
                    font-weight: bold;
                    font-size: 16px;
                    color: #1D519A;
                }
            }
        }
    }
}
</style>
