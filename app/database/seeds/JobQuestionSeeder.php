<?php

class JobQuestionSeeder extends DatabaseSeeder
{
  public function run()
  {
    $questions = [
      [
        "content" => "test1",
        "job_qustion_id" => "1"  
      ]
    ];

    foreach ($questions as $question) {
      JobQuestion::create($question);
    }
  }
}