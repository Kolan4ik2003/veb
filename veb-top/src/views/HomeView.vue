<script setup>
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
</script>

<template>
    <!-- Основная часть каталога -->
    <section>
        <h2>Каталог цветов</h2>

        <!-- Поисковая строка -->
        <div class="search-container">
            <input type="text" placeholder="Найти цветы..." class="search-input">
            <button class="search-button">Поиск</button>
        </div>

        <div class="catalog">
            <article v-for = "catalog in catalogs">
                <h3>{{ catalog.nameverx }}</h3>   
                <img src="https://avatars.mds.yandex.net/i?id=c50912e65ffec3d061bb9b5cdbe38a5b_l-9236689-images-thumbs&n=13" alt="Букет Роз" width="300">
                <p><a><router-link :to="{name: 'content-info' , params: {id:catalog.id}} ">{{ catalog.name }} {{ catalog.price }}</router-link></a></p>
            </article>

        </div>
    </section>
</template>

