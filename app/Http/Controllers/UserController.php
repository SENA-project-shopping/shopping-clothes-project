<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\RolUser;
use App\Models\StateUser;
use App\Models\User;
use Illuminate\Http\Request;
use Nette\Utils\Random;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::all();
        $rolUser = RolUser::all();
        $stateUser = StateUser::all();
        return view('admin.usuarios.index', compact('usuarios', 'rolUser', 'stateUser'));
    }

    /**
     * Show the form for creating a new resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rolUser = RolUser::all();
        $stateUser = StateUser::all();
        return view('admin.usuarios.create', compact('rolUser', 'stateUser'));
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $passwordUser = 'pass.user';
        $stateUser = '1';

        $request->merge(['password' => $passwordUser, 'state_users_id' => $stateUser]);

        $userCrte = User::create($request->all());
        $userCrte->save();
        return redirect()->route('admin.usuarios.show', $userCrte->id)->with('success', 'Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     * 
     * @param  \App\Models\User $user
     * @param  \App\Models\RolUser $rolUser
     * @param  \App\Models\StateUser $stateUser
     * @return \Illuminate\Http\Response
     */
    public function show(User $usuario)
    {
        $rolUser = RolUser::all();
        $stateUser = StateUser::all();
        return view('admin.usuarios.show', compact('usuario', 'rolUser', 'stateUser'));
    }

    /**
     * Show the form for editing the specified resource.
     * 
     * @param  \App\Models\User $user
     * @param  \App\Models\RolUser $rolUser
     * @param  \App\Models\StateUser $stateUser
     * @return \Illuminate\Http\Response
     */
    public function edit(User $usuario)
    {
        $rolUser = RolUser::all();
        $stateUser = StateUser::all();
        return view('admin.usuarios.edit', compact('usuario', 'rolUser', 'stateUser'));
    }

    /**
     * Update the specified resource in storage.
     * 
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Models\User $usuario
     * @param  \App\Models\RolUser $rolUser
     * @param  \App\Models\StateUser $stateUser
     * @return \Illuminate\Http\Response
     * 
     */
    public function update(Request $request, User $usuario)
    {
        $usuario->update($request->all());
        return redirect()->route('admin.usuarios.show', $usuario->id)->with('success', 'Usuario editado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}