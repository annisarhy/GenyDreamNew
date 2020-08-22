<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
  /**
  * The policy mappings for the application.
  *
  * @var array
  */
  protected $policies = [
    // 'App\Model' => 'App\Policies\ModelPolicy',
  ];

  /**
  * Register any authentication / authorization services.
  *
  * @return void
  */
  public function boot()
  {
    $this->registerPolicies();

    //role authorization...
    Gate::define('isAdmin', function($user) {
      return $user->role == "admin";
    });

    Gate::define('isPerusahaan',function($user) {
        return $user->role == "perusahaan";
    });

    Gate::define('isUserPerusahaan', function($user) {
      return $user->role == 'user_perusahaan';
    });

    Gate::define('isPelamar', function($user) {
      return $user->role == 'pelamar';
    });
  }
}
