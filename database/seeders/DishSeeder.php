<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Dish;

class DishSeeder extends Seeder
{
    public function run(): void
    {

        Dish::create([
            'name' => 'Цезар',
            'description' => 'Салат айсберг, куряче філе, соус цезар, сир пармезан.',
            'price' => 150.00,
            'category' => 'Салати',
        ]);

        Dish::create([
            'name' => 'Куряча відбивна',
            'description' => 'Соковита та ніжна.',
            'price' => 150.00,
            'category' => 'Основні страви',
        ]);

        Dish::create([
            'name' => 'Кампот',
            'description' => 'Освіжаючий напій власного виробництва.',
            'price' => 50.00,
            'category' => 'Напої',
        ]);

        Dish::create([
            'name' => 'Морозвиво',
            'description' => 'Ніжне вершкове морозиво',
            'price' => 80.00,
            'category' => 'Десерти',
        ]);
    }
}
