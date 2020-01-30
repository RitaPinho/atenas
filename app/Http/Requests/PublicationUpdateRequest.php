<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class PublicationUpdateRequest extends FormRequest
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
            'name'=>'required|string|max:100|unique:publications,name,'.$this->publication->id
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Insira um nome de uma publicação',
            'name.unique'=>'Essa publicação já existe',
            'name.string'=>'Insira um nome de uma publicação válido',
            'name.max'=>'Nome de publicação demasiado longo',
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
