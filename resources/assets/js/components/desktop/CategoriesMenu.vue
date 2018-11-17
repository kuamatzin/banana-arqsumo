<template>
    <div>
        <br><br>
        <div class="row">
            <div class="col-md-8 offset-md-4">
                <div class="d-flex justify-content-between mt-5 mb-1">
                    <p class="subcategories pointer" @click="selectCategory(1)">comercial</p>
                    <p class="subcategories pointer" @click="selectCategory(2)">interiorismo</p>
                    <p class="subcategories pointer" @click="selectCategory(3)">paisajismo</p>
                    <p class="subcategories pointer" @click="selectCategory(4)">residencial</p>
                    <p class="subcategories pointer" @click="selectCategory(5)">v. vertical</p>
                </div>
            </div>
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
            selectCategory(category) {
                Events.$emit('selectedCategory', category);
            },
    
            showSubcategories() {
                this.show_subcategories = !this.show_subcategories
            }
        }
    }
</script>

<style scoped>
    .subcategories {
        font-size: 1.5rem;
    }
</style>