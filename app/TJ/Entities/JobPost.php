<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobPost extends Eloquent {

	protected $table = 'job_posts';
        protected $job_post;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('title', 'is_uae_only', 'description', 'min_education_level_required', 'min_certification', 'min_years_experience', 'location', 'contract_type', 'work_timing', 'salary', 'employer_member_id', 'status_id', 'category_id', 'type_id');

	public function categories()
	{
		return $this->hasMany('TJ\Entities\JobCategory');
	}

	public function types()
	{
		return $this->hasMany('TJ\Entities\JobType');
	}

	public function status()
	{
		return $this->hasOne('TJ\Entities\JobStatus');
	}

	public function jobQuestions()
	{
		return $this->hasMany('TJ\Entities\JobQuestion');
	}

	public function jobApplications()
	{
		return $this->hasMany('TJ\Entities\JobApplication');
	}
        
        public function member()
	{
		return $this->belongsTo('TJ\Entities\EmployerMember');
	}

}