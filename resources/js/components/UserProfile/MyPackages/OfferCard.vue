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
                <p>{{ data.price.value }} $</p>
            </div>
        </div>
        <div class="package-road">
            <template v-for="(city, index) in data.road">
                <p :class="{'start': city.type === 'start'}">{{ city.name }}</p>
                <img v-if="index !== data.road.length - 1" src="/images/arrow-right-lightblue.png" alt="">
            </template>
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
    background: #FFFFFF;
    padding: 30px;
    margin: 0 0 40px;
    border: 1px solid #C5DDE2;
    box-sizing: border-box;
    border-radius: 20px;
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

            p {
                font-weight: bold;
                font-size: 36px;
                line-height: 36px;
                color: #1EAA56;
                margin: 0 0 0 16px;
                position: relative;
                padding: 0 15px 0 0;
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
}
</style>
