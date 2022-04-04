<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Proprietaire extends FormRequest
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
            'nom' => ['required', 'string', 'max:100'],
            'prenom' => ['required', 'string', 'max:100'],
            'lieudenaissance' => ['required', 'string', 'max:500'],
            'adresse' => ['required', 'string', 'max:500'],
            'telephone' => ['required', 'string', 'max:500'],
            'photo' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'max:500'],
            'cni' => ['required', 'numeric'],
            'loyer' => ['required', 'numeric'],
        ];
    }
}
