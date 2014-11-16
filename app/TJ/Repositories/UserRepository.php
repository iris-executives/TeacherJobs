<?php namespace TJ\Repositories;

use TJ\Entities\User;
use Illuminate\Auth\UserInterface;

class UserRepository implements Contracts\UserRepositoryInterface {

    /**
     * @var Shamsy\Entities\User
     */
    protected $user;
    
    public function __construct(UserInterface $user)
    { 
        $this->user = $user;
    }
    
    public function create($username, $email, $password, $first_name, $surname, $user_role_id)
    {
        return $this->user->create(compact('username', 'email', 'password', 'first_name', 'surname', 'user_role_id'));
    }
    
    public function update($id, $username, $email, $password, $first_name, $surname, $user_role_id)
    {
        return $this->user->where($this->user->getKeyName(), $id)->update(compact('username', 'email', 'password', 'first_name', 'surname', 'user_role_id'));
    }
    
    public function remove($id)
    {
        return $this->user->where($this->user->getKeyName(), $id)->delete();
    }
}