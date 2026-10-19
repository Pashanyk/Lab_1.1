<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'numeric', 'digits_between:7,15'],
            'date' => ['required', 'date'],
            'message' => ['required', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => "Поле «Ім'я» не може бути порожнім.",
            'email.required' => 'Поле «Email» не може бути порожнім.',
            'email.email' => 'Введіть коректну адресу електронної пошти.',
            'phone.required' => 'Поле «Номер телефону» не може бути порожнім.',
            'phone.numeric' => 'Номер телефону повинен містити лише цифри.',
            'phone.digits_between' => 'Номер телефону має містити від 7 до 15 цифр.',
            'date.required' => 'Оберіть дату для бронювання.',
            'date.date' => 'Введено некоректну дату.',
            'message.required' => 'Поле повідомлення не може бути порожнім.',
            'message.min' => 'Повідомлення має містити щонайменше 5 символів.',
        ];
    }
}
