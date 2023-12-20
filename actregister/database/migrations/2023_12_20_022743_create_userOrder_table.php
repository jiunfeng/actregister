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
        Schema::create('userOrder', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('流水號id');
            $table->string('user_email', 50)->index('user')->comment('使用者電子信箱');
            $table->integer('order_id')->index('order')->comment('訂單流水號id');
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
        Schema::dropIfExists('userOrder');
    }
};
