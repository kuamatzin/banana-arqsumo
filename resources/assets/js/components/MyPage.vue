<template>
    <div>
        <div id="page" v-if="show_menu == false">
            <a href="/"><img src="/images/logo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <img src="/images/menu.svg" width="50" height="50" alt="logo" class="menu" @click="show_menu = true">
    
            <div class="content-page" v-if="show_menu == false">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="background-image: url('/images/slider/1.jpg')"></div>
                        <div class="carousel-item" style="background-image: url('/images/slider/2.jpg')"></div>
                        <div class="carousel-item">
                            <video autoplay loop muted poster="screenshot.jpg" class="video">
                                <source src="images/slider/video.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div style="background-color: #565656; height: 100vh;" id="menu" v-else class="pl-4">
            <a href="/"><img src="/images/logo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <img src="/images/close.png" width="50" height="50" alt="logo" class="menu" v-if="show_menu == true" @click="show_menu = false">
            <img src="/images/menu.svg" width="50" height="50" alt="logo" class="menu" v-else @click="show_menu = false">
    
            <div style="height: 100vh;" class="d-flex align-items-center">
                <div>
                    <div class="mx-4">
                        <a href="/categorias" style="text-decoration: none;">
                            <h1 class="text-white">PORTAFOLIO</h1>
                        </a>
                        <a href="/contacto" style="text-decoration: none;">
                            <h1 class="text-white">CONTACTO</h1>
                        </a>
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
    export default {
        data() {
            return {
                show_menu: false
            }
        }
    }
</script>