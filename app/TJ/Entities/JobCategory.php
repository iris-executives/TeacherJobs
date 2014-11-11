<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class JobCategory extends Eloquent {

	protected $table = 'job_categories';
        protected $job_category;
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name');
	protected $visible = array('name');

}