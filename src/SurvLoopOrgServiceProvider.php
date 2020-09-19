<?php
namespace SurvLoopOrg;

use SurvLoopOrg\SurvLoopOrgFacade;
use Illuminate\Support\ServiceProvider;

class SurvLoopOrgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('survlooporgfacade', function($app) {
            return new SurvLoopOrgFacade();
        });
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->publishes([

              __DIR__ . '/Views'   => base_path('resources/views/vendor/survlooporg'),

              __DIR__ . '/Models'  => base_path('app/Models'),

              __DIR__ . '/Uploads' => base_path('storage/app/up/survlooporg'),
              
              __DIR__ . '/Database/2020_09_14_000000_create_survloop_installs_tables.php'
                  => base_path('database/migrations/'
                      . '2020_09_14_000000_create_survloop_installs_tables.php'),

              __DIR__ .'/Database/SurvLoopOrgSeeder.php' 
                  => base_path('database/seeders/SurvLoopOrgSeeder.php')
                  
        ]);
    }
}