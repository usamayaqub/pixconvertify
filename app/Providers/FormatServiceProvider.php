<?php

namespace App\Providers;

use App\Models\Format;
use Illuminate\Support\ServiceProvider;
use View;

class FormatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */

    public function register()
    {
        // Define a global variable and bind it to the service container
        // $formats = Format::with('content')->get();
        // $this->app->singleton('formats', function () use ($formats) {
        //     return $formats;
        // });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $formats = Format::with('content')->where('status',1)->limit(15)->get();
        // Share the global formats with all views
        View::share('formats', $formats);
    }
}
