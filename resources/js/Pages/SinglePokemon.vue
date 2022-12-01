<template>
    <div>
        <div>
            {{ singlePokemon.name }}
        </div>
        <div>
            <img :src="(sprite)" alt="">
        </div>
        <div v-for="move in singlePokemon.moves">
            {{move.name}}
        </div>
    </div>
</template>

<script setup>
defineProps([
    'singlePokemon',
    'sprite'
]);
</script>

<style scoped>

</style>
