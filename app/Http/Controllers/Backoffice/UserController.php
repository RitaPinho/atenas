<?php

namespace App\Http\Controllers\Backoffice;

use App\Role;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;

/**
 * Class UserController
 * @package App\Http\Controllers\Backoffice
 * @group User
 */

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        $response=[
            'message'=>'Lista de Users',
            'data'=>$users,
            'result'=>'ok'
        ];

        return response($response);
        /*return view('bo.users.index')
            ->with('users', $users);*/
    }

    /**
     * Show the form for creating a resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        /*$roles = Role::where('id', '>=', Auth::user()->role_id)->get();
        return $roles;*/
        /*return view('bo.users.create')
            ->with('roles', $roles);*/
    }

    /**
     * Store a newly created user in storage.
     *
     * @bodyParam username string required Username
     * @bodyParam email string required E-mail
     * @bodyParam password string required Password
     * @bodyParam image image Image
     * @bodyParam role_id integer required Role id
     * @bodyParam news_size_id integer required News size id
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserStoreRequest $request)
    {

        /*$this->validate($request, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role_id' => 'required|integer|exists:roles,id|min:' . Auth::user()->role->id
        ],*/
            /*[
                'role_id.min' => 'Cannot set selected role.',
                'username.required' => 'Mete o nome',   
            ]);*/

        $data = $request->all();

        $file = $request->file('image')->store('images/users');
        
        $data['image'] = $file;
                //return $data['image']. $file;
        $data['password'] = Hash::make($data['password']);
        //return $data;
        $user = User::create($data);
        
        $response=[
            'message'=>'User Adicionado',
            'data'=>$user,
            'result'=>'ok'
        ];

        return response($response);
        /*return redirect()->route('user.index')
            ->withErrors(['success' => 'User created.']);*/
    }

    /**
     * Display the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
        $response=[
            'message'=>'User selecionado',
            'data'=>$user,
            'result'=>'ok'
        ];

        return response($response);
        /*return view('bo.users.show')
            ->with('user', $user);*/
    }

    /**
     * Show the form for editing the specified user.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
        $roles = Role::where('id', '>=', Auth::user()->role_id)->get();

        //return $roles;
        return view('bo.users.edit')
            ->with('roles', $roles)
            ->with('user', $user);
    }

    /**
     * Update the specified user in storage.
     *
     * @bodyParam username string Username
     * @bodyParam email string E-mail
     * @bodyParam password string Password
     * @bodyParam image image Image
     * @bodyParam role_id integer Role id
     * @bodyParam news_size_id integer News size id
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, User $user)
    {
        //
        //$this->validate($request, [
          //  'username' => 'required|string|max:255',
            //'email' => [
              //  'required', 'string', 'email', 'max:255',
               // Rule::unique('users')->ignore($user->id),
            //],
            //'password' => 'nullable|string|min:6|confirmed',
            //'role_id' => 'required|integer|exists:roles,id|min:' . Auth::user()->role->id,
        //],
          //  [
            //    'role_id.min' => 'Cannot set selected role.'
            //]);
        $data = $request->only('username', 'email', 'password', 'role_id','image');
        if($request->hasFile('image')){
            $file=$request->file('image')->store('images/users');

            $data['image']=$file;
        }
            
        if ($request->hasFile('password'))
            $data['password'] = Hash::make($data['password']);
        else
            unset($data['password']);

        $user->update($data);

        $response=[
            'message'=>'User Editado',
            'data'=>$user,
            'result'=>'ok'
        ];

        return response($response);
        //return back()->withErrors(['success' => 'User updated.']);
    }

    /**
     * Remove the specified user from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        $response=[
            'message'=>'User Apagado',
            'data'=>$user,
            'result'=>'ok'
        ];

        return response($response);
        //return back()->withErrors(['success' => 'User blocked.']);
    }
}
