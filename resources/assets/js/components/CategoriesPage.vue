<template>
    <div>
        <div v-if="show_menu == false">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logom"></a>
            <img src="/images/menu-grey-button.svg" class="menu" width="28px" @click="show_menu = true">

            <div class="container mt-5">
                <categories-menu v-show="show_project_detail == false"></categories-menu>
                
                <categories v-show="show_project_detail == false" @loadProjectDetail="loadProjectDetail"></categories>

                <project-detail v-show="show_project_detail == true" :project="project" :mobile="true" @loadCategories="loadCategories"></project-detail>
            </div>
        </div>

        <div style="background-color: #565656; height: 100vh;" id="menu" v-else class="pl-4">
            <a href="/"><img src="/images/logo.svg" width="60" height="60" alt="logo" class="logom"></a>
            <img src="/images/close.png" width="25" height="25" alt="logo" class="menu" v-if="show_menu == true" @click="show_menu = false">
            <img src="/images/menu.svg" width="25" height="25" alt="logo" class="menu" v-else @click="show_menu = false">
    
            <div style="height: 100vh;" class="d-flex align-items-center flex-column">
                <div class="flex-grow-1 d-flex flex-column justify-content-center">
                    <a href="/categorias" style="text-decoration:none">
                        <h3 class="text-menu text-center">PORTAFOLIO</h3>
                    </a>
                    <a href="/contacto" style="text-decoration:none">
                        <h3 class="text-menu text-center">CONTACTO</h3>
                    </a>
                </div>

                <div class="mb-3">
                    <a href="https://www.facebook.com/arqmasuno/?ref=br_rs" target="_blank">
                        <img src="/images/social/instagram-white.svg" alt="instagram" width="30px" class="ml-4 pointer">
                    </a>
                    
                    <a href="https://www.instagram.com/arqmasuno/" target="_blank">
                        <img src="/images/social/facebook-white.svg" alt="facebook" width="30px" class="mx-3 pointer">
                    </a>
                </div>


                <div class="mb-5">
                    <p class="text-menu-footer text-center">+52 (222) 543 5467</p>
                    <p class="text-menu-footer text-center">hello@arqmasuno.mx</p>
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