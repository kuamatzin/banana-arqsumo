<template>
    <div class="row mb-5" v-if="active_project != 100">
        <div id="images" class="col-md-4 animated fadeInDown" v-for="project in projects[active_project]" @click="projectDetail(project)">
            <div class="project-detail">
                <img :src="project.main_image" class="image pointer img-fluid mt-4">
                <div class="middle pointer">
                    <div class="text strong">{{project.name}}</div>
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

            this.getImagesFromCategory(3)
        },

        data(){
            return {
                images: false,
                active_project: 3,
                projects:[ 
                    [
                        {
                            name: 'Bourbon Street',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '',
                            large_construction: '241M2',
                            year: '2017',
                            main_image: '/images/categorias/comercial/Bourbon Street/1.jpg',
                            images: [
                                '/images/categorias/comercial/Bourbon Street/1.jpg',
                                '/images/categorias/comercial/Bourbon Street/2.jpg',
                                '/images/categorias/comercial/Bourbon Street/3.jpg'
                            ]
                        },
                        {
                            name: 'La Burguesa',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'APIZACO, TLAXCALA',
                            large_land: '90M2',
                            large_construction: '50M2',
                            year: '2017',
                            main_image: '/images/categorias/comercial/La Burguesa/1.jpg',
                            images: [
                                '/images/categorias/comercial/La Burguesa/1.jpg',
                                '/images/categorias/comercial/La Burguesa/2.jpg',
                                '/images/categorias/comercial/La Burguesa/3.jpg'
                            ]
                        },
                        {
                            name: 'La Estrella',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'APIZACO, TLAXCALA',
                            large_land: '463M2',
                            large_construction: '441M2',
                            year: '2015',
                            main_image: '/images/categorias/comercial/La Estrella/1.jpg',
                            images: [
                                '/images/categorias/comercial/La Estrella/1.jpg',
                                '/images/categorias/comercial/La Estrella/2.jpg',
                                '/images/categorias/comercial/La Estrella/3.jpg',
                            ]
                        },
                        {
                            name: 'Mercado La Paz',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'PUEBLA, PUEBLA',
                            large_land: '507M2',
                            large_construction: '760M2',
                            year: '2015',
                            main_image: '/images/categorias/comercial/Mercado La Paz/1.jpg',
                            images: [
                                '/images/categorias/comercial/Mercado La Paz/1.jpg',
                                '/images/categorias/comercial/Mercado La Paz/2.jpg',
                                '/images/categorias/comercial/Mercado La Paz/3.jpg'
                            ]
                        },
                        {
                            name: 'Pabellón de las flores',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'RAFAEL LARA GRAJALES, PUEBLA',
                            large_land: '407M2',
                            large_construction: '429M2',
                            year: '',
                            main_image: '/images/categorias/comercial/Pabellon de las Flores/1.jpg',
                            images: [
                                '/images/categorias/comercial/Pabellon de las Flores/1.jpg',
                                'images/categorias/comercial/Pabellon de las Flores/2.jpg',
                                'images/categorias/comercial/Pabellon de las Flores/3.jpg'
                            ]
                        },
                        {
                            name: 'Padre Mezcal',
                            type: 'PROYECTO + DISEÑO DE INTERIOR',
                            location: 'TLAXCALA, TLAXCALA',
                            large_land: '171M2',
                            large_construction: '673M2',
                            year: '2012',
                            main_image: '/images/categorias/comercial/Padre Mezcal/1.jpg',
                            images: [
                                '/images/categorias/comercial/Padre Mezcal/1.jpg',
                                '/images/categorias/comercial/Padre Mezcal/2.jpg',
                                '/images/categorias/comercial/Padre Mezcal/3.jpg',
                                '/images/categorias/comercial/Padre Mezcal/4.jpg'
                            ]
                        },
                        {
                            name: 'Sens Nightclub',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '',
                            large_construction: '516M2',
                            year: 'POR CONCLUIR EN 2018',
                            main_image: '/images/categorias/comercial/Sens Nightclub/1.jpg',
                            images: [
                                '/images/categorias/comercial/Sens Nightclub/1.jpg',
                                '/images/categorias/comercial/Sens Nightclub/2.jpg',
                                '/images/categorias/comercial/Sens Nightclub/3.jpg',
                                '/images/categorias/comercial/Sens Nightclub/4.jpg'
                            ]
                        },
                        {
                            name: 'Simonetta Bakery',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '',
                            large_construction: '77M2',
                            year: '2014',
                            main_image: '/images/categorias/comercial/Simonetta Bakery/1.jpg',
                            images: [
                                '/images/categorias/comercial/Simonetta Bakery/1.jpg',
                                '/images/categorias/comercial/Simonetta Bakery/2.jpg',
                                '/images/categorias/comercial/Simonetta Bakery/3.jpg',
                                '/images/categorias/comercial/Simonetta Bakery/.jpg'
                            ]
                        },
                        {
                            name: 'Zapatitos azul y rosa',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'PUEBLA, PUEBLA',
                            large_land: '',
                            large_construction: '30M2',
                            year: '2016',
                            main_image: '/images/categorias/comercial/Zapatitos Azul y Rosa/1.jpg',
                            images: [
                                '/images/categorias/comercial/Zapatitos Azul y Rosa/1.jpg',
                                '/images/categorias/comercial/Zapatitos Azul y Rosa/2.jpg',
                                '/images/categorias/comercial/Zapatitos Azul y Rosa/3.jpg'
                            ]
                        }
                    ],
                    [
                        {
                            name: 'CASA SAN ANDRÉS',
                            type: 'PROYECTO + DISEÑO INTERIOR',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '358M2',
                            large_construction: '344M2',
                            year: '2016',
                            main_image: '/images/categorias/interiorismo/Casa San Andres/1.jpg',
                            images: [
                                '/images/categorias/interiorismo/Casa San Andres/1.jpg',
                                '/images/categorias/interiorismo/Casa San Andres/2.jpg',
                                '/images/categorias/interiorismo/Casa San Andres/3.jpg',
                                '/images/categorias/interiorismo/Casa San Andres/4.jpg',
                                '/images/categorias/interiorismo/Casa San Andres/5.jpg'
                            ]
                        },
                        {
                            name: 'CASA TOTOLAC',
                            type: 'DISEÑO INTERIOR + EJECUCIÓN DE OBRA',
                            location: 'TOTOLAC, TLACALA',
                            large_land: '',
                            large_construction: '350M2',
                            year: '2014',
                            main_image: '/images/categorias/interiorismo/Casa Totolac/1.jpg',
                            images: [
                                '/images/categorias/interiorismo/Casa Totolac/1.jpg',
                                '/images/categorias/interiorismo/Casa Totolac/2.jpg',
                                '/images/categorias/interiorismo/Casa Totolac/3.jpg',
                                '/images/categorias/interiorismo/Casa Totolac/4.jpg'
                            ]
                        },
                        {
                            name: 'Encinos 7',
                            type: 'PROYECTO + DISEÑO INTERIOR + EJECUCIÓN DE OBRA',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '',
                            large_construction: '160M2',
                            year: '2014',
                            main_image: '/images/categorias/interiorismo/Encinos 7/1.jpg',
                            images: [
                                '/images/categorias/interiorismo/Encinos 7/1.jpg',
                                '/images/categorias/interiorismo/Encinos 7/2.jpg',
                                '/images/categorias/interiorismo/Encinos 7/3.jpg',
                                '/images/categorias/interiorismo/Encinos 7/4.jpg',
                                '/images/categorias/interiorismo/Encinos 7/5.jpg'
                            ]
                        }
                    ],
                    [
                        {
                            name: 'KATHREIN',
                            type: 'PROYECTO + CONSTRUCCIÓN + DISEÑO DE PAISAJE',
                            location: 'TETLA DE LA SOLIDARIDAD',
                            large_land: '',
                            large_construction: '2,700M2',
                            year: '2015',
                            main_image: '/images/categorias/paisajismo/Kathrein/1.jpg',
                            images: [
                                '/images/categorias/paisajismo/Kathrein/1.jpg',
                                '/images/categorias/paisajismo/Kathrein/2.jpg',
                                '/images/categorias/paisajismo/Kathrein/3.jpg',
                                '/images/categorias/paisajismo/Kathrein/4.jpg'
                            ]
                        },
                    ],
                    [
                        {
                            name: 'ADRIÁTICO 63',
                            type: 'PROYECTO + REMODELACIÓN + INTERVENCIÓN EN FACHADA',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '',
                            large_construction: '',
                            year: '2013',
                            main_image: '/images/categorias/residencial/Adriatico 63/1.jpg',
                            images: [
                                '/images/categorias/residencial/Adriatico 63/1.jpg',
                                '/images/categorias/residencial/Adriatico 63/2.jpg',
                                '/images/categorias/residencial/Adriatico 63/3.jpg',
                                '/images/categorias/residencial/Adriatico 63/4.jpg'
                            ]
                        },
                        {
                            name: 'ALMENDROS 19',
                            type: 'PROYECTO + MODELO DE INVERSIÓN + EJECUCIÓN DE OBRA',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '160M2',
                            large_construction: '203M2',
                            year: '2014',
                            main_image: '/images/categorias/residencial/Almendros 19/1.jpg',
                            images: [
                                '/images/categorias/residencial/Almendros 19/1.jpg',
                                '/images/categorias/residencial/Almendros 19/2.jpg',
                                '/images/categorias/residencial/Almendros 19/3.jpg',
                                '/images/categorias/residencial/Almendros 19/4.jpg',
                                '/images/categorias/residencial/Almendros 19/5.jpg',
                            ]
                        },
                        {
                            name: 'ALMENDROS 29',
                            type: 'PROYECTO + MODELO DE INVERSIÓN + EJECUCIÓN DE OBRA',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '160M2',
                            large_construction: '210M2',
                            year: '2014',
                            main_image: '/images/categorias/residencial/Almendros 29/1.jpg',
                            images: [
                                '/images/categorias/residencial/Almendros 29/1.jpg',
                                '/images/categorias/residencial/Almendros 29/2.jpg',
                                '/images/categorias/residencial/Almendros 29/3.jpg',
                                '/images/categorias/residencial/Almendros 29/4.jpg',
                                '/images/categorias/residencial/Almendros 29/5.jpg',
                            ]
                        },
                        {
                            name: 'ANTIGUA CEMENTERA',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'PUEBLA, PUE',
                            large_land: '120M2',
                            large_construction: '174M2',
                            year: '2016',
                            main_image: '/images/categorias/residencial/Antigua Cementera/1.jpg',
                            images: [
                                '/images/categorias/residencial/Antigua Cementera/1.jpg',
                                '/images/categorias/residencial/Antigua Cementera/2.jpg',
                                '/images/categorias/residencial/Antigua Cementera/3.jpg',
                                '/images/categorias/residencial/Antigua Cementera/4.jpg',
                                '/images/categorias/residencial/Antigua Cementera/5.jpg',
                            ]
                        },
                        {
                            name: 'CARCAÑA 53',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '160M2',
                            large_construction: '197M2',
                            year: '2012',
                            main_image: '/images/categorias/residencial/Casa Carcana 53/1.jpg',
                            images: [
                                '/images/categorias/residencial/Casa Carcana 53/1.jpg',
                                '/images/categorias/residencial/Casa Carcana 53/2.jpg',
                                '/images/categorias/residencial/Casa Carcana 53/3.jpg',
                                '/images/categorias/residencial/Casa Carcana 53/4.jpg',
                                '/images/categorias/residencial/Casa Carcana 53/5.jpg',
                            ]
                        },
                        {
                            name: 'CASA CORTÁZAR',
                            type: 'PROYECTO REMODELACIÓN',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '',
                            large_construction: '',
                            year: 'POR CONCLUIR EN 2018',
                            main_image: '/images/categorias/residencial/Casa Cortazar/1.jpg',
                            images: [
                                '/images/categorias/residencial/Casa Cortazar/1.jpg',
                                '/images/categorias/residencial/Casa Cortazar/2.jpg',
                                '/images/categorias/residencial/Casa Cortazar/3.jpg',
                                '/images/categorias/residencial/Casa Cortazar/4.jpg',
                            ]
                        },
                        {
                            name: 'CASA QUERÉTARO 35',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'PUEBLA, PUEBLA',
                            large_land: '170.12M2',
                            large_construction: '266.62M2',
                            year: 'POR CONCLUIR EN 2019',
                            main_image: '/images/categorias/residencial/Casa Queretaro 35/1.jpg',
                            images: [
                                '/images/categorias/residencial/Casa Queretaro 35/1.jpg',
                                '/images/categorias/residencial/Casa Queretaro 35/2.jpg',
                                '/images/categorias/residencial/Casa Queretaro 35/3.jpg',
                                '/images/categorias/residencial/Casa Queretaro 35/4.jpg',
                                '/images/categorias/residencial/Casa Queretaro 35/5.jpg',
                                '/images/categorias/residencial/Casa Queretaro 35/6.jpg',
                            ]
                        },
                        {
                            name: 'CASA RZ',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'YAUHQUEMECAN, TLAXCALA',
                            large_land: '392M2',
                            large_construction: '275M2',
                            year: '2018',
                            main_image: '/images/categorias/residencial/Casa RZ/1.jpg',
                            images: [
                                '/images/categorias/residencial/Casa RZ/1.jpg',
                                '/images/categorias/residencial/Casa RZ/2.jpg',
                                '/images/categorias/residencial/Casa RZ/3.jpg',
                                '/images/categorias/residencial/Casa RZ/4.jpg',
                                '/images/categorias/residencial/Casa RZ/5.jpg',
                            ]
                        },
                        {
                            name: 'CASA SANTA ANITA',
                            type: 'PROYECTO',
                            location: 'APIZACO, TLAXCALA',
                            large_land: '679M2',
                            large_construction: '365M2',
                            year: '2018',
                            main_image: '/images/categorias/residencial/Casa Sana Anita/1.jpg',
                            images: [
                                '/images/categorias/residencial/Casa Sana Anita/1.jpg',
                                '/images/categorias/residencial/Casa Sana Anita/2.jpg'
                            ]
                        },
                        {
                            name: 'EL SABINAL',
                            type: 'PROYECTO EJECUTIVO + EJECUCIÓN DE OBRA',
                            location: 'APIZACO, TLAXCALA',
                            large_land: '620M2',
                            large_construction: '307M2',
                            year: '2016',
                            main_image: '/images/categorias/residencial/El Sabinal/1.jpg',
                            images: [
                                '/images/categorias/residencial/El Sabinal/1.jpg',
                                '/images/categorias/residencial/El Sabinal/2.jpg',
                                '/images/categorias/residencial/El Sabinal/3.jpg',
                                '/images/categorias/residencial/El Sabinal/4.jpg',
                            ]
                        },
                        {
                            name: 'HACIENDA ZACATELCO',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'ZACATELCO, TLAXCALA',
                            large_land: '1620M2',
                            large_construction: '207M2',
                            year: '2017',
                            main_image: '/images/categorias/residencial/Hacienda Zacatelco/1.jpg',
                            images: [
                                '/images/categorias/residencial/Hacienda Zacatelco/1.jpg',
                                '/images/categorias/residencial/Hacienda Zacatelco/2.jpg',
                                '/images/categorias/residencial/Hacienda Zacatelco/3.jpg',
                                '/images/categorias/residencial/Hacienda Zacatelco/4.jpg',
                                '/images/categorias/residencial/Hacienda Zacatelco/5.jpg',
                            ]
                        },
                        {
                            name: 'NAVOJOA',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '160M2',
                            large_construction: '286M2',
                            year: '2017',
                            main_image: '/images/categorias/residencial/Navojoa/1.jpg',
                            images: [
                                '/images/categorias/residencial/Navojoa/1.jpg',
                                '/images/categorias/residencial/Navojoa/2.jpg',
                                '/images/categorias/residencial/Navojoa/3.jpg',
                                '/images/categorias/residencial/Navojoa/4.jpg',
                            ]
                        },
                        {
                            name: 'PALENQUE',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'SAN ANDRÉS, CHOLULA',
                            large_land: '202M2',
                            large_construction: '256M2',
                            year: '2017',
                            main_image: '/images/categorias/residencial/Palenque/1.jpg',
                            images: [
                                '/images/categorias/residencial/Palenque/1.jpg',
                                '/images/categorias/residencial/Palenque/2.jpg',
                                '/images/categorias/residencial/Palenque/3.jpg',
                                '/images/categorias/residencial/Palenque/4.jpg',
                            ]
                        },
                        {
                            name: 'SABINOS 2',
                            type: 'PROYECTO + EJECUCIÓN DE OBRA',
                            location: 'AMOZOC, PUEBLA',
                            large_land: '780M2',
                            large_construction: '270M2',
                            year: '2017',
                            main_image: '/images/categorias/residencial/Sabinos 2/1.jpg',
                            images: [
                                '/images/categorias/residencial/Sabinos 2/1.jpg',
                                '/images/categorias/residencial/Sabinos 2/2.jpg',
                                '/images/categorias/residencial/Sabinos 2/3.jpg',
                                '/images/categorias/residencial/Sabinos 2/4.jpg',
                                '/images/categorias/residencial/Sabinos 2/5.jpg',
                            ]
                        },
                        {
                            name: 'SAN COSME',
                            type: 'PROYECTO EJECUTIVO',
                            location: '',
                            large_land: '251M2',
                            large_construction: '310.97M2',
                            year: '2017',
                            main_image: '/images/categorias/residencial/San Cosme/1.jpg',
                            images: [
                                '/images/categorias/residencial/San Cosme/1.jpg',
                                '/images/categorias/residencial/San Cosme/2.jpg',
                                '/images/categorias/residencial/San Cosme/3.jpg',
                                '/images/categorias/residencial/San Cosme/4.jpg',
                            ]
                        },
                    ],
                    [
                        {
                            name: 'CASA DEL PATIO',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'PUEBLA, PUE',
                            large_land: '130M2',
                            large_construction: '415M2',
                            year: '2017',
                            main_image: '/images/categorias/vertical/Casa del Patio/1.jpg',
                            images: [
                                '/images/categorias/vertical/Casa del Patio/1.jpg',
                                '/images/categorias/vertical/Casa del Patio/2.jpg',
                                '/images/categorias/vertical/Casa del Patio/3.jpg',
                                '/images/categorias/vertical/Casa del Patio/4.jpg',
                                '/images/categorias/vertical/Casa del Patio/5.jpg',
                                '/images/categorias/vertical/Casa del Patio/6.jpg'
                                
                            ]
                        },
                        {
                            name: 'DIAGONAL 28',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '130M2',
                            large_construction: '1,957M2',
                            year: '2017',
                            main_image: '/images/categorias/vertical/Diagonal 28/1.jpg',
                            images: [
                                '/images/categorias/vertical/Diagonal 28/1.jpg',
                                '/images/categorias/vertical/Diagonal 28/2.jpg',
                                '/images/categorias/vertical/Diagonal 28/3.jpg',
                                '/images/categorias/vertical/Diagonal 28/4.jpg',
                                '/images/categorias/vertical/Diagonal 28/5.jpg',
                                '/images/categorias/vertical/Diagonal 28/6.jpg',
                                '/images/categorias/vertical/Diagonal 28/7.jpg',
                                '/images/categorias/vertical/Diagonal 28/8.jpg',
                                '/images/categorias/vertical/Diagonal 28/9.jpg',
                                '/images/categorias/vertical/Diagonal 28/10.jpg'
                                
                            ]
                        },
                        {
                            name: 'HUEXO 45',
                            type: 'PROYECTO + MODELO DE INVERSIÓN',
                            location: 'PUEBLA, PUEBLA',
                            large_land: '700M2',
                            large_construction: '7,480M2',
                            year: '2012',
                            main_image: '/images/categorias/vertical/Huexo 45/1.jpg',
                            images: [
                                '/images/categorias/vertical/Huexo 45/1.jpg',
                                '/images/categorias/vertical/Huexo 45/2.jpg',
                                '/images/categorias/vertical/Huexo 45/3.jpg'
                                
                            ]
                        },
                        {
                            name: 'MOMOXPAN 2405',
                            type: 'PROYECTO EJECUTIVO + MODELO DE INVERSIÓN +EJECUCIÓN DE OBRA',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '349M2',
                            large_construction: '1,277M2',
                            year: 'POR CONCLUIR EN 2018',
                            main_image: '/images/categorias/vertical/Momoxpan 2405/1.jpg',
                            images: [
                                '/images/categorias/vertical/Momoxpan 2405/1.jpg',
                                '/images/categorias/vertical/Momoxpan 2405/2.jpg',
                                '/images/categorias/vertical/Momoxpan 2405/3.jpg'
                                
                            ]
                        },
                        {
                            name: 'AGUA SANTA',
                            type: 'PROYECTO EJECUTIVO',
                            location: 'PUEBLA, PUE',
                            large_land: '349M2',
                            large_construction: '2,443M2',
                            year: '',
                            main_image: '/images/categorias/vertical/Sur 18 Agua Santa/1.jpg',
                            images: [
                                '/images/categorias/vertical/Sur 18 Agua Santa/1.jpg',
                                '/images/categorias/vertical/Sur 18 Agua Santa/2.jpg',
                                '/images/categorias/vertical/Sur 18 Agua Santa/3.jpg',
                                '/images/categorias/vertical/Sur 18 Agua Santa/4.jpg'
                                
                            ]
                        },
                        {
                            name: 'TEZIUTLÁN 53',
                            type: 'PROYECTO + MODELO DE INVERSIÓN',
                            location: 'PUEBLA, PUEBLA',
                            large_land: '606M2',
                            large_construction: '5,230M2',
                            year: '',
                            main_image: '/images/categorias/vertical/Teziutlan 53/1.jpg',
                            images: [
                                '/images/categorias/vertical/Teziutlan 53/1.jpg',
                                '/images/categorias/vertical/Teziutlan 53/2.jpg',
                                '/images/categorias/vertical/Teziutlan 53/3.jpg'
                                
                            ]
                        },
                        {
                            name: 'TORRE SAN MARTINITO',
                            type: 'PROYECTO + MODELO DE INVERSIÓN',
                            location: 'SAN PEDRO, CHOLULA',
                            large_land: '1,235M2',
                            large_construction: '3,233M2',
                            year: '2014',
                            main_image: '/images/categorias/vertical/Torre San Martinito/1.jpg',
                            images: [
                                '/images/categorias/vertical/Torre San Martinito/1.jpg',
                                '/images/categorias/vertical/Torre San Martinito/2.jpg'
                                
                            ]
                        },
                    ]
                ]
            }
        },
        methods: {
            getImagesFromCategory(category){
                this.active_project = 100
                setTimeout(() => this.active_project = category, 300)
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
  top: 55%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
  text-transform: uppercase;
}

.project-detail:hover .image {
  opacity: 0.4;
}

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
