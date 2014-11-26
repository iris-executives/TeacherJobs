<?php

use TJ\Entities\UserRole;

class UserRoleSeeder extends DatabaseSeeder
{
    public function run()
    {
        $user_roles = [
          [
            "slug" => "test1",
            "title" => "test1"
          ],
          [
            "slug" => "test2",
            "title" => "test2"
          ]
        ];

        foreach ($user_roles as $role) {
            UserRole::create($role);
        }
    }
}