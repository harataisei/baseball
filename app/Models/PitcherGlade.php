<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PitcherGlade extends Model
{
    use HasFactory;
    
     protected $fillable = [
         'id',
         'user_id',
         'ER',
         'P_BB',
         'P_hit',
         'ERA',
         'so',
         'whip',
         'IP',
         'SO/9'];
    
    public function user()
    {
        return $this -> belongsto(user::class);
    }
    
   
}
