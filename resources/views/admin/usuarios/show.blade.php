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
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Nombre Usuario:') }}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->name }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Correo Usuario:') }}</label>
                            <input type="text" class="form-control" id="email" name="email" value="{{ $usuario->email }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Tipo de documento:') }}</label>
                            <input type="text" class="form-control" id="document_types_id" name="document_types_id" value="{{ $usuario->documentTypes->descripcion_document_types }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Número de identificación:') }}</label>
                            <input type="text" class="form-control" id="document_user" name="document_user" value="{{ $usuario->document_user }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="" id="" class="form-label">{{ __('País de nacimiento:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="{{ $usuario->pais_nacimiento }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="" id="" class="form-label">{{ __('Teléfono:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="{{ $usuario->phone }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="">{{ __('Dirección de residencia:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="{{ $usuario->direccion_residencia }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="">{{ __('Ciudad de residencia:') }}</label>
                            <input type="text" class="form-control" id="" name="" value="{{ $usuario->ciudad_residencia }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Rol Usuario:') }}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->rolUser->descripcion_rol_users }}" aria-describedby="textHelp" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Nombre Usuario:') }}</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $usuario->stateUser->descripcion_state_users }}" aria-describedby="textHelp" disabled>
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