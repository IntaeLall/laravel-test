<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Questionnaire;
use App\Models\Question;

class QuestionnaireTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Questionnaire::class, 3)->create()->each(function ($questionnaire) {
            $questionnaire->questions()->save(factory(Question::class)->create([
                'questionnaire_id' => $questionnaire
            ]));
        });
    }
}
