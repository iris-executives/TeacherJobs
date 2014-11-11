<?php

class JobSeekerSeeder extends DatabaseSeeder
{
  public function run()
  {
    $seekers = [
      [
        "user_id" => "test1",
        "gender" => "male",
        "residence"    => "ddd",
        "city_live_in" => "test1",
        "city_work_in" => "test1",
        "mobile1" => "test1",
        "mobile2" => "hh",
        "dob"    => "ddd",
        "primary_language" => "test1", 
        "secondary_language" => "hh",
        "will_relocate"    => "1",
        "is_anonyous" => "1",
        "picture" => "test1",
        "employment_status" => "test1",
        "work_experience" => "hh",
        "sector_most_experience"    => "ddd",
        "other_sector1" => "hh",
        "other_sector2"    => "ddd",
        "awards" => "test1",
        "achievements" => "test1",
        "recognitions" => "test1",
        "education_level" => "hh",
        "graduation_date"    => "ddd",
        "ongoing_education" => "test1",
        "graduation_date2" => "test1",
        "pro_certifications" => "test1",
        "ongoing_certifications" => "hh",
        "has_managed_others"    => "1",
        "notice_period" => "test1",
        "is_registered" => "1",
        "is_subscribed_newsletter" => "1"
      ]
    ];

    foreach ($seekers as $seeker) {
      JobSeeker::create($seeker);
    }
  }
}