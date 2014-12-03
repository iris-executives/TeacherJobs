<?php namespace TJ\Repositories\Contracts;

interface RepositoryInterface {
    public function create($username, $email, $password, $first_name, $surname, $user_role_id);
    public function update($id, $username, $email, $password, $first_name, $surname, $user_role_id);
    public function remove($id);
}
