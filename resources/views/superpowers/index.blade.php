<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Superowers</title>
</head>
<body>
<h1>SuperPowers</h1>

<table>
    <thead>
        <tr>ID</tr>
        <tr>NAME</tr>
        <tr>DESCRIPTION</tr>
    </thead>
    <tbody>
        @forelse ($superpowers as $superpowers)
        <tr>
            <td>{{$superpowers -> id}}</td>
            <td>
                <a href= "{{ route('superpowers.show', $superpowers->id)}}">{{$superpowers->name}}</a>
            </td>
            <td>{{$superpowers -> description}}</td>
        </tr>
        @empty
        <p>There're no Superpowers</p>
        @endforelse
    </tbody>
</table>  

<a href="{{route ('superpowers.create')}}">Create Superowers</a>
</body>
</html>
