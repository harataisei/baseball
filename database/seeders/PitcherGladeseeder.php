<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PitcherGladeseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('picher_glades')->insert([
            'user_id'=>1,
            'field'=>"ピッチャー",
            'ER'=>0,
            'P_BB'=>0,
            'P_hit'=>0,
            'ERA'=>0,
            'SO'=>0,
            'WHIP'=>0,
            'IP'=>0,
            'SO/9'=>0,
            
            
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
            
            ]);
    }
}
