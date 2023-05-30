<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class BatterGladeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('batter_glades')->insert([
            'user_id'=>1,
            'AB'=>0,
            'hit'=>0,
            'single'=>0,
            'double'=>0,
            'triple'=>0,
            'HR'=>0,
            'BB'=>0,
            'RBI'=>0,
            'NB'=>0,
            'average'=>0,
            'SLG'=>0,
            'OBP'=>0,
            'OPS'=>0,
            'created_at'=>new DateTime(),
            'updated_at'=>new DateTime()
            
            ]);
    }
}
