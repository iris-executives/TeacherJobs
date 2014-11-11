<?php

use TJ\Entities\JobStatus;

class JobStatusSeeder extends DatabaseSeeder
{
  public function run()
  {
    $status = [
      [
        "name" => "Open"
      ],
      [
        "name" => "Closed" 
      ]
    ];

    foreach ($status as $s) {
      JobStatus::create($s);
    }
  }
}