<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class games extends Model
{
    use HasFactory;
    
    public function team()
    {
        return $this->belongsto(team::class);
    }
    
    public function scores()
    {
        return $this->hasmany(score::class);
    }
}
