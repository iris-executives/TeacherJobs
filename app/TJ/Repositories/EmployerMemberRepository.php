<?php namespace TJ\Repositories;

use TJ\Entities\EmployerMember;
use TJ\Contacts\EmployerMemberInterface;

class EmployerMemberRepository implements Contracts\EmployerMembers\Repositories\EmployerMemberRepositoryInterface
{
    /**
     * @var TJ\Entities\EmployerMember
     */
    protected $employer_member;
    
    public function __construct(EmployerMemberInterface $employer_member)
    {
        $this->employer_member = $employer_member;
    }
    public function create($employer_id, $user_id)
    {
        return $this->employer_member->create(compact('employer_id', 'user_id'));
    }
    public function update($id, $employer_id, $user_id)
    {
        return $this->employer_member->where($this->employer_member->getKeyName(), $id)->update(compact('employer_id', 'user_id'));
    }
    public function remove($id)
    {
        return $this->employer_member->where($this->employer_member->getKeyName(), $id)->delete();
    }
}