<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
<h1>Edit</h1>
    <form action="/edit/{{$data1 -> id}}" method=Post>
        @csrf
        <input type="text" name="fname" value={{$data1->name}} placeholder="Name"><br>
        <input type="text" name="age" value={{$data1->age}} placeholder="Age"><br>
        <input type="text" name="mark" value={{$data1->mark}} placeholder="Mark"><br>
        <input type="submit" name="submit" value="Submit">
</form>
    
</body>
</html>