<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Rental;
use App\Models\Film;
use App\Models\Inventory;
use Response;
use View;

class RentalController extends Controller
{

    public function index()
    {
        /*$query = DB::select('select r.rental_id,r.customer_id,cu.first_name,cu.last_name, f.title as pelicula,
        r.rental_date, r.return_date, p.amount from rental r
		inner join inventory i on i.inventory_id=r.inventory_id
		inner join film f on f.film_id=i.film_id
        inner join payment p on r.rental_id=p.rental_id
        inner join customer cu on r.customer_id=cu.customer_id order by r.rental_id DESC');*/
        $query = Customer::get()->where('active', 1);
        return view('alquiler.index2', ['clientes' => $query]);
    }

   

    public function create(Request $request) {
        //$query=DB::select('select customer_id,first_name,last_name, 
        //email,active from customer where active=1');//primera forma
       // $cliente=Customer::find($request->get('id'));
        //$matriculas=Matricula::all();
        //$alquiler=Rental::get()->where('customer_id',$request)->get();
        //$cliente = Customer::get()->where('customer_id', $id);
        //$cliente=Customer::find($request->get('id'));
        //$cliente= DB::table('customer')
        //->where('customer_id', $request->get('id'))->first();
        //$alquiler= DB::table('rental')
        //->where('customer_id', $request->get('id'))->get();
        $cliente=Customer::where('customer_id', $request->get('id'))->first();
       // $alquiler=Rental::get()->where('customer_id', $request->get('id'));
        $alquiler=Rental::where('customer_id',$request->get('id'))->get();
        $peliculas=Film::all();

        //$query= DB::table('rental')->where('customer_id', $id)->get();//tercera forma
        return view('alquiler.create', ['c' => $cliente,'alquiler'=>$alquiler],compact('peliculas'));
    }
    public function listaAlquileres(){

        $alquilerp= DB::select('select r.rental_id,r.customer_id,cu.first_name,cu.last_name, f.title as pelicula,f.rental_rate,
        r.rental_date,r.return_date from rental r
		inner join inventory i on i.inventory_id=r.inventory_id
		inner join film f on f.film_id=i.film_id 
		inner join customer cu on r.customer_id=cu.customer_id where r.return_date is null order by rental_id DESC');
        
        $alquilerd= DB::select('select r.rental_id,r.customer_id,cu.first_name,cu.last_name, f.title as pelicula,f.rental_rate,
        r.rental_date,r.return_date from rental r
		inner join inventory i on i.inventory_id=r.inventory_id
		inner join film f on f.film_id=i.film_id 
		inner join customer cu on r.customer_id=cu.customer_id where r.return_date is not null order by return_date DESC');
        return view('alquiler.index3',compact('alquilerp','alquilerd'));

    }

    public function ActualizarEstadoAlquiler(Request $request){
        $date=Carbon::now('America/Lima');
        $date = $date->format('d-m-Y h:i:s');
    
        DB::table('rental')
        ->where('rental_id',$request->rental_id)
        ->update(['return_date'=>$date]);
        
        if($request->return_date==$date){
            $newStatus='<label class="badge badge-danger">DevueltoPendiente</label>';
        }else{
            $newStatus='<label class="badge badge-info">Devuelto</label>';  
        }
        return response()->json(['var'=>''.$newStatus.'']);
    
    }

    public function createDetalle2($id)
    {    
        $idcliente=$id;
        $peliculas=Film::all();


        return view('alquiler.createdetalle', compact('idcliente', 'peliculas'))->withCliente($idcliente);
       // return view('paginas.grupo.create')->->withCurso(Curso::all());
        //return Response::json( array('view'=>View::make('matricula.createdetalle',compact('ids'))->render()), 200);

    }
    public function calcularimporte(Request $request){ 
        $peli   =   Film::where("film_id",'like',$request->pelicula)->first();
       // $nombres = DB::table('customer')->where("first_name",'like', $request->text."%")->take(10)->get();
        return view('alquiler.importe', compact('peli'));
    }

    public function detalleedit($id)
    {
        //
        $alquiler=Rental::find($id);
           return view('alquiler.editdetalle', compact('alquiler'));
    
    }

    public function store(Request $request)
    {
        $invent= new Inventory;
        $invent->film_id=$request->film_id;
        $invent->store_id=1;
        $invent->save();
        $inventario=DB::table('inventory')->select('inventory_id')->orderBy('inventory_id','DESC')->first();
        
        $i= $inventario->inventory_id;

        $alqui=new Rental;
        $alqui->inventory_id=$i;
        $alqui->customer_id=$request->cliente_id;
        $date=Carbon::now('America/Lima');
        $date = $date->format('d-m-Y h:i:s A');
        $alqui->rental_date=$date;
        $alqui->staff_id=1;
        
        $alqui->save();
        $alquilerp= DB::select('select r.rental_id,r.customer_id,cu.first_name,cu.last_name, f.title as pelicula,f.rental_rate,
        r.rental_date,r.return_date from rental r
		inner join inventory i on i.inventory_id=r.inventory_id
		inner join film f on f.film_id=i.film_id 
		inner join customer cu on r.customer_id=cu.customer_id where r.return_date is null order by rental_id DESC');
        
        $alquilerd= DB::select('select r.rental_id,r.customer_id,cu.first_name,cu.last_name, f.title as pelicula,f.rental_rate,
        r.rental_date,r.return_date from rental r
		inner join inventory i on i.inventory_id=r.inventory_id
		inner join film f on f.film_id=i.film_id 
		inner join customer cu on r.customer_id=cu.customer_id where r.return_date is not null order by return_date DESC');
       
    return view('alquiler.index3',compact('alquilerp','alquilerd'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $date=Carbon::now('America/Lima');
        $date = $date->format('d-m-Y h:i:s A');
    
        DB::table('rental')
        ->where('rental_id',$id)
        ->update(['return_date'=>$date]);
        return redirect()->route('alquiler.listaAlquileres')->with('success','La película ha sido devuelta');
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        DB::table('rental')
        ->where('rental_id', $id)->delete();
        return redirect()->route('alquiler.listaAlquileres')->with('success','Alquiler eliminado');
    }
}