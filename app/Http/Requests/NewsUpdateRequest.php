<?php

namespace App\Http\Requests;


use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class NewsUpdateRequest extends FormRequest
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
            'title'=>'string|max:200',
            'image'=>'image',
            'url'=>'string|unique:news,url,'.$this->news->id,
            'subtitle'=>'string|max:300',
            'news_size_id'=>'exists:news_sizes,id|integer',
            'category_id'=>'exists:categories,id|integer'
        ];
    }

    public function messages()
    {
        return[
            'title.string'=>'Insira um titulo válido!',
            'title.max'=>'Título demasiado longo!',

            'image.image'=>'O ficheiro inserido não é do tipo imagem!',

            'url.unique'=>'Esse url já existe!',
            'url.string'=>'Insira um url válido!',

            'subtitle.string'=>'Insira um subtítulo válido!',
            'subtitle.max'=>'Subtítulo demasiado longo!',

            'news_size_id.exists'=>'Esse tamanho de notícia não existe!',
            'news_size_id.integer'=>'Associe um tamanho de notícia válido!',

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
