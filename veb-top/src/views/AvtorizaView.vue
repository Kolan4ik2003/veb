<script setup>
import {ref} from 'vue'
const email = ref('')
const password = ref('')
const telefon = ref('')
const emailError = ref('')
const passwordError = ref('')
const telefonError = ref('')
const singIn = (event) => {
    if (email.value.length === 0){
        emailError.value = 'Заполните логин'
    }else {
        emailError.value = ''
    }
    if (password.value.length === 0){
        passwordError.value = 'Заполните пароль'
    }else {
        passwordError.value = ''
    }
    if (telefon.value.length === 0){
        telefonError.value = 'Заполните телефон'
    }else {
        telefonError.value = ''
    }
    event.preventDefault()
}
</script>

<template>
    <section>
        <h2>Авторизация</h2>
        <div class="auth-container">

            <!-- Переключатель форм с использованием ссылок -->
            <div class="auth-toggle">
                <a href="#login-form" class="toggle-link active">Вход</a>
                <a href="#register-form" class="toggle-link">Регистрация</a>
            </div>

            <!-- Форма для входа -->
            <div id="login-form" class="auth-form">
                <h3>Вход</h3>
                <form @submit="singIn">
                    <div>
                        <label for="login-email">Логин:</label>
                        <input type="text" id="login-email"  v-model="email">
                        <div class = "error">{{ emailError }}</div>
                    </div>
                    <div>
                        <label for="login-password">Пароль:</label>
                        <input type="password" id="login-password"  v-model="password">
                        <div class = "error">{{ passwordError }}</div>
                    </div>
                    <button type="submit">Войти</button>
                    
                </form>
            </div>

            <!-- Форма для регистрации -->
            <div id="register-form" class="auth-form hidden">
                <h3>Регистрация</h3>
                <form  @submit="singIn">
                    <label for="register-email">Логин:</label>
                    <input type="text" id="register-email" v-model="email">
                    <div class = "error">{{ emailError }}</div>

                    <label for="register-password">Пароль:</label>
                    <input type="password" id="register-password" v-model="password">
                    <div class = "error">{{ passwordError }}</div>
                    
                    <label for="register-telefon">Телефон:</label>
                    <input type="tel" id="register-telefon" v-model="telefon">
                    <div class = "error">{{ telefonError }}</div>

                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </section>
</template>

