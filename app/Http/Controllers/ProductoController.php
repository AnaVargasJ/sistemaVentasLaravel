<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        if($request){
            $query = $request->buscar;
            $productos = Producto::where('nombre','LIKE','%'.$query.'%')
                                            ->orderBy('nombre','asc')
                                            ->get();
            return view('productos.index', compact('productos', 'query'));
        }
        //listar los desarrolladores ordenados por nombre ascendentemente
        $productos = Producto::orderBy('nombre','asc')->get();
        //Enviar a la vista
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //listar proyectos
        $categorias = Categoria::orderBy('nombreCategoria','asc')->get();
        //Enviar a la vista
        return view('productos.insert', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, )
    {
        //
        $request->validate([
            'nombre'=> 'required',
            'marca'=> 'required',
            'valorUnidad'=> 'required',
            'stock'=> 'required',
            'cantidadMinima'=> 'required',
            'cantidadVendida'=> 'required',
            'cantidadBaja'=> 'required',
            'categoriasId'=> 'required'
        ]);

        Producto::create($request->all());

        return redirect()->route('productos.index')->with('exito','Se ha agregado el producto exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $producto  = Producto::join('categorias', 'productos.categoriasId','=','categorias.id')
                                        ->select('productos.*','categorias.*')
                                        ->where('productos.id','=',$id)
                                        ->first();

        return view('productos.view', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Producto $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $categorias = Categoria::orderBy('nombreCategoria','asc')->get();
        $producto = Producto::FindOrFail($id);
        return view('productos.edit', compact('categorias','producto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Producto  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'nombre'=> 'required',
            'marca'=> 'required',
            'valorUnidad'=> 'required',
            'stock'=> 'required',
            'cantidadMinima'=> 'required',
            'cantidadVendida'=> 'required',
            'cantidadBaja'=> 'required'
        ]);

        $producto = Producto::findOrFail($id);
        $producto->update($request->all());




        return redirect()->route('productos.index')->with('exito','Se ha modificado los datos del producto exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Producto  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect()->route('productos.index')->with('exito','Se ha eliminado el producto correctamente.');
    }
}
