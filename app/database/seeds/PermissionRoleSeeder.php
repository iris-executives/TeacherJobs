<?php

class PermissionRoleSeeder extends DatabaseSeeder
{
  public function run()
  {
    $permission_roles = [
      [
        "role_id" => "1",
        "permission_id" => "1"
      ],
      [
        "role_id" => "1",
        "permission_id" => "2"  
      ]  
    ];

    foreach ($permission_roles as $pm) {
      PermissionRole::create($pm);
    }
  }
}