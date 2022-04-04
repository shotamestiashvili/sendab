<template>
    <div class="default-grid">
        <div class="grid-navigation">
            <div class="navigation-item"
                 v-for="item in data" :key="item.name"
                 @click="activate(item.key)"
                 :class="{'active': active === item.key}"
            >
                <p>{{ $t(item.name) }}</p>
                <svg width="7" height="10" viewBox="0 0 7 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M0.875 1.51118L1.7582 0.625244L6.125 5.00024L1.7582 9.37524L0.875 8.4893L4.35586 5.00024L0.875 1.51118Z"
                        fill="#5F636B"/>
                </svg>
            </div>
        </div>
        <div class="grid-component">
            <component :is="activeComponent.component" v-bind="activeComponent.props"></component>
        </div>
    </div>

</template>

<script>
export default {
    name: 'defaultGrid',
    props: {
        data: {
            type: Array,
            default() {
                return []
            }
        },
        value: {
            type: String,
            default: null
        }
    },
    data() {
        return {
            active: null
        }
    },
    computed: {
        activeComponent() {
            return this.data.find(el => el.key === this.active) || {component: '', props: {}}
        }
    },
    watch: {
        value(value) {
            if (value) {
                this.active = value
            }
        }
    },
    mounted() {
        this.active = this.value
        if (!this.active && this.data.length) {
            this.active = this.data[0].key
        }
    },
    methods: {
        activate(key) {
            if (this.active === key) return

            this.active = key
            this.$emit('input', key)
        }
    }
}
</script>

<style scoped lang="scss">
.default-grid {
    max-width: 1290px;
    padding: 80px 10px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 2fr;
    grid-gap: 30px;

    .grid-navigation {
        background: #FFFFFF;
        box-shadow: 0 22px 70px #C9E6ED;
        border-radius: 30px;
        padding: 30px 25px;
        display: flex;
        flex-direction: column;
        height: fit-content;

        .navigation-item {
            cursor: pointer;
            padding: 20px 25px;
            border-bottom: 1px solid #C5DDE2;
            border-left: 5px solid transparent;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-sizing: border-box;

            p {
                font-weight: 500;
                font-size: 16px;
                line-height: 16px;
                color: #1D519A;
            }

            &.active {
                border-left-color: #1D519A !important;
                background-color: #E4F7FC;

                svg path {
                    fill: #00D1FF;
                }
            }
        }
    }

    .grid-component {
        background: #FFFFFF;
        box-shadow: 0 22px 70px #C9E6ED;
        border-radius: 30px;
        padding: 50px 100px;
        height: fit-content;
    }
}
</style>
