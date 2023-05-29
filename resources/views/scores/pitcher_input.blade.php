<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <title>投手成績</title>
        <style>
        body{
            background-color:pink;
            margin : 80px;
            text-align:center;
        }
    
            .input{
                background-color:#bce2e8;
            }
        </style>
    </head>
    <body>
        <div class='input'>
        <h3>投手成績</h3>
        </div>
        <br></br>
         <form action="/scores/{{$PitcherGlade->id}}/pitcher" method="POST">
            @csrf
             @method('PUT')
          
             <div class="AB">
                 <h3>イニング数</h3>
                 <input type="number" name="PitcherGlade[IP]" placeholder="ining"/>
             </div>
             
             <div class="glade">
                 <h3>失点</h3>
                 <input type="number" name="PitcherGlade[ER]" placeholder="安打数"/>
                 <h3>三振</h3>
                 <input type="number" name="PitcherGlade[so]" placeholder="三振"/>
                 <h3>被安打</h3>
                 <input type="number" name="PitcherGlade[P_hit]" placeholder="安打"/>
                 <h3>四死球</h3>
                 <input type="number" name="PitcherGlade[P_BB]"placeholder="ファーボール"/>
                 
             </div>
             
             
             <input type="submit" value="送信"/>
              </form>
               <div class="footer">
            <a href="/">戻る</a>
        </div>
        
    </body>
    </html>