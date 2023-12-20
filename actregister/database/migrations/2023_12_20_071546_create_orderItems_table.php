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
        Schema::create('orderItems', function (Blueprint $table) {
            $table->integer('id', true)->comment('流水號id');
            $table->string('ordername', 20)->comment('賽事名稱');
            $table->string('price', 5)->comment('賽事費用');
            $table->dateTime('startTime')->comment('報名開始時間');
            $table->dateTime('endTime')->comment('報名截止時間');
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
        Schema::dropIfExists('orderItems');
    }
};
