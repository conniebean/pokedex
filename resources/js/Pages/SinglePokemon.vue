<template>
    <div>
        <div>
            {{ singlePokemon.name }}
        </div>
        <div>
            <img :src="(sprite)" alt="">
        </div>
        <div>
            <h1 class="headline">Moves</h1>
            <div v-for="move in singlePokemon.moves">
                <ul>{{move.move.name}}</ul>
            </div>
        </div>
        <div>
            <h1 class="headline">Find Here!</h1>
            <div v-for="area in location">
                <ul>{{ area.location_area.name }}</ul>
            </div>
        </div>
    </div>
</template>

<script setup>
defineProps([
    'singlePokemon',
    'sprite',
    'location'
]);
</script>

<style scoped>
.headline{
    font-weight: bold;
}
</style>
