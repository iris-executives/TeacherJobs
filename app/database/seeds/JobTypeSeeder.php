<?php

use TJ\Entities\JobType;

class JobTypeSeeder extends DatabaseSeeder
{
    public function run()
    {
        $types = [
          [
            "name" => "Full time"
          ],
          [
            "name" => "Part time"
          ],
            [
            "name" => "Freelance"
          ],
          [
            "name" => "Tutoring"
          ],
        ];

        foreach ($types as $type) {
            JobType::create($type);
        }
    }
}