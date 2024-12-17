<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    
</head>
<body>

    <nav>
        <img src="{{asset('images/unnamed 1.svg')}}" class="r1 c2">
        <div class="r1 c3 flex_nav">
            <a href="">Главная</a>
            <a href="">Афиша</a>
            <a href="">Новости</a>
            <a href="">О театре</a>
        </div>
        @auth
        <a href="" class="r1 c5">Выход</a>
        @endauth
        @guest
        <a href="" class="r1 c5">Вход</a>
        @endguest
    </nav>
    
@yield('content')

</body>
</html>