<?php

namespace App\Http\Controllers;

use App\Http\Requests\TopicStoreRequest;
use App\Http\Requests\TopicUpdateRequest;
use App\Topic;
use Illuminate\Http\Request;

/**
 * Class TopicController
 * @package App\Http\Controllers
 * @group Topic
 */

class TopicController extends Controller
{
    /**
     * Display a listing of the topics.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $topics = Topic::all();
        $response=[
            'message'=>'Lista de Tópicos',
            'data'=>$topics,
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
     * Store a newly created topic in storage.
     *
     * @bodyParam topic string required Topic name
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TopicStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $topic=Topic::create($data);

        $response=[
            'message'=>'Tópico Adicionado',
            'data'=>$topic,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified topic.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        //
        $response=[
            'message'=>'Tópico selecionado',
            'data'=>$topic,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Topic $topic)
    {
        //
    }

    /**
     * Update the specified topic in storage.
     *
     * @bodyParam topic string Topic name
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(TopicUpdateRequest $request, Topic $topic)
    {
        //
        $data=$request->all();

        $topic->update($data);

        $response=[
            'message'=>'Tópico Atualizado',
            'data'=>$topic,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified topic from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topic $topic)
    {
        //
        $topic->delete();
        $response=[
            'message'=>'Tópico Apagado',
            'data'=>$topic,
            'result'=>'ok'
        ];

        return response($response);
    }
}
