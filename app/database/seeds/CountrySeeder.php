<?php

use TJ\Entities\Country;

class CountrySeeder extends DatabaseSeeder
{
  public function run()
  {
    $countries = [
      [
        "name" => "United Arab Emirates",
        "abreviation" => "UAE",
        "phone_number_code" => "00971"  
      ]
    ];

    foreach ($countries as $country) {
            Country::create($country);
    }
  }
}