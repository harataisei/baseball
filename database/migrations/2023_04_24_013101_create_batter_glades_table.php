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
        Schema::create('batter_glades', function (Blueprint $table) {
            $table->id();
            $table->foreignid('user_id');
            $table->string('field');
            $table->integer('AB'); //打席数
            $table->integer('NB'); //打数
            $table->integer('hit'); //安打数
            $table->integer('double'); //二塁打
            $table->integer('triple'); //三塁打
            $table->integer('HR'); //ホームラン
            $table->integer('BB'); //四死球
            $table->double('average',4,3); //打率
            $table->integer('RBI'); //打率
            $table->double('SLG',4,3); //長打率
            $table->double('OBP',4,3); //出塁率
            $table->double('OPS',4,3); 
            
            
      
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
        Schema::dropIfExists('batter_glades');
    }
};
