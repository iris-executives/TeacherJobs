<?php

namespace TJ\Entities;

use Eloquent;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class JobCategory extends Eloquent
{
    protected $table = 'job_categories';
    protected $job_category;
    public $timestamps = false;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name');

    public function jobPosts()
    {
        return $this->hasMany('TJ\Entities\JobPost', 'category_id');
    }
}