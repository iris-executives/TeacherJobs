<?php

use TJ\Entities\EmployerMember;

class EmployerMemberSeeder extends DatabaseSeeder
{
  public function run()
  {
    $members = [
      [
        "employer_id" => "1",
        "user_id" => "1"  
      ]
    ];

    foreach ($members as $member) {
      EmployerMember::create($member);
    }
  }
}