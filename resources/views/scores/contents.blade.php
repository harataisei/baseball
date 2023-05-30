<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
         <!-- Bootstrap CSS -->
         
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/contents.css">
    
        <title>スコア管理アプリ</title>
    
        <!-- Fonts -->
    <style>
        .posts{
            text-color:white;
            background-color:#f3ceae;
            padding:5px;
        }
    </style>
       
            
    </head>
    <body>
        
        <div class='posts'>
            
              <h1>成績管理アプリ</h1>　</div>
            
            <button type="button" class="btn js-btn">
    <span class="btn-line"></span>
  </button>
  <nav>
    <ul class="menu">
     <li class="menu-list">  <br><a href="/scores/{{$BatterGlade->id}}/edit">打撃成績入力</a></br></li>
      <li class="menu-list"><br><a href="/scores/{{$PitcherGlade->id}}/edit/pitcher">投手成績入力</a></br></li>
      <li class="menu-list"><br><a href="/scores/{{$BatterGlade->id}}/batter_individual">打撃個人成績</a></br></li>
      <li class="menu-list"> <br><a href="/scores/{{$PitcherGlade->id}}/pitcher_individual">投手個人成績</a></br></li>
      
    </ul>
  </nav>
  
        
     
    </body>
</html>