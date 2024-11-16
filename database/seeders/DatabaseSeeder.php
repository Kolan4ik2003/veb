<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Polzovatel;
use App\Models\Orders;
use App\Models\Order_items;
use App\Models\Cart_items;
use App\Models\Products;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Заполнение таблицы Products
        $plantNames = [
            'Rose', 'Tulip', 'Lily', 'Daffodil', 'Orchid', 'Sunflower', 'Iris', 'Daisy', 'Lavender', 'Cactus'
        ];
        
        $plantDescriptions = [
            'A beautiful flower known for its fragrant blooms.',
            'A perennial bulbous flower that blooms in spring.',
            'A delicate flower with elegant petals and long stems.',
            'A cheerful flower often associated with spring.',
            'A tropical flower with exotic appearance and scent.',
            'A tall plant with large yellow flowers that follow the sun.',
            'A plant with vibrant petals and a strong, sweet fragrance.',
            'A simple yet charming flower found in gardens and fields.',
            'A fragrant herb known for its purple spikes.',
            'A hardy succulent plant that thrives in dry conditions.'
        ];
        
        for ($i = 1; $i <= 10; $i++) {
            Products::create([
                'name' => $plantNames[array_rand($plantNames)],
                'description' => $plantDescriptions[array_rand($plantDescriptions)],
                'image_url' => $faker->imageUrl(),
                'price' => $faker->randomFloat(2, 10, 500),
            ]);
        }

        // Заполнение таблицы User
        for ($i = 1; $i <= 10; $i++) {
            User::create([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
            ]);
        }

        // Заполнение таблицы Polzovatel
        for ($i = 1; $i <= 10; $i++) {
            Polzovatel::create([
                'user_id' => $faker->randomDigitNotNull,
                'FIO' => $faker->name,
                'phone_number' => $faker->phoneNumber,
                'adres' => $faker->address,
            ]);
        }

        // Заполнение таблицы Orders
        for ($i = 1; $i <= 10; $i++) {
            Orders::create([
                'polzovatels_id' => $faker->randomDigitNotNull,
                'total_amount' => $faker->randomFloat(2, 100, 1000),
            ]);
        }

        // Заполнение таблицы Order_items
        for ($i = 1; $i <= 10; $i++) {
            Order_items::create([
                'order_id' => $faker->randomDigitNotNull,
                'product_id' => $faker->randomDigitNotNull,
                'quantity' => $faker->randomNumber(1),
                'unit_price' => $faker->randomFloat(2, 10, 500),
                'total_price' => $faker->randomFloat(2, 10, 500),
            ]);
        }

        // Заполнение таблицы Cart_items
        for ($i = 1; $i <= 10; $i++) {
            Cart_items::create([
                'product_id' => $faker->randomDigitNotNull,
                'quantity' => $faker->randomNumber(1),
                'unit_price' => $faker->randomFloat(2, 10, 500),
                'total_price' => $faker->randomFloat(2, 10, 500),
                'polzovatels_id' => $faker->randomDigitNotNull,
            ]);
        }
    }
}
