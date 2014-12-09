<?php

Route::get("/login", [
  "as"   => "user/login",
  "uses" => "UserController@loginView"
]);

Route::get("/register", [
  "as"   => "user/register",
  "uses" => "UserController@registerView"
]);

Route::post("login", [
  "as"   => "",
  "uses" => "UserController@login"
]);

Route::post("register", [
  "as"   => "",
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