@extends('layouts.app', ['activePage' => 'tipovehiculo', 'titlePage' => __('tipo vehiculo')])

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
                        <p class="card-category">Nuevo tipo de vehiculo</p>
                        <h3 class="card-title">
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('tipovehiculo.create')}}">Crear</a>
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
                    <h4 class="card-title ">Tipos de vehiculos</h4>
                    <p class="card-category">Estos son los tipos de vehiculos que cuida en su parqueadero</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>id</th>
                                <th>Nombre</th>
                                <th>ver</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            @foreach($tiposVehiculos as $tipoVehiculo)
                            <tr>
                                <td>{{ $tipoVehiculo->id }}</td>
                                <td>{{$tipoVehiculo->nombre}}</td>
                                <td>
                                    <a href="{{route('tipovehiculo.show', $tipoVehiculo->id)}}" class="btn btn-info">
                                        <i class="material-icons">visibility</i>
                                </td>

                                <td>
                                    <a href="{{route('tipovehiculo.edit', $tipoVehiculo->id)}}" class="btn btn-primary">
                                        <i class="material-icons">create</i>
                                </td>

                                <td>
                                    <form action="{{route('tipovehiculo.destroy', $tipoVehiculo->id)}}" method="post">
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

                        <div class="card-footer ml-auto mr-auto">
                            <a href="{{route('vehiculo.index')}}"><button class="btn btn-warning"><i
                                        class="fa fa-arrow-left"></i>     Vehiculos</button></a>
                        </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
