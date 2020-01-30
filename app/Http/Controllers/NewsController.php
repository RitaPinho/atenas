<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsStoreRequest;
use App\Http\Requests\NewsUpdateRequest;
use App\News;
use Illuminate\Http\Request;

/**
 * Class NewsController
 * @package App\Http\Controllers
 * @group News
 */
class NewsController extends Controller
{
    /**
     * Display a listing of the news.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = News::all();
        $response=[
            'message'=>'Lista de Notícias',
            'data'=>$news,
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
     * Store a newly created news in storage.
     *
     * @bodyParam title string required News title
     * @bodyParam image image required News image
     * @bodyParam url string required News URL
     * @bodyParam subtitle string required News subtitle
     * @bodyParam news_size_id integer required News size id
     * @bodyParam category_id integer required News cattegory id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post
        $file=$request->file('image')->store('images/news');
        //return $file;
        $data['image']=$file;

        $news=News::create($data);


        $response=[
            'message'=>'Notícia Adicionada',
            'data'=>$news,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified news.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
        $response=[
            'message'=>'Notícia selecionada',
            'data'=>$news,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        //
    }

    /**
     * Update the specified news in storage.
     *
     * @bodyParam title string News title
     * @bodyParam image image News image
     * @bodyParam url string News URL
     * @bodyParam subtitle string News subtitle
     * @bodyParam news_size_id integer News size id
     * @bodyParam category_id integer News cattegory id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdateRequest $request, News $news)
    {
        //
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image')->store('images/news');

            $data['image']=$file;

        }

        $news->update($data);

        $response=[
            'message'=>'Notícia Atualizada',
            'data'=>$news,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified news from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        //
        $news->delete();
        $response=[
            'message'=>'Notícia Apagada',
            'data'=>$news,
            'result'=>'ok'
        ];

        return response($response);
    }
}
