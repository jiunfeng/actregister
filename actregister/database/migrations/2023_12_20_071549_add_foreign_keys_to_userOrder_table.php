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
        Schema::table('userOrder', function (Blueprint $table) {
            $table->foreign(['order_id'], 'order')->references(['id'])->on('orderItems')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->foreign(['user_id'], 'user')->references(['id'])->on('Member')->onUpdate('CASCADE')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('userOrder', function (Blueprint $table) {
            $table->dropForeign('order');
            $table->dropForeign('user');
        });
    }
};
