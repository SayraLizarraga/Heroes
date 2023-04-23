<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create superpower</title>
</head>
<body>
    <h1>Create superpower</h1>
    <form action="{{ route('parents.store') }}" method="post">
        @csrf

        <laravel for= "name">Name</larevel>
        <input type="text" name="name">

        <br><br>
        <select name= "gender" id= "">
            <option value="Famale" selected>Famale</option>
            <option value="Male">Male</option>
            <option value="N/a">Not applicable</option>
        </select>

        <button type= "submit">Create Parent</button>
</body>
</html>