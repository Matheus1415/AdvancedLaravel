<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('styled')
</head>
<body>
    <div class="container">
        {{--o html que herdar vai ser renderizado abaixo--}}
        @yield('content')
    </div>
</body>
</html>