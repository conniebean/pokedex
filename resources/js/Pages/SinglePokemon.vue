<template>
    <div>

        <div class="centreDiv">
            <div class="image">
                {{ singlePokemon.name }}
                <div class="ml-3">
                    <img :src="(sprite)" alt="">
                </div>
                <h2 v-for="type in singlePokemon.types">
                    Type: {{ type.type.name }}
                </h2>
            </div>
        </div>
        <div class="row mx-2">
            <div class="col">
                <h1 class="headline">Moves</h1>
                <div class="border border-black overflow-auto h-40">
                    <div class="flex flex-col w-full text-center">
                    <span v-for="move in singlePokemon.moves">
                    {{ move.move.name }}
                </span>
                    </div>
                </div>
            </div>
            <div class="col">
                <h1 class="headline">Find Here!</h1>
                <div class="border border-black overflow-auto h-40">
                    <div class="flex flex-col w-full text-center ">
                    <span v-for="area in location">
                        {{ area.location_area.name }}
                    </span>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script setup>
defineProps([
    'singlePokemon',
    'sprite',
    'location',
]);
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
    float: left;
    width: 50%;
}

.row:after {
    content: "";
    display: table;
    clear: both;
    max-width: 60%;
}
</style>
