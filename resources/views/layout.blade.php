<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <div style="background-color: #343a40;">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark container">
        <div class="collapse navbar-collapse" id="navbarToggler">
        <ul class="navbar=nav ml-auto">
            @php $locale = session()->get('locale'); @endphp
            <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                @switch($locale)
                @case('en')
                <img width="20" src="{{asset('img/en.png')}}" alt="">
                English
                @break
                @case('kz')
                <img width="20" src="{{asset('img'/kz.png)}}" alt="">
                Қазақ тілі
                @break
                @case('ru')
                <img width="20" src="{{asset('img/ru.png')}}" alt="">
                Русский язык
                @break
                @default
                <img width="20" src="{{asset('img/kz.png')}}" alt="">
                Қазақ тілі
                @endswitch
                <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="en"> <img width="20" src="{{asset('img/en.png')}}" alt="">English</a><br>
                    <a class="dropdown-item" href="kz"> <img width="20" src="{{asset('img/kz.png')}}" alt="">Қазақ тілі</a><br>
                    <a class="dropdown-item" href="ru"> <img width="20" src="{{asset('img/ru.png')}}" alt="">Русский язык</a><br>
                    
            </div>
            </li>
        </ul>
        </div>
        </nav>
        </div>  
        <main class="ру-4">
            @yield('content')
        </main>
    </div>
</body>
</html>