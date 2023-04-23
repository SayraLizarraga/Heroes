<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit superpower</title>
</head>
<body>
    <h1>Create superpower</h1>
    <form action="{{ route('superpowers.update', $superpowers->id) }}" method="post">
    @method('put') 
    @csrf

        <laravel for= "name">Name</larevel>
        <input type="text" name="name" value= "{{$superpowers->name}}">

        <br><br>
        <laravel for= "description">Description</larevel>
        <textarea name="description" cols= "50" rows= "5">{{$superpowers->description}}</textarea>
        
        <br><br>

        <button type= "submit">Edit Superpower</button>
</body>
</html>