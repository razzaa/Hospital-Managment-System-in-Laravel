<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\User;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $patient_count = User::where('admin','=','patient')->count();
        $nurse_count = User::where('admin','=','nurse')->count();
        $doctor_count = User::where('admin','=','doctor')->count();
        $request_new_user = User::where('admin','=','zero')->count();
        View::share('dockey',$doctor_count);
        View::share('patkey',$patient_count);
        View::share('nurkey',$nurse_count);
        View::share('requestkey',$request_new_user);
    }
}
