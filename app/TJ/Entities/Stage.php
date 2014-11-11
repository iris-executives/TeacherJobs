<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class Stage extends Eloquent {

	protected $table = 'stages';
        protected $stage;
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'parent_id');
	protected $visible = array('name', 'parent_id');

	public function parent()
	{
		return $this->hasOne('Stage');
	}

	public function job_applications()
	{
		return $this->hasMany('JobApplicationStage')->withPivot('job_application', 'stage_id');
	}

}