<?php

use TJ\Entities;

class CountrySeeder extends DatabaseSeeder
{
  public function run()
  {
    $countries = [
      [
        "name" => "United Arab Emirates",
        "abreviation" => "UAE",
        "Phone_number_code" => "00971"  
      ]
    ];

    foreach ($countries as $country) {
        Entities\Country::create($country);
    }
  }
}