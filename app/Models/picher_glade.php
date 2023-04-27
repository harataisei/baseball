<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class picher_glades extends Model
{
    use HasFactory;
    
    public function user()
    {
        return $this -> belongsto(user::class);
    }
}
