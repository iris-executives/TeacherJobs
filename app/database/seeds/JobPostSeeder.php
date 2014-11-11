<?php

use TJ\Entities\JobPost;

class JobPostSeeder extends DatabaseSeeder
{
  public function run()
  {
    $posts = [
      [
        "title" => "test1",
        "is_uae_only" => "1",
        "description"    => "test1",
        "min_education_level_required" => "test1",
        "min_certification" => "test1",
        "min_years_experience" => "test1",
        "location"    => "test1",
        "contract_type" => "test1",
        "work_timing" => "test1",
        "salary" => "test1",
        "employer_member_id"    => "1",
        "status_id" => "1",
        "type_id" => "1"
      ]
    ];

    foreach ($posts as $post) {
      JobPost::create($post);
    }
  }
}