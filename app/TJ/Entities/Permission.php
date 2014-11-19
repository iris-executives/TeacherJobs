<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class Permission extends Eloquent {

	protected $table = 'permissions';
        protected $permission;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('title', 'slug');

	public function roles()
	{
		return $this->BelongsToMany('TJ\Entities\UserRole');
	}

}