<template>
  <div class="mt-5">
    <br>
    <div class="container">
      <div class="d-flex align-items-end mt-5 pointer" @click="backToCategories">
        <i class="fas fa-arrow-left mb-3 return"></i>
        <h4 class="ml-2 return">regresar al portafolio</h4>
      </div>
    </div>

    <div class="container">
      <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" :src="project">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" :src="url_images + '2.jpg'">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" :src="url_images + '3.jpg'">
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
    </div>

    <div class="container">
      <h1 class="strong mt-5" style="color: #565656">DIAGONAL 28</h1>

      <p class="mt-4 details">PROYECTO EJECUTIVO</p>

      <p class="details">TERRENO
        <strong class="strong" style="color: #565656">461M</strong>
      </p>
      <p class="details">CONSTRUCCIÓN
        <strong class="strong" style="color: #565656">1,957M2</strong>
      </p>

      <p class="details">UBICACIÓN DEL PROYECTO</p>
      <p class="details strong mb-5" style="color: #565656">SAN PEDRO, CHOLULA</p>
    </div>
  </div>
</template>

<script>
export default {
  props: ["project"],

  watch: {
    project() {
      this.url_images = this.project.slice(0, -5);
    }
  },

  data() {
    return {
      url_images: ""
    };
  },

  methods: {
    backToCategories() {
      this.$emit("loadCategories");
    }
  }
};
</script>

<style scoped="">
.return:hover {
  color: #282e41;
}

.details {
  font-size: 1.2rem;
  margin: 0;
  padding: 0;
}

.carousel .item img {
  max-height: 768px;
  min-width: auto;
}
</style>