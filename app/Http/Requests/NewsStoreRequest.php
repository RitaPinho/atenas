<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewsStoreRequest extends FormRequest
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
            'title'=>'required|string|max:200',
            'image'=>'required|image',
            'url'=>'required|string|unique:news',
            'subtitle'=>'required|string|max:300',
            'news_size_id'=>'required|exists:news_sizes,id|integer',
            'category_id'=>'required|exists:categories,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'title.required'=>'Insira um titulo!',
            'title.string'=>'Insira um titulo válido!',
            'title.max'=>'Título demasiado longo!',

            'image.required'=>'Insira uma imagem!',
            'image.image'=>'O ficheiro inserido não é do tipo imagem!',

            'url.required'=>'Insira um url!',
            'url.unique'=>'Esse url já existe!',
            'url.string'=>'Insira um url válido!',

            'subtitle.required'=>'Insira um subtítulo!',
            'subtitle.string'=>'Insira um subtítulo válido!',
            'subtitle.max'=>'Subtítulo demasiado longo!',

            'news_size_id.required'=>'Associe um tamanho de notícia!',
            'news_size_id.exists'=>'Esse tamanho de notícia não existe!',
            'news_size_id.integer'=>'Associe um tamanho de notícia válido!',

            'category_id.required'=>'Associe uma categoria de notícia!',
            'category_id.exists'=>'Essa categoria não existe!',
            'category_id.integer'=>'Associe uma categoria de notícia válido!'

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
