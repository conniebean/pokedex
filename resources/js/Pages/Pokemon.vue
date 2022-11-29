<template>
    <div v-for="p in pokemon.results">
        {{p.name}}
    </div>
</template>

<script setup>
defineProps(['pokemon']);
</script>

<style scoped>

</style>
