<template>
    <div class="package-card">
        <div class="package-header">
            <div class="user-info">
                <div class="avatar">
                    <img src="/images/placeholder-user-image.png" alt="">
                </div>
                <p>{{ data.user.name }}</p>
                <div class="rating">
                    <img v-for="star in data.user.stars" src="/images/star-icon.png" alt="">
                    <img v-for="star in 5 - data.user.stars" src="/images/star-icon-inactive.png" alt="">
                </div>
            </div>
            <div class="price-info">
                <div class="price-switch">
                    <div class="icon" :class="{'active': data.price.type === 'lari'}">
                        <svg width="12" height="15" viewBox="0 0 12 15" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.204 8.006C3.204 8.774 3.366 9.458 3.69 10.058C4.026 10.646 4.488 11.108 5.076 11.444C5.664 11.768 6.33 11.93 7.074 11.93H10.782V14H3.402C2.718 14 2.082 14.03 1.494 14.09V12.056L2.826 11.984V11.93C2.082 11.474 1.53 10.88 1.17 10.148C0.81 9.404 0.63 8.606 0.63 7.754C0.63 6.506 0.972 5.402 1.656 4.442C2.352 3.482 3.3 2.84 4.5 2.516V0.877999H5.724V2.318C5.82 2.306 5.964 2.3 6.156 2.3C6.36 2.3 6.51 2.306 6.606 2.318V0.877999H7.83V2.516C9.054 2.864 10.002 3.548 10.674 4.568C11.358 5.588 11.7 6.776 11.7 8.132H9.126C9.126 7.16 9.018 6.386 8.802 5.81C8.586 5.234 8.262 4.82 7.83 4.568V8.132H6.606V4.208C6.51 4.196 6.36 4.19 6.156 4.19C5.964 4.19 5.82 4.196 5.724 4.208V8.132H4.5V4.568C4.068 4.82 3.744 5.228 3.528 5.792C3.312 6.344 3.204 7.082 3.204 8.006Z"
                                fill="#FFFFFF"/>
                        </svg>
                    </div>
                    <div class="icon" :class="{'active': data.price.type === 'dollar'}">
                        <svg width="10" height="16" viewBox="0 0 10 16" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.05 13.856C3.462 13.832 2.892 13.748 2.34 13.604C1.788 13.46 1.338 13.286 0.99 13.082L1.53 10.976C2.49 11.504 3.486 11.768 4.518 11.768C5.046 11.768 5.466 11.672 5.778 11.48C6.09 11.276 6.246 11 6.246 10.652C6.246 10.316 6.096 10.028 5.796 9.788C5.496 9.548 5.01 9.314 4.338 9.086C3.282 8.738 2.478 8.306 1.926 7.79C1.374 7.274 1.098 6.608 1.098 5.792C1.098 4.988 1.368 4.304 1.908 3.74C2.448 3.164 3.192 2.78 4.14 2.588V0.877999H5.904V2.462C6.924 2.51 7.794 2.708 8.514 3.056L7.992 5.09C7.536 4.898 7.128 4.748 6.768 4.64C6.408 4.532 5.952 4.478 5.4 4.478C4.86 4.478 4.464 4.574 4.212 4.766C3.972 4.958 3.852 5.198 3.852 5.486C3.852 5.774 4.014 6.032 4.338 6.26C4.662 6.476 5.22 6.734 6.012 7.034C7.08 7.406 7.848 7.856 8.316 8.384C8.784 8.912 9.018 9.584 9.018 10.4C9.018 11.228 8.736 11.948 8.172 12.56C7.608 13.16 6.822 13.55 5.814 13.73V15.566H4.05V13.856Z"
                                fill="#FFFFFF"/>
                        </svg>
                    </div>
                </div>
                <p>
                    {{ data.price.value }}
                    <svg v-if="data.price.type === 'lari'" width="12" height="15" viewBox="0 0 12 15"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M3.204 8.006C3.204 8.774 3.366 9.458 3.69 10.058C4.026 10.646 4.488 11.108 5.076 11.444C5.664 11.768 6.33 11.93 7.074 11.93H10.782V14H3.402C2.718 14 2.082 14.03 1.494 14.09V12.056L2.826 11.984V11.93C2.082 11.474 1.53 10.88 1.17 10.148C0.81 9.404 0.63 8.606 0.63 7.754C0.63 6.506 0.972 5.402 1.656 4.442C2.352 3.482 3.3 2.84 4.5 2.516V0.877999H5.724V2.318C5.82 2.306 5.964 2.3 6.156 2.3C6.36 2.3 6.51 2.306 6.606 2.318V0.877999H7.83V2.516C9.054 2.864 10.002 3.548 10.674 4.568C11.358 5.588 11.7 6.776 11.7 8.132H9.126C9.126 7.16 9.018 6.386 8.802 5.81C8.586 5.234 8.262 4.82 7.83 4.568V8.132H6.606V4.208C6.51 4.196 6.36 4.19 6.156 4.19C5.964 4.19 5.82 4.196 5.724 4.208V8.132H4.5V4.568C4.068 4.82 3.744 5.228 3.528 5.792C3.312 6.344 3.204 7.082 3.204 8.006Z"
                            fill="#1EAA56"/>
                    </svg>
                    <svg v-if="data.price.type === 'dollar'" width="10" height="16" viewBox="0 0 10 16"
                         fill="none"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M4.05 13.856C3.462 13.832 2.892 13.748 2.34 13.604C1.788 13.46 1.338 13.286 0.99 13.082L1.53 10.976C2.49 11.504 3.486 11.768 4.518 11.768C5.046 11.768 5.466 11.672 5.778 11.48C6.09 11.276 6.246 11 6.246 10.652C6.246 10.316 6.096 10.028 5.796 9.788C5.496 9.548 5.01 9.314 4.338 9.086C3.282 8.738 2.478 8.306 1.926 7.79C1.374 7.274 1.098 6.608 1.098 5.792C1.098 4.988 1.368 4.304 1.908 3.74C2.448 3.164 3.192 2.78 4.14 2.588V0.877999H5.904V2.462C6.924 2.51 7.794 2.708 8.514 3.056L7.992 5.09C7.536 4.898 7.128 4.748 6.768 4.64C6.408 4.532 5.952 4.478 5.4 4.478C4.86 4.478 4.464 4.574 4.212 4.766C3.972 4.958 3.852 5.198 3.852 5.486C3.852 5.774 4.014 6.032 4.338 6.26C4.662 6.476 5.22 6.734 6.012 7.034C7.08 7.406 7.848 7.856 8.316 8.384C8.784 8.912 9.018 9.584 9.018 10.4C9.018 11.228 8.736 11.948 8.172 12.56C7.608 13.16 6.822 13.55 5.814 13.73V15.566H4.05V13.856Z"
                            fill="#1EAA56"/>
                    </svg>
                </p>
            </div>
        </div>
        <div class="package-road">
            <template v-for="(city, index) in data.road">
                <p :class="{'start': city.type === 'start'}">{{ city.name }}</p>
                <img v-if="index !== data.road.length - 1" src="/images/arrow-right-lightblue.png" alt="">
            </template>
        </div>
        <div class="package-tags">
            <div class="tag-item" v-for="tag in data.tags">
                <img :src="tag.type === 1 ? '/images/plane-icon.png' : '/images/box-icon.png'" alt="">
                <span>{{ tag.name }}</span>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PackageCard',
    props: {
        data: {
            type: Object,
            default() {
                return {}
            }
        }
    }
}
</script>

<style scoped lang="scss">
.package-card {
    max-width: 850px;
    background: #FFFFFF;
    box-shadow: 0 22px 70px #C9E6ED;
    border-radius: 30px;
    padding: 30px;
    margin: 0 0 20px;
    cursor: pointer;

    .package-header {
        display: flex;
        align-items: flex-start;
        justify-content: space-between;

        .user-info {
            display: grid;
            grid-template-columns: 50px auto;
            grid-template-rows: 30px 20px;
            grid-gap: 0 12px;
            grid-template-areas:
                            'user name'
                            'user stars';

            .avatar {
                grid-area: user;
                overflow: hidden;
                border-radius: 50%;
                height: 50px;
                width: 50px;

                img {
                    height: 50px;
                    width: 50px;
                }
            }

            p {
                grid-area: name;
                font-size: 16px;
                line-height: 30px;
                color: #000000;
            }

            .rating {
                grid-area: stars;
                display: flex;
                align-items: center;
                flex-wrap: nowrap;

                img {
                    width: 14px;
                    height: 14px;
                    margin: 0 5px 6px 0;
                }
            }
        }

        .price-info {
            display: flex;
            align-items: center;

            .price-switch {
                background: #DDEFF3;
                border-radius: 30px;
                height: 35px;
                width: 70px;
                display: grid;
                grid-template-columns: 35px 35px;

                .icon {
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    border-radius: 50%;
                    margin: 3px;
                    width: 29px;
                    height: 29px;

                    svg {
                        path {
                            fill: #1D519A;
                        }
                    }

                    &.active {
                        background: #1D519A;

                        svg {
                            path {
                                fill: #FFFFFF;
                            }
                        }
                    }
                }
            }

            p {
                font-weight: bold;
                font-size: 36px;
                line-height: 36px;
                color: #1EAA56;
                margin: 0 0 0 16px;
                position: relative;
                padding: 0 15px 0 0;

                svg {
                    position: absolute;
                    bottom: 5px;
                    right: 0;
                }
            }
        }
    }

    .package-road {
        margin: 25px 0 0;
        display: flex;
        align-items: center;

        p {
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

        img {
            width: 20px;
            margin: 0 20px;
        }
    }

    .package-tags {
        display: flex;
        align-items: center;


        .tag-item {
            display: flex;
            align-items: center;
            margin: 25px 36px 0 0;

            &:last-child {
                margin: 25px 0 0;
            }

            img {
                width: 23px;
                margin: 0 10px 0 0;
            }

            span {
                font-weight: 500;
                font-size: 16px;
                color: #000000;
            }
        }
    }
}
</style>
