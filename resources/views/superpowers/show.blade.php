@extends('layouts.master')

@section('content') 


<div class="row mb-4">
    <div class="col text-start">
    <h1>{{$superpowers->name}}</h1>
    <p class="fs-3 ">{{$superpowers->description}}</p>
    </div>
</div>

    
<div class="row mb-4">
    <div class="col text-start">
<a type="button" class="btn btn-danger" href= "{{ route('superpowers.edit', $superpowers->id)}}">Edit</a> 
<form action="{{ route('superpowers.destroy', $superpowers->id)}}" method="post">
    <br>
        @method('delete')
        @csrf
        <button type="submit"class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete this record')">Delete</button>
       
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
    
   