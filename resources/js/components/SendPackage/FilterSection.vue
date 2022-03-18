<template>
    <section>
        <div class="filter-section">
            <div class="location-select">
                <img class="location" src="/images/location-icon.png" alt="">
                <template v-if="direction">
                    <p class="start">{{ direction.start }}</p>
                    <img class="arrow-right" src="/images/arrow-right-lightblue.png" alt="">
                    <p>{{ direction.end }}</p>
                </template>
                <div class="add-location" ref="locationForm">
                    <img src="/images/add-location.png" alt="" @click="openLocation">
                    <div class="location-form" v-if="openLocationForm">
                        <div class="input-form custom-location-input">
                            <p>{{ $t('გამგზავნი ქვეყანა') }}</p>
                            <Places
                                :placeholder="$t('აირჩიე ქვეყანა')"
                            />
                        </div>
                        <div class="input-form custom-location-input">
                            <p>{{ $t('მიმღები ქვეყანა') }}</p>
                            <Places
                                :placeholder="$t('აირჩიე ქვეყანა')"
                            />
                        </div>
                        <div class="submit">
                            <span>{{ $t('მონაცემების განახლება') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="transport-filters">
                <div class="filter-item"
                     v-for="(filter, i) in transportFilters" :key="`filter${i}`"
                     :class="{'active': filter.id === selectedTransportFilter}"
                     @click="selectedTransportFilter = filter.id"
                >
                    <p>{{ $t(filter.name) }}</p>
                    <span>{{ filter.count }}</span>
                </div>
            </div>
        </div>
    </section>

</template>

<script>
import Places from 'vue-places';

export default {
    name: 'FilterSection',
    components: {
        Places
    },
    data() {
        return {
            direction: {
                start: 'თბილისი',
                end: 'დუსელდორფი'
            },
            openLocationForm: false,
            transportFilters: [
                {
                    id: null, name: 'სატრასპორტო საშუალებები', count: 23
                },
                {
                    id: 1, name: 'თვითმფრინავი', count: 19
                },
                {
                    id: 2, name: 'ავტომობილი', count: 4
                },
            ],
            selectedTransportFilter: null,
        }
    },
    methods: {
        openLocation() {
            this.openLocationForm = !this.openLocationForm
            if (this.openLocationForm) {
                window.addEventListener('click', this.closeLocation)
            } else {
                window.removeEventListener('click', this.closeLocation)
            }
        },
        closeLocation(e) {
            if (!e.path.includes(this.$refs.locationForm)) {
                this.openLocationForm = false
                window.removeEventListener('click', this.closeLocation)
            }
        }
    }
}
</script>

<style lang="scss">
.custom-location-input {
    .ap-input-icon svg {
        top: 42%
    }
}
</style>

<style scoped lang="scss">
section {
    width: 100%;
    background-color: #FFFFFF;

    .filter-section {
        max-width: 1290px;
        margin: 0 auto;
        display: flex;
        justify-content: space-between;
        padding: 0 16px;

        .location-select {
            display: flex;
            flex-wrap: nowrap;
            align-items: center;
            padding: 28px 0;

            img.location {
                width: 28px;
                margin: 0 28px 0 0;
            }

            & > p {
                background: #FFFFFF;
                border: 1px solid #C2DDE4;
                border-radius: 7px;
                font-weight: bold;
                font-size: 16px;
                line-height: 16px;
                color: #E1473D;
                padding: 10px 13px;

                &.start {
                    color: #1D519A;
                }
            }

            img.arrow-right {
                width: 20px;
                margin: 0 20px;
            }

            .add-location {
                position: relative;
                margin: 0 28px;

                img {
                    width: 24px;
                    cursor: pointer;
                }

                .location-form {
                    position: absolute;
                    left: -6px;
                    top: 40px;
                    background: #FFFFFF;
                    border: 5px solid #00D1FF;
                    box-sizing: border-box;
                    box-shadow: 0 22px 70px #C9E6ED;
                    border-radius: 20px;
                    padding: 28px 24px;
                    width: 370px;

                    .input-form {
                        margin: 0 0 20px;

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
            }
        }

        .transport-filters {
            display: flex;
            align-items: center;

            .filter-item {
                display: flex;
                align-items: center;
                color: #819599;
                font-weight: bold;
                font-size: 16px;
                border-bottom: 5px solid transparent;
                padding: 28px 0 22px;
                margin: 0 0 0 36px;
                cursor: pointer;

                &:first-child {
                    margin: 0 0 0 6px;
                }

                &.active {
                    color: #1D519A;
                    border-bottom-color: #1D519A;

                    span {
                        background-color: #1D519A;
                    }
                }

                p {
                    margin: 0 10px 0 0;
                }

                span {
                    background-color: #819599;
                    height: 36px;
                    padding: 10px;
                    color: #FFFFFF;
                    border-radius: 13px;
                }
            }
        }
    }
}
</style>
