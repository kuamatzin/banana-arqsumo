<template>
    <div class="w-full">
        <div class="mt-2">
            <p class="mb-4 text-center">Subir archivos multimedia</p>
            <vue-dropzone ref="myVueDropzone" id="dropzone" :options="dropzoneOptions" @vdropzone-complete="removeFileFromDropzone"></vue-dropzone>
        </div>
        <draggable v-model="files" @start="drag=true" @end="drag=false" id="holamundo" class="mt-8 flex flex-wrap">
            <div v-for="(file, index) in files" class="md:w-1/4 p-2 -ml-1 -mr-1">
                <div class="img-wrap">
                    <i class="fas fa-trash-alt close" @click="promptUserForDeleteImage(file.id, index)"></i>
                    <img :src="'/' + file.path" class="w-full image">
                </div>
                <input type="text" class="bg-yellow" placeholder="Agregar descripcion" :value="file.description">
            </div>
        </draggable>
    </div>
</template>

<script>
    import vue2Dropzone from 'vue2-dropzone'
    import 'vue2-dropzone/dist/vue2Dropzone.min.css'
    import swal from 'sweetalert'
    import draggable from 'vuedraggable'
    
    export default {
        components: {
            vueDropzone: vue2Dropzone,
            draggable
        },

        props: ['project_id'],

        mounted(){
            this.getMultimediaFiles()
        },

        data() {
            return {
                files: [],
                dropzoneOptions: {
                    url: '/multimedia/' + this.project_id,
                    thumbnailWidth: 150,
                    maxFilesize: 0.5,
                    headers: {
                        "My-Awesome-Header": "header value",
                        'x-csrf-token': document.head.querySelector('meta[name="csrf-token"]').getAttribute('content')
                    }
                }
            }
        },

        methods: {
            getMultimediaFiles(){
                axios.get('/multimedia/' + this.project_id).then(({data}) => this.files = data)
            },

            removeFileFromDropzone(file){
                let response = JSON.parse(file.xhr.response)

                if (response.status != 'uploaded') return
                
                setTimeout(() => {
                    this.$refs.myVueDropzone.removeFile(file);
                    this.files.push(response.file)
                }, 1000);
            },

            promptUserForDeleteImage(id, index){
                swal({
                    title: "¿Estas seguro?",
                    text: "Una vez eliminado no se podrá revertir la acción",
                    icon: "warning",
                    buttons: ["Cancelar", "Borrar"],
                    dangerMode: true,
                })
                .then((willDelete) => {
                  willDelete ? this.deleteImage(id, index) : 0
                });
            },

            deleteImage(id, index) {
                axios.delete('/multimedia/' + id).then(({data}) => this.files.splice(index, 1))
            }
        }
    }
</script>