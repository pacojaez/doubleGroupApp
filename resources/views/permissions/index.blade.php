@extends('layouts.app-master')

@section('content')
    <h1 class="mb-3">DoubleGroup Uniformidades APP</h1>

    <div class="p-4 rounded bg-light">
        <h2>Permisos</h2>
        <div class="lead">
            Listado de Permisos de la APP.
            <a href="{{ route('permissions.create') }}" class="float-right btn btn-primary btn-sm">Add permissions</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="15%">Nombre</th>
                    <th scope="col">Guard</th>
                    <th scope="col" colspan="3" width="1%"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td><a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info btn-sm">Edit</a>
                        </td>
                        <td>
                            {!! Form::open([
                                'method' => 'DELETE',
                                'route' => ['permissions.destroy', $permission->id],
                                'style' => 'display:inline',
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
