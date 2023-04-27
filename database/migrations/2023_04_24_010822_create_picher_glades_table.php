<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picher_glades', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('field');
            $table->integer('ER');//失点数
            $table->integer('P_BB');//四死球数
            $table->integer('P_hit');//被安打
            $table->double('ERA',3,2);//防御率
            $table->integer('so');//三振数
            $table->double('whip',3,2);
            $table->integer('IP');//イニング数
            $table->double('SO/9',4,2);//奪三振率
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picher_glades');
    }
};
