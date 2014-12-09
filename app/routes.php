<?php

Route::get('/', function()
{
  return View::make('home');
});

Route::get("/login", [
  "as"   => "user/template/login",
  "uses" => "UserController@loginView"
]);

Route::get("/register", [
  "as"   => "user/template/register",
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
    "as"   => "user/template/profile",
    "uses" => "UserController@profile"
  ]);

  Route::get("/logout", [
    "as"   => "user/template/logout",
    "uses" => "UserController@logout"
  ]);

});

Route::get("/request", [
  "as"   => "user/template/request",
  "uses" => "UserController@request"
]);

Route::get("/reset/{token}", [
  "as"   => "user/template/reset",
  "uses" => "UserController@reset"
]);