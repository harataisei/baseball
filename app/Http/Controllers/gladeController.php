<?php

namespace App\Http\Controllers;

use App\Models\BatterGlade;
use App\Models\PitcherGlade;
use Illuminate\Http\Request;

class gladecontroller extends Controller
{
    
    public function index(BatterGlade $BatterGlade,PitcherGlade $PitcherGlade)
    {
        
        return view('scores/contents')->with(['BatterGlade' => $BatterGlade->first(),'PitcherGlade'=>$PitcherGlade->first()]);  
    }
   
    public function b_input(BatterGlade $BatterGlade)
    {
        
        return view('scores/batter_input')->with(['BatterGlade'=>$BatterGlade]);
        
    }
    
    public function p_input(PitcherGlade $PitcherGlade,Batterglade $BatterGlade)
    {
        return view('scores/pitcher_input')->with(['PitcherGlade'=>$PitcherGlade,'BatterGlade'=>$BatterGlade]);
    }
    
     public function b_individual(BatterGlade $BatterGlade)
    {
        
        return view('scores/batter_individual_glade')->with(['BatterGlade'=>$BatterGlade]);
    }
    
    public function p_individual(PitcherGlade $PitcherGlade,Batterglade $BatterGlade)
    {
        
        return view('scores/pitcher_individual_glade')->with(['PitcherGlade'=>$PitcherGlade,'BatterGlade'=>$BatterGlade]);
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
    public function p_update(Request $request , PitcherGlade $PitcherGlade)
    {
        
        $Pitcher = $request['PitcherGlade'];
        
        $PitcherGlade->ER=$Pitcher["ER"]+$PitcherGlade["ER"];
        $PitcherGlade->P_hit=$Pitcher["P_hit"]+$PitcherGlade["P_hit"];
        $PitcherGlade->P_BB=$Pitcher["P_BB"]+$PitcherGlade["P_BB"];
        $PitcherGlade->so=$Pitcher["so"]+$PitcherGlade["so"];
        $PitcherGlade->IP=$Pitcher["IP"]+$PitcherGlade["IP"];
        $PitcherGlade->ERA=($PitcherGlade["ER"]*9)/$PitcherGlade["IP"];
        $PitcherGlade->whip=($PitcherGlade["P_hit"]+$PitcherGlade["P_BB"])/$PitcherGlade["IP"];
        $PitcherGlade->so9=($PitcherGlade["so"]*9)/$PitcherGlade["IP"];
        $PitcherGlade->save();
        
        
        
        
           return view('scores/pitcher_input')->with(['PitcherGlade'=>$PitcherGlade]);
    }
   
   
}