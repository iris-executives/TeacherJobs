<?php namespace TJ\Repositories;

use TJ\Entities\Employer;
use TJ\Contacts\EmployerInterface;

class EmployerRepository implements Contracts\Employers\Repositories\EmployerRepositoryInterface {

    /**
     * @var TJ\Entities\Employer
     */
    protected $employer;
    
    public function __construct(EmployerInterface $employer)
    { 
        $this->employer = $employer;
    }
    
    public function create($name, $description, $address, $city, $pobox, $logo)
    {
        return $this->employer->create(compact('name', 'description', 'address', 'city', 'pobox', 'logo'));
    }
    
    public function update($id, $name, $description, $address, $city, $pobox, $logo)
    {
        return $this->employer->where($this->employer->getKeyName(), $id)->update(compact('name', 'description', 'address', 'city', 'pobox', 'logo'));
    }
    
    public function remove($id)
    {
        return $this->employer->where($this->employer->getKeyName(), $id)->delete();
    }
}