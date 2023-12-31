<?php

namespace App\Http\Requests\AuthUser;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            'name'         => 'requiredّ|string|min:3',
            'phone_number' => 'requiredّ|string|max:10|unique:users',
            'email'        => 'requiredّ|string|email|max:100|unique:users',
            'password'     => 'required|confirmed|min:8',
            'birthday'     => 'nullable|date',
            'addrees'      => 'nullable|string',
            'type'         => 'default(1)|tinyInteger',
            'notes'        => 'nullable|string|max:255',
            'status'       => 'default(1)|tinyInteger',
            'country_id'   => 'requiredّ|integer',
            'shop_id'      => 'requiredّ|integer'
        ];
    }
}
