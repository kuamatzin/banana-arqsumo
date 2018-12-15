<template>
    <div>
        <div id="page">
            <a href="/"><img src="/images/whitelogo.svg" width="100" height="100" alt="logo" class="logo"></a>
            <div class="menu">
                <div class="row mr-5 mt-4">
                    <div class="col-md-5 col-sm-5 col-5">
                        <a href="/categorias" style="text-decoration:none">
                            <h3 class="text-menu">PORTAFOLIO</h3>
                        </a>
                    </div>
                    <div class="col-md-2 col-sm-2 col-2">
                    </div>
                    <div class="col-md-5 col-sm-5 col-5">
                        <a href="/contacto" style="text-decoration:none">
                            <h3 class="text-menu">CONTACTO</h3>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="content-page">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="20000">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <video playsinline autoplay loop muted class="video">
                                <source src="/images/slider/video.mp4" type="video/mp4">
                            </video>
                        </div>
                        <div class="carousel-item" style="background-image: url('/images/slider/1.jpg')"></div>
                        <div class="carousel-item" style="background-image: url('/images/slider/2.jpg')"></div>
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
