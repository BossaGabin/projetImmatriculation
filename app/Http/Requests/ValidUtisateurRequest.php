<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidUtisateurRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             //Definition des conditions
             'nom' => 'required',
             'username' => 'required',
             'email' => ['required','email', 'unique:utilisateurs'],
             'password' => 'required',
             
        ];
    }
}
