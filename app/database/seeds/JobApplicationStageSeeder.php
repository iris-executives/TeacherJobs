<?php

use TJ\Entities\JobApplicationStage;

class JobApplicationStageSeeder extends DatabaseSeeder
{
  public function run()
  {
    $jab_app_stages = [
      [
        "job_application_id" => "1",
        "stage_id" => "1",
        "is_current" => "1"  
      ]
    ];

    foreach ($jab_app_stages as $jas) {
      JobApplicationStage::create($jas);
    }
  }
}