@extends('layouts.app', ['activePage' => 'conductor', 'titlePage' => __('Conductores')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="material-icons">emoji_people</i>
                        </div>
                        <p class="card-category">Nuevo conductor</p>
                        <h3 class="card-title">
                        </h3>
                    </div>
                    <div class="card-footer">
                        <div class="stats">
                            <a class="text-bold" href="{{route('conductor.create')}}">Crear</a>
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
                    <h4 class="card-title ">Conductores</h4>
                    <p class="card-category">Estos son los conductores registrados</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                                <th>tipo id</th>
                                <th>Nro. id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Ver</th>
                                <th>Editar</th>
                                <th>Eliminar</th>
                            </thead>
                            @foreach($conductores as $conductor)
                            <tr>
                                <td>{{$conductor->tipoDocumento}}</td>
                                <td>{{$conductor->numeroDocumento}}</td>
                                <td>{{$conductor->nombre}}</td>
                                <td>{{$conductor->apellido}}</td>
                                <td>
                                    <a href="{{route('conductor.show', $conductor->id)}}" class="btn btn-info">
                                        <i class="material-icons">visibility</i>
                                </td>

                                <td>
                                    <a href="{{route('conductor.edit', $conductor->id)}}" class="btn btn-primary">
                                        <i class="material-icons">create</i>
                                </td>

                                <td>
                                    <form action="{{route('conductor.destroy', $conductor->id)}}" method="post">
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
