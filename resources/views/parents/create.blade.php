@extends('layouts.master1')
@section('content')
    <form action="{{ route('parents.store') }}" method="post">
        @csrf

        <laravel for= "name">Name</larevel>
        <input type="text" class="form-control" name="name">

        <br><br>
        <select class="form-select" aria-label="Default select example" name= "gender" id= "">
            <option value="Famale" selected>Famale</option>
            <option value="Male">Male</option>
            <option value="N/a">Not applicable</option>
        </select>
        <br><br>
        <div class="row mb-4">
    <div class="col text-end">
    <button  class="btn btn-danger" type= "submit">Create Parent</button>
</div>
</div>
@section('botones_1')
<div class="row mb-4">
    <div class="col text-end">
<a type="button" class="btn btn-danger" href="{{route ('superpowers.index')}}">Volver</a>
</div>
</div>
@endsection
       
        @endsection