<?php 

namespace TJ\Contracts;

interface EmployerMemberInterface { 
    
    public function employer();
    
    public function tasks(); 
    
    public function notes(); 
    
    public function user(); 
    
    public function jobPosts(); 
}
