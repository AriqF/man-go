<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class quizSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('quizes')->insert([
            'id' => '2',
            'quiz_name' => 'Hiragana II',
            'description' => 'rubahlah kalimat berikut kedalam romaji!',
            'quiz_time' => '30:00',
            'number_of_question' => '5',
            'status' => '1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}