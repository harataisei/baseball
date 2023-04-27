<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batter extends Model
{
    use HasFactory;
    
    public function players()
    {
        return $this-> hasmany(player::class);
    }
    
     public function detail()
    {
        return $this->belongsto(detail::class);
    }
}
