<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased">
        <h1 class='title'>{{$post->title}}</h1>
        <div class="content">
            <p class='body'>{{$post->body}}</p>
        </div>
        <div class='go_to_edit'>
            <a href='/posts/{{$post->id}}/edit'>edit</a>
        </div>
        <div class='footer'>
            <a href= "/" >go back to list</a>
        </div>
    </body>
</html>