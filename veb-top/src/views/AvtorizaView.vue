<script setup>

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
                <form>
                    <label for="login-email">Email:</label>
                    <input type="email" id="login-email" required>
                    
                    <label for="login-password">Пароль:</label>
                    <input type="password" id="login-password" required>
                    
                    <button type="submit">Войти</button>
                </form>
            </div>

            <!-- Форма для регистрации -->
            <div id="register-form" class="auth-form hidden">
                <h3>Регистрация</h3>
                <form>
                    <label for="register-email">Email:</label>
                    <input type="email" id="register-email" required>
                    
                    <label for="register-password">Пароль:</label>
                    <input type="password" id="register-password" required>
                    
                    <label for="confirm-password">Подтверждение пароля:</label>
                    <input type="password" id="confirm-password" required>
                    
                    <button type="submit">Зарегистрироваться</button>
                </form>
            </div>
        </div>
    </section>
</template>

