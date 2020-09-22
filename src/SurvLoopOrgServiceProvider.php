<?php
namespace SurvloopOrg;

use SurvloopOrg\SurvloopOrgFacade;
use Illuminate\Support\ServiceProvider;

class SurvloopOrgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('survlooporgfacade', function($app) {
            return new SurvloopOrgFacade();
        });
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $dbMig = '2020_09_14_000000_create_survloop_installs_tables';
        $this->publishes([

              __DIR__ . '/Views'
                  => base_path('resources/views/vendor/survlooporg'),

              __DIR__ . '/Models'
                  => base_path('app/Models'),

              __DIR__ . '/Uploads' 
                  => base_path('storage/app/up/survlooporg'),
              
              __DIR__ . '/Database/' . $dbMig . '.php'
                  => base_path('database/migrations/' . $dbMig . '.php'),

              __DIR__ .'/Database/SurvloopOrgSeeder.php' 
                  => base_path('database/seeders/SurvloopOrgSeeder.php')
                  
        ]);
    }
}