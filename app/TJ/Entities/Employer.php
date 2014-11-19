<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class Employer extends Eloquent {

    protected $table = 'employers';
    protected $employer;
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'description', 'phone', 'address', 'city', 'pobox', 'logo');

    public function members()
    {
            return $this->hasMany('TJ\Entities\EmployerMember');
    }
}