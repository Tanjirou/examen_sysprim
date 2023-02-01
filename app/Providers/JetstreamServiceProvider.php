<?php

namespace App\Providers;

use App\Models\Department;
use Laravel\Fortify\Fortify;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\DB;
use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();
        // Fortify::registerView(function () {
        //     $departments = Department::all();
        //     return view('auth.register', compact('departments'));
        // });
        Fortify::loginView(function () {
            if(count(DB::table('users')->get())<1)
            {
                return redirect('/register');
            }
            else{
                return view('auth.login');
            }
        });
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
