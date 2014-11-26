<?php namespace TJ\Repositories;

use TJ\Entities\EmployerMemberNote;
use TJ\Contacts\EmployerMemberNoteInterface;

class EmployerMemberNoteRepository implements Contracts\EmployerMembers\Repositories\EmployerMemberNoteRepositoryInterface
{
    /**
     * @var TJ\Entities\EmployerMemberNote
     */
    protected $note;
    
    public function __construct(EmployerMemberNoteInterface $note)
    {
        $this->note = $note;
    }
}