<?php

use TJ\Entities\User;
use TJ\Entities\Employer;
use TJ\Entities\EmployerMember;
use TJ\Entities\JobPost;

class JobPostTest extends TestCase {
  
    /**
    * Default preparation for each test
    */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }
    
    public function test_posting_job()
    {
        $user = User::create([  "username" => "test1",
                                "password" => "password",
                                "email"    => "test1@domain.com",
                                "first_name" => "test1",
                                "surname" => "test1",
                                "user_role_id" => 1
                              ]);
        
        $member = EmployerMember::create([  "employer_id" => 1,
                                            "user_id" => 1
                                          ]);
        
        $job = JobPost::create([ "title" => "test job",
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
                                 "carwgory_id" => 1,
                                 "type_id" => 1]);
       
        $member->jobPosts()->save($job);
      
        $savedMember = EmployerMember::first();
        $savedJobPost = $savedMember->jobPosts->first();

        $this->assertEquals($job->getKey(), $savedJobPost->getKey());
    }
}