@extends('layouts.app', ['activePage' => 'tipovehiculo', 'titlePage' => __('tipo vehiculo')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <form action="{{route('tipovehiculo.store')}} " method="post" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Crear nuevo tipo de vehiculo') }}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="nombre" id="input-nombre" type="text"
                                    placeholder="Moto / Bici / Buseta ... " required="true" aria-required="true" />

                            </div>
                        </div>

                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Crear <i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('tipovehiculo.index')}}"><button class="btn btn-warning"><i
                            class="fa fa-arrow-left"></i></button></a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
