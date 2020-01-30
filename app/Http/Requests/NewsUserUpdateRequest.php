<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class NewsUserUpdateRequest extends FormRequest
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
            'news_id'=>'exists:news,id|integer',
            'user_id'=>'exists:users,id|integer',
            'collection_id'=>'exists:collections,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'news_id.exists'=>'Essa notícia não existe',
            'news_id.integer'=>'Associe um notícia válida',
            'user_id.exists'=>'Esse utilizador não existe',
            'user_id.integer'=>'Associe um utilizador válido',
            'collection_id.exists'=>'Essa coleção não existe',
            'collection_id.integer'=>'Associe uma coleção válida',
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
