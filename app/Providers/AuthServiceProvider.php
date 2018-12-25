<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        $this->registerCandidatePolicies();
        $this->registerVacancyPolicies();
        //
    }
    public function registerCandidatePolicies()
    {
        //Car
        Gate::define('create-candidate',function($user){
            return $user->hasAccess(['create-candidate']);
        });
        Gate::define('update-candidate',function($user){
            return $user->hasAccess(['update-candidate']);
        });
        Gate::define('delete-candidate',function($user){
            return $user->hasAccess(['delete-candidate']);
        });
        Gate::define('index-vacancy',function($user){
            return $user->hasAccess(['index-vacancy']);
        });
        Gate::define('show-candidate',function($user){
            return $user->hasAccess(['show-candidate']);
        });
    }
    public function registerVacancyPolicies()
    {
        //Car
        Gate::define('create-vacancy',function($user){
            return $user->hasAccess(['create-vacancy']);
        });
        Gate::define('update-vacancy',function($user){
            return $user->hasAccess(['update-vacancy']);
        });
        Gate::define('delete-vacancy',function($user){
            return $user->hasAccess(['delete-vacancy']);
        });
        Gate::define('index-candidate',function($user){
            return $user->hasAccess(['index-candidate']);
        });
        Gate::define('show-vacancy',function($user){
            return $user->hasAccess(['show-vacancy']);
        });
    }
}
