<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobAnswer extends Eloquent {

	protected $table = 'job_answers';
        protected $job_answer;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $guarded = array('job_application_id', 'job_question_id');
	protected $fillable = array('content');
	protected $visible = array('content');
	protected $hidden = array('job_application_id', 'job_question_id');
        
        public function question()
	{
		return $this->belongsTo('TJ\Entities\JobQuestion');
	}
        
        public function jobApplication()
	{
		return $this->belongsTo('TJ\Entities\JobApplication');
	}  
}