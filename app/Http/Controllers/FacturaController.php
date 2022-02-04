<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Producto;
use App\Models\Venta;
use Illuminate\Http\Request;


class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index(Request $request)
    {
        $facturas = Factura::join('productos', 'facturas.idProducto', '=', 'productos.id')
            ->select('facturas.*', 'productos.*')
            ->get();
        //Enviar a la vista
        return view('factura.index',compact('facturas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $facturas = Factura::orderBy('id','asc')->get();
        return view('factura.index', compact('facturas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'idProducto'=> 'required',
    //         'cantidad'=> 'required',
    //     ]);

    //     Factura::create($request->all());
    //     //Retornar la vista
    //     return redirect()->route('factura.index')->with('exito','Se ha guardado la Factura exitosamente.');
    // }
    public function store(Request $request)
    {
        $request->validate([
            'idVenta' =>'required',
            'idProducto' =>'required',
            'cantidad'=>'required'
        ]);

        $facturas = Factura::create($request->all());




        // dd($request);

        return redirect()->route('ventas.show',$request->idVenta);

        // header("refresh:1;url=" + ventas.view/'.$request->idVenta +"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $factura = Factura::FindOrFail($id);
        //Enviar a la vista
        return view('factura.view', compact('factura'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $factura = Factura::FindOrFail($id);
        //Enviar a la vista
        return view('factura.edit', compact('factura'));
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
        $request->validate([
            'idProducto'=> 'required',
            'cantidad'=> 'required',
        ]);

        $factura = Factura::FindOrFail($id);

        $factura->update($request->all());
        //Retornar la vista
        return redirect()->route('facturas.index')->with('exito','Se ha modificado la factura exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $factura = Factura::FindOrFail($id);
        $factura->delete();
        return redirect()->route('facturas.index')->with('exito','Se ha eliminado la factura correctamente.');
    }
}
