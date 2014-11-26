<?php

use TJ\Entities\JobCategory;

class JobCategorySeeder extends DatabaseSeeder
{
    public function run()
    {
        $categories = [
          [
            "name" => "Non-teaching & Administration"
          ],
             [
            "name" => "Teaching & Lecturing"
          ],
          [
            "name" => "Leadership & Managerial"
          ],
        ];

        foreach ($categories as $cat) {
            JobCategory::create($cat);
        }
    }
}