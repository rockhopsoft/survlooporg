<?php
namespace RockHopSoft\SurvloopOrg;

use RockHopSoft\SurvloopOrg\SurvloopOrgFacade;
use Illuminate\Support\ServiceProvider;

class SurvloopOrgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->app->bind('survlooporg', function($app) {
            return new SurvloopOrgFacade();
        });
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        //$this->loadViewsFrom(__DIR__.'/../resources/views', 'survlooporg');
        //$this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        if ($this->app->runningInConsole()) {
            $dbMig = '2020_09_14_000000_create_survloop_installs_tables';
            $this->publishes([
                __DIR__ . '/Views' 
                    => base_path('resources/views/vendor/survlooporg'),
                __DIR__ . '/Models' 
                    => base_path('app/Models'),
                __DIR__ . '/Uploads' 
                    => base_path('public/survlooporg'),

//                __DIR__ . '/Database/' . $dbMig . '.php' 
//                    => base_path('database/migrations/' . $dbMig . '.php'),
//                __DIR__ .'/Database/SurvloopOrgSeeder.php' 
//                    => base_path('database/seeders/SurvloopOrgSeeder.php')
            ]);
        }
    }
}