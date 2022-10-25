<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>create</title>
    </head>
    <body>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <label>タイトル:
                    <input type="text" name="post[title]" size="10" />
                </label>
            </div>
            <div class="content">
                <label for='content'>本文:</label><br>
                <textarea id='content' name="post[body]" placeholder="ここが本文"></textarea>
            </div>
                <input type="submit" value="保存" />
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>