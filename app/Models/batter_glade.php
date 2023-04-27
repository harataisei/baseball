<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class batters extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this -> belongsto(user::class);
    }
}
