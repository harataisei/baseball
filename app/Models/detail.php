<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class details extends Model
{
    use HasFactory;
    
    public function score()
    {
        return $this -> belongsto(score::class);
    }
    
    public function picher()
    {
        return $this-> hasone(picher::class);
    }
    
     public function batter()
    {
        return $this-> hasone(batter::class);
    }
    
     public function runners()
    {
        return $this-> hasmany(runner::class);
    }
}
