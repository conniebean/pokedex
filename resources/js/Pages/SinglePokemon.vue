<template>
    <div>
        <div>
            <input class="input flex inline-flex border border-black" placeholder="Find another Pokemon..." v-model="id"/>
            <button class="border border-black button rounded-md shadow-lg" type="submit" @click="searchButtonPressed">
                Search!
            </button>
        </div>
        <div class="centreDiv">
            <div class="image">
                <div v-for="pkmn in singlePokemon">
                    {{pkmn.name}}
                    <div class="ml-3">
                        <img :src="(pkmn.sprite)" alt="">
                    </div>
                    Type: {{pkmn.type}}
                </div>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col">
                <h1 class="headline text-center">Moves</h1>
                <div class="border border-black overflow-auto h-40">
                    <div class="flex flex-col w-full text-center">
                        <ul v-for="move in moves">
                            <li>{{ move }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
import {ref} from "vue";

defineProps([
    'singlePokemon',
    'moves'
]);

const id = ref('');

function searchButtonPressed() {
    window.location.href = `/pokemon/${id.value}`;
}

</script>

<style scoped>
.headline {
    font-weight: bold;
    font-size: large;
}

.image {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
    text-align: center;
    border: double #2d3748;
}

.centreDiv {
    display: block;
    margin: 30px auto;
    width: 25%;
}

.col {
    width: 50%;
}

.row:after {
    content: "";
    display: table;
    clear: both;
    max-width: 30%;
}

.input {
    margin: 40px;
    align-content: center;
}
</style>
