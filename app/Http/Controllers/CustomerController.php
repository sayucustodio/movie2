<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;
class CustomerController extends Controller
{
 
    public function index()
    {
        //$query=DB::table('dbo.customer')
        //->get();
        $query=DB::select('select cu.customer_id,cu.first_name,cu.last_name, 
        cu.email,cu.active,a.address,ci.city,co.country from customer cu 
        inner join address a on cu.address_id=a.address_id
        inner join city ci on a.city_id=ci.city_id
        inner join country co on co.country_id=ci.country_id');
        return view('clientes.index',['clientes'=>$query]);
    }
    
public function ActualizarEstado(Request $request){
    
    $EstadoUpdate= DB::table('customer')
    ->where('customer_id',$request->customer_id )
    ->update(['active'=>$request->active]);
    if($request->active==0){
        $newStatus='<br><button type="button" class="btn btn-sm btn-danger">Inactivo</button>';
    }else{
        $newStatus='<br><button type="button" class="btn btn-sm btn-success">Activo</button>';  
    }
    return response()->json(['var'=>''.$newStatus.'']);

}
   
    public function create()
    {
        $direcciones = DB::table('address')
    ->get();
    $tiendas = DB::table('store')
    ->get();
  
        return view('clientes.create',['direccion'=>$direcciones],compact('tiendas'));
    }

    
 
    public function store(Request $request)
    {
        $cliente= new Customer();
        $cliente->store_id=$request->input('tienda');
        $cliente->first_name=$request->input('nombre');
        $cliente->last_name=$request->input('apellidos');
        $cliente->email=$request->input('email');
        $cliente->address_id=$request->input('direccion');
        $cliente->active=1;
       
        $cliente->save();
        return redirect()->route('clientes.index')->with('success','Cliente registrado exitosamente');
    }
   

   
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $cliente= DB::table('customer')
        ->where('customer_id', $id)->first();
        $direccion = DB::table('address')
        ->get();
        
        $tiendas = DB::table('store')
        ->get();

        return view('clientes.edit',['cliente'=>$cliente],compact('direccion','tiendas'));
    }

    public function update(Request $request, $id)
    {
        $tienda=$request->input('tienda');
        $nombre=$request->input('nombre');
        $apellido=$request->input('apellidos');
        $email=$request->input('email');
        $direccion=$request->input('direccion');

      /*$cli=Customer::find($id);
        $cli=Customer::where('customer_id','=',$id)->first();
        $cli->first_name=$request->get('nombre');
        $cli->store_id=$request->get('tienda');
        $cli->last_name=$request->get('apellidos');
        $cli->email=$request->get('email');
        $cli->address_id=$request->get('direccion');
        $cli->save();*/

       $cliente= DB::table('customer')
        ->where('customer_id', $id)
        ->update(['store_id'=>$tienda,'first_name'=>$nombre,'last_name'=>$apellido,'email'=>$email,'address_id'=>$direccion]);
        //$cliente->save();
        return redirect()->route('clientes.index')->with('success','Cliente ha sido actualizado exitosamente');
    }

    public function destroy($id)
    {
        $cliente= DB::table('rental')
        ->where('customer_id', $id)->delete();
        $cliente= DB::table('payment')
        ->where('customer_id', $id)->delete();
        $cliente= DB::table('customer')
        ->where('customer_id', $id)->delete();
        return redirect()->route('clientes.index')->with('success','Cliente eliminado exitosamente');
    }
}