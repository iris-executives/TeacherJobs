<?php namespace TJ\Repositories\Contracts;

interface RepositoryInterface {
    public function create($data);
    public function update($id, $data);
    public function remove($id);
    //public function blocked();
}