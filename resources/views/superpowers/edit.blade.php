@extends('layouts.master')
@section('content')
    <form action="{{ route('superpowers.update', $superpowers->id) }}" method="post">
    @method('put') 
    @csrf

        <laravel for= "name" >Name</larevel>
        <input type="text" class="form-control" name="name" value= "{{$superpowers->name}}">

        <br><br>
        <laravel for= "description">Description</larevel>
        <textarea class="form-control"  name="description" cols= "50" rows= "5">{{$superpowers->description}}</textarea>
        
        <br><br>

        <button  class="btn btn-danger" type= "submit">Edit Superpower</button>
        @endsection

        @section('botones_1')
<div class="row mb-4">
    <div class="col text-end">
<a type="button" class="btn btn-danger" href="{{route ('superpowers.index')}}">Volver</a>
</div>
</div>
@endsection