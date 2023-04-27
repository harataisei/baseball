<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class players extends Model
{
    use HasFactory;
    
    public function team()
        {
            return $this -> belongsto(team::class);
        }
    
    public function batter()
    {
        return $this->belongsto(batter::class);
    }
    
    public function picher()
    {
        return $this ->belongsto(picher::class);
    }
}
