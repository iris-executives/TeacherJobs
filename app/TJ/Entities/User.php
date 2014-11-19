<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class User extends Eloquent {

    protected $table = 'users';
    protected $user;
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('username', 'email', 'password', 'first_name', 'surname', 'user_role_id');

    public function jobAlerts()
    {
            return $this->hasMany('TJ\Entities\JobAlert');
    }
}