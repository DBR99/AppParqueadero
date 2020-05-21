@extends('layouts.app', ['activePage' => 'vehiculo', 'titlePage' => __('vehiculo')])

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
                        <p class="card-category">Nuevo vehiculo</p>
                        <h3 class="card-title">
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('vehiculo.create')}}">Crear</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">commute</i>
                        </div>
                        <p class="card-category">Tipos de vehiculos</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('tipovehiculo.index')}}">Ir</a>
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
                    <h4 class="card-title ">Vehiculos</h4>
                    <p class="card-category">Estos son los vehiculos registrados</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>id</th>
                                <th>Tipo</th>
                                <th>Placa</th>
                                <th>ver</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            @foreach($vehiculos as $vehiculo)
                            <tr>
                                <td>{{$vehiculo->id}}</td>
                                <td>{{$vehiculo->TipoVehiculo->nombre}}</td>
                                <td>{{$vehiculo->placa}}</td>
                                <td>
                                    <a href="{{route('vehiculo.show', $vehiculo->id)}}" class="btn btn-info">
                                        <i class="material-icons">visibility</i>
                                </td>

                                <td>
                                    <a href="{{route('vehiculo.edit', $vehiculo->id)}}" class="btn btn-primary">
                                        <i class="material-icons">create</i>
                                </td>

                                <td>
                                    <form action="{{route('vehiculo.destroy', $vehiculo->id)}}" method="post">
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
