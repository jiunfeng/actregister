<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\News;

// php artisan make:seeder NewsSeeder
// php artisan db:seed --class=NewsSeeder


class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 插入五筆示例數據
        for ($i = 1; $i <= 10; $i++) {
            News::create([
                'title' => "Sample Title $i",
                'text' => "Sample Content $i",
                'weights' => mt_rand(1, 100),
                'releaseDate' => '2023-' . mt_rand(1, 12) . '-' . mt_rand(1, 30),
            ]);
        }
    }
}