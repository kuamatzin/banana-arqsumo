<template>
    <div>
        <div id="page" v-if="show_menu == false">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <img src="/images/menu.svg" width="50" height="50" alt="logo" class="menu" @click="show_menu = true">

            <div class="container mt-5">
                <categories-menu v-show="show_project_detail == false"></categories-menu>
                
                <categories v-show="show_project_detail == false" @loadProjectDetail="loadProjectDetail"></categories>
            </div>

            <project-detail v-show="show_project_detail == true" :project="project" @loadCategories="loadCategories"></project-detail>
            
        </div>

        <div style="background-color: #565656; height: 100vh;" id="menu" v-else class="pl-4">
            <a href="/"><img src="/images/logo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <img src="/images/close.png" width="50" height="50" alt="logo" class="menu" v-if="show_menu == true" @click="show_menu = false">
            <img src="/images/menu.svg" width="50" height="50" alt="logo" class="menu" v-else @click="show_menu = false">

            <div style="height: 100vh;" class="d-flex align-items-center">
                <div>
                    <div class="mx-4">
                        <a href="/categorias" style="text-decoration: none;"><h1 class="text-white">PORTAFOLIO</h1></a>
                        <a href="/contacto" style="text-decoration: none;"><h1 class="text-white">CONTACTO</h1></a>
                    </div>

                    <div class="mx-4 mt-5">
                        <p class="text-white">+52 (222) 543 5467</p>
                        <p class="text-white">hello@arqmasuno.mx</p>
                    </div>

                    <div class="d-flex align-items-start mt-5">
                        <img src="/images/social/instagram-white.svg" alt="instagram" width="50px" class="ml-4">
                        <img src="/images/social/facebook-white.svg" alt="facebook" width="50px" class="mx-3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import ProjectDetail from './ProjectDetail.vue'

    export default {
        components: {ProjectDetail},

        data(){
            return {
                show_menu: false,
                show_project_detail: false,
                project: []
            }
        },

        methods: {
            loadProjectDetail(project){
                this.project = project
                this.show_project_detail = true
            },

            loadCategories(){
                this.project = []
                this.show_project_detail = false
            }
        }
    }
</script>