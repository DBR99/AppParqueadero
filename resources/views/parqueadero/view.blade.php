@extends('layouts.app', ['activePage' => 'parqueadero', 'titlePage' => __('parqueadero')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Parquedero Nro.') }}  {{$parqueadero->id}}</h4>
                    <p class="card-category">{{ __('Datos') }}</p>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para moto') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$parqueadero->cuposCarro}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para carro') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$parqueadero->cuposMoto}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Valor tarifa por cuarto de hora') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$parqueadero->tarifa}}</label>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('parqueadero.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
        </div>
    </div>
</div>
</div>
@endsection


