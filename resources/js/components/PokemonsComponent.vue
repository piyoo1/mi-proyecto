import { default } from './ExampleComponent.vue';
<template>
    <div class="row">

        <div class="col-sm" v-for="pokemon in pokemons">
        
        <div class="card text-center" style="width: 18rem; margin-top: 70px;">
        <img style="height: 100px; width: 100px; background-color: #EFEFEF; margin: 20px;" class="card-img-top
        rounded-circle mx-auto d-block" src="images/" alt="">
        <div class="card-body">
        <h5 class="card-title">{{ pokemon.name }}</h5>
     <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="/trainers/" class="btn btn-primary">Ver más...</a>
         </div>
        </div>
    </div>
</div>
</template>

<script>
    export default{
    data(){
        return{
            pokemons: [ ]
        }
    },

    mounted(){
        axios.get('http://127.0.0.1:8000/pokemons').then(response => (this.pokemons = response.data))
    }
}
</script>