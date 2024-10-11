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
    <x-navbar />


    <div class="max-w-4xl mx-auto text-center">
    {{ $slot }} </div>

</body>
</html>
