<template>
    <div class="mt-5">
        <br>
        <div class="container">
            <div class="d-flex align-items-end mt-5 pointer" @click="backToCategories">
                <i class="fas fa-arrow-left mb-3 return"></i>
                <h4 class="categories ml-2 return">regresar al portafolio</h4>
            </div>       
        </div>

        <img :src="project" class="img-fluid mt-3" width="100%">

        <div class="container mb-5">
            <h3 class="mt-5 categories" style="color: #565656">DIAGONAL 28</h3>
            <br>
            <p class="mt-3 details">PROYECTO EJECUTIVO</p>

            <p class="details">TERRENO <strong style="color: #565656">461M</strong></p>
            <p class="details">CONSTRUCCIÓN <strong style="color: #565656">1,957M2</strong></p>

            <p class="details">UBICACIÓN DEL PROYECTO</p>
            <strong style="color: #565656">SAN PEDRO, CHOLULA</strong>
        </div>

    </div>
</template>

<script>
    export default {
        props: ['project'],

        data(){
            return {

            }
        },

        methods: {
            backToCategories(){
                this.$emit('loadCategories')
            }
        }
    }
</script>

<style scoped="">
    .return:hover{
        color: #282E41;
    }

    .details {
        margin: 0;
        padding: 0;
    }
</style>