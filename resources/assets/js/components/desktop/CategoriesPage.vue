<template>
    <div>
        <div id="page">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <div class="menu">
                <div class="row mr-2 mt-3">
                    <div class="col-md-5">
                        <a href="/categorias" style="text-decoration:none">
                            <h3 class="text-menu-inverse">PORTAFOLIO</h3>
                        </a>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <a href="/contacto" style="text-decoration:none">
                            <h3 class="text-menu-inverse">CONTACTO</h3>
                        </a>
                    </div>
                </div>
            </div>

            <div class="container-fluid mt-5 pr-5 pl-5">
                <desktop-categories-menu v-show="show_project_detail == false"></desktop-categories-menu>
                
                <desktop-categories v-show="show_project_detail == false" @loadProjectDetail="loadProjectDetail"></desktop-categories>
            </div>

            <project-detail v-show="show_project_detail == true" :project="project" @loadCategories="loadCategories"></project-detail>
            
        </div>
    </div>
</template>

<script>
    import ProjectDetail from './../ProjectDetail.vue'

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