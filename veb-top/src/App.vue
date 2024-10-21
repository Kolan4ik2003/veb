<script setup>
import { RouterLink, RouterView } from 'vue-router'

</script>

<template>
    <header>
        <div class="header-top">
            <h1>Цветочный Магазин "Колин цветочек"</h1>
        </div>

        <nav>
            <ul>
                <li><router-link to = "/">Главная</router-link></li>
                <li><router-link to = "/corzina">Корзина</router-link></li>
                <li><router-link to = "/avtoriza">Личный кабинет</router-link></li>
            </ul>
        </nav>
    </header>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <RouterView />
  <footer>
        <div class="footer-container">
            <div class="footer-info">
                <h3>Цветочный Магазин "Колин цветочек"</h3>
                <p>Адрес: ул. 3-го Интернационала, д. 1, Воронеж</p>
                <p>Телефон: +7 (910) 366-72-08</p>
                <p>Email: zarembiczkiy@mail.ru</p>
            </div>

            <div class="footer-links">
                <p>Документы:</p>
                <ul>
                    <li><router-link to = "/politikaconfi">Политика конфиденциальности</router-link></li>
                    <li><router-link to = "/polzosogl">Пользовательское соглашение</router-link></li>
                </ul>
            </div>

            <div class="footer-social">
                <p>Мы в соцсетях:</p>
                <ul>
                    <li><a href="https://vk.com/zarembitsky">ВКонтакте</a></li>
                    <li><a href="https://t.me/Kolan4ik_h">Телеграмм</a></li>
                </ul>
            </div>
        </div>

        <div class="footer-bottom">
            <p>&copy; 2024 Цветочный Магазин. Все права защищены.</p>
        </div>
    </footer>
</template>


