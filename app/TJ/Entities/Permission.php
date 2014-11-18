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
	protected $guarded = array('slug');
	protected $fillable = array('title');
	protected $visible = array('title');
	protected $hidden = array('slug');

	public function roles()
	{
		return $this->BelongsToMany('TJ\Entities\UserRole');
	}

}