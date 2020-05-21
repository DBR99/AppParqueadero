@extends('layouts.app', ['activePage' => 'servicio', 'titlePage' => __('Servicios')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <form action="{{route('servicio.store')}} " method="post" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Registra un servicio') }}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nro factura') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="nroFactura" id="input-nroFactura" type="number"
                             required="true" aria-required="true"/>

                            </div>
                        </div>

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nro. parqueadero') }}</label>
                            <div class="col-sm-7">

                                <select name="idParqueadero" class="form-control">
                                    @foreach ($parqueaderos as $parqueadero)
                                    <option  value="{{$parqueadero->id}}">{{$parqueadero->id}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Conductor') }}</label>
                            <div class="col-sm-7">

                                <select name="idConductor" class="form-control">
                                    @foreach ($conductores as $conductor)
                                    <option  value="{{$conductor->id}}">{{$conductor->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Vehiculo') }}</label>
                            <div class="col-sm-7">
                                <select name="idVehiculo" class="form-control">
                                    @foreach ($vehiculos as $vehiculo)
                                    <option value="{{$vehiculo->id}}">{{$vehiculo->placa}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Fecha de ingreso') }}</label>
                            <div class="col-sm-7">
                                <input type="date" class="form-control" name='fechaIngreso' value="{{old('fechaIngreso', $now->format('Y-m-d'))}}" disabled>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Hora de ingreso') }}</label>
                            <div class="col-sm-7">
                                <input type="time" class="form-control" name='horaIngreso' value="{{old('horaIngreso', $now->format('H:i'))}}" disabled>
                            </div>
                        </div>


                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Crear <i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('servicio.index')}}"><button class="btn btn-warning"><i
                            class="fa fa-arrow-left"></i></button></a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
