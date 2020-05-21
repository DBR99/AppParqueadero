@extends('layouts.app', ['activePage' => 'parqueadero', 'titlePage' => __('parqueadero')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <form action="{{route('parqueadero.store')}} " method="post" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Crear parqueadero') }}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para carro') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="cuposCarro" id="input-cupos-carro" type="number"
                                    placeholder="20" required="true" aria-required="true" />

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para moto') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="cuposMoto" id="input-cupos-moto" type="number"
                                    placeholder="20" required="true" aria-required="true" />

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Valor tarifa por cuarto de hora') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="tarifa" id="input-cupos-moto" type="number"
                                    placeholder="1500" required="true" aria-required="true" />

                            </div>
                        </div>
                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Crear <i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('parqueadero.index')}}"><button class="btn btn-warning"><i
                            class="fa fa-arrow-left"></i></button></a>
            </div>
        </div>
    </div>





</div>
</div>
@endsection
