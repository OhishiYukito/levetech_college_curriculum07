<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>create</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


    </head>
    <body>
        <form action="/posts" method="post">
            @csrf
            <div class="title">
                <label>タイトル:
                    <input type="text" size="10">
                </label>
            </div>
            <div class="content">
                <label for='content'>本文:</label><br>
                <textarea id='content' placeholder="ここが本文"></textarea>
            </div>
            <div class='button'>
                <input type="submit" value="保存">
            </div>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>