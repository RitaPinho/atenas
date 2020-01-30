<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsTopicStoreRequest;
use App\Http\Requests\NewsTopicUpdateRequest;
use App\NewsTopic;
use Illuminate\Http\Request;

/**
 * Class NewsTopicController
 * @package App\Http\Controllers
 * @group News Topic
 */

class NewsTopicController extends Controller
{
    /**
     * Display a listing of the news topics.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newsTopic = NewsTopic::all();
        $response=[
            'message'=>'Relações entre notícias e tópicos',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created news topic in storage.
     *
     * @bodyParam news_id integer required News id
     * @bodyParam topic_id integer required Topic id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsTopicStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $newsTopic=NewsTopic::create($data);

        $response=[
            'message'=>'Relação entre Tópico e Notícia Adicionada',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified topic.
     *
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function show(NewsTopicStoreRequest $newsTopic)
    {
        //
        $response=[
            'message'=>'Relação entre Notícia e Tópico selecionado',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @bodyParam news_id integer required News id
     * @bodyParam topic_id integer required Topic id
     *
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsTopic $newsTopic)
    {
        //
    }

    /**
     * Update the specified topic in storage.
     *
     * @bodyParam news_id integer News id
     * @bodyParam topic_id integer Topic id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function update(NewsTopicUpdateRequest $request, NewsTopic $newsTopic)
    {
        //
        $data=$request->all();

        $newsTopic->update($data);

        $response=[
            'message'=>'Relação entre Tópico e Noticia Atualizada',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified topic from storage.
     *
     * @param  \App\NewsTopic  $newsTopic
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsTopic $newsTopic)
    {
        //
        $newsTopic->delete();
        $response=[
            'message'=>'Relação entre Tópico e Noticia Apagada',
            'data'=>$newsTopic,
            'result'=>'ok'
        ];

        return response($response);
    }
}
