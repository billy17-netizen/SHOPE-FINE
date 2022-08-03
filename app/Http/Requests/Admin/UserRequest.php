<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'roles' => 'required|string|in:ADMIN,USER',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
