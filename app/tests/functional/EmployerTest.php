<?php

use TJ\Entities\User;
use TJ\Entities\Employer;
use TJ\Entities\EmployerMember;

class EmployerTest extends TestCase {

    
    
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

   
    /**
     * @expectedException TJ\Exceptions\InvalidEmployerData
     */
    //public function test_fails_creating_employer_with_missing_data()
    //{
       //
    //}
}

