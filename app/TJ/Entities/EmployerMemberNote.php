<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class EmployerMemberNote extends Eloquent
{
    protected $table = 'employer_members_notes';
    protected $employer_member_note;
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('title', 'content', 'is_private', 'job_application_id', 'stage_id', 'member_id');

    public function member()
    {
        return $this->belongsTo('TJ\Entities\EmployerMember', 'member_id');
    }

    public function stage()
    {
        return $this->belongsTo('TJ\Entities\Stage');
    }

    public function jobApplication()
    {
        return $this->belongsTo('TJ\Entities\JobApplication');
    }
}