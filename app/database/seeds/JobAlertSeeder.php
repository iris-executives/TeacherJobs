<?php

class JobAlertSeeder extends DatabaseSeeder
{
  public function run()
  {
    $job_alerts = [
      [
        "user_id" => "1",
        "location" => "dubai"  
      ]
    ];

    foreach ($job_alerts as $job_alert) {
      JobAlert::create($job_alert);
    }
  }
}