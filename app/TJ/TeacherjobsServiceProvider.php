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
        App::bind('Illuminate\Auth\UserInterface', 'TJ\Entities\User');
        App::bind('TJ\Contracts\EmployerInterface', 'TJ\Entities\Employer');
        App::bind('TJ\Contracts\EmployerMemeberInterface', 'TJ\Entities\EmployerMember');
        App::bind('TJ\Contracts\EmployerMemeberNoteInterface', 'TJ\Entities\EmployerMemberNote');
        App::bind('TJ\Contracts\EmployerMemeberTaskInterface', 'TJ\Entities\EmployerMemberTask');
        App::bind('TJ\Contracts\JobseekerInterface', 'TJ\Entities\Jobseeker');
        App::bind('TJ\Contracts\StageInterface', 'TJ\Entities\Stage');
        App::bind('TJ\Repositories\Contracts\UserRepositoryInterface', 'TJ\Repositories\UserRepository');
        App::bind('TJ\Repositories\Contracts\EmployerRepositoryInterface', 'TJ\Repositories\EmployerRepository');
        App::bind('TJ\Repositories\Contracts\EmployerMemberRepositoryInterface', 'TJ\Repositories\EmployerMemberRepository');
        App::bind('TJ\Repositories\Contracts\JobseekerRepositoryInterface', 'TJ\Repositories\JobseekerRepository');
        App::bind('TJ\Repositories\Contracts\EmployerMemberNoteRepositoryInterface', 'TJ\Repositories\EmployerMemberNoteRepository');
        App::bind('TJ\Repositories\Contracts\EmployerMemberTaskRepositoryInterface', 'TJ\Repositories\EmployerMemberTaskRepository');
        App::bind('TJ\Repositories\Contracts\StageRepositoryInterface', 'TJ\Repositories\StageRepository');
    }
}