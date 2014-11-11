<?php

use TJ\Entities\User;
use TJ\Entities\Employer;
use TJ\Entities\EmployerMember;

class EmployerCreationTest extends TestCase {

    public function test_employer_creation()
    { 
        $employer = Employer::create('test','test','test','test','test','test');
        $member = User::create('test','test@','test','test',1);
        $member->employers()->save($employer);
        
        
    }

   
    /**
     * @expectedException TJ\Exceptions\InvalidEmployerData
     */
    public function test_fails_creating_employer_with_missing_data()
    {
       //
    }
}

