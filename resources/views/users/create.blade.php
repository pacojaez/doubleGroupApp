@extends('layouts.app-master')

@section('content')
    <div class="p-4 rounded bg-light">
        <h1 class="mb-3">DoubleGroup Uniformidades APP</h1>
        <div class="lead">
            Crea el usuario y posteriormente le asignas un role.
        </div>

        <div class="container mt-4">
            <form method="POST" action="">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre</label>
                    <input value="{{ old('name') }}" type="text" class="form-control" name="name" placeholder="Name"
                        required>

                    @if ($errors->has('name'))
                        <span class="text-left text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ old('email') }}" type="email" class="form-control" name="email"
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-left text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ old('username') }}" type="text" class="form-control" name="username"
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-left text-danger">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">GUARDAR</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
            </form>
        </div>

    </div>
@endsection
