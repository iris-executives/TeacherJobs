<?php

use TJ\Entities\JobQuestion;

class JobQuestionSeeder extends DatabaseSeeder
{
    public function run()
    {
        $questions = [
          [
            "content" => "test1"
          ]
        ];

        foreach ($questions as $question) {
            JobQuestion::create($question);
        }
    }
}