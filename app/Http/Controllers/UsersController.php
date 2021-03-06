<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Laracast\Flash\Flash;
use App\Http\Requests\UserRequest;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        # ver tabla categoria
        $users = User::orderBy('id','ASC')->paginate(3);
        return view('admin.users.index')->with('users', $users);#with pasa variable a vista
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        # formulario agrgar nueva usuario
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        # guarda nueva usuario
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('se ha registrado ' . $user->name . ' con exito')->success();
        return redirect()->route('admin.categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        #  ver formulario edicion usuario
        $user = User::find($id);
        return view('admin.users.edit')->with('user' , $user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        #actualiza usuario
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();

        flash('El usuario ' . $user->name . ' Ha sido modificado con exito')->warning();
        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        # elimina usuario
        $user =User::find($id);
        $user->delete();

        flash('El usuario ' . $user->name . ' Ha sido borrado con exito')->error();
        return redirect()->route('admin.users.index');

    }
}
