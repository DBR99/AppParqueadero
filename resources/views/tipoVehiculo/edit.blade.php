@extends('layouts.app', ['activePage' => 'tipovehiculo', 'titlePage' => __('tipo vehiculo')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>
        @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        @endif

        <div class="col-md-12">
            <form action="{{route('tipovehiculo.update', $tipoVehiculo->id)}} " method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Editar tipo de vehiculo:') }} {{$tipoVehiculo->nombre}}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="nombre" id="input-nombre" type="text"
                                    value="{{$tipoVehiculo['nombre']}}" required="true" aria-required="true" />

                            </div>
                        </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Actualizar
                        </button>
                    </div>
                </div>
            </form>
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('tipovehiculo.index')}}"><button class="btn btn-warning"><i
                            class="fa fa-arrow-left"></i></button></a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
