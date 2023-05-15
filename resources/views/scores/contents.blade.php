<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スコア管理アプリ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        
        <div class='posts'>
            <div class='post'>
             
                <div class="edit"><a href="/scores/{{$BatterGlade->id}}/edit">打撃成績入力</a></div>
                <a href='/scores/create'>投手成績入力</a>
               <a href="/scores/individual">個人成績</a>
                <a href='/scores/create'>成績ランキング</a>
            </div>
        </div>
    
    </body>
</html>