<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class JobStatus extends Eloquent
{
    protected $table = 'job_status';
    protected $job_status;
    public $timestamps = false;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

    public function jobPosts()
    {
        return $this->hasMany('TJ\Entities\JobPost', 'status_id');
    }
}