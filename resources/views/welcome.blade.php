<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Hello World !</h1>

<form action="/" method="POST">

    @csrf
    <input type="text" name="username" id="username">
    <button type="submit">Submit</button>

</form>

<form action="/999999999" method="POST">
    @csrf
    @method('delete')
    <button type="delete">DELETE</button>
</form>

<form action="/999" method="POST">
    @csrf
    <input type="hidden"  name = "_method" value="PUT">
    <input type="text" name="username" id="username">
    <button type="submit">Submit PUT</button>
</form>


</body>
</html>
