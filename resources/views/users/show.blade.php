@extends('layouts.app-master')

@section('content')
    <div class="p-4 rounded bg-light">
        <h1 class="mb-3">DoubleGroup Uniformidades APP</h1>
        <div class="lead">
            <h1>MOSTRAR USUARIO</h1>
        </div>

        <div class="container mt-4">
            <div>
                Nombre: {{ $user->name }}
            </div>
            <div>
                Email: {{ $user->email }}
            </div>
            <div>
                Username: {{ $user->username }}
            </div>
        </div>

    </div>
    <div class="mt-4">
        <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Editar</a>
        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
    </div>
@endsection
