<script setup>
import { toRefs, ref, watchEffect } from "vue"
import { Link, router } from "@inertiajs/vue3"

const route = router
const props = defineProps({
    name: String,
    pageUrl: String
})
let navText = ref(null)
const { pageUrl, name } = toRefs(props)
console.log(route)
// watchEffect( () => {
// })
</script>
<template>
    <div class="inline-block">
        <Link
         :to="pageUrl"
         :class="pageUrl === route.page.url ? 'text-indigo-500' : 'text-black'"
         class="hover:text-indigo-500"
        >
            <div class="py-1 px-2 cursor-pointer font-semibold text-sm">
                {{ name }}
            </div>
        </Link>
    </div>
</template>