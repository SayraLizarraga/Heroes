@extends('layouts.master1')
@section('content')

<div class="row">
<div class="col">
<table class="table table-striped text-center">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>GENDER</th>
    </thead>
    <tbody>
        @forelse ($parents as $parents)
        <tr>
            <td>{{$parents-> id}}</td>
            <td>
                <a class="text-danger" href= "{{ route('parents.show', $parents->id)}}">{{$parents->name}}</a>
            </td>
            <td>{{$parents -> gender}}</td>
        </tr>
        @empty
        <p>There're no parents</p>
        @endforelse
    </tbody>
</table>  
</div>
</div>
@endsection
@section('botones')
<div class="row mb-4">
    <div class="col text-end">
    <a type="button" class="btn btn-danger" href="{{route ('parents.create')}}">Create Parents</a>
</div>
</div>
@endsection

