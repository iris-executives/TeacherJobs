<?php

namespace TJ\Entities;
use Eloquent;

class JobApplicationStage extends Eloquent {

	protected $table = 'job_application_stage';
        protected $job_application_stage;
	public $timestamps = false;
	protected $guarded = array('job_application_id', 'stage_id');
	protected $fillable = array('is_current');
	protected $visible = array('is_current');
	protected $hidden = array('job_application_id', 'stage_id');

	public function notes()
	{
		return $this->hasMany('TJ\Entities\EmployerMemberNote');
	}

}