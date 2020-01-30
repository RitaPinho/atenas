<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Requests\AuthorStoreRequest;
use App\Http\Requests\AuthorUpdateRequest;
use Illuminate\Http\Request;

/**
 * Class AuthorController
 * @package App\Http\Controllers
 *
 * @group Author
 */

class AuthorController extends Controller
{
    /**
     * Display a listing of the authors.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $authors = Author::all();
        $response=[
            'message'=>'Lista de Autores',
            'data'=>$authors,
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
     * Store a newly created author in storage.
     *
     * @bodyParam name string required Author's name
     * @bodyParam description string required Author's description
     * @bodyParam email string required Author's e-mail
     * @bodyParam job_id integer required Author's job
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $author=Author::create($data);

        $response=[
            'message'=>'Autor Adicionado',
            'data'=>$author,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified author.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
        $response=[
            'message'=>'Autor selecionado',
            'data'=>$author,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(Author $author)
    {
        //

    }

    /**
     * Update the specified author in storage.
     *
     * @bodyParam name string Author's name
     * @bodyParam description string Author's description
     * @bodyParam email string Author's e-mail
     * @bodyParam job_id integer Author's profession
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorUpdateRequest $request, Author $author)
    {
        //
        $data=$request->all();

        $author->update($data);

        $response=[
            'message'=>'Autor Atualizado',
            'data'=>$author,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified author from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        //
        $author->delete();
        $response=[
            'message'=>'Autor Apagado',
            'data'=>$author,
            'result'=>'ok'
        ];

        return response($response);
    }
}
