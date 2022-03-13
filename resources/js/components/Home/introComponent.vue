<template>
    <section>
        <div class="intro">
            <h1>{{ $t('გააგზავნეთ ამანათი მსოფლიოს ნებისმიერ წერტილში, დროულად მიტანის სერვისით') }}</h1>
            <div class="package-from">
                <div class="form-inputs">
                    <div class="select-from">
                        <p>{{ $t('გამგზავნი ქვეყანა') }}</p>
                        <select>
                            <option>{{ $t('აირჩიე ქვეყანა') }}</option>
                        </select>
                        <input type="text" :placeholder="$t('ქალაქი, სოფელი ან ZIP კოდი')">
                    </div>
                    <div class="select-to">
                        <p>{{ $t('მიმღები ქვეყანა') }}</p>
                        <select>
                            <option>{{ $t('აირჩიე ქვეყანა') }}</option>
                        </select>
                        <input type="text" :placeholder="$t('ქალაქი, სოფელი ან ZIP კოდი')">
                    </div>
                    <div class="select-when">
                        <p>{{ $t('თარიღი') }}</p>
                        <input type="text" :placeholder="$t('აირჩიე')">
                    </div>
                    <div class="select-details">
                        <p>{{ $t('შეფუთვის დეტალები') }}</p>
                        <div class="details-info">
                            <input type="text" :placeholder="$t('წონა')">
                            <input type="text" :placeholder="$t('სიგა.')">
                            <input type="text" :placeholder="$t('სიმა.')">
                            <input type="text" :placeholder="$t('სიგრ.')">
                        </div>
                    </div>
                    <div class="submit">
                        <span>{{ $t('ანგარიშის შექმნა  და შეკვეთა') }}</span>
                    </div>
                </div>
                <div class="intro-video">
                    <video controls>
                        <source src="/images/placeholder-video.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                        <!--<div class="play-button">-->
                        <!--    <img src="/images/video-play-button.png" alt="">-->
                        <!--</div>-->
                    </video>
                    <!-- <img src="/images/intro-logo.png" alt="">-->
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: 'IntroComponent'
}
</script>

<style scoped lang="scss">
section {
    width: 100%;

    .intro {
        max-width: 1290px;
        padding: 50px 10px 40px;
        margin: 0 auto;
        display: grid;
        grid-template-areas:
        "title video"
        "form form";
        grid-template-columns: 2fr 1fr;
        grid-template-rows: 220px 1fr;

        h1 {
            grid-area: title;
            font-size: 48px;
            line-height: 60px;
            color: #000000;
            font-weight: 500;
        }

        .package-from {
            grid-area: form;
            width: 100%;
            padding: 46px 53px;
            background: #FFFFFF;
            box-shadow: 0 22px 70px #C9E6ED;
            border-radius: 30px;
            display: grid;
            grid-template-areas:"form-inputs intro-video";
            grid-template-columns: 6fr 4fr;

            .form-inputs {
                grid-area: form-inputs;
                display: grid;
                grid-column-gap: 32px;
                grid-row-gap: 36px;
                grid-template-areas:
                "from from to to"
                "when details details details"
                "submit submit submit submit";
                grid-template-columns: 1fr 1fr 1fr 1fr;

                .select-from {
                    grid-area: from;
                }

                .select-to {
                    grid-area: to;
                }

                .select-when {
                    grid-area: when;
                }

                .select-details {
                    grid-area: details;

                    .details-info {
                        display: grid;
                        grid-template-columns: 1fr 1fr 1fr 1fr;
                        grid-column-gap: 10px;
                    }
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

                    span {
                        font-weight: bold;
                        font-size: 16px;
                        color: #1D519A;
                    }
                }
            }

            .intro-video {
                grid-area: intro-video;

                video {
                    position: relative;
                    display: block;
                    margin: -240px -70px 0 auto;
                    width: 100%;
                    border-radius: 30px;

                    .play-button {
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        width: 100px;
                        height: 100px;
                        background: #FFFFFF;
                        border-radius: 10px;
                        display: flex;
                        align-items: center;
                        justify-content: center;

                        img {
                            height: 36px;
                        }
                    }
                }
            }
        }
    }

    .form-inputs {
        p {
            font-weight: 500;
            font-size: 16px;
            color: #000000;
            margin: 0 0 18px;
        }

        input, select {
            height: 40px;
            width: 100%;
            background: #FAFDFE;
            border: 1px solid #D1EAF1;
            box-sizing: border-box;
            box-shadow: 0 2px 1px rgba(209, 234, 241, 0.25);
            border-radius: 40px;
            margin: 0 0 10px;
            padding: 2px 18px;
            font-weight: 500;
            font-size: 16px;
            color: #889CB9;
        }

        input:focus, select:focus, input:focus-visible, select:focus-visible {
            border-color: #1D519A;
            outline: none;
        }

        input::placeholder {
            color: #889CB9;
            font-size: 16px;
        }
    }
}

@media only screen and (max-width: 1000px) {

    section {
        .intro {
            padding: 35px 15px;
            grid-template-areas:
                "title"
                "form";
            grid-template-columns: 1fr;
            grid-template-rows: auto auto;

            h1 {
                font-weight: 400;
                font-size: 18px;
                line-height: 135%;
                margin: 0 0 32px;
                padding: 0 15px;
            }

            .package-from {
                grid-template-areas:
                    "form-inputs"
                    "intro-video";
                grid-template-columns: 1fr;
                grid-template-rows: auto auto;
                padding: 18px;

                .form-inputs {
                    margin: 0 0 32px;
                    grid-template-areas:
                        "from"
                        "to"
                        "when"
                        "details"
                        "submit";
                    grid-template-columns: 1fr;
                    grid-column-gap: 22px;
                    grid-row-gap: 22px;

                    p {
                        font-size: 14px;
                        line-height: 14px;
                        margin: 0 0 14px;
                    }

                    input, select {
                        height: 35px;
                        font-size: 14px;
                        line-height: 14px;
                    }

                    input::placeholder {
                        font-size: 14px;
                        line-height: 14px;
                    }

                    .submit {
                        span {
                            font-size: 14px;
                            line-height: 14px;
                        }
                    }
                }

                .intro-video {
                    video {
                        margin: 0;
                    }
                }
            }
        }
    }
}
</style>
