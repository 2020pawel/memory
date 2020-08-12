<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <link rel="stylesheet" href="http://www.ps-serwis.com.pl/memory/public/css/styleLayout02.css">
    {{-- <link rel="stylesheet" href="/css/styleLayout02.css"> --}}
</head>
<body>
    
    <div class="wrapper">
        <nav>
            <div class="logo">
            <a href="{{ url('/') }}">
                    my memory
                </a></div>
            <div class="links">
            <a href="{{ route('about') }}" {!! request()->routeIs('about') ? 'class="is-active"' : '' !!} >o mnie</a>
            <a href="{{ route('memory') }}" {!! request()->routeIs('memory') ? 'class="is-active"' : '' !!} >my memory</a>
            <a href="{{ route('posts') }}" {!! request()->routeIs('posts') ? 'class="is-active"' : '' !!}>posty</a>

            </div>
            <div class="login">
                <a href="{{ route('login') }}">zaloguj</a>   
                <a href="{{ route('register') }}">zarejestruj</a> 
            </div>
        </nav>  
        <div class="content">
            
                @include('partials.message')
            
            <section>
                @yield('content')
            </section> 
        </div>        
    <footer><p class="author">&copy; {{  date('Y')}} &nbsp;<a href="{{ route('about') }}">Wszytsko </a> </p></footer>
   </div>
   
    

</body>
</html>
