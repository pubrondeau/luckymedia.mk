<template>
    <div class="container py-5 lg:py-10">
        <div class="row justify-between">
            <div class="col-6">
                <v-icon name="luckymedia" class="text-black h-12"/>
            </div>
            <div class="col-6 flex justify-end">
                <svg  @click="isVisible = true" xmlns="http://www.w3.org/2000/svg" class="fill-current block text-black w-12 h-12 lg:hidden" fill="none" viewBox="0 0 21 21">
                    <path fill-rule="evenodd" d="M14 14h3.5v3.5H14V14zm-5.25 0h3.5v3.5h-3.5V14zM3.5 14H7v3.5H3.5V14zM14 8.75h3.5v3.5H14v-3.5zm-5.25 0h3.5v3.5h-3.5v-3.5zm-5.25 0H7v3.5H3.5v-3.5zM14 3.5h3.5V7H14V3.5zm-5.25 0h3.5V7h-3.5V3.5zm-5.25 0H7V7H3.5V3.5z" clip-rule="evenodd"/>
                </svg>
                <ul class="hidden lg:flex lg:flex-row">
                    <li v-for="(menu, index) in menuItems" class="mr-4 xl:mr-8 last:mr-0">
                        <a class="text-gray-500" :href="menu.link">{{ menu.name }}</a>
                    </li>
                </ul>
            </div>
            <transition enter-active-class="animated rollIn" leave-active-class="animated rollOut">
                <div v-show="isVisible" class="fixed z-50 p-5 inset-0 bg-black">
                    <nav class="flex flex-col">
                        <div class="flex flex-row justify-between">
                            <v-icon name="luckymedia" class="text-white h-12"/>

                            <svg  @click="isVisible = false" xmlns="http://www.w3.org/2000/svg" class="fill-current block text-white w-12 h-12" fill="none" viewBox="0 0 21 21">
                                <path fill-rule="evenodd" d="M14 14h3.5v3.5H14V14zm-5.25 0h3.5v3.5h-3.5V14zM3.5 14H7v3.5H3.5V14zM14 8.75h3.5v3.5H14v-3.5zm-5.25 0h3.5v3.5h-3.5v-3.5zm-5.25 0H7v3.5H3.5v-3.5zM14 3.5h3.5V7H14V3.5zm-5.25 0h3.5V7h-3.5V3.5zm-5.25 0H7V7H3.5V3.5z" clip-rule="evenodd"/>
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
</template>

<script>
    export default {
        props: ["menus"],
        data() {
            return {
                isVisible: false,
            }
        },
        computed: {
            menuItems() {
                return JSON.parse(this.menus);
            }
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