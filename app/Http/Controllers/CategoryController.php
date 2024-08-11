<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
   
    public function index()
    {
        $query=DB::table('dbo.category')
        ->get();
        return view('categorias.index',['categorias'=>$query]);
        }

    public function create()
    {
        return view('categorias.create');
    }

  
    public function store(Request $request)
    {
        $categoria= new Category();
        $categoria->name=$request->input('nombre');
        $categoria->save();
        return redirect()->route('categorias.index')->with('success','Categoría registrada exitosamente');
    }

    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        $categoria= DB::table('dbo.category')
        ->where('category_id', $id)->first();
        //=Category::find($id)->first();
        return view('categorias.edit',compact('categoria'));
    }

    
    public function update(Request $request, $id)
    {
        $nombre=$request->input('nombre');

        $categoria= DB::table('dbo.category')
        ->where('category_id', $id)
        ->update(['name'=>$nombre]);
        
        return redirect()->route('categorias.index')->with('success','Categoría actualizada exitosamente');
    }

    public function destroy($id)
    {
        $categoria= DB::table('dbo.category')
        ->where('category_id', $id)->delete();
        return redirect()->route('categorias.index')->with('success','Categoría eliminada exitosamente');
    }
}
