<script setup>

</script>

<template>
    <section class="cart">
        <h2>Корзина покупок</h2>

        <!-- Список товаров в корзине -->
        <table class="cart-table">
            <thead>
                <tr>
                    <th>Товар</th>
                    <th>Количество</th>
                    <th>Цена за единицу</th>
                    <th>Итого</th>
                    <th>Удалить</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Розы (букет)</td>
                    <td>
                        <input type="number" value="1" min="1">
                    </td>
                    <td>500 руб.</td>
                    <td>500 руб.</td>
                    <td><button class="remove-btn">Удалить</button></td>
                </tr>
                <tr>
                    <td>Лилии (букет)</td>
                    <td>
                        <input type="number" value="2" min="1">
                    </td>
                    <td>400 руб.</td>
                    <td>800 руб.</td>
                    <td><button class="remove-btn">Удалить</button></td>
                </tr>
                <!-- Можно добавить больше товаров здесь -->
            </tbody>
        </table>

        <!-- Итоговая сумма -->
        <div class="cart-summary">
            <p>Итоговая сумма: <span>1300 руб.</span></p>
            <button class="checkout-btn">Оформить заказ</button>
        </div>
    </section>
</template>

