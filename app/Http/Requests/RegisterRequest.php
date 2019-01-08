<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return !auth()->check();
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
            'first_name' => 'required|string',
            'avatar' => 'required|image|max:2048',
            'email' => 'required|email|unique:users,email',
            'tel' => 'required|string',
            'password' => 'required|string|min:8|confirmed'
        ];
    }
}
