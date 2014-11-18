<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobSeeker extends Eloquent {

	protected $table = 'jobseekers';
        protected $job_seeker;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('residence', 'city_live_in', 'city_work_in', 'mobile1', 'mobile2', 'dob', 'primary_language', 'secondary_language', 'will_relocate', 'is_anonyous', 'picture', 'employment_status', 'work_experience', 'sector_most_experience', 'other_sector1', 'other_sector2', 'awards', 'achievements', 'recognitions', 'education_level', 'graduation_date', 'ongoing_education', 'graduation_date2', 'pro_certifications', 'ongoing_certifications', 'has_managed_others', 'notice_period', 'is_registered', 'is_subscribed_newsletter');
	protected $visible = array('residence', 'city_live_in', 'city_work_in', 'mobile1', 'mobile2', 'dob', 'primary_language', 'secondary_language', 'will_relocate', 'is_anonyous', 'picture', 'employment_status', 'work_experience', 'sector_most_experience', 'other_sector1', 'other_sector2', 'awards', 'achievements', 'recognitions', 'education_level', 'graduation_date', 'ongoing_education', 'graduation_date2', 'pro_certifications', 'ongoing_certifications', 'has_managed_others', 'notice_period', 'is_registered', 'is_subscribed_newsletter');

	public function user()
	{
		return $this->belongsTo('TJ\Entities\User');
	}
        
        public function country()
	{
		return $this->belongsTo('TJ\Entities\Country');
	}

	public function jobApplications()
	{
		return $this->hasMany('TJ\Entities\JobApplication');
	}
        
        public function applyToJob()
        {
                //
        }        

}