<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scores extends Model
{
    use HasFactory;
    
    public function game()
    {
        return $this->belongsto(game::class);
    }
    
    public function details()
    {
        return $this->hasmany(detail::class);
    }
}
