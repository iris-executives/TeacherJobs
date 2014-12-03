<?php

namespace TJ\Entities;

use Eloquent;
use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface
{
    protected $table = "users";
    protected $hidden = ["password"];
    protected $fillable = array('username', 'email', 'first_name', 'surname', 'user_role_id');
    protected $guarded = array('id', 'password');
    protected $user;
    public $timestamps = true;

    use UserTrait, RemindableTrait, SoftDeletingTrait;

    protected $dates = ['deleted_at'];

    public function jobAlerts()
    {
        return $this->hasMany('TJ\Entities\JobAlert');
    }  
    public function getAuthIdentifier()
    {
      return $this->getKey();
    }
    public function getAuthPassword()
    {
      return $this->password;
    }
    public function getRememberToken()
    {
      return $this->remember_token;
    }
    public function setRememberToken($value)
    {
      $this->remember_token = $value;
    }
    public function getRememberTokenName()
    {
      return "remember_token";
    }
    public function getReminderEmail()
    {
      return $this->email;
    }
}