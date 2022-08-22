@extends('layouts.app')

@section('content')

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Adress</th>
            <th scope="col">Mobile</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $student)
        <tr>
            <th scope="row">{{ $student->name }}</th>
            <td>{{ $student->address }}</td>
            <td>{{ $student->mobile }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
