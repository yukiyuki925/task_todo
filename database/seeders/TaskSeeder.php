<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルの中身を削除
        DB::table('tasks')->truncate();

        // テーブルにデータを挿入
        DB::table('tasks')->insert([
            [
                'id' => 1,
                'name' => 'パンを買う',
                'content' => 'ふわふわした食感のパンが新しくでた！',
                'created_at' => '2022-02-11 12:11:11',
                'updated_at' => '2022-02-13 14:22:33'
            ],
            [
                'id' => 2,
                'name' => 'パン',
                'content' => 'ふわふわしたパンが新しくでた！',
                'created_at' => '2024-02-11 12:11:11',
                'updated_at' => '2024-02-13 14:22:33'
            ],
            ]);
    }
}