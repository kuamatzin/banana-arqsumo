<template>
    <div class="mt-5">
        <br>
        <div class="container">
            <h4 class="float-left ml-4 mt-5 categories" @click="backToCategories">regresar al portafolio</h4>
        </div>

        <img :src="project" class="img-fluid mt-3" width="100%">

        <div class="container">
            <h3 class="mt-5 categories" style="color: #565656">DIAGONAL 28</h3>
            <br>
            <p class="mt-3">PROYECTO EJECUTIVO</p>

            <p class="mt-4">TERRENO <strong style="color: #565656">461M</strong></p>
            <p>CONSTRUCCIÓN <strong style="color: #565656">1,957M2</strong></p>

            <p class="mt-4">UBICACIÓN DEL PROYECTO</p>
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