<?php

use TJ\Entities\User;
use TJ\Entities\JobSeeker;
use TJ\Entities\JobApplication;
use TJ\Entities\JobApplicationStage;
use TJ\Entities\JobPost;


class JobApplicationTest extends TestCase {
  
    /**
    * Default preparation for each test
    */
    public function setUp()
    {  
        parent::setUp();
        Artisan::call('migrate');
    }
    
    public function test_applying_to_job()
    { 
       $user = User::create([  "username" => "test1",
                                "password" => "password",
                                "email"    => "test1@domain.com",
                                "first_name" => "test1",
                                "surname" => "test1",
                                "user_role_id" => 1
                              ]);
       
       $jobseeker = JobSeeker::create([ "user_id" => 1,
                                        "gender" => "male",
                                        "residence"    => "res",
                                        "city_live_in" => "city in",
                                        "city_work_in" => "city in",
                                        "mobile1" => "050505050",
                                        "mobile2" => "0505050",
                                        "dob"    => "12/12/1990",
                                        "primary_language" => "arabic",
                                        "secondary_language" => "english",
                                        "will_relocate" => 1,
                                        "is_anonyous" => 0,
                                        "picture" => "/path/to/pic",
                                        "employment_status"    => "employed",
                                        "work_experience" => "test1",
                                        "sector_most_experience" => "test1",
                                        "other_sector1" => "sec1",
                                        "other_sector2" => "sec2",
                                        "awards" => "aw",
                                        "achievements"    => "ach",
                                        "recognitions" => "recog",
                                        "education_level" => "test1",
                                        "graduation_date" => "20/09/2005",
                                        "ongoing_education" => "test1",
                                        "graduation_date2" => "0/09/2005",
                                        "pro_certifications"    => "certif",
                                        "ongoing_certifications" => "test1",
                                        "has_managed_others" => 1,
                                        "notice_period" => 1,
                                        "is_registered" => 1,
                                        "is_subscribed_newsletter" => 0,
                                        "country_id" => 1
                              ]);
       
       $job = JobPost::create([  "title" => "test job",
                                 "is_uae_only" => 0,
                                 "description" => "desc test",
                                 "min_education_level_required"    => "level 1",
                                 "min_certification" => "vertif 1",
                                 "min_years_experience" => 5, 
                                 "location" => "loc",
                                 "contract_type" => "contract type",
                                 "work_timing" => "9-5",
                                 "salary"    => "15k",
                                 "employer_member_id" => 1,
                                 "status_id" => 1, 
                                 "type_id" => 1]);
       
        $jobApplication = $jobseeker->applyToJob($job->id); 
      
        $savedJobApplication = JobApplication::first();

        $this->assertEquals($jobApplication->getKey(), $savedJobApplication->getKey());
    }
}