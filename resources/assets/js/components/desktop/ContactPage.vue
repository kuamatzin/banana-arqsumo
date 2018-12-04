<template>
    <div>
        <div id="page">
            <a href="/"><img src="/images/blacklogo.svg" width="60" height="60" alt="logo" class="logo"></a>
            <div class="menu">
                <div class="row mr-2 mt-3">
                    <div class="col-md-5">
                        <a href="/categorias" style="text-decoration:none">
                            <h3 class="text-menu-inverse">PORTAFOLIO</h3>
                        </a>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-5">
                        <a href="/contacto" style="text-decoration:none">
                            <h3 class="text-menu-inverse">CONTACTO</h3>
                        </a>
                    </div>
                </div>
            </div>
            <br><br><br>
            <div class="container mt-5">
                <div class="row">
    
                    <div class="col-md-6">
                        <div class="container mt-5 mb-5">
                            <strong><h2 class="ml-4 mt-5 strong">CONTÁCTANOS</h2></strong>
    
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
                        </div>
                    </div>
    
                    <div class="col-md-6">
                        <div style="height: 100%" class="d-flex align-items-center flex-column">
                            <div class="flex-grow-1 d-flex flex-column justify-content-center">
                                <div class="d-flex justify-content-center mb-4">
                                    <img src="/images/blacklogo.svg" width="100" height="100" alt="logo">
                                </div>
    
                                <p class="text-center info strong"><strong>Tel: +52 (222) 543 5467</strong></p>
                                <p class="text-center info strong"><strong>Email: hello@arqmasuno.mx</strong></p>

                                <p class="text-center info mt-4">Camino Real Momoxpan 1811 - 19, 72777</p>
                                <p class="text-center info">San Pedro Cholula, Puebla</p>
    
                                <div class="d-flex justify-content-center mt-4">
                                    <a href="https://www.facebook.com/arqmasuno/?ref=br_rs" target="_blank">
                                        <img src="/images/social/instagram.svg" alt="instagram" width="30px" class="ml-4 pointer">
                                    </a>
    
                                    <a href="https://www.instagram.com/arqmasuno/" target="_blank">
                                        <img src="/images/social/facebook.svg" alt="facebook" width="30px" class="mx-3 pointer">
                                    </a>
                                </div>
    
                            </div>
                        </div>
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
    .info {
        margin: 0;
        padding: 0;
        font-size: 1.1rem;
    }
</style>