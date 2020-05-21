@extends('layouts.app', ['activePage' => 'parqueadero', 'titlePage' => __('parqueadero')])

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
                        <p class="card-category">Nuevo parqueadero</p>
                        <h3 class="card-title">
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('parqueadero.create')}}">Crear</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">list</i>
                        </div>
                        <p class="card-category">Servicios</p>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('servicio.index')}}">Ir</a>
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
                    <h4 class="card-title ">Parqueaderos</h4>
                    <p class="card-category">Estos son los parqueaderos que has registrado</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>id</th>
                                <th>Cupos moto</th>
                                <th>Cupos carro</th>
                                <th>Tarifa</th>
                                <th>ver</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            @foreach($parqueaderos as $parqueadero)
                            <tr>
                                <td>{{ $parqueadero->id }}</td>
                                <td>{{$parqueadero->cuposMoto}}</td>
                                <td>{{$parqueadero->cuposCarro}}</td>
                                <td>{{$parqueadero->tarifa}}</td>
                                <td>
                                    <a href="{{route('parqueadero.show', $parqueadero->id)}}" class="btn btn-info">
                                        <i class="material-icons">visibility</i>
                                </td>

                                <td>
                                    <a href="{{route('parqueadero.edit', $parqueadero->id)}}" class="btn btn-primary">
                                        <i class="material-icons">create</i>
                                </td>

                                <td>
                                    <form action="{{route('parqueadero.destroy', $parqueadero->id)}}" method="post">
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
