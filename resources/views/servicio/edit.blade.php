@extends('layouts.app', ['activePage' => 'vehiculo', 'titlePage' => __('vehiculo')])

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
            <form action="{{route('vehiculo.update', $vehiculo->id)}} " method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Editar vehiculo de placa') }} {{$vehiculo->placa}}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para moto') }}</label>
                            <div class="col-sm-7">

                                <select name="idTipo" class="form-control">
                                    @foreach ($tiposVehiculo as $tipoVehiculo)
                                    <option value="{{$tipoVehiculo->id}}">
                                    @if ($vehiculo->idTipo == $tipoVehiculo->id)
                                    selected
                                    @endif
                                    {{$tipoVehiculo->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Placa') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="placa" id="input-placa" type="text"
                                    value="{{$vehiculo['placa']}}" required="true" aria-required="true" />
                            </div>
                        </div>

                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Actualizar
                        </button>
                    </div>
                </div>
            </form>

        </div>
        <a href="{{route('vehiculo.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>

    </div>
</div>
</div>
@endsection
