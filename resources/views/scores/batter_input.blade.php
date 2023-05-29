<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
          <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>打撃成績</title>
        <style>
        body{
            background-color:pink;
            margin : 50px;
            text-align:center;
        }
           
           .ba{
               background-color:#bce2e8;
           }
           </style>
    </head>
    <body>
        <div class='ba'>
        <h3>打撃成績</h3>
        </div>
        <br></br>
        
  
         <form action="/scores/{{$BatterGlade->id}}" method="POST">
            @csrf
             @method('PUT')
             
          
             <div class="AB">
                 <h3>打席数</h3>
                 <input type="number" name="BatterGlade[AB]" placeholder="打席数"/>
             </div>
             
             <div class="hit">
                 <h3>安打数</h3>
                 <input type="number" name="BatterGlade[hit]" placeholder="安打数"/>
                 <h3>一塁打</h3>
                 <input type="number" name="BatterGlade[single]" placeholder="一塁打"/>
                 <h3>二塁打</h3>
                 <input type="number" name="BatterGlade[double]" placeholder="二塁打"/>
                 <h3>三塁打</h3>
                 <input type="number" name="BatterGlade[triple]" placeholder="三塁打"/>
                 <h3>本塁打</h3>
                 <input type="number" name="BatterGlade[HR]" placeholder="ホームラン"/>
             </div>
             
             <div class="BB">
                 <h3>四死球</h3>
                  <input type="number" name="BatterGlade[BB]" placeholder="四死球"/>
             </div>
             
             <div>
                 <h3>打点</h3>
                  <input type="number" name="BatterGlade[RBI]" placeholder="打点数"/>
             </div>
             <input type="submit" value="送信"/>
              </form>
               <div class="footer">
            <a href="/">戻る</a>
        </div>
        
        
    </body>
    </html>