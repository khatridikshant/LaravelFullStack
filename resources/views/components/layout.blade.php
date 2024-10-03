<!DO
CTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/app.css">
    @vite('resources/css/app.css')
</head>
<body>
    <nav>
        <div class="flex justify-between items-center container mx-auto bg-blue-600 text-white text-lg">



            <a>Home</a>
            <a>About</a>
            <a>Services</a>
            <a>Posts</a>
            <a>Contact us</a>



        </div>
    </nav>
    {{ $slot }}
</body>
</html>
