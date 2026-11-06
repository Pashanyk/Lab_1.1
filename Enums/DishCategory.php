<?php

namespace App\Enums;

enum DishCategory: string
{
    case Salads = 'Салати';
    case MainDishes = 'Основні страви';
    case Drinks = 'Напої';
    case Desserts = 'Десерти';
}
