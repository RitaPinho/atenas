<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthorUserUpdateRequest extends FormRequest
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
            'author_id'=>'exists:authors,id|integer',
            'user_id'=>'exists:users,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'author_id.exists'=>'Esse autor não existe',
            'author_id.integer'=>'Associe um autor válido',
            'user_id.exists'=>'Esse utilizador não existe',
            'user_id.integer'=>'Associe um utilizador válido',
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
