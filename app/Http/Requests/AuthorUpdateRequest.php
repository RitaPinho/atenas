<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class AuthorUpdateRequest extends FormRequest
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
            'name'=>'max:70|string|unique:authors,name,'.$this->author->id,
            'description'=>'string|max:255',
            'email' => 'string|email|max:50|unique:authors,email,'.$this->author->id,
            'job_id'=>'exists:jobs,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'name.unique'=>'Esse autor já existe',
            'name.string'=>'Insira um nome válido',
            'name.max'=>'Nome demasiado longo',
            'description.string'=>'Insira uma descrição válida',
            'description.max'=>'Descrição demasiado longa',
            'email.string'=>'Insira um endereço de email válido',
            'email.email'=>'Insira um endereço de email',
            'email.max'=>'Endereço de email demasiado longo',
            'email.unique'=>'O endereço de email inserido já se encontra registado',
            'job_id.exists'=>'Esse trabalho não existe',
            'job_id.integer'=>'Associe um trabalho válido'
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
