<?php
namespace SurvLoopOrg;

use Illuminate\Support\ServiceProvider;

class SurvLoopOrgServiceProvider extends ServiceProvider
{
    public function register()
    {
        /*
        $this->app->bind('wikiworldorder-survloop', function()
        {
            return new Demo;
        });
        */
    }

    public function boot()
    {
        require __DIR__ . '/routes.php';
        //$migFile = '2016_11_20_000000_RII_create_tables.php';
        $this->publishes([
              __DIR__.'/Views'         => base_path('resources/views/vendor/survlooporg'),
              __DIR__.'/Public'        => base_path('public/survlooporg'),
              __DIR__.'/Models'        => base_path('app/Models/SurvLoopOrg'),
              __DIR__.'/Models'        => base_path('app/Models'),
              __DIR__.'/Uploads'       => base_path('storage/app/up/survlooporg'),
              /* __DIR__.'/Database/' . $migFile 
                  => base_path('database/migrations/' . $migFile),
              __DIR__.'/Database/SurvLoopOrgSeeder.php' 
                  => base_path('database/seeds/SurvLoopOrgSeeder.php'), */
        ]);
        //$this->loadViewsFrom(__DIR__ . '/Views', 'survloop');
    }
}