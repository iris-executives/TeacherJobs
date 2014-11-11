<?php

namespace TJ\Entities;

use Illuminate\Database\Eloquent\SoftDeletingTrait;

class Employer extends Eloquent {

	protected $table = 'employers';
    protected $employer;
    public $timestamps = true;

    use SoftDeletingTrait;

    protected $dates = ['deleted_at'];
    protected $fillable = array('name', 'description', 'phone', 'address', 'city', 'Pobox', 'logo');
    protected $visible = array('name', 'description', 'phone', 'address', 'city', 'Pobox', 'logo');

    public function members()
    {
            return $this->hasMany('EmployerMember');
    }

    public function create($name, $description, $phone, $address, $Pobox, $logo)
    {
            return $this->employer->create(compact('name', 'description','phone','address','Pobox','logo'));
    }

    public function update($id, $name, $description, $phone, $address, $Pobox, $logo)
    {
        return $this->employer->where($this->employer->getKeyName(), $id)->update(compact('name', 'description','phone','address','Pobox','logo'));
    }
    
    public function delete($id)
    {
        return $this->employer->where($this->employer->getKeyName(), $id)->delete();
    }

}