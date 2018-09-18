<template>
    <div>
        <br>
        <div class="d-flex flex-row-reverse">
            <h3 class="float-right mr-4 mt-5 categories" @click="showSubcategories">categorias</h3>
        </div>
        <div v-if="show_subcategories" class="d-flex justify-content-between mt-3 mb-2">
            <h4 class="categories" @click="selectCategory(1)">com.</h4>
            <h4 class="categories" @click="selectCategory(2)">int.</h4>
            <h4 class="categories" @click="selectCategory(3)">pais.</h4>
            <h4 class="categories" @click="selectCategory(4)">res.</h4>
            <h4 class="categories" @click="selectCategory(5)">vert.</h4>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show_subcategories: false
            }
        },

        methods: {
            selectCategory(category){
                Events.$emit('selectedCategory', category);
            },

            showSubcategories(){
                this.show_subcategories = !this.show_subcategories
            }
        }
    }
</script>