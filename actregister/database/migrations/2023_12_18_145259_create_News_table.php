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
        Schema::create('News', function (Blueprint $table) {
            $table->integer('id', true)->comment('key');
            $table->string('title', 20)->comment('文章標題');
            $table->string('text', 500)->comment('文章內容');
            $table->integer('weights')->comment('排序依據');
            $table->date('releaseDate')->comment('發布日期');
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
        Schema::dropIfExists('News');
    }
};
