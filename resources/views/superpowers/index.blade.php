@extends('layouts.master')



@section('content')

<div class="row">
<div class="col">
<table class="table table-striped text-center">
    <thead>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
    </thead>
    <tbody >
        @forelse ($superpowers as $superpowers)
        <tr>
            <td>{{$superpowers -> id}}</td>
            <td>
                <a class="text-danger" href= "{{ route('superpowers.show', $superpowers->id)}}">{{$superpowers->name}}</a>
            </td>
            <td>{{$superpowers -> description}}</td>
        </tr>
        @empty
        <p>There're no Superpowers</p>
        @endforelse
    </tbody>
</table>  
</div>
</div>
@endsection

@section('botones')
<div class="row mb-4">
    <div class="col text-end">
<a type="button" class="btn btn-danger" href="{{route ('superpowers.create')}}">Create Superowers</a>
</div>
</div>
@endsection