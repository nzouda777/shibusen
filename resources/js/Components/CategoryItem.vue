<script setup>
import { toRefs, ref } from 'vue'
import { Link, router } from '@inertiajs/vue3'
import { stringify } from 'postcss'

const route = router
const props = defineProps({
    title: String,
    routeUrl: String
})
const { title,  routeUrl } = toRefs(props)

</script>
<template>
    <div 
        :class="route.page.url == routeUrl ? 'border-b-2 border-indigo-500': '' "
    >
        <Link
         :to="routeUrl"
         class=""
         :class="route.page.url == routeUrl ? 'border-b-2 border-indigo-500 text-indigo-500 font-semibold': 'text-black' "
        >
            <div class="text-sm capitalize">
                {{ title }}
            </div>
        </Link>
    </div>
</template>