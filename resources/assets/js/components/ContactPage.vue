<template>
    <div>
        <div id="page" v-if="show_menu == false">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <i class="fas fa-bars menu" style="font-size: 28px; color: #848484" alt="logo" @click="show_menu = true"></i>
            <br><br><br>
            <div class="container mt-5">
                <div class="container mt-5">
                    <strong><h2 class="text-center mt-5 strong">CONTÁCTANOS</h2></strong>
    
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
                            <button type="submit" class="btn btn-secondary send" style="padding: 0.375rem 2.75rem">Enviar</button>
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
                show_menu: false
            }
        }
    }
</script>