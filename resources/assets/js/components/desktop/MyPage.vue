<template>
    <div>
        <div id="page">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <div class="menu">
                <div class="row mr-5">
                    <div class="col-md-5">
                        <a href="/categorias" style="text-decoration:none">
                            <h3 class="text-menu">PORTAFOLIO</h3>
                        </a>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <a href="/contacto" style="text-decoration:none">
                            <h3 class="text-menu">CONTACTO</h3>
                        </a>
                    </div>
                </div>
            </div>
    
            <div class="content-page">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active" style="background-image: url('/images/slider/1.jpg')"></div>
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