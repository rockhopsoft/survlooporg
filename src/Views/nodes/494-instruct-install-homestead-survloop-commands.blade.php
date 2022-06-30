<!-- resources/views/vendor/survlooporg/nodes/494-instruct-install-homestead-survloop-commands.blade.php -->

<h5 class="slBlueDark">One-Time Homebrew Install for Mac</h5>
<pre>% /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install.sh)"
% xcode-select --install
% brew update
% brew install perl
% brew install php@8.0
% brew services start php@8.0
% brew link php@8.0 --force
% brew link --force --overwrite php@8.0</pre>
<p><br /></p>

<h5 class="slBlueDark">Laravel & Survloop Installation</h5>
<pre>% cd ~/homestead
% mkdir code
% cd code
% composer create-project laravel/laravel <span class="red">survproject</span> "9.0.*"
% cd <span class="red">survproject</span>
% nano .env</pre>
<p>Edit the environment file (.env) to set the URL and connect your MYSQL database:</p>
<pre>APP_NAME="<span class="red">My Survloop Project</span>"
APP_URL=http://<span class="red">survproject</span>.local

DB_HOST=localhost
DB_DATABASE=<span class="red">survproject</span>
DB_USERNAME=homestead
DB_PASSWORD=secret</pre>

</pre>
<pre>% php artisan key:generate
% php artisan cache:clear
% COMPOSER_MEMORY_LIMIT=-1 composer require rockhopsoft/survloop
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
<pre>% perl -pi -w -e "s/\\Illuminate\\Support\\Facades\\DB::statement('SET SESSION sql_require_primary_key=0'); / /g" database/migrations/*.php
% php artisan migrate --force
% php artisan db:seed --force --class=SurvloopSeeder
% php artisan db:seed --force --class=ZipCodeSeeder
% php artisan db:seed --force --class=ZipCodeSeeder2
% php artisan db:seed --force --class=ZipCodeSeeder3
% php artisan db:seed --force --class=ZipCodeSeeder4</pre>
