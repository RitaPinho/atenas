<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsUserStoreRequest;
use App\Http\Requests\NewsUserUpdateRequest;
use App\NewsUser;
use Illuminate\Http\Request;


/**
 * Class NewsUserController
 * @package App\Http\Controllers
 * @group News and User Relationship
 */

class NewsUserController extends Controller
{
    /**
     * Display a listing of the connections between news and users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $newsusers = NewsUser::all();
        $response=[
            'message'=>'Lista de relações entre Notícias e Users',
            'data'=>$newsusers,
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
     * Store a newly created relationship between news and added user in storage.
     *
     * @bodyParam news_id integer required News id
     * @bodyParam user_id integer required User id
     * @bodyParam collection_id integer required Collection id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsUserStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $newsUser=NewsUser::create($data);

        $response=[
            'message'=>'Relação entre Notícia e User Adicionada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified connection between news and user.
     *
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function show(NewsUser $newsUser)
    {
        //
        return $newsUser;
        $response=[
            'message'=>'Relação entre Notícia e User selecionada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function edit(NewsUser $newsUser)
    {
        //
    }

    /**
     * Update the specified connection between news and user in storage.
     *
     * @bodyParam news_id integer News id
     * @bodyParam user_id integer User id
     * @bodyParam collection_id integer Collection id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUserUpdateRequest $request, NewsUser $newsUser)
    {
        //
        $data=$request->all();

        $newsUser->update($data);

        $response=[
            'message'=>'Relação entre noticia e User Atualizada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];
        return response($response);

    }

    /**
     * Remove the specified connection between news and user from storage.
     *
     * @param  \App\NewsUser  $newsUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewsUser $newsUser)
    {
        //
        $newsUser->delete();
        $response=[
            'message'=>'Relação entre Notícia e User Apagada',
            'data'=>$newsUser,
            'result'=>'ok'
        ];
        return response($response);
    }
}
