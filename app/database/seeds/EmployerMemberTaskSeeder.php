<?php

class EmployerMemberSeeder extends DatabaseSeeder
{
  public function run()
  {
    $members = [
      [
        "title" => "test1",
        "content" => "test",
        "user_assigned_by"    => "test",
        "user_assigned_to" => "test1",
        "deadline" => "11/11/2015"  
      ]
    ];

    foreach ($members as $member) {
      EmployerMember::create($member);
    }
  }
}