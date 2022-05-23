<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
        <h1>Dasboard</h1>

        @auth
        <h2> <a href="#">Welcome back, {{ auth()->user()->name }}</a></h2>
        <form action="/logout" method="post">
            @csrf
            <button type="submit" class="drobdown-item">logout</button>
        </form>
        @else 
            
        <h2><a href="/login">Login</a></h2>
        @endauth
        

    </body>
</html>
