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
        protected $fillable = array('employer_id', 'user_id');

	public function employers()
	{
		return $this->belongsTo('TJ\Entities\Employer');
	}
        
        public function tasks()
	{
		return $this->hasMany('TJ\Entities\EmployerMemberTask');
	}

	public function notes()
	{
		return $this->hasMany('TJ\Entities\EmployerMemberNote');
	}

	public function user()
	{
		return $this->belongsTo('TJ\Entities\User');
	}

	public function jobPosts()
	{
		return $this->hasMany('TJ\Entities\JobPost');
	}

}