<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class CategoryUserStoreRequest extends FormRequest
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
            'category_id'=>'required|exists:categories,id|integer',
            'user_id'=>'required|exists:users,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'category_id.required'=>'Associe uma categoria',
            'category_id.exists'=>'Essa categoria não existe',
            'category_id.integer'=>'Associe um categoria válida',
            'user_id.required'=>'Associe um utilizador',
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
