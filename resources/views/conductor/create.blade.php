@extends('layouts.app', ['activePage' => 'conductor', 'titlePage' => __('Conductores')])

@section('content')
<div class="content">
    <div class="container-fluid">
        <p class="card-category"></p>

        <div class="col-md-12">
            <form action="{{route('conductor.store')}} " method="post" autocomplete="off" class="form-horizontal">
                @csrf
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Agrega un conductor') }}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Tipo de documento') }}</label>
                            <div class="col-sm-7">

                                <select name="tipoDocumento" class="form-control">
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="CE">CE</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Numero de documento') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="numeroDocumento" id="input-numeroDocumento" type="text"
                                    placeholder="123 123 122" required="true" aria-required="true" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Nombre') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="nombre" id="input-nombre" type="text"
                                    placeholder="Dayanna" required="true" aria-required="true" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Apellido') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="apellido" id="input-apellido" type="text"
                                    placeholder="Barón" required="true" aria-required="true" />
                            </div>
                        </div>

                    </div>
                    <div class="card-footer ml-auto mr-auto">
                        <button type="submit" class="btn btn-primary">Crear <i class="fa fa-save"></i></button>
                    </div>
                </div>
            </form>
            <div class="card-footer ml-auto mr-auto">
                <a href="{{route('conductor.index')}}"><button class="btn btn-warning"><i
                            class="fa fa-arrow-left"></i></button></a>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
