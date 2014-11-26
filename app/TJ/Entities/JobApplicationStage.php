<?php

namespace TJ\Entities;

use Eloquent;

class JobApplicationStage extends Eloquent
{
    protected $table = 'job_application_stage';
    protected $job_app_stage;
    public $timestamps = false;

    protected $fillable = array('is_current', 'job_application_id', 'stage_id');


    public function notes()
    {
        return $this->hasMany('TJ\Entities\EmployerMemberNote');
    }

    public function jobApplications()
    {
        return $this->BelongsTo('TJ\Entities\JobApplicationStage');
    }

    public function jobStages()
    {
        return $this->BelongsTo('TJ\Entities\JobApplicationStage');
    }
}