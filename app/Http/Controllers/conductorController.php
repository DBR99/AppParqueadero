<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App;

class conductorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conductores = App\Conductor::orderby('id', 'asc')->get();
        return view('conductor.index', compact('conductores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('conductor.create');
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
            'tipoDocumento' => 'required',
            'numeroDocumento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required'
            ]);
       App\Conductor::create($request->all());

       return redirect()->route('conductor.index')
                        ->with('exito','Se ha creado correctamente el conductor!');
      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conductor = App\Conductor::findorfail($id);
        return view('conductor.view', compact('conductor'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conductor = App\Conductor::findorfail($id);
        return view('conductor.edit', compact('conductor'));
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
            'tipoDocumento' => 'required',
            'numeroDocumento' => 'required',
            'nombre' => 'required',
            'apellido' => 'required'
             ]);

                $conductor = App\Conductor::findorfail($id);

                $conductor->update($request->all());

                return redirect()->route('conductor.index')
                                -> with('exito','conductor modificado con éxito!');
                                }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $conductor = App\Conductor::findorfail($id);

        $conductor->delete();

        return redirect()->route('conductor.index')
                        -> with('exito','conductor eliminado correctamente!');    }

}
