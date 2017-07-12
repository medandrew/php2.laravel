<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>{{ $title  }}</title>
    <link type="text/css" href="/css/style.css" rel="stylesheet" />
    <link type="text/css" href="/css/jcarousel.css" rel="stylesheet" />

    <script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="/js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="/js/jcarousel.js"></script>
    <script type="text/javascript" src="/js/scripts.js"></script>
    <script type="text/javascript" src="/js/search.js"></script>
</head>
<body>
<!--========================================================
                          HEADER
=========================================================-->
<div class="wrapper">
    <div class="container">
        <header>
            <div class="info clearfix">
                <h1>
                    <a href="{{ url('/') }}">
                        <span class="first block">Новосибирский</span><span class="second">театр оперы и балета</span>
                    </a>
                </h1>
                <form id="search" class="search" action="{{ url('/') }}" method="GET" accept-charset="utf-8">
                    <input type="text" name="s"/>
                    <a onclick="document.getElementById('search').submit()">
                        <img src="/images/search.png" alt=""/>
                    </a>
                </form>
            </div>
            <nav>
                <ul class="menu clearfix">
                    <li><a href="{{ url('/') }}">Главная</a></li>
                    <li><a href="{{ url('/news') }}">Новости</a></li>
                    <li><a href="{{ url('/shows') }}">Репертуар</a></li>
                    <li><a href="{{ url('/events') }}">События</a></li>
                    <li><a href="{{ url('/actors') }}">Актеры</a></li>
                    <li><a href="{{ url('/guestbook') }}">Гостевая книга</a></li>
                    <li><a href="{{ url('/contacts') }}">Контакты</a></li>
                </ul>
            </nav>
        </header>

        @yield('content')

    </div>
</div>
<!--========================================================
                          FOOTER
=========================================================-->
<div class="container">
    <footer class="clearfix">
        <div class="privacy left">
            &copy; 2017 <a href="{{ url('/') }}">Privacy Policy</a>
        </div>
        <ul class="social right">
            <li><a href="{{ url('/') }}"><i class="facebook"></i></a></li>
            <li><a href="{{ url('/') }}"><i class="twitter"></i></a></li>
            <li><a href="{{ url('/') }}"><i class="rss"></i></a></li>
        </ul>
    </footer>
</div>

</body>
</html>