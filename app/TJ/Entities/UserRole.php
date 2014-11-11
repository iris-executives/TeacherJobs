<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UserRole extends Eloquent {

	protected $table = 'user_roles';
        protected $user_role;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $guarded = array('slug');
	protected $fillable = array('title');
	protected $visible = array('title');

	public function users()
	{
		return $this->hasMany('User');
	}

	public function permissions()
	{
		return $this->hasMany('Permission', 'permission_id');
	}

}