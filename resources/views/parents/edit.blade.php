<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Parents</title>
</head>
<body>
<h1>Edit Parent</h1>
    <form action="{{ route('parents.update', $parents->id) }}" method="post">
    @method('put') 
    @csrf

        <laravel for= "name">Name</larevel>
        <input type="text" name="name" value= "{{$parents->name}}">

        <br><br>
        <select name= "gender" id= ""value= "{{$parents->name}}">
            <option value="Famale" selected>Famale</option>
            <option value="Male">Male</option>
            <option value="N/a">Not applicable</option>
        </select>

        <button type= "submit">Edit Parent</button>
</body>
</html>