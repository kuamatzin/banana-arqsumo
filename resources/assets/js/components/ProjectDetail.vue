<template>
  <div class="mt-5">
    <br>
    <div class="container">
      <div class="d-flex align-items-end mt-5 pointer" @click="backToCategories">
        <i class="fas fa-arrow-left mb-3 return-icon"></i>
        <h4 class="ml-2 mt-4 return">regresar al portafolio {{mobile}}</h4>
      </div>
    </div>

    <div class="container">
      <div id="carouselExampleControls" class="carousel slide mt-4" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" v-for="(image, key) in project.images" :key="key" :data-slide-to="key" :class="{'active': key == 1}"></li>
        </ol>
        <div class="carousel-inner">
          <div v-for="(image, key) in project.images" :key="key" class="carousel-item" :class="{'active': key == 1}" style="background-color: black">
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
  </div>
</template>

<script>
export default {
  props: ["project", "mobile"],

  watch: {
    project() {
      window.scrollTo(0, 0);
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
  max-height: 270px;
  min-width: auto;
}
</style>