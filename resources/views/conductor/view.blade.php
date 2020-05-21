@extends('layouts.app', ['activePage' => 'conductor', 'titlePage' => __('Conductor')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <div class="card ">
                <div class="card-header card-header-primary">
                    <h4 class="card-title">{{ __('Conductor con id') }}  {{$conductor->numeroDocumento}}</h4>
                    <p class="card-category">{{ __('Datos') }}</p>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Tipo de id') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$conductor->tipoDocumento}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Numero de id') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$conductor->numeroDocumento}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$conductor->nombre}}</label>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">{{ __('Apellido') }}</label>
                        <div class="col-sm-7">
                            <label class="col-sm-2 col-form-label">{{$conductor->apellido}}</label>
                        </div>
                    </div>

                </div>
            </div>
            <a href="{{route('conductor.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>
        </div>
    </div>
</div>
</div>
@endsection


