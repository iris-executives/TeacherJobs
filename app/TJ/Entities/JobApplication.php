<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobApplication extends Eloquent {

	protected $table = 'job_applications';
        protected $job_application;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $guarded = array('jobseeker_id');
	protected $fillable = array('job_post_id');
	protected $visible = array('job_post_id');
	protected $hidden = array('jobseeker_id');

	public function ansers()
	{
		return $this->hasMany('JobAnswer');
	}

	public function stages()
	{
		return $this->hasMany('JobApplicationStage');
	}

}