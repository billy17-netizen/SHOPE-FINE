<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'categories_id' => 'required|exists:categories,id',
            'users_id' => 'required|exists:users,id',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
