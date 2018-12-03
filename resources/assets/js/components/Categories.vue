<template>
    <div>
        <div id="images" class="col-md-4" v-for="image in images">
            <div class="project-detail">
                <img :src="image" class="image pointer img-fluid mt-4" @click="projectDetail(image)">
                <div class="middle">
                    <div class="text strong">Bourbon Street</div>
                </div>
            </div>
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
                        '/images/categorias/comercial/Bourbon Street/1.jpg',
                        '/images/categorias/comercial/La Burguesa/1.jpg',
                        '/images/categorias/comercial/La Estrella/1.jpg',
                        '/images/categorias/comercial/Mercado La Paz/1.jpg',
                        '/images/categorias/comercial/Pabellón de las Flores/1.jpg',
                        '/images/categorias/comercial/Padre Mezcal/1.jpg',
                        '/images/categorias/comercial/Sens Nightclub/1.jpg',
                        '/images/categorias/comercial/Simonetta Bakery/1.jpg',
                        '/images/categorias/comercial/Zapatitos Azul y Rosa/1.jpg',
                    ],

                    [
                        '/images/categorias/interiorismo/Casa San Andrés/1.jpg',
                        '/images/categorias/interiorismo/Casa Totolac/1.jpg',
                        '/images/categorias/interiorismo/Encinos 7/1.jpg',
                    ],

                    [
                        '/images/categorias/paisajismo/Kathrein/1.jpg'
                    ],

                    [
                        '/images/categorias/residencial/Adriático 63/3.jpg',
                        '/images/categorias/residencial/Almendros 19/1.jpg',
                        '/images/categorias/residencial/Almendros 29/1.jpg',
                        '/images/categorias/residencial/Antigua Cementera/1.jpg',
                        '/images/categorias/residencial/Casa Carcaña 53/1.jpg',
                        '/images/categorias/residencial/Casa Cortázar/1.jpg',
                        '/images/categorias/residencial/Casa Querétaro 35/1.jpg',
                        '/images/categorias/residencial/Casa RZ/1.jpg',
                        '/images/categorias/residencial/Casa Sana Anita/1.jpg',
                        '/images/categorias/residencial/El Sabinal/1.jpg',
                        '/images/categorias/residencial/Hacienda Zacatelco/1.jpg',
                        '/images/categorias/residencial/Navojoa/1.jpg',
                        '/images/categorias/residencial/Palenque/1.jpg',
                        '/images/categorias/residencial/Sabinos 2/1.jpg',
                        '/images/categorias/residencial/San Cosme/1.jpg',
                    ],

                    [
                        '/images/categorias/vertical/Casa del Patio/1.jpg',
                        '/images/categorias/vertical/Diagonal 28/1.jpg',
                        '/images/categorias/vertical/Huexo 45/1.jpg',
                        '/images/categorias/vertical/Momoxpan 2405/1.jpg',
                        '/images/categorias/vertical/Sur 18 Agua Santa/1.jpg',
                        '/images/categorias/vertical/Teziutlán 53/1.jpg',
                        '/images/categorias/vertical/Torre San Martinito/1.jpg',
                        '/images/categorias/vertical/X-601/1.jpg'
                    ]
                ]
            }
        },
        methods: {
            getImagesFromCategory(category){
                this.images = this.category_images[category - 1]
            },

            projectDetail(image){
                this.$emit('loadProjectDetail', image)
            }
        }
    }
</script>

<style scoped>
.project-detail {
    background-color: black;
}
.image {
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}

.project-detail:focus .image,
.project-detail:hover .image {
  opacity: 0.4;
}

.project-detail:focus .middle
.project-detail:hover .middle {
  opacity: 1;
}

.text {
  color: white;
  font-weight: bold;
  font-size: 20px;
  padding: 16px 32px;
}
</style>