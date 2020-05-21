@extends('layouts.app', ['activePage' => 'conductor', 'titlePage' => __('Conductores')])

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
            <form action="{{route('conductor.update', $conductor->id)}} " method="post">
                @csrf
                @method('PUT')
                <div class="card ">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">{{ __('Editar conductor con id') }} {{$conductor->numeroDocumento}}</h4>
                        <p class="card-category">{{ __('Datos') }}</p>
                    </div>
                    <div class="card-body ">
                        @csrf

                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Tipo documento') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="tipoDocumento" id="input-tipoDocumento" type="text"
                                value="{{$conductor ['tipoDocumento']}}" required="true" aria-required="true" />

                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Número documento') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="numeroDocumento" id="input-placa" type="text"
                                    value="{{$conductor['numeroDocumento']}}" required="true" aria-required="true" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('nombre') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="nombre" id="input-nombre" type="text"
                                    value="{{$conductor['nombre']}}" required="true" aria-required="true" />
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('apellido') }}</label>
                            <div class="col-sm-7">
                                <input class="form-control" name="apellido" id="input-apellido" type="text"
                                    value="{{$conductor['apellido']}}" required="true" aria-required="true" />
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
        <a href="{{route('conductor.index')}}"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i></button></a>

    </div>
</div>
</div>
@endsection
