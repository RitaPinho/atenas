<?php

namespace App\Http\Controllers;

use App\Http\Requests\JobStoreRequest;
use App\Http\Requests\JobUpdateRequest;
use App\Job;
use Illuminate\Http\Request;

/**
 * Class JobController
 * @package App\Http\Controllers
 * @group Job
 */

class JobController extends Controller
{
    /**
     * Display a listing of the jobs.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $jobs = Job::all();

        $response=[
            'message'=>'Lista de Profissoes
            ',
            'data'=>$jobs,
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
     * Store a newly created job in storage.
     *
     * @bodyParam job string required Job name
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JobStoreRequest $request)
    {
        //
        $data=$request->all(); //array com as informações q mandar por post

        $job=Job::create($data);

        $response=[
            'message'=>'Profissão Adicionada',
            'data'=>$job,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Display the specified job.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
        $response=[
            'message'=>'Autor selecionado',
            'data'=>$job,
            'result'=>'ok'
        ];

        return response($response);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified job in storage.
     *
     * @bodyParam job string Job name
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(JobUpdateRequest $request, Job $job)
    {
        //
        return $request;
        $data=$request->all();
        
        $job->update($data);

        $response=[
            'message'=>'Profissão Atualizada',
            'data'=>$job,
            'result'=>'ok'
        ];
        return response($response);
    }

    /**
     * Remove the specified job from storage.
     *
     * @param  \App\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy(Job $job)
    {
        //
        $job->delete();
        $response=[
            'message'=>'Profissão Apagada',
            'data'=>$job,
            'result'=>'ok'
        ];

        return response($response);
    }
}
