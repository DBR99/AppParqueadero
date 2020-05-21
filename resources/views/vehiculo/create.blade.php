@extends('layouts.app', ['activePage' => 'vehiculo', 'titlePage' => __('Vehiculos')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <form action="{{route('vehiculo.store')}} " method="post" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Agrega un vehiculo') }}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Tipo de vehiculo') }}</label>
                            <div class="col-sm-7">

                                <select name="idTipo" class="form-control">
                                    @foreach ($tiposVehiculo as $tipoVehiculo)
                                    <option value="{{$tipoVehiculo->id}}">{{$tipoVehiculo->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Placa') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="placa" id="input-cupos-moto" type="text"
                                    placeholder="20" required="true" aria-required="true" />
                            </div>
                        </div>

                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Crear <i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('vehiculo.index')}}"><button class="btn btn-warning"><i
                            class="fa fa-arrow-left"></i></button></a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
