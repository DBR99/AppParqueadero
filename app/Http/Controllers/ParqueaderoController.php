<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use App\Parqueadero;

class ParqueaderoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parqueaderos = App\Parqueadero::orderby('id', 'asc')->get();
        return view('parqueadero.index', compact('parqueaderos'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('parqueadero.create');
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
                'cuposCarro' => 'required',
                'cuposMoto' => 'required',
                'tarifa' => 'required'
                ]);

           App\Parqueadero::create($request->all());

           return redirect()->route('parqueadero.index')
                            ->with('exito','Se ha creado correctamente el parqueadero!');
          }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $parqueadero = App\Parqueadero::findorfail($id);
        return view('parqueadero.view', compact('parqueadero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $parqueadero = App\Parqueadero::findorfail($id);
        return view('parqueadero.edit', compact('parqueadero'));
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
            'cuposCarro' => 'required',
            'cuposMoto' => 'required',
            'tarifa' => 'required'
             ]);

                $parqueadero = App\Parqueadero::findorfail($id);

                $parqueadero->update($request->all());

                return redirect()->route('parqueadero.index')
                                -> with('exito','Parqueadero modificado con éxito!');
                                }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $parqueadero = App\Parqueadero::findorfail($id);

        $parqueadero->delete();

        return redirect()->route('parqueadero.index')
                        -> with('exito','parqueadero eliminado correctamente!');    }
}
