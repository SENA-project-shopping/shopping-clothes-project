@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('admin.usuarios.index') }}" class="btn btn-block btn-outline-secondary">
                <i class="bi bi-house"></i>
                {{ __('Volver al incio') }}
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