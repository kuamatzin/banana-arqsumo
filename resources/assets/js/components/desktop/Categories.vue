<template>
    <div class="row">
        <div id="images" class="col-md-4" v-for="image in images">
            <img :src="image" class="pointer img-fluid mt-4" @click="projectDetail(image)">
        </div>
    </div>
</template>

<script>
    export default {
        created(){
            Events.$on('selectedCategory', (category) => {
                this.getImagesFromCategory(category)
            });

            this.getImagesFromCategory(1)
        },

        data(){
            return {
                images: false,
                category_images: [
                    [
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png',
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png'
                    ],

                    [
                        '/images/categorias/2.png',
                        '/images/categorias/1.jpg',
                        '/images/categorias/3.png',
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png'
                    ],

                    [
                        '/images/categorias/3.png',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png',
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png'
                    ],

                    [
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png',
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png'
                    ],

                    [
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png',
                        '/images/categorias/1.jpg',
                        '/images/categorias/2.png',
                        '/images/categorias/3.png'
                    ]
                ]
            }
        },
        methods: {
            getImagesFromCategory(category){
                this.images = this.category_images[category]
            },

            projectDetail(image){
                this.$emit('loadProjectDetail', image)
            }
        }
    }
</script>