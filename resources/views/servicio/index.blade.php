@extends('layouts.app', ['activePage' => 'servicio', 'titlePage' => __('Servicios')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">note_add</i>
                        </div>
                        <p class="card-category">Nuevo servicio</p>
                        <h3 class="card-title">
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('servicio.create')}}">Crear</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-sm-12">
                <br>
                <br>
                @if($message = Session::get('exito'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <i class="material-icons">close</i>
                    </button>
                    <p>{{$message}}</p>
                </div>
                @endif
            </div>


            <div class="card">
                <div class="card-header card-header-primary">
                    <h4 class="card-title ">Servicio parqueadero</h4>
                    <p class="card-category">Estos son los detalles de servicios activo por cada parqueadero</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>Nro. Parqueadero</th>
                                <th>Nro factura</th>
                                <th>Placa vehiculo</th>
                                <th>Fecha ingreso</th>
                                <th>Hora de ingreso</th>
                                <th>Fecha salida</th>
                                <th>Hora de salida</th>
                                <th>Conductor</th>
                                <th>Ver</th>
                                <th>Salir</th>
                                <th>Eliminar</th>
                            </thead>
                            @foreach($detalleServicios as $servicio)
                            <tr>
                                <td>{{$servicio->idParqueadero}}</td>
                                <td>{{$servicio->nroFactura}}</td>
                                <td>{{$servicio->Vehiculo->placa}}</td>
                                <td>{{$servicio->fechaIngreso}}</td>
                                <td>{{$servicio->horaIngreso}}</td>
                                <td>{{$servicio->fechaSalida}}</td>
                                <td>{{$servicio->horaSalida}}</td>
                                <td>{{$servicio->Conductor->nombre}} {{$servicio->Conductor->apellido}}</td>
                                <td>
                                    <a href="{{route('servicio.show', $servicio->id)}}" class="btn btn-info">
                                        <i class="material-icons">visibility</i>
                                </td>

                                <td>
                                    <a href="{{route('servicio.edit', $servicio->id)}}" class="btn btn-primary">
                                        <i class="material-icons">create</i>
                                </td>

                                <td>
                                    <form action="{{route('servicio.destroy', $servicio->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"> <i
                                                class="material-icons">delete_outline</i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>
</div>
@endsection
