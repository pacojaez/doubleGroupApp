@extends('layouts.app-master')

@section('content')
    <h1 class="mb-3">DoubleGroup Uniformidades APP</h1>

    <div class="p-4 rounded bg-light">
        <h1 class="mb-3">DoubleGroup Uniformidades APP</h1>
        <div class="lead">
            ROLES.
            <a href="{{ route('roles.create') }}" class="float-right btn btn-primary btn-sm">Add role</a>
        </div>

        <div class="mt-2">
            @include('layouts.partials.messages')
        </div>

        <table class="table table-bordered">
            <tr>
                <th width="1%">No</th>
                <th>Nombre</th>
                <th width="3%" colspan="3">Action</th>
            </tr>
            @foreach ($roles as $key => $role)
                <tr>
                    <td>{{ $role->id }}</td>
                    <td>{{ $role->name }}</td>
                    <td>
                        <a class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-gray-600 border border-transparent rounded-md shadow-sm ring ring-gray-200 ring-offset-2 hover:bg-gray-700 text-whitefocus:outline-none focus:ring-2 focus:ring-gray-500"
                            href="{{ route('roles.show', $role->id) }}">Show</a>
                    </td>
                    <td>
                        <a class="inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm ring ring-indigo-200 ring-offset-2 hover:bg-indigo-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500"
                            href="{{ route('roles.edit', $role->id) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'style' => 'display:inline']) !!}
                        {!! Form::submit('Delete', [
                            'class' =>
                                'inline-flex justify-center w-24 px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md shadow-sm ring ring-red-200 ring-offset-2 hover:bg-red-700 text-whitefocus:outline-none focus:ring-2 focus:ring-indigo-500',
                        ]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
        </table>

        <div class="d-flex">
            {!! $roles->links() !!}
        </div>

    </div>
@endsection
