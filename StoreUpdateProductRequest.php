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
        $id = $this->segment(2);  //adiciona uma exceção ao editar name

        return [
            'name' => "required|min:3|max:255|unique:products,name,{$id},id", // unique define um valor unico para cadastro
            'description' => 'required|min:3|max:10000', // nome com valor minimo e máximo de caracteres
            'price'=> 'required',
            'photo' => 'nullable|image',
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
