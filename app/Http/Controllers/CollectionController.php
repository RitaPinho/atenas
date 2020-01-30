<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Http\Requests\CollectionStoreRequest;
use App\Http\Requests\CollectionUpdateRequest;
use Illuminate\Http\Request;

/**
 * Class CollectionController
 * @package App\Http\Controllers
 * @group Collection
 */

class CollectionController extends Controller
{
    /**
     * Display a listing of the collections.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $collections = Collection::all();
        $response=[
            'message'=>'Lista de Coleções',
            'data'=>$collections,
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
     * Store a newly created collection in storage.
     *
     * @bodyParam collection string required Collection Name
     * @bodyParam user_id integer required User id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CollectionStoreRequest $request)
    {
        //

        $data=$request->all(); //array com as informações q mandar por post

        $collection=Collection::create($data);

        $response=[
            'message'=>'Coleção Adicionada',
            'data'=>$collection,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified collection.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        //
        $response=[
            'message'=>'Coleção selecionada',
            'data'=>$collection,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified collection.
     *
     * @bodyParam collection string required Collection Name
     * @bodyParam user_id integer required User id
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        //
    }

    /**
     * Update the specified collection in storage.
     *
     * @bodyParam collection string Collection Name
     * @bodyParam user_id integer User id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(CollectionUpdateRequest $request, Collection $collection)
    {
        //
        $data=$request->all();

        $collection->update($data);

        $response=[
            'message'=>'Coleção Atualizada',
            'data'=>$collection,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified collection from storage.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        //
        $collection->delete();
        $response=[
            'message'=>'Coleção Apagada',
            'data'=>$collection,
            'result'=>'ok'
        ];

        return response($response);
    }
}
