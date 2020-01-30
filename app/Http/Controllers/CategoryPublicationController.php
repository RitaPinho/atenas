<?php

namespace App\Http\Controllers;

use App\CategoryPublication;
use App\Http\Requests\CategoryPublicationStoreRequest;
use App\Http\Requests\CategoryPublicationUpdateRequest;
use Illuminate\Http\Request;

/**
 * Class CategoryPublicationController
 * @package App\Http\Controllers
 * @group Category and Publication Relationship
 */

class CategoryPublicationController extends Controller
{
    /**
     * Display a listing of the connections between categories and publications.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryPublications = CategoryPublication::all();
        $response=[
            'message'=>'Lista de ligações das categorias às publicações',
            'data'=>$categoryPublications,
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
     * Store a newly created relationship between category and added publication in storage.
     *
     * @bodyParam category_id integer required Category id
     * @bodyParam publication_id integer required Publication id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryPublicationStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $categoryPublication=CategoryPublication::create($data);

        $response=[
            'message'=>'Relação entre Categoria e Publicação Adicionada',
            'data'=>$categoryPublication,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified connection between category and publication.
     *
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryPublication $categoryPublication)
    {
        //
        $response=[
            'message'=>'Ligação selecionada',
            'data'=> $categoryPublication,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryPublication $categoryPublication)
    {
        //
    }

    /**
     * Update the specified connection between category and publication in storage.
     *
     * @bodyParam category_id integer Category id
     * @bodyParam publication_id integer Publication id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryPublicationUpdateRequest $request, CategoryPublication $categoryPublication)
    {
        //
        $data=$request->all();


        $categoryPublication->update($data);

        $response=[
            'message'=>'Relação entre Categoria e Publicação Atualizada',
            'data'=>$categoryPublication,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified connection between category and publication from storage.
     *
     * @param  \App\CategoryPublication  $categoryPublication
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryPublication $categoryPublication)
    {
        //
        $categoryPublication->delete();
        $response=[
            'message'=>'Relação entre Categoria e Publicação Apagada',
            'data'=>$categoryPublication,
            'result'=>'ok'
        ];

        return response($response);
    }
}
