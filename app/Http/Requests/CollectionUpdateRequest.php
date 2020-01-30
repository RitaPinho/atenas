<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CollectionUpdateRequest extends FormRequest
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
            'collection'=>'string|max:20',
            'user_id'=>'exists:users,id|integer'
        ];
    }
    public function messages()
    {
        return[
            'collection.string'=>'Insira uma coleção válida!',
            'collection.max'=>'Coleção inserida demasiado longa!',

            'user_id.exists'=>'Utilizador associado não existe!',
            'user_id.integer'=>'Associe um utilizador válido!',


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
