<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import StarOutline from 'vue-material-design-icons/StarOutline.vue'
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue'

let isHover = ref(false)
const props = defineProps({
    slide: Object
})


</script>
<template>
    <div class="px-1">
       <Link to="/artist">
            <div
             class="relative "
             @mouseenter="$event => isHover = true"
             @mouseleave="$event => isHover = false"
            >
                <div 
                 :class="isHover ? 'transition ease-in duration-150 bg-opacity-30' : 'transition ease-out duration-150 bg-opacity-5'"
                 class="absolute w-full h-full bg-black z-10 rounded-md"
                />
                
                <div
                 :class="isHover ? 'transition ease-in duration-150 bg-opacity-100' : 'transition ease-out duration-150 bg-opacity-0' "
                 class="absolute z-50 bottom-3 left-[6px] rounded-full bg-white p-2"
                >
                    <StarOutline 
                    :class="isHover ? 'transition ease-in duration-150 bg-opacity-0' : 'transition ease-out duration-150 opacity-0' "
                        :size="23"
                    />
                </div>
                
                <img  :src="slide.url" class="rounded-md w-[fit-content] aspect-square" alt="">
            </div>
            <div class="text-white text-left mt-2">
                <div class="capitalize text-[13px] flex hover:underline text-slate-700 pt-0.5">
                    {{ slide.name }}
                </div>
                <div class="text-[11px] pt-0.5 text-[#858590]">
                    {{ slide.stars }} 
                </div>
            </div>
       </Link>
    </div>
</template>

