@extends('layouts.app', ['activePage' => 'servicio', 'titlePage' => __('Servicios')])

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
            <form action="{{route('servicio.update', $servicio->id)}} " method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Salida de vehiculo') }} {{$servicio->Vehiculo->placa}}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf


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

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Fecha de salida') }}</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name='fechaSalida' value="{{old('fechaSalida', $now->format('Y-m-d'))}}">
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Hora de salida') }}</label>
                            <div class="col-sm-7">
                                <input type="time" class="form-control" name='horaSalida' value="{{old('horaSalida', $now->format('H:i'))}}" >
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
        <a href="{{route('servicio.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>

    </div>
</div>
</div>
@endsection
