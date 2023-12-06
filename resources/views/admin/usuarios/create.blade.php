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
            <h1>{{ __('Crear usuario') }}</h1>
            <form action="{{ route('admin.usuarios.store') }}" method="post">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Nombre Usuario:') }}</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="textHelp" maxlength="100" autocomplete="off">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Correo Usuario:') }}</label>
                            <input type="text" class="form-control" id="email" name="email" aria-describedby="textHelp" maxlength="120" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Tipo de identificación:') }}</label>
                            <select name="document_types_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($documentTypeUser as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->descripcion_document_types }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Número de identificación:') }}</label>
                            <input type="text" class="form-control" id="document_user" name="document_user" aria-describedby="textHelp" maxlength="12" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('País de nacimiento:') }}</label>
                            <input type="text" class="form-control" id="pais_nacimiento" name="pais_nacimiento" aria-describedby="textHelp" maxlength="50" autocomplete="off">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Teléfono:') }}</label>
                            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="textHelp" maxlength="10" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Dirección de residencia:') }}</label>
                            <input type="text" class="form-control" id="direccion_residencia" name="direccion_residencia" aria-describedby="textHelp" maxlength="120" autocomplete="off">
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Ciudad de residencia:') }}</label>
                            <input type="text" class="form-control" id="ciudad_residencia" name="ciudad_residencia" aria-describedby="textHelp" maxlength="30" autocomplete="off">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" id="exampleInputEmail1" class="form-label">{{ __('Rol Usuario:') }}</label>
                            <select name="rol_users_id" class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                @foreach ($rolUser as $item)
                                    <option value="{{ $item->id }}">
                                        {{ $item->descripcion_rol_users }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" value="{{ __('Guardar usuario') }}" class="btn btn-primary">
            </form>
        </div>
    </div>
</div>
@endsection