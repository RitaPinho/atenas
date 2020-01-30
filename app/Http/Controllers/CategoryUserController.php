<?php

namespace App\Http\Controllers;

use App\CategoryUser;
use App\Http\Requests\CategoryUserStoreRequest;
use App\Http\Requests\CategoryUserUpdateRequest;
use Illuminate\Http\Request;

/**
 * Class CategoryUserStoreRequest
 * @package App\Http\Requests
 * @group Category and User Relationship
 */

class CategoryUserController extends Controller
{
    /**
     * Display a listing of the users' favorite categories.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoriesusers = CategoryUser::all();
        $response=[
            'message'=>'Lista de Categorias Favoritas dos Users',
            'data'=>$categoriesusers,
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
     * Store a newly created user favorite category in storage.
     *
     * @bodyParam category_id integer required Category id
     * @bodyParam user_id integer required User id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryUserStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $categoryUser=CategoryUser::create($data);

        $response=[
            'message'=>'Categoria Favorita do User Adicionada',
            'data'=>$categoryUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the favorite category of the specified user.
     *
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryUser $categoryUser)
    {
        //
        $response=[
            'message'=>'Categoria Favorita do User selecionada',
            'data'=>$categoryUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryUser $categoryUser)
    {
        //
    }

    /**
     * Update the user favorite category in storage.
     *
     * @bodyParam category_id integer Category id
     * @bodyParam user_id integer User id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUserUpdateRequest $request, CategoryUser $categoryUser)
    {
        //
        $data=$request->all();


        $categoryUser->update($data);

        $response=[
            'message'=>'Relação entre Categoria e Utilizador Atualizada',
            'data'=>$categoryUser,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified user favorite category from storage.
     *
     * @param  \App\CategoryUser  $categoryUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryUser $categoryUser)
    {
        //
        $categoryUser->delete();
        $response=[
            'message'=>'Relação entre Categoria e Utilizador Apagada',
            'data'=>$categoryUser,
            'result'=>'ok'
        ];
        return response($response);
    }
}
