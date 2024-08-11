<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\Film;


class FilmController extends Controller
{
    
    public function index()
    {
        $query=DB::select('select fc.film_id,f.title,f.release_year,c.name as categoria,l.name ,f.rental_rate,count (*) as stock from film_category fc
        inner join film f on fc.film_id=f.film_id
		inner join inventory i on i.film_id=f.film_id
        inner join dbo.language  l on l.language_id=f.language_id 
        inner join category c on c.category_id=fc.category_id
        group by fc.film_id,f.release_year,l.name, f.title, f.rental_rate,c.name order by fc.film_id ASC');
        return view('pelicula.index',['peliculas'=>$query]);
    }

    public function create()
    
    {
      /*  $pelicula=DB::table('film')->select('film_id')->orderBy('film_id','DESC')->first();
        
      $p= $pelicula->film_id+1;*/
        $categoria = DB::table('category')
        ->get();
        $idioma = DB::table('language')
        ->get();
      
           
        return view('pelicula.create',['categoria'=>$categoria],compact('idioma')); 
    }

   
    public function store(Request $request)
    {
        $idpeli=$request->get('id_pelicula1');
        $duracion=$request->input('duracion');
        $titulo=$request->input('titulo');
        $descripcion=$request->input('descripcion');
        $año=$request->input('año');
        $idioma=$request->input('idioma');
        $categoria=$request->input('categoria');
        $precio=$request->input('precio');
        $stock=$request->input('stock');
       
      
        DB::table('film')->insert(['title'=>$titulo,'description'=>$descripcion,'release_year'=>$año,'language_id'=>$idioma,
        'rental_duration'=>$duracion,'rental_rate'=>$precio]);
        
        $pelicula=DB::table('film')->select('film_id')->orderBy('film_id','DESC')->first();
        
        $p= $pelicula->film_id;
        DB::table('film_category')->insert(['film_id'=>$p,'category_id'=>$categoria]);
        //agregar al inventario de acuerdo al numero de stock de cada pelicula

        
            DB::table('inventory')->insert(['film_id'=>$p,'store_id'=>1]);
      
        
    
       /* for($i=0;$i<$stock;$i++){
            DB::table('inventory')->insert(['film_id'=>1019,'store_id'=>1]);
        };*/
       /* $i=0;
        while($i<$stock){
             DB::table('inventory')->insert(['film_id'=>1019,'store_id'=>1]);
        $i += 1;
        };*/
        
        return redirect()->route('peliculas.index')->with('success','Película registrada exitosamente');
    }

    public function show($id)
    {
      
    }

   
    public function edit($id)
    {
        //$peliculas= DB::table('film')
        //->where('film_id',$id)->first();
        $p= Film::where('film_id', $id);
        //$p= DB::table('film')
      //  ->where('film_id', $id)->first();
      
        $idioma = DB::table('language')
        ->get();
        $categoria = DB::table('category')
        ->get();
        $pelicula=DB::select('select fc.film_id,f.title,CAST(f.description AS varchar(max))as description ,f.release_year,f.rental_duration,c.name as categoria,l.name as idioma,f.rental_rate,count (*) as stock from film_category fc
        inner join film f on fc.film_id=f.film_id
		inner join inventory i on i.film_id=f.film_id
        inner join dbo.language  l on l.language_id=f.language_id 
        inner join category c on c.category_id=fc.category_id where f.film_id='.$id.'
        group by CAST(f.description AS varchar(max)),fc.film_id,f.release_year,l.name,
         c.name,f.title,f.rental_duration, f.rental_rate');

        return view('pelicula.edit',['p'=>$p,'pelicula'=>$pelicula],compact('idioma','categoria'));
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        $pelicula0= DB::table('film_actor')
        ->where('film_id', $id)->delete();
     
        $i=DB::select('select r.rental_id from rental r
        inner join inventory i on i.inventory_id=r.inventory_id
        inner join film f on f.film_id=i.film_id where f.film_id=1'.$id)->delete();
       $pelicula2= DB::table('inventory')
        ->where('film_id', $id)->delete();
      

        $pelicula1= DB::table('film_category')
        ->where('film_id', $id)->delete();
        
        $pelicula3= DB::table('film')
        ->where('film_id', $id)->delete();
       
        
        return redirect()->route('peliculas.index')->with('success','Película eliminada exitosamente');
    }
}