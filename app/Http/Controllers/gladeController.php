<?php

namespace App\Http\Controllers;

use App\Models\BatterGlade;
use Illuminate\Http\Request;

class gladecontroller extends Controller
{
    
    public function index(BatterGlade $BatterGlade)
    {
        return view('scores/contents')->with(['BatterGlade' => $BatterGlade->first()]);  
        
    }
   
    public function b_input(BatterGlade $BatterGlade)
    {
        
        return view('scores/batter_input')->with(['BatterGlade'=>$BatterGlade]);
    }
    
    
    
    public function update(Request $request , BatterGlade $BatterGlade)
    {
          $Batter = $request['BatterGlade'];
         
         $BatterGlade->AB=$Batter["AB"]+$BatterGlade["AB"];
         $BatterGlade->hit=$Batter["hit"]+$BatterGlade["hit"];
         $BatterGlade->single=$Batter["single"]+$BatterGlade["single"];
         $BatterGlade->double=$Batter["double"]+$BatterGlade["double"];
         $BatterGlade->triple=$Batter["triple"]+$BatterGlade["triple"];
         $BatterGlade->HR=$Batter["HR"]+$BatterGlade["HR"];
         $BatterGlade->BB=$Batter["BB"]+$BatterGlade["BB"];
         $BatterGlade->RBI=$Batter["RBI"]+$BatterGlade["RBI"];
         $BatterGlade->NB=$BatterGlade["AB"]-$BatterGlade["BB"];
         $BatterGlade->average=$BatterGlade["hit"]/$BatterGlade["NB"];
         $BatterGlade->SLG=($BatterGlade["single"]+$BatterGlade["double"]*2+$BatterGlade["triple"]*3+$BatterGlade["HR"]*4)/$BatterGlade["NB"];
         $BatterGlade->OBP=($BatterGlade["hit"]+$BatterGlade["BB"])/$BatterGlade["AB"];
         $BatterGlade->OPS=$BatterGlade["SLG"]+$BatterGlade["OBP"];
         $BatterGlade->save();
         

          return view('scores/batter_input')->with(['BatterGlade'=>$BatterGlade]);

            
    }
    
   
}
