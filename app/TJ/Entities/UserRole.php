<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

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
		return $this->hasMany('TJ\Entities\User');
	}

	public function permissions()
	{
		return $this->hasMany('TJ\Entities\Permission', 'permission_id');
	}

}