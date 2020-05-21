<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Carbon\Carbon;

class DetalleServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detalleServicios = App\DetalleServicio::orderby('id', 'asc')->get();
        return view('servicio.index', compact('detalleServicios'));    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $now = Carbon::now();

        $parqueaderos = App\Parqueadero::orderby('id','asc')->get();
        $conductores = App\Conductor::orderby('nombre','asc')->get();
        $vehiculos = App\Vehiculo::orderby('placa','asc')->get();
        $detalleServicios = App\DetalleServicio::orderby('id','asc')->get();
        return view('servicio.create',compact('parqueaderos','conductores','vehiculos','now'));
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
            'nroFactura' => 'required',
            'idParqueadero' => 'required',
            'idVehiculo' => 'required',
            'idConductor' => 'required',
            'fechaIngreso' => 'required',
            'horaIngreso' => 'required',
            ]);

       App\DetalleServicio::create($request->all());

       return redirect()->route('servicio.index')
                        ->with('exito','Se ha creado correctamente el servicio!');
      }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detalleServicio = App\DetalleServicio::findorfail($id);
        return view('servicio.view', compact('detalleServicio'));
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
        $parqueaderos = App\Parqueadero::orderby('id','asc')->get();
        $conductores = App\Conductor::orderby('nombre','asc')->get();
        $detalleServicio = App\DetalleServicio::findorfail($id);
        return view('servicio.edit', compact('detalleServicio'));
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
            'nroFactura' => 'required',
            'fechaSalida' => 'required'
             ]);

                $detalleServicio = App\DetalleServicio::findorfail($id);

                $detalleServicio->update($request->all());

                return redirect()->route('servcio.index')
                                -> with('exito','Servicio modificado con éxito!');
                                }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detalleServicio = App\DetalleServicio::findorfail($id);

        $detalleServicio->delete();

        return redirect()->route('servicio.index')
                        -> with('exito','servicio eliminado correctamente!');    }
}
