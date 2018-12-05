<template>
    <div>
        <br><br>
        <div class="row">
            <div class="col-md-6 offset-md-6">
                <div class="d-flex justify-content-between mb-1">
                    <p class="subcategories pointer" :class="{ active: category_selected == 0 }" @click="selectCategory(0)">comercial</p>
                    <p class="subcategories pointer" :class="{ active: category_selected == 1 }" @click="selectCategory(1)">interiorismo</p>
                    <p class="subcategories pointer" :class="{ active: category_selected == 2 }" @click="selectCategory(2)">paisajismo</p>
                    <p class="subcategories pointer" :class="{ active: category_selected == 3 }" @click="selectCategory(3)">residencial</p>
                    <p class="subcategories pointer" :class="{ active: category_selected == 4 }" @click="selectCategory(4)">v. vertical</p>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                show_subcategories: false,
                category_selected: 0
            }
        },
    
        methods: {
            selectCategory(category) {
                this.category_selected = category;
                Events.$emit('selectedCategory', category);
            },
    
            showSubcategories() {
                this.show_subcategories = !this.show_subcategories
            }
        }
    }
</script>

<style scoped>
    .active {
        font-family: 'Helvetica Neue LT Std';
        color: #282E41;
    }
    .subcategories {
        font-size: 1.2rem;
    }
    .subcategories:hover{
        font-family: 'Helvetica Neue LT Std';
        color: #282E41;
    }
</style>

