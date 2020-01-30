<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchStoreRequest;
use App\Http\Requests\SearchUpdateRequest;
use App\Search;
use Illuminate\Http\Request;

/**
 * Class SearchController
 * @package App\Http\Controllers
 * @group Search
 */

class SearchController extends Controller
{
    /**
     * Display a listing of the search.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $search=Search::all();
        $response=[
            'message'=>'Lista de Pesquisas',
            'data'=>$search,
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
     * Store a newly created search in storage.
     *
     * @bodyParam text string required Search text
     * @bodyParam image image Search image
     * @bodyParam user_id integer required User id
     * @bodyParam search_type_id integer required Type of Search
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SearchStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $file=$request->file('image')->store('images/searches');
        //return $file;
        $data['image']=$file;

        $search=Search::create($data);

        $response=[
            'message'=>'Pesquisa Adicionada',
            'data'=>$search,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified search.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Search $search)
    {
        //
        $response=[
            'message'=>'Autor selecionado',
            'data'=>$search,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified search in storage.
     *
     * @bodyParam text string Search text
     * @bodyParam image image Search image
     * @bodyParam user_id integer User id
     * @bodyParam search_type_id integer Type of Search
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(SearchUpdateRequest $request, Search $search)
    {
        //
        $data=$request->all();
        if($request->hasFile('image')){
            $file=$request->file('image')->store('images/searches');

            $data['image']=$file;

        }

        $search->update($data);

        $response=[
            'message'=>'Pesquisa Atualizada',
            'data'=>$search,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified search from storage.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
        $search->delete();
        $response=[
            'message'=>'Pesquisa Apagado',
            'data'=>$search,
            'result'=>'ok'
        ];

        return response($response);
    }
}
