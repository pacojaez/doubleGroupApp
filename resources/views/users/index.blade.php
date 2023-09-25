@extends('layouts.app-master')

@section('content')
    <h1 class="mb-3">DoubleGroup Uniformidades APP</h1>

    <div class="p-4 rounded bg-light">
        <h1>Usuarios</h1>
        <div class="lead">
            GESTIÓN DE USUARIOS Y ASIGNACIÓN DE ROLES
            <a href="{{ route('users.create') }}" class="float-right btn btn-primary btn-sm">Add new user</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col" width="1%">#</th>
                    <th scope="col" width="15%">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col" width="10%">Username</th>
                    <th scope="col" width="10%">Roles</th>
                    <th scope="col" width="1%" colspan="3"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->username }}</td>
                        <td>
                            @foreach ($user->roles as $role)
                                <span class="badge bg-primary">{{ $role->name }}</span>
                            @endforeach
                        </td>
                        <td><a href="{{ route('users.show', $user->id) }}"
                                class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm ring ring-gray-200 ring-offset-2 hover:bg-gray-700 text-whitefocus:outline-none focus:ring-2 focus:ring-gray-500">Show</a>
                        </td>
                        <td><a href="{{ route('users.edit', $user->id) }}"
                                class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-200 ring-offset-2 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500">Edit</a>
                        </td>
                        <td>
                            {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}
                            {!! Form::submit('Delete', [
                                'class' =>
                                    'inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500',
                            ]) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex">
            {!! $users->links() !!}
        </div>

    </div>
@endsection
