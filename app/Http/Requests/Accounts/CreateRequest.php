<?php

namespace App\Http\Requests\Accounts;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\Cpf;
use Illuminate\Validation\Rules;
use App\Models\User;

class CreateRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|lowercase|email|max:255|unique:'.User::class,
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cpf' => ['required', 'string', new Cpf()],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [ 
            'name.required' => "O nome é obrigatorio",
            'email.required' => "O email é obrigatorio",
            'password.required' => "A senha é obrigatoria",
            'cpf.required' => "O CPF é obrigatorio",
            'email.unique' => "O email já está em uso",
            'cpf.unique' => "O CPF já está em uso",
            'password.confirmed' => "As senhas não coincidem",
            'password.min' => "A senha deve ter pelo menos 8 caracteres"
        ];
    }
}
