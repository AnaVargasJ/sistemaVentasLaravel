<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Producto;
use App\Models\Factura;
use Illuminate\Http\Request;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Request $request)
    {
        //listar los desarrolladores ordenados por nombre ascendentemente
        $ventas = Venta::orderBy('id', 'asc')->get();
        //Enviar a la vista
        return view('ventas.index', compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ventas = Venta::orderBy('id','asc');
        //Enviar a la vista
        return view('ventas.insert', compact('ventas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,)
    {
        //
        $request->validate([
            'fecha'=> 'required',
            'cedula'=> 'required',
            'nombreCliente'=> 'required'
        ]);
        Venta::create($request->all());



        return redirect()->route('ventas.index')->with('exito','Se ha agregado la Venta exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Venta  $Venta
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ventas= Venta::FindOrFail($id);
        // $facturas = Factura::FindOrFail($id);
        $productos= Producto::orderBy('nombre', 'asc')->get();

        // $facturas = Factura::where('id', '=', $id)->get();
        $facturas = Factura::join('productos', 'facturas.idProducto', '=', 'productos.id')
            ->select('facturas.*', 'productos.*')
            ->get();



        // $facturas = Factura::select('facturas.*')
        //             ->where('ventas.id', '=', $id)->get();

        return view('ventas.view', compact('ventas','productos','facturas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Venta $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Venta  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate([
            'fecha'=> 'required',
            'cedula'=> 'required',
            'nombreCedula'=> 'required'

        ]);

        $ventas = Venta::findOrFail($id);
        $ventas->update($request->all());
        return redirect()->route('ventas.index')->with('exito','Se ha modificado los datos de la venta exitosamente.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Venta  $desarrollador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ventas = Venta::findOrFail($id);


        $facturas = Factura::findOrFail($id);
        $facturas->delete();
        return redirect()->route('ventas.index')->with('exito','Se ha eliminado la venta correctamente.');
    }


}
