<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CategoryStoreRequest extends FormRequest
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
            'category'=>'required|unique:categories|string|max:50',
            'image'=>'required|image'
        ];
    }

    public function messages()
    {
        return[
            'category.required'=>'Insira uma categoria',
            'category.unique'=>'Essa categoria já existe',
            'category.string'=>'Insira uma categoria válida',
            'category.max'=>'Categoria demasiado longa',
            'image.required'=>'Insira uma imagem',
            'image.image'=>'Insira uma imagem válida'
        ];
    }

    protected  function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json(
                [
                    'data'=>$validator->errors(),
                    'msg'=>'Erro de validação.'
                ],  422));
    }
}
