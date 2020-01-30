<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CategoryPublicationUpdateRequest extends FormRequest
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
            'category_id'=>'exists:categories,id|integer',
            'publication_id'=>'exists:publications,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'category_id.exists'=>'Essa categoria não existe',
            'category_id.integer'=>'Associe um categoria válida',
            'publication_id.exists'=>'Essa publicação não existe',
            'publication_id.integer'=>'Associe um publicação válida',
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
