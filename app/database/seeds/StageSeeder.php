<?php

class StageSeeder extends DatabaseSeeder
{
  public function run()
  {
    $stages = [
      [
        "name" => "Screen",
        "parent_id" => "0"
      ],
      [
        "name" => "Interview",
        "parent_id" => "0"  
      ],
        [
        "name" => "Offer",
        "parent_id" => "0"
      ],
      [
        "name" => "Onboarding",
        "parent_id" => "0"  
      ], 
      [
        "name" => "Screened In",
        "parent_id" => "1"
      ],
      [
        "name" => "Screened Out",
        "parent_id" => "1"  
      ], 
      [
        "name" => "Called",
        "parent_id" => "2"
      ], 
      [
        "name" => "Face to Face 1",
        "parent_id" => "2"
      ], 
      [
        "name" => "Face to Face 2",
        "parent_id" => "2"
      ], 
      [
        "name" => "Face to Face 3",
        "parent_id" => "2"
      ], 
      [
        "name" => "Psychometric Test",
        "parent_id" => "2"
      ], 
      [
        "name" => "Background Check",
        "parent_id" => "2"
      ], 
      [
        "name" => "Job Offered",
        "parent_id" => "2"
      ], 
      [
        "name" => "Accepted",
        "parent_id" => "3"
      ], 
      [
        "name" => "Rejected",
        "parent_id" => "3"
      ], 
      [
        "name" => "TBC",
        "parent_id" => "4"
      ], 
      [
        "name" => "Confirm Start Date",
        "parent_id" => "4"
      ]
    ];

    foreach ($stages as $stage) {
      Stage::create($stage);
    }
  }
}