<script setup>
import Catalog from '@/components/Sale/Catalog.vue';
import {ref} from 'vue'
const catalogs = [
    {
        id : 1,
        image : 'https://avatars.mds.yandex.net/i?id=c50912e65ffec3d061bb9b5cdbe38a5b_l-9236689-images-thumbs&n=13',
        nameverx : "Букет роз",
        name : "Прекрасный букет из свежих роз:",
        price : 2000
    },
    {
        id : 2,
        image : 'https://avatars.mds.yandex.net/i?id=5d77f84f632f003f9f6309d31a027985_l-4274684-images-thumbs&n=13',
        nameverx : "Тюльпаны",
        name : "Яркие весенние тюльпаны:",
        price : 100 
    },
    {
        id : 3,
        image : 'https://i.pinimg.com/736x/9e/4a/8a/9e4a8a4a31e4a54c053810f4dd039b6f.jpg',
        nameverx : "Пионы",
        name : "Незабываемые пионы:",
        price : 450 
    },
    {
        id : 4,
        image : 'https://s.leroymerlin.kz/upload/catalogue/product_images/f/7/original/18793109.jpg',
        nameverx : "Лилии",
        name : "Самые ароматные лилии:",
        price : 350 
    },
    {
        id : 5,
        image : 'https://avatars.mds.yandex.net/i?id=976a12dfd50eaf238457a52d16bc6428_l-5258284-images-thumbs&n=13',
        nameverx : "Гортензии",
        name : "Великолепные гортензии:",
        price : 500 
    },
    {
        id : 6,
        image : 'https://avatars.mds.yandex.net/get-yabs_performance/13451990/hat20708ce1c32cd9b9cadf363e32f9c5cc/hugeXX',
        nameverx : "Chrysanthemums",
        name : "Чудесные белые хризантемы:",
        price : 1500 
    }
]


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

