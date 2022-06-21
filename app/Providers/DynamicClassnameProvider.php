<?php
namespace App\Providers;
use App\Models\User;
use Illuminate\Support\ServiceProvider;
class DynamicClassnameProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer('*',function($view)
        {
            $view->with('user_array', User::all());
        });
    }
}
