<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class JobStatus extends Eloquent {

	protected $table = 'job_status';
        protected $job_status;
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');
	protected $visible = array('name');

}