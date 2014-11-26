<?php

namespace TJ\Entities;

use Eloquent;

class PermissionRole extends Eloquent
{
	protected $table = 'permission_role';
        protected $permission_role;
	public $timestamps = false;
	protected $guarded = array('role_id', 'permission_id');
	protected $hidden = array('role_id', 'permission_id');
}