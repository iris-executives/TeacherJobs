<?php

use TJ\Entities\User;

class UserSeeder extends DatabaseSeeder
{
  public function run()
  {
    $users = [
      [
        "username" => "test1",
        "password" => Hash::make("test1"),
        "email"    => "test1@domain.com",
        "first_name" => "test1",
        "surname" => "test1"  
      ],
      [
        "username" => "test2",
        "password" => Hash::make("test2"),
        "email"    => "test2@domain.com",
        "first_name" => "test2",
        "surname" => "test2"  
      ]  
    ];

    foreach ($users as $user) {
      User::create($user);
    }
  }
}