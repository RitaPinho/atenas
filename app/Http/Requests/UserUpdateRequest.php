<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class UserUpdateRequest extends FormRequest
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
            'username'=>'string|max:30',
            'email' => 'string|email|max:50|unique:users,email,'.$this->user->id,
            'password' => 'string|min:8',
            'image' => 'image',
            'role_id' => 'integer|exists:roles,id',
            'news_size_id' => 'integer|exists:news_users,id'
        ];
    }
    
    public function messages()
    {
        return[
            'username.string'=>'Insira um nome de utilizador válido',
            'username.max'=>'Nome de utilizador demasiado longo',
            'email.string'=>'Insira um endereço de email válido',
            'email.email'=>'Insira um endereço de email',
            'email.max'=>'Endereço de email demasiado longo',
            'email.unique'=>'O endereço de email inserido já se encontra registado',
            'password.string'=>'Insira uma password válido',
            'password.min'=>'Password inválida! Insira pelo menos 8 caracteres',
            'image.image'=>'Insira uma imagem válida',
            'news_size_id.exists'=>'Insira um tamanho de notícia válido',
            'news_size_id.integer'=>'Insira um tamanho de notícia válido',
            'role_id.exists'=>'Insira um tipo de utilizador válido',
            'role_id.integer'=>'Insira um tipo de utilizador válido',
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
