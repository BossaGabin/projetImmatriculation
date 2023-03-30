<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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
            //Definition des conditions
            'nom' => 'required',
            'email' => ['required','email', 'unique:proprietaires'],
            'adresse' => 'required',            
            'telephone' => 'required',
            'nip' => ['required', 'unique:proprietaires'],
            
        ];
    }
}
