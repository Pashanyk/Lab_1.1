<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use App\Http\Requests\DishRequest;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index()
    {
        $dishes = Dish::query()->orderBy('category')->paginate(5);
        return view('dish.index', compact('dishes'));
    }


    public function create()
    {
        return view('dish.create');
    }

    public function store(DishRequest $request)
    {
        Dish::create($request->validated());

        return redirect()->route('dish.index')
            ->with('success', 'Страву успішно додано до меню!');
    }

    public function show(Dish $dish)
    {
        return view('dish.show', compact('dish'));
    }

    public function edit(Dish $dish)
    {
        return view('dish.edit', compact('dish'));
    }


    public function update(DishRequest $request, Dish $dish)
    {
        $dish->update($request->validated());

        return redirect()->route('dish.index')
            ->with('success', 'Страву успішно оновлено!');
    }

    public function destroy(Dish $dish)
    {
        $dish->delete();

        return redirect()->route('dish.index')
            ->with('success', 'Страву видалено з меню!');
    }
}
