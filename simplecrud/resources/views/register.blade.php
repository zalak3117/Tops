<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{url('/register')}}" method="post">
        @csrf
    <label> name</label>
        <input type="text" name="name" ><br>
        <label> email</label>
        <input type="email" name="email" ><br>
        <label> password</label>
        <input type="password" name="password"><br>
        <button type="submit">submit </button>
    </form>
</body>
</html>