<?php namespace TJ\Repositories;

use TJ\Entities\Stage;
use TJ\Contacts\StageInterface;

class StageRepository implements Contracts\EmployerMembers\Repositories\StageRepositoryInterface
{
    /**
     * @var TJ\Entities\Stage
     */
    protected $stage;
    
    public function __construct(StageInterface $stage)
    {
        $this->stage = $stage;
    }
}