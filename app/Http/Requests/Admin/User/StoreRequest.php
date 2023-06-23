<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'role' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'required|string',
            'name.string' =>'String Required',
            'email.required' =>'Required field',
            'email.string' =>'String Required',
            'email.email' =>'Wrong Format',
            'email.unique' =>'User with this email already exists',
            'password.required' => 'required|string',
            'password.string' =>'String Required',
        ];
    }
}
