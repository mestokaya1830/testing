<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsUpdateRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'string|required|min:3|max:100',
            'slug' => 'string|required|min:3|max:100',
            'price' => 'numeric|required|gt:0|lte:100000'
        ];
    }
}
