<template>
    <div>
        <div id="page" v-if="show_menu == false">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <i class="fas fa-bars menu" style="font-size: 28px; color: #848484" alt="logo" @click="show_menu = true"></i>
    
            <div class="content-page" v-if="show_menu == false">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <video autoplay muted loop playsinline class="video">
                                <source :src="url + '/video_low.mp4'" type="video/mp4" />
                                <source :src="url + '/video_low.webm'" type="video/webm" />
                                <source :src="url + '/video_low.ogg'" type="video/ogg" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div style="background-color: #565656; height: 100vh;" id="menu" v-else class="pl-4">
            <a href="/"><img src="/images/logo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <img src="/images/close.png" width="25" height="25" alt="logo" class="menu" v-if="show_menu == true" @click="show_menu = false">
            <img src="/images/menu.svg" width="25" height="25" alt="logo" class="menu" v-else @click="show_menu = false">
    
            <div style="height: 100vh;" class="d-flex align-items-center flex-column">
                <div class="flex-grow-1 d-flex flex-column justify-content-center">
                    <a href="/categorias" style="text-decoration:none">
                        <h3 class="text-menu text-center">PORTAFOLIO</h3>
                    </a>
                    <a href="/contacto" style="text-decoration:none" class="mt-2">
                        <h3 class="text-menu text-center">CONTACTO</h3>
                    </a>
                </div>

                <div>
                    <a href="https://www.facebook.com/arqmasuno/?ref=br_rs" target="_blank">
                        <img src="/images/social/instagram-white.svg" alt="instagram" width="30px" class="ml-4 pointer">
                    </a>
                    
                    <a href="https://www.instagram.com/arqmasuno/" target="_blank">
                        <img src="/images/social/facebook-white.svg" alt="facebook" width="30px" class="mx-3 pointer">
                    </a>
                </div>


                <div class="mt-3 mb-5">
                    <p class="text-menu-footer text-center">+52 (222) 543 5467</p>
                    <p class="text-menu-footer text-center">hello@arqmasuno.mx</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                url: window.location.origin,
                show_menu: false
            }
        }
    }
</script>

<style scoped>
.carousel-item {
    height: 100vh;
    min-height: 300px;
    background: no-repeat center center scroll;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
}
</style>
