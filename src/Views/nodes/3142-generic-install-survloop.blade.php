<!-- resources/views/vendor/survlooporg/nodes/3142-generic-install-survloop.blade.php -->

<div class="pT15"></div>
<p>
    To install Survloop, you'll need first need PHP 8.0 and
    <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">Composer</a>
    installed in your development environment. These more comprehensive instructions describe
    how to set up a development environment using VirutalBox, Vargrant, and
    <a href="https://laravel.com/docs/8.x/homestead" target="_blank">Laravel's Homestead</a>:
</p>
<ul>
    <li>
        <a href="/how-to-install-survloop-locally-with-homestead"
            >How To Install Survloop Locally with Homestead</a>
    </li>
    <li>
        <a href="/how-to-install-survloop-on-ubuntu-20.04"
            >How To Install Survloop on Ubuntu 20.04</a>
    </li>
</ul>
<p><br /></p>

<h5 class="slBlueDark">Basic Installation: Laravel & Survloop</h5>
<p>
    For these instructions, the new project directory is "<span class="red">survproject</span>".
</p>
<pre>% composer create-project laravel/laravel <span class="red">survproject</span> "8.5.*"
% cd <span class="red">survproject</span>
% nano .env</pre>
            <p>Edit the environment file (.env) to set the URL and connect your MYSQL database.</p>
<pre>% php artisan key:generate
% php artisan cache:clear
% composer require rockhopsoft/survloop
% nano composer.json</pre>
<pre>...
"autoload": {
    ...
    "psr-4": {
        ...
        "RockHopSoft\\Survloop\\": "vendor/rockhopsoft/survloop/src/",
    }
    ...
}, ...</pre>
    <p>Editing config/app.php seems to still be needed:</p>
<pre>% composer update
% nano config/app.php</pre>
<pre>...
'providers' => [
    ...
    App\Providers\FortifyServiceProvider::class,
    RockHopSoft\Survloop\SurvloopServiceProvider::class,
    ...
],
...
'aliases' => [
    ...
    'Survloop' => 'RockHopSoft\Survloop\SurvloopFacade',
    ...
], ...</pre>
<pre>% php artisan config:clear
% php artisan route:clear
% php artisan view:clear
% echo "0" | php artisan vendor:publish --force
% composer dump-autoload</pre>
            <p><br /></p>

            <h5 class="slBlueDark">Fill Database</h5>
<pre>% php artisan migrate --force
% php artisan db:seed --force --class=SurvloopSeeder
% php artisan db:seed --force --class=ZipCodeSeeder
% php artisan db:seed --force --class=ZipCodeSeeder2
% php artisan db:seed --force --class=ZipCodeSeeder3
% php artisan db:seed --force --class=ZipCodeSeeder4</pre>

<p><br /></p>

{!! view('vendor.survlooporg.inc-instruct-survloop-initialize')->render() !!}
