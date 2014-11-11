<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobType extends Eloquent {

	protected $table = 'job_types';
        protected $job_type;
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');
	protected $visible = array('name');

}