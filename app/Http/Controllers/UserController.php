<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query=DB::select(' select id,name,email,password from users');
        return view('usuario.index',['usuarios'=>$query]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }
    public function store(Request $request)
    {
        
        $name=$request->input('nombre');
        $email=$request->input('email');
        $password=$request->input('contraseña');
       
        DB::table('users')->insert(['name'=>$name,'email'=>$email,'password'=>$password]);
        return redirect()->route('usuarios.index')->with('success','Usuario registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $u=DB::table('users')
        ->where('id', $id)->first();
        return view('usuario.show',compact('u'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $u=DB::table('users')
        ->where('id', $id)->first();
        return view('usuario.edit',compact('u'));    }


    public function update(Request $request, $id)
    {
       
        $name=$request->input('nombre');
        $email=$request->input('email');
        $password=$request->input('contraseña');
       
        DB::table('users')
        ->where('id', $id)->update(['name'=>$name,'email'=>$email,'password'=>$password]);
        return redirect()->route('usuarios.index')->with('success','Usuario modificado exitosamente');
        
    }

    public function destroy($id)
    {
        $u=DB::table('users')
        ->where('id', $id)->delete();
        return redirect()->route('usuarios.index')->with('success','Usuario eliminado exitosamente');
    }
}