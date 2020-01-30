<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewsTopicUpdateRequest extends FormRequest
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
            'topic_id'=>'exists:topics,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'news_id.exists'=>'Essa notícia não existe!',
            'news_id.integer'=>'Associe uma notícia válida!',

            'topic_id.exists'=>'Esse tópico não existe!',
            'topic_id.integer'=>'Associe um topico válido!',
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
