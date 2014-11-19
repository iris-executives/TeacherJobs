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
	protected $fillable = array('job_post_id', 'jobseeker_id');

	public function answers()
	{
		return $this->hasMany('TJ\Entities\JobAnswer');
	}

	public function stages()
	{
		return $this->HasMany('TJ\Entities\JobApplicationStage', 'stage_id');
	}
        
        public function jobSeeker()
	{
		return $this->belongsTo('TJ\Entities\JobSeeker');
	}

}