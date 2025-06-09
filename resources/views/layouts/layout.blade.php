<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('assets/images/logo.ico') }}">
    <title>@yield('title')</title>
</head>
    <body>
       <header>
            <nav>
                <div>
                    <img src="{{asset('assets/images/logo.png')}}" alt="logo">
                </div>
                <ul>
                    <li>
                        <a href="/materials" class="btn">Посмотреть материалы</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main>
            @yield('content')
        </main>
        <footer></footer>
    </body>
</html>
