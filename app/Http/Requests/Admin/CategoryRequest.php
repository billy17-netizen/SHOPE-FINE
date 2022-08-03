<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|min:2',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
