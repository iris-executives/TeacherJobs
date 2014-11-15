<?php namespace TJ;

use App;

use Illuminate\Support\ServiceProvider;


class TeacherjobsServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {      
        App::bind('Illuminate\Auth\UserInterface', 'TJ\Entities\User');
        App::bind('TJ\Contracts\EmployerInterface', 'TJ\Entities\Employer');
        App::bind('TJ\Contracts\EmployerMemeberInterface', 'TJ\Entities\EmployerMember');
        App::bind('TJ\Contracts\JobseekerInterface', 'TJ\Entities\Jobseeker');
        
        App::bind('TJ\Repositories\Contracts\UserRepositoryInterface', 'TJ\Repositories\UserRepository');
        App::bind('TJ\Repositories\Contracts\EmployerRepositoryInterface', 'TJ\Repositories\EmployerRepository');
        App::bind('TJ\Repositories\Contracts\EmployerMemberRepositoryInterface', 'TJ\Repositories\EmployerMemberRepository');
        App::bind('TJ\Repositories\Contracts\JobseekerRepositoryInterface', 'TJ\Repositories\JobseekerRepository');
        
    }
}
