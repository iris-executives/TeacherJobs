<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Country extends Eloquent {

	protected $table = 'countries';
        protected $country;
	public $timestamps = false;

	use SoftDeletingTrait;

	protected $dates = ['deleted_at'];
	protected $fillable = array('name', 'abreviation', 'Phone_number_code');
	protected $visible = array('name', 'abreviation', 'Phone_number_code');

	public function jobseekers()
	{
		return $this->hasMany('JobSeeker');
	}

}