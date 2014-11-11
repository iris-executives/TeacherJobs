<?php

class EmployerMemberNoteSeeder extends DatabaseSeeder
{
  public function run()
  {
    $notes = [
      [
        "title" => "test1",
        "content" => "test",
        "job_application_id"    => "1",
        "stage_id" => "1",
        "member_id" => "1", 
        "is_private" => "0"
      ]
    ];

    foreach ($notes as $note) {
      EmployerMemberNote::create($note);
    }
  }
}