<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class vehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehiculos = App\Vehiculo::orderby('id', 'asc')->get();
        return view('vehiculo.index', compact('vehiculos'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposVehiculo = App\TipoVehiculo::orderby('nombre','asc')->get();
        return view('vehiculo.create', compact('tiposVehiculo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required',
            'idTipo' => 'required'
            ]);

       App\Vehiculo::create($request->all());

       return redirect()->route('vehiculo.index')
                        ->with('exito','Se ha creado correctamente el vehiculo!');
      }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $vehiculo = App\Vehiculo::join('tipo_vehiculos','vehiculos.idTipo','tipo_vehiculos.id')
        ->select('vehiculos.*', 'tipo_vehiculos.nombre as vehiculo')
        ->where('vehiculos.id', $id)
        ->first();

        return view('vehiculo.view', compact('vehiculo'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposVehiculo = App\TipoVehiculo::orderby('nombre','asc')->get();
        $vehiculo = App\Vehiculo::findorfail($id);
        return view('vehiculo.edit', compact('vehiculo','tiposVehiculo'));
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
            'placa' => 'required',
            'idTipo' => 'required'
             ]);

                $vehiculo = App\Vehiculo::findorfail($id);

                $vehiculo->update($request->all());

                return redirect()->route('vehiculo.index')
                                -> with('exito','vehiculo modificado con éxito!');
                                }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = App\Vehiculo::findorfail($id);

        $vehiculo->delete();

        return redirect()->route('vehiculo.index')
                        -> with('exito','vehiculo eliminado correctamente!');    }
}

