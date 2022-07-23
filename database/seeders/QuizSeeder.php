<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Question;
use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arr = ["A","B","C","D"];
        $index = 0;
        $quizzes = Quiz::factory(

        )
            ->has(
                Question::factory()
                    ->has(
                        Answer::factory()
//                            ->state(function (array $attributes, Answer $answer) use($arr,$index) {
//                                $answer->identifier = "C";
//                                return $answer;
//                            })
                            ->count(4)
                    )
                    ->count(100)

            )->count(2)
            ->create();
        return $quizzes;
    }
}
