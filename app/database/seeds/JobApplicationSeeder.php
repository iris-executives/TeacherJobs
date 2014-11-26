<?php

use TJ\Entities\JobApplication;

class JobApplicationSeeder extends DatabaseSeeder
{
    public function run()
    {
        $job_applications = [
          [
            "job_post_id" => 1,
            "jobseeker_id" => 1
          ]
        ];

        foreach ($job_applications as $job_application) {
            JobApplication::create($job_application);
        }
    }
}