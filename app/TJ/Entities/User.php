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
    protected $guarded = array('password');
    protected $fillable = array('username', 'email', 'first_name', 'surname', 'user_role_id');
    protected $visible = array('username', 'email', 'first_name', 'surname', 'user_role_id');
    protected $hidden = array('password');

    public function job_alerts()
    {
            return $this->hasMany('JobAlert');
    }
}