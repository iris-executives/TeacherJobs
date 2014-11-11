<?php namespace Teacherjobs;

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
        App::bind('Teacherjobs\Repositories\Contracts\UserRepositoryInterface', 'Teacherjobs\Repositories\UserRepository');
        
        App::bind('Illuminate\Auth\UserInterface', 'Teacherjobs\Entities\User');
    }
}
