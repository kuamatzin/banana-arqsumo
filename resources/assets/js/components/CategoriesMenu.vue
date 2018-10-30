<template>
    <div>
        <br>
        <div class="d-flex flex-row-reverse mt-5">
            <div class="d-flex align-items-center">
                <h4 class="categories pointer" @click="showSubcategories">CATEGORÍAS</h4>
                <i v-if="show_subcategories == false" class="fas fa-arrow-down ml-2 mb-2"></i>
                <i v-else class="fas fa-arrow-up ml-2 mb-2"></i>
            </div>
        </div>
        <div v-if="show_subcategories" class="d-flex justify-content-between mt-3 mb-1">
            <p class="subcategories pointer" @click="selectCategory(1)">comercial</p>
            <p class="subcategories pointer" @click="selectCategory(2)">interiorismo</p>
            <p class="subcategories pointer" @click="selectCategory(3)">paisajismo</p>
            <p class="subcategories pointer" @click="selectCategory(4)">residencial</p>
            <p class="subcategories pointer" @click="selectCategory(5)">v. vertical</p>
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