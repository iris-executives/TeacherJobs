<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobQuestion extends Eloquent {

	protected $table = 'job_questions';
        protected $job_question;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('content', 'job_post_id');
	protected $visible = array('content', 'job_post_id');

	public function answer()
	{
		return $this->hasOne('TJ\Entities\JobAnswer');
	}

}