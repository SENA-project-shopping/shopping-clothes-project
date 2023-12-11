@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('admin.usuarios.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="fa-solid fa-arrow-left"></i>
                {{ __('Volver') }}
            </a>
            <hr>
            <h1>{{ __('Detalles usuario') }}</h1>
            <form action="{{ route('admin.usuarios.store') }}" method="get">
                @csrf
                @method('GET')
                <div class="col d-flex align-items-stretch flex-column">
                    <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                            Usuario: {{ $usuario->id }}
                        </div>
                        <br>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-7">
                                    <h2 class="lead"><b>{{ $usuario->name }}</b></h2>
                                    <p class="text-muted text-sm"><b>Cargo: </b> {{ $usuario->rolUser->descripcion_rol_users }} </p>
                                    <ul class="ml-4 mb-0 fa-ul text-muted">
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-envelope"></i></span> Correo: {{ $usuario->email }}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-passport"></i></span> Tipo de documento: {{ $usuario->documentTypes->descripcion_document_types }}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-passport"></i></span> Número de documento: {{ $usuario->document_user }}</li>
                                        
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-flag"></i></span> País de nacimiento: {{ $usuario->pais_nacimiento }}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Teléfono: {{ $usuario->phone }}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Dirección de residencia: {{ $usuario->direccion_residencia }}</li>
                                        <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Ciudad de residencia: {{ $usuario->ciudad_residencia }}</li>
                                    </ul>
                                </div>
                                <div class="col-5 text-center">
                                    <img src="../../images/perfil.png" alt="user-avatar" class="img-circle img-fluid" style="width: 150px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col">    
                        <h1>{{ __('Datos de control') }}</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Fecha de creación:') }}</label>
                            <input type="text" class="form-control" id="created_at" name="created_at" value="{{ $usuario->created_at }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">{{ __('Ultima modificación:') }}</label>
                            <input type="text" class="form-control" id="updated_at" name="updated_at" value="{{ $usuario->updated_at }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection