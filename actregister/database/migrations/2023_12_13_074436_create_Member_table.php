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
        Schema::create('Member', function (Blueprint $table) {
            $table->comment('會員資料表');
            $table->integer('ID')->comment('流水號id');
            $table->string('UserName', 10)->comment('會員姓名');
            $table->string('Gender', 5)->comment('性別');
            $table->string('Email', 50)->comment('電子信箱');
            $table->string('Password', 12)->comment('用戶密碼');
            $table->string('Mobile', 10)->comment('連絡電話');
            $table->string('Address', 100)->comment('地址物資寄送用');
            $table->date('Birthdate')->comment('出生年月日');
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
        Schema::dropIfExists('Member');
    }
};
