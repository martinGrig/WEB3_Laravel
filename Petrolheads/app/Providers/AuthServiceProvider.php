<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Profile;
use App\Policies\ProfilePolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        Profile::class => ProfilePolicy::class,
        'App\Post' => 'App\Policies\PostPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    }
    //public function boot(Gate $gate)
    //{
    //    $this->registerPolicies();

        
    //    Gate::before(function ($user) {
    //        return $user->id == 2;
    //    });

    //}
}
