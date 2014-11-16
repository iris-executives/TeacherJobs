<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class EmployerMemberTask extends Eloquent {

	protected $table = 'employer_members_tasks';
        protected $employer_member_task;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $guarded = array('user_assigned_by', 'user_assigned_to');
	protected $fillable = array('title', 'content', 'deadline');
	protected $visible = array('title', 'content', 'deadline');
        
        public function assigners()
	{
		return $this->belongsTo('TJ\Entities\EmployerMember', 'user_assigned_by');
	}
        
        public function assagnees()
	{
		return $this->belongsTo('TJ\Entities\EmployerMember', 'user_assigned_to');
	}

}