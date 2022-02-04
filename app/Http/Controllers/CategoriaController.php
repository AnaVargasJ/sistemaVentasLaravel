<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        if($request){
            $query = $request->buscar;
            $categorias = Categoria::where('nombreCategoria','LIKE','%'.$query.'%')
                ->orderBy('nombreCategoria','asc')
                ->get();
            return view('categorias.index', compact('categorias','query'));
        }

        $categorias = Categoria::orderBy('nombreCategoria','asc')->get();

        return view('categorias.index', compact('categorias','buscar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorias.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombreCategoria'=>'required',
        ]);
        Categoria::create($request->all());
        return redirect()->route('categorias.index')->with('exito','Se ha guardado la categoria exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::FindOrFail($id);
        return view('categorias.view', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::FindOrFail($id);
        return view('categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nombreCategoria'=>'required',
        ]);

        $categoria = Categoria::FindOrFail($id);

        $categoria->update($request->all());

        return redirect()->route('categorias.index')->with('exito','Se ha modificado la categoria exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categoria  $categoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $categoria = Categoria::FindOrFail($id);
        $categoria->delete();

    return redirect()->route('categorias.index')->with('exito','Se ha eliminado la categoria correctamente.');
    }
}

