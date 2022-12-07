<template>
    <div>
        <div>
                <input placeholder="Find a Pokemon..." v-model="id"/>
                <button class="button rounded-full" type="submit" @click="searchButtonPressed">
                    Search!
                </button>
        </div>

        <div v-for="p in pokemon.results">
            {{ p.name }}
        </div>
    </div>
</template>

<script setup>

import {ref} from "vue";
defineProps(['pokemon']);

const id = ref('');
function searchButtonPressed(){
    console.log('You pressed the button!', id.value);
    window.location.href = `/pokemon/${id.value}`;
}

</script>

<style scoped>


</style>
