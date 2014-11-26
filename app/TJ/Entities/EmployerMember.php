<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;
use Eloquent;

class EmployerMember extends Eloquent
{
    protected $table = 'employer_members';
    protected $employer_member;
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('employer_id', 'user_id');

    public function employer()
    {
        return $this->belongsTo('TJ\Entities\Employer');
    }

    public function tasksAssignedBySelf()
    {
        return $this->hasMany('TJ\Entities\EmployerMemberTask', 'user_assigned_by');
    }

    public function tasksAssignedToOthers()
    {
        return $this->hasMany('TJ\Entities\EmployerMemberTask', 'user_assigned_to');
    }

    public function notes()
    {
        return $this->hasMany('TJ\Entities\EmployerMemberNote', 'member_id');
    }

    public function user()
    {
        return $this->belongsTo('TJ\Entities\User');
    }

    public function jobPosts()
    {
        return $this->hasMany('TJ\Entities\JobPost');
    }
}