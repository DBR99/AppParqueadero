@extends('layouts.app', ['activePage' => 'parqueadero', 'titlePage' => __('parqueadero')])

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
            <form action="{{route('parqueadero.update', $parqueadero->id)}} " method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Editar parqueadero Nro') }} {{$parqueadero->id}}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para moto') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="cuposMoto" id="input-cupos-moto" type="number"
                                    value="{{$parqueadero['cuposMoto']}}" required="true" aria-required="true" />

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Cupos disponiles para carro') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="cuposCarro" id="input-cupos-carro" type="number"
                                    value="{{$parqueadero['cuposCarro']}}" required="true" aria-required="true" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Valor tarifa por cuarto de hora') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="tarifa" id="input-cupos-moto" type="number"
                                    value="{{$parqueadero['tarifa']}}" required="true" aria-required="true" />

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
    </div>





</div>
</div>
@endsection
