<template>
    <div>
        <div v-for="p in pokemon.results">
            {{ p.name }}
        </div>
    </div>


</template>

<script setup>
defineProps(['pokemon']);
</script>

<style scoped>

</style>
