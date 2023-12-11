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
            $table->integer('id')->primary()->comment('流水號id');
            $table->string('UserName', 10)->comment('會員姓名');
            $table->string('Email', 50)->comment('電子信箱');
            $table->string('Mobile', 10)->comment('連絡電話');
            $table->string('Address', 100)->comment('地址物資寄送用');
            $table->date('Birthdate')->comment('出生年月日');
            $table->string('RelativeName', 10)->comment('緊急聯絡人姓名');
            $table->string('RelativesMobile', 10)->comment('緊急聯絡人電話');
            $table->integer('RelativesRelationship')->comment('緊急聯絡人與會員關係');
            $table->timestamp('updated_at')->useCurrentOnUpdate()->useCurrent()->comment('更新時間');
            $table->timestamp('created_at')->default('0000-00-00 00:00:00')->comment('創立時間');
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
