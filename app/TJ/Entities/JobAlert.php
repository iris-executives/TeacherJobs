<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobAlert extends Eloquent {

	protected $table = 'job_alerts';
        protected $job_alert;
	public $timestamps = true;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('location');
	protected $visible = array('location');

}