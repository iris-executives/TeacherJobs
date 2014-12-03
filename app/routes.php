<?php

Route::any("/login", [
  "as"   => "user/login",
  "uses" => "UserController@login"
]);

Route::any("/register", [
  "as"   => "user/register",
  "uses" => "UserController@register"
]);

Route::group(["before" => "auth"], function() {

  Route::get("/profile", [
    "as"   => "user/profile",
    "uses" => "UserController@profile"
  ]);

  Route::get("/logout", [
    "as"   => "user/logout",
    "uses" => "UserController@logout"
  ]);

});

Route::get("/request", [
  "as"   => "user/request",
  "uses" => "UserController@request"
]);

Route::get("/reset/{token}", [
  "as"   => "user/reset",
  "uses" => "UserController@reset"
]);