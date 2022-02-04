<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
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
             // cuando es join primero se pone la tabla que se va unir luego poner la otra tabal con la que s eva unir llamando el campo con nombretabla.campo = se llama la primer tabalas otravez .id
            $pedidos = Pedido::join('productos', 'pedidos.idProducto', '=', 'productos.id')
            ->select('pedidos.*', 'productos.nombre')
            ->get();

            return view('pedidos.index', compact('pedidos', 'query'));
        }
        $pedido = Pedido::orderBy('cantidadPedido','asc')->get();
        //Enviar a la vista
        return view('pedidos.index',compact('pedidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pedidos = Pedido::orderBy('cantidadPedido','asc')->get();
        $productos =Producto::orderBy('nombre','asc')->get();
        //Enviar a la vista
        return view('pedidos.insert', compact('pedidos','productos'));

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
        // dd($request);
        $request->validate([
            'fecha'=> 'required',
            'cantidadPedido'=> 'required',
            'valorUnidad'=> 'required',
            'idProducto'=> 'required'
        ]);

        Pedido::create($request->all());
        //Retornar la vista
        return redirect()->route('pedidos.index')->with('exito','Se ha guardado el pedido exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pedido  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
         $pedido  = Producto::join('pedidos', 'pedidos.idProducto', '=', 'productos.id')
        ->select('pedidos.*', 'productos.*')
        ->where('pedidos.id', '=', $id)
        ->first();
        //Enviar a la vista
        return view('pedidos.view', compact('pedido'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pedido  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::orderBy('nombre','asc')->get();
        $pedidos = Pedido::FindOrFail($id);
        return view('pedidos.edit', compact('pedidos','productos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pedido  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'fecha'=> 'required',
            'cantidadPedido'=> 'required',
            'valorUnidad'=> 'required',
            'idProducto'=> 'required'

        ]);

        $pedido = Pedido::FindOrFail($id);
        $pedido->update($request->all());
        //Retornar la vista
        return redirect()->route('pedidos.index')->with('exito','Se ha modificado el pedido exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pedido  $proyecto
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $pedido = Pedido::FindOrFail($id);
        $pedido->delete();
        return redirect()->route('pedidos.index')->with('exito','Se ha eliminado el pedido correctamente.');
    }
}
