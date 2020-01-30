<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class SearchUpdateRequest extends FormRequest
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
            'text'=>'string|max:255',
            'image'=>'image',
            'user_id'=>'exists:users,id|integer',
            'search_type_id'=>'exists:search_types,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'text.string'=>'Insira um texto válido!',
            'text.max'=>'Texto inserido demasiado longo!',

            'image.image'=>'O ficheiro inserido não é do tipo imagem!',

            'user_id.exists'=>'Utilizador associado não existe!',
            'user_id.integer'=>'Associe um utilizador válido!',

            'search_type_id.exists'=>'Tipo de pesquisa associado não existe!',
            'search_type_id.integer'=>'Associe um tipo de pesquisa válido!',
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
