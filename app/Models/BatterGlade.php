<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BatterGlade extends Model
{
    use HasFactory;
    
    protected $fillable = 
    [
    'AB',
    'NB',
    'hit',
    'single',
    'double',
    'triple',
    'HR',
    'BB',
    'average',
    'RBI',
    'SLG',
    'OBP',
    'OPS'
    ];
    
    public function user()
    {
        return $this -> belongsto(user::class);
    }
    
     
}
