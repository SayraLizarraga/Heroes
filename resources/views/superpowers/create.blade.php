@extends('layouts.master')
@section('content')
    
<form action="{{ route('superpowers.store') }}" method="post">
        @csrf

        <laravel for= "name">Name</larevel>
        <input type="text"  class="form-control" name="name">

        <br><br>
        <laravel for= "description" class="form-label">Description</larevel>
        <textarea class="form-control" name="description" cols= "50" rows= "5"></textarea>
        
        <br><br>
        
        <div class="row mb-4">
    <div class="col text-end">
    <button  class="btn btn-danger" type= "submit">Create Superpower</button>
</div>
</div>
        
@endsection
@section('botones_1')
<div class="row mb-4">
    <div class="col text-end">
<a type="button" class="btn btn-danger" href="{{route ('superpowers.index')}}">Volver</a>
</div>
</div>
@endsection