<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'             =>'required|string',
            'description'      => 'nullable|string|max:255',
            'image'            => 'nullable|mimes:jpeg,png,gif',
            'category_id'      => 'required|integer',
            'price'            => 'required|integer|min:0',
            'discount_percent' => 'default(0)|integer',
            'tva'              => 'default(0)|integer',
            'notes'            => 'nullable|string',
            'shop_id'          => 'required|integer'
        ];
    }
}
