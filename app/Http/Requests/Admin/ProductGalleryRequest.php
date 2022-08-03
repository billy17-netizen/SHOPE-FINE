<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductGalleryRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'products_id' => 'required|exists:products,id',
            'photos' => 'required|image',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
