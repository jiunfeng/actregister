<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userOrder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // 获取表中的数据
        $data = DB::table('userOrder')->get();

        // 将数据插入到 Seeder 类中
        foreach ($data as $row) {
            DB::table('userOrder')->insert((array) $row);
        }
    }
}
