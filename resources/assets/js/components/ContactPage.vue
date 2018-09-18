<template>
    <div>
        <div id="page" v-if="show_menu == false">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <img src="/images/menu.svg" width="50" height="50" alt="logo" class="menu" @click="show_menu = true">
            <br><br><br>
            <div class="container mt-5">
                <div class="container mt-5">
                    <h2 class="text-center mt-5">CONTÁCTANOS</h2>
    
                    <div class="mt-4">
                        <p class="text-center">Tel: 222 543 5467</p>
                        <p class="text-center">E-mail: hello@arqmasuno.mx</p>
                        <p class="text-center">Camino Real Momoxpan 1811 - 19 72777 San Pedro Cholula, Puebla</p>
                    </div>
    
                    <form class="mx-4 mt-5">
                        <div class="form-group">
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Nombre" style="background-color: #F4F4F4; border: 1px solid #F4F4F4">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" aria-describedby="emailHelp" placeholder="Teléfono" style="background-color: #F4F4F4; border: 1px solid #F4F4F4">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="E-mail" style="background-color: #F4F4F4; border: 1px solid #F4F4F4">
                        </div>
    
                        <p class="mt-4 mb-3">¿Comunicación de preferencia?</p>
    
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Email</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Teléfono</label>
                        </div>
    
                        <div class="form-group mt-4">
                            <textarea class="form-control" rows="5" style="background-color: #F4F4F4; border: 1px solid #F4F4F4"></textarea>
                        </div>
    
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-secondary" style="padding: 0.375rem 2.75rem">Enviar</button>
                        </div>
                    </form>
    
                    <div class="d-flex align-items-start justify-content-center mt-5">
                        <img src="/images/social/instagram.svg" alt="instagram" width="50px" class="mx-3">
                        <img src="/images/social/facebook.svg" alt="facebook" width="50px" class="mx-3">
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