<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StaffController extends Controller
{
    
    public function index()
    {
        $query=DB::select('select s.staff_id,s.store_id,s.first_name,s.last_name, 
        s.email,s.active,a.address,ci.city,co.country from staff s 
        inner join address a on s.address_id=a.address_id
        inner join city ci on a.city_id=ci.city_id
        inner join country co on co.country_id=ci.country_id');
        return view('empleados.index',['empleados'=>$query]);
    }

   
    public function create()
    {
        
        $direcciones = DB::table('address')
        ->get();
        $tiendas = DB::table('store')
        ->get();
      
            return view('empleados.create',['direccion'=>$direcciones],compact('tiendas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $empleado= new Staff();
        $tienda=$request->input('tienda');
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellidos');
        $email=$request->input('email');
        $direccion=$request->input('direccion');
        $usuario=$request->input('username');
        $contraseña=$request->input('contraseña');
       
        //$empleado->save();
        DB::table('staff')->insert(['store_id'=>$tienda,'first_name'=>$nombre,'last_name'=>$apellido,'email'=>$email,'address_id'=>$direccion
    ,'username'=>$usuario,'password'=>$contraseña]);
    
        return redirect()->route('empleados.index')->with('success','Trabajador registrado exitosamente');
    }

   
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}