<?php

use TJ\Entities\JobAnswer;

class JobAnswerSeeder extends DatabaseSeeder
{
  public function run()
  {
    $job_answers = [
      [
        "content" => "test1",
        "job_application_id" => 1,
        "job_question_id" => 1
      ]
    ];

    foreach ($job_answers as $job_answer) {
      JobAnswer::create($job_answer);
    }
  }
}