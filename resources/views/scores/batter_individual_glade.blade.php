<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>打撃個人成績</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
        body{
            background-color:pink;
            margin : 80px;
            border : 8px solid green ;
            
        }
            .indi{
                 text-align: center;
            }
        .row{
            text-align:center;
        }    
        
        </style>
    </head>
    <body>
        <div class='indi'>
            
        <h1>打撃成績</h1>
        <br></br>
        
        <div class="col">
            <h3>打率 {{$BatterGlade->average}}</h3>
            <h3>安打数 {{$BatterGlade->hit}}</h3>
            <h3>ホームラン {{$BatterGlade->HR}}</h3>
            
        
        
        <h2>四死球 {{$BatterGlade->BB}}</h2>
         <h2>打点 {{$BatterGlade->RBI}}</h2>
         <h2>出塁率 {{$BatterGlade->OBP}}</h2>
         <h2>長打率 {{$BatterGlade->SLG}}</h2>
         <h2>OPSOPS {{$BatterGlade->OPS}}</h2>
        <br></br>
       
        
        
        
        
        
        
        
        
      
            
        
     <a href="/">戻る</a>
     </div>
    </body>
</html>