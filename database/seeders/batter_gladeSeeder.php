<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class batter_gladeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('batter_glades')->insert([
           'user_id'=> 0,
            'AB' => 0 ,
            
            'hit'=> 0,
            'double'=>0,
            'triple'=> 0,
            'HR'=>0,
            'BB'=>0,
            
            'RBI'=>0,
            
            ]);
            
        
    }
}
