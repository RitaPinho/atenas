<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SearchTypeStoreRequest extends FormRequest
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
            'type'=>'required|unique:search_types|string|max:100'
        ];
    }

    public function messages()
    {
        return[
            'type.required'=>'Insira um tipo de pesquisa!',
            'type.unique'=>'Esse tipo de pesquisa já existe!',
            'type.string'=>'Insira um tipo de pesquisa válido!',
            'type.max'=>'Tipo de pesquisa demasiado longo!',
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
