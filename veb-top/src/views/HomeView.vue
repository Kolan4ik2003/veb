<script setup>
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
            <article>
                <h3>Букет Роз</h3>   
                <img src="https://avatars.mds.yandex.net/i?id=c50912e65ffec3d061bb9b5cdbe38a5b_l-9236689-images-thumbs&n=13" alt="Букет Роз" width="300">
                <p><a><router-link to="/content">Прекрасный букет из свежих роз. Цена: 2000 руб.</router-link></a></p>
            </article>

            <article>
                <h3>Тюльпаны</h3>
                <img src="https://avatars.mds.yandex.net/i?id=5d77f84f632f003f9f6309d31a027985_l-4274684-images-thumbs&n=13" alt="Букет Тюльпанов" width="300">
                <p><a href="#">Яркие весенние тюльпаны. Цена: 100 руб.</a></p>
            </article>

            <article>
                <h3>Пионы</h3>
                <img src="https://i.pinimg.com/736x/9e/4a/8a/9e4a8a4a31e4a54c053810f4dd039b6f.jpg" alt="Пионы" width="300">
                <p><a href="#">Незабываемые пионы. Цена: 450 руб.</a></p>
            </article>

            <article>
                <h3>Лилии</h3>
                <img src="https://s.leroymerlin.kz/upload/catalogue/product_images/f/7/original/18793109.jpg" alt="Лилии" width="300">
                <p><a href="#">Самые ароматные лилии. Цена: 350 руб.</a></p>
            </article>

            <article>
                <h3>Гортензии</h3>
                <img src="https://avatars.mds.yandex.net/i?id=976a12dfd50eaf238457a52d16bc6428_l-5258284-images-thumbs&n=13" alt="Гортензии" width="300">
                <p><a href="#">Великолепные гортензии. Цена: 500 руб.</a></p>
            </article>

            <article>
                <h3>Букет хризантем</h3>
                <img src="https://avatars.mds.yandex.net/get-yabs_performance/13451990/hat20708ce1c32cd9b9cadf363e32f9c5cc/hugeXX" alt="Букет хризантем" width="300">
                <p><a href="#">Чудесные белые хризантемы. Цена: 1500 руб.</a></p>
            </article>
        </div>
    </section>
</template>

