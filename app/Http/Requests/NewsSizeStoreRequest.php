<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewsSizeStoreRequest extends FormRequest
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
            //
            'size'=>'required|string|max:20|unique:news_sizes'
        ];
    }

    public function messages()
    {
        return[
            'size.unique'=>'Esse tamanho de notícia já existe',
            'size.required'=>'Insira um tamanho de notícia!',
            'size.string'=>'Insira um tamanho de notícia válido!',
            'size.max'=>'Tamanho de notícia demasiado longo!'
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
