<?php

use TJ\Entities\User;

class UserTest extends TestCase
{
    /**
    * Default preparation for each test
    */
    public function setUp()
    {
        parent::setUp();
        Artisan::call('migrate');
    }
    
    public function test_registering_user()
    {   
        $user = User::create([  "username" => "test",
                                "email" => "email@domain.com",
                                "password"    => Hash::make('password'),
                                "first_name" => "address test",
                                "surname" => "Dubai",
                                "user_role_id" => 1
                              ]);
        
        $savedUser = User::first();
        
        $this->assertEquals($user->getKey(), $savedUser->getKey());
    }
    
    public function test_authenticating_user()
    {
        $credentials = [
                "username" => test,
                "password" => Hash::make('password')
              ];
        
        $this->assertTrue(Auth::attempt($credentials));
    }
}