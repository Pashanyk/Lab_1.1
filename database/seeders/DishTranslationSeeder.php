<?php

namespace Database\Seeders;

use App\Models\Dish;
use App\Models\DishTranslation;
use Illuminate\Database\Seeder;

class DishTranslationSeeder extends Seeder
{
    public function run(): void
    {
        $items = [
            'Цезар' => [
                'uk' => ['name' => 'Цезар', 'description' => 'Салат айсберг, куряче філе, соус цезар, сир пармезан.'],
                'en' => ['name' => 'Caesar Salad', 'description' => 'Iceberg lettuce, chicken fillet, Caesar dressing, parmesan cheese.'],
            ],
            'Куряча відбивна' => [
                'uk' => ['name' => 'Куряча відбивна', 'description' => 'Соковита та ніжна.'],
                'en' => ['name' => 'Chicken Chop', 'description' => 'Juicy and tender grilled chicken cutlet.'],
            ],
            'Кампот' => [
                'uk' => ['name' => 'Кампот', 'description' => 'Освіжаючий напій власного виробництва.'],
                'en' => ['name' => 'Homemade Compote', 'description' => 'Refreshing house-made fruit drink.'],
            ],
            'Морозвиво' => [
                'uk' => ['name' => 'Морозвиво', 'description' => 'Ніжне вершкове морозиво'],
                'en' => ['name' => 'Ice Cream', 'description' => 'Delicate creamy vanilla ice cream.'],
            ],
            'Борщ український' => [
                'uk' => ['name' => 'Борщ український', 'description' => 'Традиційний червоний борщ зі сметаною та пампушками.'],
                'en' => ['name' => 'Ukrainian Borscht', 'description' => 'Traditional red beetroot soup with sour cream and garlic buns.'],
            ],
            'Вареники з картоплею' => [
                'uk' => ['name' => 'Вареники з картоплею', 'description' => 'Домашні вареники зі смаженою цибулею та сметаною.'],
                'en' => ['name' => 'Potato Varenyky', 'description' => 'Homemade dumplings with fried onions and sour cream.'],
            ],
            'Грецький салат' => [
                'uk' => ['name' => 'Грецький салат', 'description' => 'Свіжі овочі, сир фета, маслини та оливкова олія.'],
                'en' => ['name' => 'Greek Salad', 'description' => 'Fresh vegetables, feta cheese, olives, and olive oil.'],
            ],
            'Чізкейк Нью-Йорк' => [
                'uk' => ['name' => 'Чізкейк Нью-Йорк', 'description' => 'Класичний вершковий чізкейк на пісочній основі.'],
                'en' => ['name' => 'New York Cheesecake', 'description' => 'Classic creamy cheesecake on a shortbread crust.'],
            ],
        ];

        foreach ($items as $baseName => $translations) {
            $dish = Dish::where('name', $baseName)->first();
            if (!$dish) {
                continue;
            }

            foreach ($translations as $locale => $data) {
                DishTranslation::updateOrCreate(
                    [
                        'dish_id' => $dish->id,
                        'locale' => $locale,
                    ],
                    [
                        'name' => $data['name'],
                        'description' => $data['description'],
                    ]
                );
            }
        }
    }
}
