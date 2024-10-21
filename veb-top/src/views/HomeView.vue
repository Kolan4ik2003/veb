<script setup>
import Catalog from '@/components/Sale/Catalog.vue';
const catalogs = [
    {
        id : 1,
        nameverx : "Букет роз",
        name : "Прекрасный букет из свежих роз:",
        price : 2000
    },
    {
        id : 2,
        nameverx : "Тюльпаны",
        name : "Яркие весенние тюльпаны:",
        price : 100 
    },
    {
        id : 3,
        nameverx : "Пионы",
        name : "Незабываемые пионы:",
        price : 450 
    },
    {
        id : 4,
        nameverx : "Лилии",
        name : "Самые ароматные лилии:",
        price : 350 
    },
    {
        id : 5,
        nameverx : "Гортензии",
        name : "Великолепные гортензии:",
        price : 500 
    },
    {
        id : 6,
        nameverx : "Хризантемы",
        name : "Чудесные белые хризантемы:",
        price : 1500 
    }
]

import {ref} from 'vue'
const searchResult = ref('')
const isShowSearch = ref(false)
const search = () => {
    isShowSearch.value = searchResult.value.length >= 3

}
</script>

<template>
    <!-- Основная часть каталога -->
    <section>
        <h2>Каталог цветов</h2>
        
        <!-- Поисковая строка -->
        <div class="search-container">
            <input type="text" placeholder="Найти цветы..." v-model="searchResult" @keyup = "search" class="search-input">
            <button class="search-button">Поиск</button>
        </div>

        <div class="catalog" v-show="isShowSearch">
            <article v-for = "catalog in catalogs">
                <Catalog :catalog = "catalog"/>
            </article>
            
                

    </div>

    </section>
    

</template>

