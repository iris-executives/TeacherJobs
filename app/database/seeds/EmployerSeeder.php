<?php

use TJ\Entities\Employer;

class EmployerSeeder extends DatabaseSeeder
{
    public function run()
    {
        $employers = [
          [
            "name" => "test1",
            "description" => "test1",
            "phone"    => "0411112233",
            "address" => "test1",
            "city" => "Dubai",
            "pobox" => "test1",
            "logo" => "//Path/to/logo"
          ]
        ];

        foreach ($employers as $employer) {
            Employer::create($employer);
        }
    }
}