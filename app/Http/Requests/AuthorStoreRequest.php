<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;


class AuthorStoreRequest extends FormRequest
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
            'name'=>'required|unique:authors|string|max:70',
            'description'=>'required|string|max:255',
            'email' => 'required|string|email|max:50|unique:authors',
            'job_id'=>'required|exists:jobs,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'name.required'=>'Insira um nome',
            'name.unique'=>'Esse autor já existe',
            'name.string'=>'Insira um nome válido',
            'name.max'=>'Nome demasiado longo',
            'description.required'=>'Insira uma descrição do autor',
            'description.string'=>'Insira uma descrição válida',
            'description.max'=>'Descrição demasiado longa',
            'email.required'=>'Insira um endereço de email válido',
            'email.string'=>'Insira um endereço de email válido',
            'email.email'=>'Insira um endereço de email',
            'email.max'=>'Endereço de email demasiado longo',
            'email.unique'=>'O endereço de email inserido já se encontra registado',
            'job_id.required'=>'Associe um trabalho',
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


