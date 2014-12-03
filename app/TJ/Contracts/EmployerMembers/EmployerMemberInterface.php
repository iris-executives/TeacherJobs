<?php

namespace TJ\Contracts\EmployerMembers;

interface EmployerMemberInterface
{
    public function employer();
    public function tasks();
    public function notes();
    public function user();
    public function jobPosts();
}