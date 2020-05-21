@extends('layouts.app', ['activePage' => 'tipovehiculo', 'titlePage' => __('tipo vehiculo')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Vehiculo Nro.') }}  {{$tipoVehiculo->id}}</h4>
                    <p class="card-category">{{ __('Datos') }}</p>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para moto') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$tipoVehiculo->nombre}}</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer ml-auto mr-auto">
                    <a href="{{route('tipovehiculo.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection


