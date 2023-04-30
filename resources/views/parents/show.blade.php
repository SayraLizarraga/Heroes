@extends('layouts.master1')

@section('content') 

<div class="row mb-4">
    <div class="col text-start">
    <h1>{{$parents->name}}</h1>
    <p class="fs-3 ">{{$parents->gender}}</p>
    </div>
</div>

    <div class="row mb-4">
    <div class="col text-start">
    <a type="button" class="btn btn-danger"  href= "{{ route('parents.edit', $parents->id)}}">Edit</a>
    <br><br>
    <form action="{{ route('parents.destroy', $parents->id)}}" method="post">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm ('Are you sure you want to delete this record')">Delete</button>
        </div>
</div>
        @endsection

        @section('botones_1')
<div class="row mb-4">
    <div class="col text-end">
<a type="button" class="btn btn-danger" href="{{route ('parents.index')}}">Volver</a>
</div>
</div>
@endsection