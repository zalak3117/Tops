<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Hi {{session('name')}} {{session('email')}}
    <form action="POST" action="">
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>email</th>
            <th>action</th>
        </tr>
        @foreach($data as $d)
        <tr>
            <td>{{$d->id}}</td>
            <td>{{$d->name}}</td>
            <td>{{$d->email}}</td>
            <td>
                <button type="submit"><a href="edit/{{$d->id}}" >Edit</a></button>
                <button type="submit"><a href="delete/{{$d->id}}" >delete</a></button>
            </td>
            </tr>
        @endforeach
    </table>
</form>
</body>
</html>