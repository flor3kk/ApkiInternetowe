<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTripRequest extends FormRequest
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
            'name' => 'required|string|max:50',
            'continent' => 'required|string|max:50',
            'period' => 'required|integer|min:0',
            'description' => 'required|string|max:200',
            'price' => 'required|integer|min:0',
            'img' => 'required|string|min:0',
            'country_id' => 'required|integer|min:0'
        ];
    }
}
