<script setup>
    import { toRefs } from 'vue'
    import { Link } from '@inertiajs/vue3'
    
    const props = defineProps({
        logo: String,
        name: String,
        category: String,
        worth: String,
        city: String,
        country: String,
        rated: Number,
        createDate: String,

    })
    const { worth, logo, name, category, city, country, createDate, rated } = toRefs(props)

</script>
<template>
    <Link
     :to="'/'"
     class="p-3 bg-white rounded-lg shadow-md transition-500 hover:shadow-xl"
    >
        <div class="flex justify-between items-center">
            <img 
             :src="logo" 
             alt=""
             class="w-14 h-14 cover inline-block rounded-full"
            >
            <div class="bg-green-100 w-6 h-6 text-xs px-2 py-1 text-center rounded-full text-green-500">
                {{ rated }}
            </div>
        </div>
        <h2 class="text-[17px] pt-1 capitalize font-bold">
            {{ name }}
        </h2>
        <p class="text-[13px] text-slate-600 capitalize font-semibold">
            {{ category }}
        </p>
        <p class="text-sm text-sm mt-1 capitalize">
            {{country}}, {{city}}
        </p>
        <div class="mt-5 flex items-center justify-between">
            <div class="text-sm text-slate-500">
                ${{worth}}
            </div>
            <div class="text-sm text-slate-500">
                {{createDate}}
            </div>
        </div>
    </Link>
</template>