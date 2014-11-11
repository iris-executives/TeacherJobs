<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class EmployerMemberNote extends Eloquent {

	protected $table = 'employer_members_notes';
         protected $employer_member_note;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $guarded = array('job_application_id', 'stage_id', 'member_id');
	protected $fillable = array('title', 'content', 'is_private');
	protected $visible = array('title', 'content', 'is_private');
	protected $hidden = array('job_application_id', 'stage_id', 'member_id');

}