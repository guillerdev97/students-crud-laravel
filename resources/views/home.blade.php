@extends('layouts.app')

@section('content')

<a href="{{ route('createStudent') }}">Add new student</a>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Adress</th>
            <th scope="col">Mobile</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{ $student->name }}</th>
            <td>{{ $student->address }}</td>
            <td>{{ $student->mobile }}</td>
            <td>
                <form action="{{ route('delete', ['id' => $student->id]) }}" method="post">
                    @method('delete')
                    @csrf
                    <button type="submit" onclick="return confirm('Delete {{ $student->name }}')">
                        Delete
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
