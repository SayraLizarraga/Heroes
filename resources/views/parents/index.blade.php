<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Parents</title>
</head>
<body>
<h1>Parents</h1>

<table>
    <thead>
        <tr>ID</tr>
        <tr>NAME</tr>
        <tr>GENDER</tr>
    </thead>
    <tbody>
        @forelse ($parents as $parents)
        <tr>
            <td>{{$parents-> id}}</td>
            <td>
                <a href= "{{ route('parents.show', $parents->id)}}">{{$parents->name}}</a>
            </td>
            <td>{{$parents -> gender}}</td>
        </tr>
        @empty
        <p>There're no parents</p>
        @endforelse
    </tbody>
</table>  

<a href="{{route ('parents.create')}}">Create Parents</a>
</body>
</html>