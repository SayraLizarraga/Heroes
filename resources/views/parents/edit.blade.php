@extends('layouts.master1')
@section('content')
    <form action="{{ route('parents.update', $parents->id) }}" method="post">
    @method('put') 
    @csrf

        <laravel for= "name">Name</larevel>
        <input type="text" class="form-control"  name="name" value= "{{$parents->name}}">

        <br><br>
        <select class="form-select" aria-label="Default select example" name= "gender" id= ""value= "{{$parents->name}}">
            <option value="Famale" selected>Famale</option>
            <option value="Male">Male</option>
            <option value="N/a">Not applicable</option>
        </select>
        <br><br>
        <div class="row mb-4">
    <div class="col text-end">
    <button  class="btn btn-danger" type= "submit">Edit Parent</button>
</div>
</div>
        
        @endsection