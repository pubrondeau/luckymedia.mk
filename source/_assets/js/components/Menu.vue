<template>
    <div :class="isScrolling ? 'shadow-lg' : ' '" class="sticky top-0 bg-white"
         style="z-index: 9999; transition: all 0.25s linear">
        <div class="container">
            <div :class="isScrolling ? 'h-20' : 'h-32'" class="row items-center justify-between">
                <div class="col-6">
                    <v-icon name="luckymedia" class="text-black h-12"/>
                </div>
                <div class="col-6 flex justify-end">
                    <svg @click="isVisible = true" xmlns="http://www.w3.org/2000/svg"
                         class="fill-current block text-black w-12 h-12 lg:hidden" fill="none" viewBox="0 0 21 21">
                        <path fill-rule="evenodd"
                              d="M14 14h3.5v3.5H14V14zm-5.25 0h3.5v3.5h-3.5V14zM3.5 14H7v3.5H3.5V14zM14 8.75h3.5v3.5H14v-3.5zm-5.25 0h3.5v3.5h-3.5v-3.5zm-5.25 0H7v3.5H3.5v-3.5zM14 3.5h3.5V7H14V3.5zm-5.25 0h3.5V7h-3.5V3.5zm-5.25 0H7V7H3.5V3.5z"
                              clip-rule="evenodd"/>
                    </svg>
                    <ul class="hidden lg:flex lg:flex-row">
                        <li v-for="(menu, index) in menuItems"
                            class="mr-4 xl:mr-8 last:mr-0 py-2 animate menu-item">
                            <template v-if="menu.scroll">
                                <a class="text-gray-500" href="#" v-scroll-to="menu.link">{{ menu.name }}</a>
                            </template>
                            <template v-else>
                                <a class="text-gray-500" :href="menu.link">{{ menu.name }}</a>
                            </template>
                        </li>
                    </ul>
                </div>
                <transition enter-active-class="animated rollIn" leave-active-class="animated rollOut">
                    <div v-show="isVisible" class="fixed z-50 p-5 inset-0 bg-black">
                        <nav class="flex flex-col">
                            <div class="flex flex-row justify-between">
                                <v-icon name="luckymedia" class="text-white h-12"/>

                                <svg @click="isVisible = false" xmlns="http://www.w3.org/2000/svg"
                                     class="fill-current block text-white w-12 h-12" fill="none" viewBox="0 0 21 21">
                                    <path fill-rule="evenodd"
                                          d="M14 14h3.5v3.5H14V14zm-5.25 0h3.5v3.5h-3.5V14zM3.5 14H7v3.5H3.5V14zM14 8.75h3.5v3.5H14v-3.5zm-5.25 0h3.5v3.5h-3.5v-3.5zm-5.25 0H7v3.5H3.5v-3.5zM14 3.5h3.5V7H14V3.5zm-5.25 0h3.5V7h-3.5V3.5zm-5.25 0H7V7H3.5V3.5z"
                                          clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <ul class="mt-20">
                                <li v-for="(menu, index) in menuItems" class="mb-10 last:mb-0">
                                    <a class="w-full text-white uppercase tracking-wide text-3xl" :href="menu.link">- {{
                                        menu.name }}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </transition>
            </div>
        </div>
    </div>
</template>

<script>
    import _ from 'lodash';

    export default {
        props: ["menus"],
        data() {
            return {
                isVisible: false,
                isScrolling: false,
                lastPosition: 0,
                limitPosition: 140,
            }
        },
        computed: {
            menuItems() {
                return JSON.parse(this.menus);
            }
        },
        methods: {
            handleScroll: _.throttle(function(){
                if (document.documentElement.scrollTop >= 128) {
                    this.isScrolling = true;
                } else {
                    this.isScrolling = false;
                }
            }, 100)
        },
        mounted() {
            window.addEventListener('scroll', this.handleScroll);
        },
        beforeDestroy() {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>

<style scoped>
    @keyframes rollIn {
        from {
            opacity: 0;
            transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
        }

        to {
            opacity: 1;
            transform: translate3d(0, 0, 0);
        }
    }

    @keyframes rollOut {
        from {
            opacity: 1;
        }

        to {
            opacity: 0;
            transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
        }
    }

    .rollIn {
        animation-name: rollIn;
    }

    .rollOut {
        animation-name: rollOut;
    }

    .animated {
        animation-duration: 1s;
        animation-fill-mode: both;
    }
</style>