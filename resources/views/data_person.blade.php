<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Laravel Advanced</title>

</head>

<body>
    <div class="container">
        @if ($hasil)
            <h1 class="text-center text-2xl">{{ $hasil }}</h1>
        @else
            <h1 class="text-center">Data belum dikirim</h1>
        @endif
    </div>
</body>

</html>
