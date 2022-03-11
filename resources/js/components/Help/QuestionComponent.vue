<template>
    <div class="question-component" :class="{'open': open}">
        <div class="question-head" @click="toggle">
            <slot name="head"/>
            <svg width="16" height="10" viewBox="0 0 16 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.9813 0.5L15.5 2.01406L8 9.5L0.500009 2.01406L2.01876 0.499999L8 6.46719L13.9813 0.5Z"
                      fill="#5F636B"/>
            </svg>
        </div>
        <div ref="questionBody" class="question-body" :style="{'max-height': open ? `${bodyHeight}px` : null}">
            <slot name="body"/>
        </div>
    </div>
</template>

<script>
export default {
    name: 'QuestionComponent',
    data() {
        return {
            open: false,
            bodyHeight: 0,
        }
    },
    methods: {
        toggle() {
            this.open = !this.open

            if (this.open) {
                const bodyHeight = this.$refs.questionBody.getBoundingClientRect().height
                this.bodyHeight = 0
                setTimeout(() => {
                    this.bodyHeight = bodyHeight + 26
                }, 10)
            }
        }
    }
}
</script>

<style scoped lang="scss">
.question-component {
    width: 100%;
    background: #EBFAFE;
    border-radius: 10px;
    position: relative;
    margin: 0 0 10px;

    &.open {
        .question-head {
            svg {
                transform: rotateZ(180deg);

                path {
                    fill: #00D1FF;
                }
            }
        }

        .question-body {
            position: unset;
            opacity: 1;
            max-height: 0;
            padding: 0 36px 26px;
        }
    }

    .question-head {
        cursor: pointer;
        position: relative;
        width: 100%;
        font-weight: 500;
        font-size: 18px;
        line-height: 100%;
        color: #1D519A;
        padding: 26px 36px;

        svg {
            position: absolute;
            right: 36px;
            top: 31px;
            transition: all 0.3s ease-in-out;
        }
    }

    .question-body {
        font-weight: 500;
        font-size: 18px;
        line-height: 140%;
        color: #000000;
        overflow: hidden;
        transition: max-height 0.3s ease-in-out;
        position: absolute;
        padding: 0 36px;
        opacity: 0;
    }
}
</style>
