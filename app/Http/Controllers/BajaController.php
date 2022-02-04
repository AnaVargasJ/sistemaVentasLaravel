<?php

namespace App\Http\Controllers;

use App\Models\Baja;
use App\Models\Producto;
use App\Models\Categoria;
use Illuminate\Http\Request;

class BajaController extends Controller
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
            $bajas = Baja::join('productos', 'bajas.idProducto', '=', 'productos.id')
            ->select('bajas.*', 'productos.nombre')
            ->get();

            return view('bajas.index', compact('bajas', 'query'));
        }

        return view('bajas.index',compact('baja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Enviar a la vista

        $productos = Producto::orderBy('nombre','asc')->get();
        $categorias = Categoria::orderBy('nombreCategoria','asc')->get();
        //Enviar a la vista

        $producto  = Producto::join('categorias', 'productos.categoriasId','=','categorias.id')
                                ->select('productos.*','categorias.*')
                                    // ->where('productos.id','=',$id
                                ->get();
                                return view('bajas.insert', compact('productos','categorias'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'cantidad'=> 'required',
            'valorUnidad'=> 'required',
            'fecha'=> 'required',
            'idProducto'=> 'required',
            'descripcion'=> 'required',
        ]);

        Baja::create($request->all());
        //Retornar la vista
        return redirect()->route('bajas.index')->with('exito','Se ha guardado la baja exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Baja  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $baja = Producto::join('bajas', 'bajas.idProducto', '=', 'productos.id')
        ->select('bajas.*', 'productos.*')
        ->where('bajas.id', '=', $id)
        ->first();
    return view('bajas.view', compact('baja'));
}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Baja  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::orderBy('nombre','asc')->get();
        $bajas = Baja::FindOrFail($id);
        return view('bajas.edit', compact('bajas','productos'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Baja  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'cantidad'=> 'required',
            'valorUnidad'=> 'required',
            'fecha'=> 'required',
            'idProducto'=> 'required',
            'descripcion'=> 'required',

        ]);

        $baja = Baja::FindOrFail($id);
        $baja->update($request->all());



        //Retornar la vista
        return redirect()->route('bajas.index')->with('exito','Se ha modificado la baja exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Baja  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $baja = Baja::FindOrFail($id);
        $baja->delete();
        return redirect()->route('bajas.index')->with('exito','Se ha eliminado la baja correctamente.');
    }
}
