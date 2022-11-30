<template>
    <div v-for="p in singlePokemon.forms">
        {{p.name}}
    </div>
</template>

<script setup>
defineProps(['singlePokemon']);
</script>

<style scoped>

</style>
