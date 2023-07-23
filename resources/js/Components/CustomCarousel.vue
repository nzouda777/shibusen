<script setup>
import { toRefs, ref } from "vue";
import { Link } from "@inertiajs/vue3";
import ChevronLeft from 'vue-material-design-icons/ChevronLeft.vue'
import ChevronRight from 'vue-material-design-icons/ChevronRight.vue'
import 'vue3-carousel/dist/carousel.css'
import { Carousel, Slide } from 'vue3-carousel'
import SliderItem from './SliderItem.vue'

let currentSlide = ref(0)
let isHoverCategory = ref(false)

const props = defineProps({
    category: String,
    data: Array
})
const {  data, category} = toRefs(props)

const slideTo = (val) => {
    if (val && currentSlide.value <= 7) {
        let res = currentSlide.value + 4
        if (res <= 12) {
            currentSlide.value = currentSlide.value + 4
        } else if(res > 12){
            currentSlide.value = 12
        }
    } else if(!val) {
        let res = currentSlide.value - 4
        if (res > 0) {
            currentSlide.value = currentSlide.value - 4
        } else if(res < 1){
            currentSlide.value = 0
        }
    }
}

</script>
<template>
    <div>
        <div class="flex justify-between pb-5 ml-3 mr-6">
            <Link
                to="/artist"
                @mouseenter="$event => isHoverCategory = true"
                @mouseleave="$event => isHoverCategory = false"
                :class="isHoverCategory ? 'hover:text-[#22c55e]' : 'text-black' "
                class="flex items-center font-semibold text-xl cursor-pointer"
            >
                {{ category }}
                <ChevronRight
                    :fillColor="isHoverCategory ? '#22c55e' : '#ffffff' "
                    :size="25"
                    class=""
                />
            </Link>
            <div class="flex items-center">
                <button
                    @click="$event => slideTo(false)"
                    class="rounded-full p-2 hover:bg-[#Dcfce7]"
                >
                    <ChevronLeft fillColor="#22c55e" :size="30" />
                </button>
                <div class="px-2"></div>
                <button
                    @click="$event => slideTo(true)"
                    class="rounded-full p-2 hover:bg-[#Dcfce7]"
                >
                    <ChevronRight fillColor="#22c55e" :size="30" />
                </button>
            </div>
        </div>
        <Carousel
            class="mr-8"
            ref="carousel"
            v-model="currentSlide"
            :items-to-show="2"
            :items-to-scroll="4"
            :transition="800"
            snapAlign="start"
        >
            <Slide v-for="slide in data" :key="slide" class="flex items-baseline w-full">
                <SliderItem :slide="slide"/>
            </Slide>
        </Carousel>
    </div>
</template>

