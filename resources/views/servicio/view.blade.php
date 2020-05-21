@extends('layouts.app', ['activePage' => 'servicio', 'titlePage' => __('Servicio')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Servicio Nro.') }}  {{$servicio->nroFactura}}</h4>
                    <p class="card-category">{{ __('Datos') }}</p>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Parqueadero') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$servicio->idParqueadero}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Nro factura') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$servicio->nroFactura}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Fecha de ingreso') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$servicio->fechaIngreso}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Hora de ingreso') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$servicio->horaIngreso}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Conductor') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$servicio->Conductor->nombre}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Placa') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$servicio->Vehiculo->placa}}</label>
                        </div>
                    </div>

                </div>
            </div>
            <a href="{{route('servicio.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
        </div>
    </div>
</div>
</div>
@endsection


