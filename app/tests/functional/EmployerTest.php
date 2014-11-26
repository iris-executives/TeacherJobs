<?php

use TJ\Entities\User;
use TJ\Entities\Employer;
use TJ\Entities\EmployerMember;
use TJ\Entities\EmployerMemberNote;
use TJ\Entities\EmployerMemberTask;

class EmployerTest extends TestCase
{
    /**
    * Default preparation for each test
    */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }
    
    public function test_creating_employer()
    {
        $employer = Employer::create([  "name" => "name test",
                                        "description" => "desc test",
                                        "phone"    => "0411112233",
                                        "address" => "address test",
                                        "city" => "Dubai",
                                        "pobox" => "pobox test",
                                        "logo" => "//Path/to/logo"
                                      ]);
        
        $savedEmployer = Employer::first();
        
        $this->assertEquals($employer->getKey(), $savedEmployer->getKey());
    }
    
    public function test_creating_member()
    {
        $employer = Employer::create([  "name" => "name test",
                                        "description" => "desc test",
                                        "phone"    => "0411112233",
                                        "address" => "address test",
                                        "city" => "Dubai",
                                        "pobox" => "pobox test",
                                        "logo" => "//Path/to/logo"
                                      ]);
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

        $employer->members()->save($member);

        $savedEmployer = Employer::first();
        $savedMember = $savedEmployer->members->first();

        $this->assertEquals($user->getKey(), $savedMember->getKey());
    }
    
    public function test_creating_member_note()
    {
        $note = EmployerMemberNote::create([    "title" => "test1",
                                                "content" => "content1",
                                                "job_application_id"    => 1,
                                                "stage_id" => 1,
                                                "member_id" => 1,
                                                "is_private" => 1
                                              ]);
        
        
        $member = EmployerMember::create([  "employer_id" => 1,
                                            "user_id" => 1
                                          ]);
        
        $member->notes()->save($note);

        $savedNote = $member->notes->first();

        $this->assertEquals($note->getKey(), $savedNote->getKey());
    }
    
    public function test_creating_member_task()
    {
        $task = EmployerMemberTask::create([    "title" => "test1",
                                                "content" => "content1",
                                                "deadline"    => '11/11/2014',
                                                "user_assigned_by" => 1,
                                                "user_assigned_to" => 2
                                              ]);
        
        $member = EmployerMember::create([  "employer_id" => 1,
                                            "user_id" => 1
                                          ]);
        
        //$member->tasksAssignedBySelf()->save($task);
        
        $member->tasksAssignedToOthers()->save($task);

        $savedTask = $member->tasksAssignedBySelf->first();

        $this->assertEquals($task->getKey(), $savedTask->getKey());
    }
}