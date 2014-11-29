<?php 

namespace TJ\Contracts;

interface UserRepositoryInterface extends RepositoryInterface
{
    public function create($username, $email, $password, $first_name, $surname, $user_role_id);
    public function update($id, $username, $email, $password, $first_name, $surname, $user_role_id);
    public function remove($id);
}