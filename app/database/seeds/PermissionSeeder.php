<?php

use TJ\Entities\Permission;

class PermissionSeeder extends DatabaseSeeder
{
  public function run()
  {
    $permissions = [
      [
        "slug" => "permssion_1",
        "title"    => "Permission 1"  
      ],
      [
        "slug" => "permssion_2",
        "title"    => "Permission 2"  
      ]  
    ];

    foreach ($permissions as $permission) {
      Permission::create($permission);
    }
  }
}