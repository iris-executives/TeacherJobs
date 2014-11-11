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

    public function create($username, $email, $first_name, $surname, $user_role_id)
    {
        return $this->user->create(compact('username', 'email', 'first_name', 'surname', 'user_role_id'));
    }
    
    public function update($id, $username, $email, $first_name, $surname, $user_role_id)
    {
        return $this->user->where($this->user->getKeyName(), $id)->update(compact('username', 'email', 'first_name', 'surname', 'user_role_id'));
    }
    
    public function delete($id)
    {
        return $this->user->where($this->user->getKeyName(), $id)->delete();
    }

}