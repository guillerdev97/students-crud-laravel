@extends('layouts.app')

@section('content')

<h2 class="cardTitle">Create a new event</h2>
<form class="justify-content-center" action="{{route('store')}}" method="post">
    @csrf
    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Name</span>
        <input type="text" name="newname" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="title">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Address</span>
        <input type="text" name="newaddress" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="user max">
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Mobile</span>
        <input class="form-control" id="newdatetime" type="text" value="now" name="newmobile">
    </div>

    <div class="float-right">
        <a class="btn btn-primary" href="{{ route('home') }}">↩️</a>
    </div>

    <div class="btnCreate">
        <button type="submit" class="btn btn-outline-success" value="Create">Create</button>
    </div>
</form>

@endsection