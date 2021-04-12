<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductRequest extends FormRequest
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

     //Array de Validações
    public function rules()
    {
        return [
            'name' => 'required|min:3|max:255', // nome com valor minimo e máximo de caracteres
            'description' => 'nullable|min:3|max:1000', // nome com valor minimo e máximo de caracteres
            'photo' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nome é Obrigatório',
            'name.min' => 'Campo (nome) necessário pelo menos 3 caracteres',
            'photo.required' => 'Imagem não inserida',
        ];
    }
}
