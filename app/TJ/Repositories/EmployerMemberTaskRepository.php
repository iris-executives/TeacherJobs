<?php namespace TJ\Repositories;

use TJ\Entities\EmployerMemberTask;
use TJ\Contacts\EmployerMemberTaskInterface;

class EmployerMemberTaskRepository implements Contracts\EmployerMembers\Repositories\EmployerMemberTaskRepositoryInterface
{
    /**
     * @var TJ\Entities\EmployerMemberTask
     */
    protected $task;
    
    public function __construct(EmployerMemberTaskInterface $task)
    {
        $this->task = $task;
    }
}