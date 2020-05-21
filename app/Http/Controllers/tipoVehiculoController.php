<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;


class tipoVehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tiposVehiculos = App\TipoVehiculo::orderby('id', 'asc')->get();
        return view('tipovehiculo.index', compact('tiposVehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipovehiculo.create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            ]);

       App\TipoVehiculo::create($request->all());

       return redirect()->route('tipovehiculo.index')
                        ->with('exito','Se ha creado correctamente el tipo de vehiculo!');
      }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tipoVehiculo = App\TipoVehiculo::findorfail($id);
        return view('tipovehiculo.view', compact('tipoVehiculo'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tipoVehiculo = App\TipoVehiculo::findorfail($id);
        return view('tipovehiculo.edit', compact('tipoVehiculo'));
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
            'nombre' => 'required'
            ]);

                $tipoVehiculo = App\TipoVehiculo::findorfail($id);

                $tipoVehiculo->update($request->all());

                return redirect()->route('tipovehiculo.index')
                                -> with('exito','Tipo vehiculo modificado con éxito!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tipoVehiculo = App\TipoVehiculo::findorfail($id);

        $tipoVehiculo->delete();

        return redirect()->route('tipovehiculo.index')
                        -> with('exito','Tipo vehiculo eliminado correctamente!');
                    }
}
