<script setup>
    import MenuItem from './MenuItem.vue' 
</script>

<template>

    <div class="company-logo">
        <h2 class="text-xl font-bold">
            No<span class="text-green-500">name.</span>
        </h2>
    </div>
    <div class="space-x-8">
        <MenuItem pageUrl="/" name="Home" />
        <MenuItem pageUrl="/company" name="Companies" />
        <MenuItem pageUrl="/about" name="About" />
    </div>
</template>
