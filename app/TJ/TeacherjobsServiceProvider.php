<?php 

namespace TJ;

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
        //Entities
        App::bind('Illuminate\Auth\UserInterface', 'TJ\Entities\User');
        App::bind('TJ\Contracts\Employers\EmployerInterface', 'TJ\Entities\Employer');
        App::bind('TJ\Contracts\EmployerMembers\EmployerMemeberInterface', 'TJ\Entities\EmployerMember');
        App::bind('TJ\Contracts\EmployerMembers\EmployerMemeberNoteInterface', 'TJ\Entities\EmployerMemberNote');
        App::bind('TJ\Contracts\EmployerMembers\EmployerMemeberTaskInterface', 'TJ\Entities\EmployerMemberTask');
        App::bind('TJ\Contracts\Jobseekers\JobseekerInterface', 'TJ\Entities\Jobseeker');
        App::bind('TJ\Contracts\StageInterface', 'TJ\Entities\Stage');
        //Repos
        App::bind('TJ\Repositories\Contracts\UserRepositoryInterface', 'TJ\Repositories\UserRepository');
        App::bind('TJ\Contracts\Employers\EmployerRepositoryInterface', 'TJ\Repositories\EmployerRepository');
        App::bind('TJ\Contracts\EmployerMembers\EmployerMemberRepositoryInterface', 'TJ\Repositories\EmployerMemberRepository');
        App::bind('TJ\Contracts\EmployerMembers\EmployerMemberNoteRepositoryInterface', 'TJ\Repositories\EmployerMemberNoteRepository');
        App::bind('TJ\Contracts\EmployerMembers\EmployerMemberTaskRepositoryInterface', 'TJ\Repositories\EmployerMemberTaskRepository');
        App::bind('TJ\Contracts\Jobseekers\JobseekerRepositoryInterface', 'TJ\Repositories\JobseekerRepository');
        App::bind('TJ\Contracts\StageRepositoryInterface', 'TJ\Repositories\StageRepository');
    }
}