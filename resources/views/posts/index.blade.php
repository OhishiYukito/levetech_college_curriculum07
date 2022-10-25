<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>blog</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body class="antialiased">
        <h1>Blog name</h1>
        <div class='posts'>
            @foreach ($posts as $post)
            <div class='post'>
                <a href="/posts/{{$post->id}}">{{$post->title}}</a>
                <p class='body'>{{$post->body}}</p>
            </div>
            @endforeach
            <div class='paginate'>{{$posts->links()}}</div>
            <a href='/posts/create'>create</a>
        </div>
    </body>
</html>
