<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/contents.css">
        <title>投手個人成績</title>
        <!-- Fonts -->
        <style>
            body{
                background-color:pink;
            margin : 50px;
            text-align:center;
            }
        </style>
         
      
    </head>
    <body>
        
        <div class="container">
        <h1>投手成績</h1>
        <br></be>
        <br></br>
            
       <h2>投球回 {{$PitcherGlade->IP}}回</h2>
       
        <h2>被安打{{$PitcherGlade->P_hit}}</h2>
        
        <h2>四死球 {{$PitcherGlade->P_BB}}</h2>
       
        <h2>防御率 {{$PitcherGlade->ERA}}</h2>
        
        <h2>奪三振数 {{$PitcherGlade->so}}</h2>
       
        <h2>奪三振率 {{$PitcherGlade->so9}}</h2>
        
        <h2>whip {{$PitcherGlade->whip}}</h2>
        
        
            
        
    <h5> <a href="/">戻る</a></h5>
     </div>
    </body>
</html>