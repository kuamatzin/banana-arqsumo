<template>
  <div class="mt-5">
    <br>
    <div class="container">
      <div class="d-flex align-items-end mt-5 pointer" @click="backToCategories">
        <i class="fas fa-arrow-left mb-3 return-icon"></i>
        <h4 class="ml-2 mt-4 return">regresar al portafolio</h4>
      </div>
    </div>

    <div class="container">
      
      <div id="carouselExampleControls" class="carousel slide mt-4">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" v-for="(image, key) in project.images" :key="key" :data-slide-to="key" :class="{'active': key == 0}"></li>
        </ol>
        <div class="carousel-inner">
          <div v-for="(image, key) in project.images" :key="key" class="carousel-item" :class="{'active': key == 0}" style="background-color: black">
            <img :class="{'desktop mx-auto': mobile == false, 'mobile mx-auto': mobile}" class="d-block" :src="image">
          </div>
        </div>
        <a
          class="carousel-control-prev"
          href="#carouselExampleControls"
          role="button"
          data-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a
          class="carousel-control-next"
          href="#carouselExampleControls"
          role="button"
          data-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="d-flex justify-content-end mt-1">
        <i class="fas fa-expand image-icons" @click="fullscreenImage"></i>
      </div>
    </div>

    <div class="container">
      <h1 class="strong mt-5" style="color: #565656">{{project.name}}</h1>

      <p class="mt-4 details">{{project.type}}</p>

      <p class="details" v-if="project.large_land">TERRENO
        <strong class="strong" style="color: #565656">{{project.large_land}}</strong>
      </p>
      <p class="details" v-if="project.large_construction">CONSTRUCCIÓN
        <strong class="strong" style="color: #565656">{{project.large_construction}}</strong>
      </p>

      <p class="details">UBICACIÓN DEL PROYECTO</p>
      <p class="details strong" style="color: #565656">{{project.location}}</p>
      <p class="details strong mb-5" style="color: #565656">{{project.year}}</p>
    </div>
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-hidden="true" style="background-color: black">
        <div class="modal-dialog modal-full" role="document" style="background-color: black">
            <div class="modal-content" style="background-color: black" @click="closeModal">
                <div class="modal-body" id="result" style="background-color: black">
                  <img :class="{'fullimage': mobile == false, 'img-fluid': mobile}" class=" mx-auto d-block" :src="modal_image">
                </div>
            </div>
        </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["project", "mobile"],

  watch: {
    project() {
      $('.carousel').carousel();
      this.launchCarouselActiveImage();
      window.scrollTo(0, 0);
      //this.url_images = this.project.slice(0, -5);
      this.active_image = this.project.images[0]
      this.modal_image = this.active_image
    }
  },

  data() {
    return {
      url_images: "",
      active_image: "",
      modal_image: "",
      imageFullscreen: false
    };
  },

  methods: {
    backToCategories() {
      this.$emit("loadCategories");
    },
    fullscreenImage() {
      this.modal_image = this.active_image;
      this.imageFullscreen = true;
      $('#myModal').modal('show');
    },
    launchCarouselActiveImage() {
      var that = this;
      setTimeout(function(){
        var carouselEl = $('.carousel');
        var carouselItems = carouselEl.find('.carousel-item');
        carouselEl.carousel().on('slid.bs.carousel', function (event) {
          that.active_image = carouselItems.siblings('.active').find('img').attr("src");
        })
      }, 300)
    },
    loadFullscreenImage(image){
      this.modal_image = image;
      this.imageFullscreen = 100;
      $('#myModal').modal('show');
    },
    closeModal(){
      if (this.imageFullscreen === 100) {
        this.imageFullscreen = false;
      } else {
        $('#myModal').modal('hide')
      }
    }
  }
};
</script>

<style scoped="">
.fullimage {
    width:auto;
    height:auto;
    max-width:100%;
    min-height:100vh;
    max-height:100vh;
}

.return {
  font-size: 1.2rem;
}

.return:hover {
  font-size: 1.1rem;
  font-family: 'Helvetica Neue LT Std';
  color: #282e41;
}

.details {
  font-size: 1.2rem;
  margin: 0;
  padding: 0;
}

.desktop {
  max-height: 624px;
  min-width: auto;
}

.mobile {
  max-height: 200px;
  min-width: auto;
}

.modal-full {
    min-width: 100%;
    margin: 0;
}

.modal-body {
  padding: 0px !important;
}

.modal-full .modal-content {
    min-height: 100vh;
    max-height: 100vh;
}

.modal-header {
    border-bottom: 0px;
}
.image-icons {
  cursor: pointer;
  font-size: 1.5rem;
  color: #3D3D3E;
}

.image-icons:hover {
  color: #9E9E9E;
}
</style>