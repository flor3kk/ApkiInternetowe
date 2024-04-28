<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|unique:products,name,|max:50',
            'price' => 'required|numeric|max:10|min:1',
            'available' => 'required|numeric|max:30|min:1',
            'calories' => 'required|string|min:10|max:255',
            'description' => 'required|string|min:10|max:255',
            'category_id' => 'required|numeric|exists:categories,id',
        ];
    }
}
