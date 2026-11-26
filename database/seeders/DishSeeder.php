<?php

namespace Database\Seeders;

use App\Models\Dish;
use Illuminate\Database\Seeder;

class DishSeeder extends Seeder
{
    public function run(): void
    {
        $dishes = [
            [
                'name' => 'Цезар',
                'description' => 'Салат айсберг, куряче філе, соус цезар, сир пармезан.',
                'price' => 150.00,
                'category' => 'Салати',
                'image' => 'images/dishes/caesar.jpg',
            ],
            [
                'name' => 'Куряча відбивна',
                'description' => 'Соковита та ніжна.',
                'price' => 150.00,
                'category' => 'Основні страви',
                'image' => 'images/dishes/chop.jpg',
            ],
            [
                'name' => 'Кампот',
                'description' => 'Освіжаючий напій власного виробництва.',
                'price' => 50.00,
                'category' => 'Напої',
                'image' => 'images/dishes/compote.jpg',
            ],
            [
                'name' => 'Морозвиво',
                'description' => 'Ніжне вершкове морозиво',
                'price' => 80.00,
                'category' => 'Десерти',
                'image' => 'images/dishes/icecream.jpg',
            ],
            [
                'name' => 'Борщ український',
                'description' => 'Традиційний червоний борщ зі сметаною та пампушками.',
                'price' => 130.00,
                'category' => 'Перші страви',
                'image' => 'images/dishes/borscht.jpg',
            ],
            [
                'name' => 'Вареники з картоплею',
                'description' => 'Домашні вареники зі смаженою цибулею та сметаною.',
                'price' => 110.00,
                'category' => 'Основні страви',
                'image' => 'images/dishes/varenyky.jpg',
            ],
            [
                'name' => 'Грецький салат',
                'description' => 'Свіжі овочі, сир фета, маслини та оливкова олія.',
                'price' => 140.00,
                'category' => 'Салати',
                'image' => 'images/dishes/greek.jpg',
            ],
            [
                'name' => 'Чізкейк Нью-Йорк',
                'description' => 'Класичний вершковий чізкейк на пісочній основі.',
                'price' => 120.00,
                'category' => 'Десерти',
                'image' => 'images/dishes/cheesecake.jpg',
            ],
        ];

        foreach ($dishes as $dish) {
            Dish::updateOrCreate(['name' => $dish['name']], $dish);
        }
    }
}
