<?php

namespace App\Http\Controllers;

use App\AuthorUser;
use App\Http\Requests\AuthorUserStoreRequest;
use App\Http\Requests\AuthorUserUpdateRequest;
use Illuminate\Http\Request;

/**
 * Class AuthorUpdateRequest
 * @package App\Http\Requests
 *
 * @group Author and User Relationship
 */

class AuthorUserController extends Controller
{
    /**
     * Display a listing of the users' favorite authors.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $authorsusers = AuthorUser::all();
        $response=[
            'message'=>'Lista de Autor Favoritos dos Users',
            'data'=>$authorsusers,
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
     * Store a newly created user favorite author in storage.
     *
     * @bodyParam author_id integer required Author id
     * @bodyParam user_id integer required User id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorUserStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $authorUser=AuthorUser::create($data);

        $response=[
            'message'=>'Autor Favorito do User Adicionado',
            'data'=>$authorUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the favorite author of the specified user.
     *
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function show(AuthorUser $authorUser)
    {
        //
        $response=[
            'message'=>'Autor Favorito do User selecionado',
            'data'=>$authorUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function edit(AuthorUser $authorUser)
    {
        //
    }

    /**
     * Update the user favorite author in storage.
     *
     * @bodyParam author_id integer Author id
     * @bodyParam user_id integer User id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function update(AuthorUserUpdateRequest $request, AuthorUser $authorUser)
    {
        //

        $data=$request->all();

        $authorUser->update($data);

        $response=[
            'data'=>$authorUser,
            'message'=>'Autor Favorito do User Atualizado',
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified user favorite author from storage.
     *
     * @param  \App\AuthorUser  $authorUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(AuthorUser $authorUser)
    {
        //
        $authorUser->delete();
        $response=[
            'message'=>'Autor Favorito do User Apagado',
            'data'=>$authorUser,
            'result'=>'ok'
        ];

        return response($response);

    }
}
