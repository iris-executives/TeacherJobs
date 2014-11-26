<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class UserRole extends Eloquent
{
    protected $table = 'user_roles';
    protected $user_role;
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('title', 'slug');

    public function users()
    {
        return $this->hasMany('TJ\Entities\User');
    }

    public function permissions()
    {
        return $this->BelongsToMany('TJ\Entities\Permission');
    }
}