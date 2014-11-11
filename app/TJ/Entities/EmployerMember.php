<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class EmployerMember extends Eloquent {

	protected $table = 'employer_members';
        protected $employer_member;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];

	public function tasks()
	{
		return $this->hasMany('EmployerMemberTask');
	}

	public function notes()
	{
		return $this->hasMany('EmployerMemberNote');
	}

	public function user()
	{
		return $this->belongsTo('User', 'user_id');
	}

	public function job_posts()
	{
		return $this->hasMany('JobPost');
	}

}