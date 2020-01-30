<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchTypeStoreRequest;
use App\Http\Requests\SearchTypeUpdateRequest;
use App\SearchType;
use Illuminate\Http\Request;

/**
 * Class SearchTypeController
 * @package App\Http\Controllers
 * @group Search Type
 */

class SearchTypeController extends Controller
{
    /**
     * Display a listing of the search types.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $searchType = SearchType::all();
        $response=[
            'message'=>'Lista de Tipos de Pesquisa',
            'data'=>$searchType,
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
     * Store a newly created search type in storage.
     *
     * @bodyParam type string required Type of search
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SearchTypeStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $searchType=SearchType::create($data);

        $response=[
            'message'=>'Tipo de pesquisa Adicionado',
            'data'=>$searchType,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified search type.
     *
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function show(SearchType $searchType)
    {
        //
        $response=[
            'message'=>'Tipo de pesquisa selecionada',
            'data'=>$searchType,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function edit(SearchType $searchType)
    {
        //
    }

    /**
     * Update the specified search type in storage.
     *
     * @bodyParam type string Type of search
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function update(SearchTypeUpdateRequest $request, SearchType $searchType)
    {
        //
        $data=$request->all();

        $searchType->update($data);

        $response=[
            'message'=>'Tipo de Procura Atualizada',
            'data'=>$searchType,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified search type from storage.
     *
     * @param  \App\SearchType  $searchType
     * @return \Illuminate\Http\Response
     */
    public function destroy(SearchType $searchType)
    {
        $searchType->delete();
        $response=[
            'message'=>'Tipo de Pesquisa Apagado',
            'data'=>$searchType,
            'result'=>'ok'
        ];

        return response($response);
    }
}
