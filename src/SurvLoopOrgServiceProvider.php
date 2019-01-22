<?php
namespace SurvLoopOrg;

use Illuminate\Support\ServiceProvider;

class SurvLoopOrgServiceProvider extends ServiceProvider
{
    public function boot()
    {
        require __DIR__ . '/routes.php';
        $this->publishes([
              __DIR__.'/Views'   => base_path('resources/views/vendor/survlooporg'),
              __DIR__.'/Models'  => base_path('app/Models'),
              __DIR__.'/Models'  => base_path('app/Models/SurvLoopOrg'),
              __DIR__.'/Uploads' => base_path('storage/app/up/survlooporg'),
              __DIR__.'/Database/2018_11_30_000000_sli_create_tables.php'
                  => base_path('database/migrations/2018_11_30_000000_sli_create_tables.php'),
              __DIR__.'/Database/SurvLoopOrgSeeder.php' => base_path('database/seeds/SurvLoopOrgSeeder.php')
        ]);
    }
}