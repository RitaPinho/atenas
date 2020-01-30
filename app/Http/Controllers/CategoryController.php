<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use Illuminate\Http\Request;

/**
 * Class CategoryController
 * @package App\Http\Controllers
 *
 * @group Category
 */

class CategoryController extends Controller
{
    /**
     * Display a listing of the category.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categories = Category::all();
        $response=[
            'message'=>'Lista de categorias',
            'data'=>$categories,
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
     * Store a newly created category in storage.
     *
     * @bodyParam category string required Category name
     * @bodyParam image image required Category image
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $file=$request->file('image')->store('images/categories');
        //return $file;
        $data['image']=$file;

        $category=Category::create($data);

        $response=[
            'message'=>'Categoria Adicionada',
            'data'=>$category,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified category.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
        $response=[
            'message'=>'Categoria selecionada',
            'data'=>$category,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified category in storage.
     *
     * @bodyParam category string Category name
     * @bodyParam image image Category image
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        //
        $data=$request->all();

        if($request->hasFile('image')){
             $file=$request->file('image')->store('images/categories');

             $data['image']=$file;

        }

        $category->update($data);

        $response=[
            'message'=>'Categoria Atualizada',
            'data'=>$category,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified category from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */

    public function destroy(Category $category)
    {
        //
        $category->delete();
        $response=[
            'message'=>'Categoria Apagada',
            'data'=>$category,
            'result'=>'ok'
        ];

        return response($response);
    }
}
