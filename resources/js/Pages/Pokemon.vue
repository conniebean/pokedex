<template>
    <div>
        <div>
            <input class="input flex inline-flex border border-black" placeholder="Find a Pokemon..." v-model="id"/>
            <button class="border border-black button rounded-md shadow-lg" type="submit" @click="searchButtonPressed">
                Search!
            </button>
        </div>

        <div v-for="p in pokemon">
            <button type="submit" @click="pokemonSelected(p.id)" >{{ p.name }}</button>
        </div>
    </div>
</template>

<script setup>

import {ref} from "vue";

defineProps(['pokemon']);

const id = ref('');

function searchButtonPressed() {
    window.location.href = `/pokemon/${id.value}`;
}

function pokemonSelected(pokemonId) {
    window.location.href = `/pokemon/${pokemonId}`;
}

</script>

<style scoped>
.input {
    margin: 40px;
    align-content: center;
}
</style>
