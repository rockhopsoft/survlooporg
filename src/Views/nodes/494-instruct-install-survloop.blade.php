<!-- resources/views/vendor/survlooporg/nodes/494-instruct-install-survloop.blade.php -->

<h3>Install Survloop</h3>

<div style="min-height: 400px;">
	<ul class="nav nav-tabs" id="myTab" role="tablist">
		<li class="nav-item">
			<a class="nav-link active noAjaxLoad" 
				id="scriptsSurvloop-tab" data-toggle="tab" 
				href="#scriptsSurvloop" role="tab" 
				aria-controls="scriptsSurvloop" aria-selected="true"
				>Auto-Install Scripts</a>
		</li>
		<li class="nav-item">
			<a class="nav-link noAjaxLoad" 
				id="commandsSurvloop-tab" data-toggle="tab" 
				href="#commandsSurvloop" role="tab" 
				aria-controls="commandsSurvloop" aria-selected="false"
				>All Commands, One-by-One</a>
		</li>
	</ul>
	<div class="tab-content bgWht p15" 
		style="border-top: 0px none; margin-top: 0px; 
			border-left: 1px #dee2e6 solid; 
			border-right: 1px #dee2e6 solid; 
			border-bottom: 1px #dee2e6 solid;">
		<div class="tab-pane fade show active" 
			id="scriptsSurvloop" role="tabpanel" 
			aria-labelledby="scriptsSurvloop-tab">

			<p>
				In your new Homestead installation, 
				enter your directory which syncs your 
				code base with the virtual server:<br>
			</p>
<pre>% cd ~/homestead/code</pre>
			<p>
				Pull down a copy of the the Survloop 
				installation scripts, and run 
				<a href="https://github.com/rockhopsoft/install-scripts/blob/master/src/homestead/survloop-mac.sh" 
					target="_blank">the one built for Homestead on Mac
				</a>:</p>
<pre>% git clone http://github.com/rockhopsoft/install-scripts
% bash install-scripts/src/homestead/survloop-mac.sh</pre>

		</div>
		<div class="tab-pane fade" id="commandsSurvloop" role="tabpanel" aria-labelledby="commandsSurvloop-tab">

			<p>For these instructions, the project's installation directory 
			is named <span class="red">survproject</span>.</p>
<pre>% cd ~/homestead/code
% composer create-project laravel/laravel <span class="red">survproject</span> "8.5.*"
% cd <span class="red">survproject</span>
% nano .env</pre>
			<p>Edit a few lines in the environment file:</p>
<pre>
APP_NAME="<span class="red">My Survloop Project</span>"
APP_URL=http://<span class="red">survproject</span>.local

DB_HOST=localhost
DB_PORT=33060
DB_CONNECTION=mysql
DB_DATABASE=<span class="red">survproject</span>
DB_USERNAME=homestead
DB_PASSWORD=secret
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
% composer dump-autoload
% curl http://$DIR.local/css-reload</pre>
			<p>If everything went well, that last script should preload the system CSS
			before you open your first page in the browser, and just returns a smiley face.</p>
			<p>Then you should be able to open the home page, and log in. http://<span class="red">$DIR</span>.local</p>

		</div>
	</div>

</div>
