<!-- resources/views/vendor/survlooporg/nodes/3163-instruct-install-survloop.blade.php -->

<h5 class="slBlueDark">Install Survloop</h5>
<p>As your super user, enter 'sudo su' mode:</p>
<pre>$ sudo su</pre>
<p><br /></p>

<div style="min-height: 200px;">
    <ul class="nav nav-tabs" id="myTab3" role="tablist">
        <li class="nav-item" style="margin: 0px;">
            <a class="nav-link active noAjaxLoad" 
                id="scriptsSurvloop-tab" data-toggle="tab"
                href="#scriptsSurvloop" role="tab" 
                aria-controls="scriptsSurvloop" aria-selected="true"
                >Auto-Install Scripts</a>
        </li>
        <li class="nav-item" style="margin: 0px;">
            <a class="nav-link noAjaxLoad" 
                id="commandsSurvloop-tab" data-toggle="tab"
                href="#commandsSurvloop" role="tab" 
                aria-controls="commandsSurvloop" aria-selected="false"
                >All Commands, One-by-One</a>
        </li>
    </ul>
    <div class="tab-content tabContentWraps">
        <div class="tab-pane fade show active" id="scriptsSurvloop"
            role="tabpanel" aria-labelledby="scriptsSurvloop-tab">

            <p>
                Run <a href="https://github.com/rockhopsoft/install-scripts/blob/master/src/ubuntu20/survloop/02-survloop.sh"
                    target="_blank">the Survloop script built for Ubuntu 20.04</a>:
            </p>
<pre># bash /root/install-scripts/src/ubuntu20/survloop/02-survloop.sh</pre>

        </div>
        <div class="tab-pane fade" id="commandsSurvloop" role="tabpanel" aria-labelledby="commandsSurvloop-tab">

            <h5 class="slBlueDark">Install LEMP Stack</h5>
            <p>
                This is a summary of <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-20-04"
                    target="_blank">How To Install Linux, Nginx, MySQL, PHP (LEMP stack) on Ubuntu 20.04</a>
            </p>
            <p>
                Run this series of commands, accepting defaults, and confirmations by pressing the Enter key...
            </p>
<pre># apt update
# echo "Y" | apt install nginx
# ufw allow 'Nginx HTTP'
# ufw allow 'Nginx HTTPS'
# echo "y" | ufw enable
# echo "Y" | apt install zip unzip php-fpm php-mysql php-mbstring php-xml php-bcmath php8.0-zip php8.0-gd ghostscript
# systemctl reload nginx</pre>
            <p><br></p>
            <p><br /></p>

            <h5 class="slBlueDark">Setup Server's Domain</h5>
            <p>
                Swap out <span class="slRedDark">example.com</span>
                with your domain, if you want to set one up now.
            </p>
<pre># nano /etc/nginx/sites-available/<span class="red">example.com</span></pre>
            <p>Add the following content, which was taken and slightly modified from
            the default server block configuration file, to your new server block
            configuration file (swap out domain):</p>
<pre>server {
        listen 80;
        root /var/www/<span class="red">example.com</span>/public;
        server_name <span class="red">example.com</span> www.<span class="red">example.com</span> <span class="red">server.ip.address</span>;
        index index.php index.html index.htm index.nginx-debian.html;
        # add_header X-Frame-Options "SAMEORIGIN";
        add_header X-XSS-Protection "1; mode=block";
        add_header X-Content-Type-Options "nosniff";

        charset utf-8;
        location / {
            try_files $uri $uri/ /index.php?$query_string;
        }

        location = /favicon.ico { access_log off; log_not_found off; }
        location = /robots.txt  { access_log off; log_not_found off; }

        error_page 404 /index.php;

        location ~ \.php$ {
            fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
            fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
            include fastcgi_params;
        }
        location ~ /\.(?!well-known).* {
            deny all;
        }
}</pre>
            <p>
                You can read more about these settings in
                <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-on-ubuntu-20-04"
                    target="_blank">the original DigitalOcean instructions</a>.
                Save and close the file. Create a link for it, and remove the default:
            </p>
<pre># ln -s /etc/nginx/sites-available/<span class="red">example.com</span> /etc/nginx/sites-enabled/
# unlink /etc/nginx/sites-enabled/default</pre>
            <p>You can quickly double-check for any syntax errors by running this:</p>
<pre># sudo nginx -t
# sudo systemctl reload nginx</pre>
            <p><br /></p>

            <h5 class="slBlueDark">Test That PHP Is Running (optional)</h5>
            <p>Create a new file in the default public root:</p>
<pre># nano /var/www/<span class="red">example.com</span>/public/info.php</pre>
            <p>Type "<\?php phpinfo();" into the empty file, and save it. If things are working, you should be able to type your IP address (or propagated domain name) into your browser, and <a href="https://s14-eu5.ixquick.com/cgi-bin/serveimage?url=https:%2F%2Fassets.digitalocean.com%2Farticles%2Fphp_edit%2Fphpinfo.png&sp=65cea842f80f5dedbeba0cc83ec9851d" target="_blank">see a bunch of details about your PHP installation, and save the file: </p>
            <p>e.g. http://111.111.111.111/info.php</p>
            <p><br /></p>

            <h5 class="slBlueDark">Create Swap File (optional)</h5>
            <p>
                If you use DigitalOcean's cheapest and smallest default Droplet, then you will
                need to create some more temporary memory to complete the install process.
                <a href="https://stackoverflow.com/questions/18116261/php-composer-update-cannot-allocate-memory-error-using-laravel-4"
                    target="_blank">This</a> <a href="https://getcomposer.org/doc/articles/troubleshooting.md#proc-open-fork-failed-errors" target="_blank">method</a>
                has worked for me:
            </p>
<pre># /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024
# /sbin/mkswap /var/swap.1
# /sbin/swapon /var/swap.1</pre>
            <p><br /></p>

            <h5 class="slBlueDark">Install Pear & Composer</h5>
            <p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre># echo "Y" | apt-get install php-pear pkg-config php-xml php8.0-xml php8.0-cli php-dev
# wget http://pear.php.net/go-pear.phar
# php go-pear.phar
# echo "Y" | apt-get install curl
# curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer</pre>
            <p><br /></p>

            <h5 class="slBlueDark">Install Laravel</h5>
            <p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre># rm -R /var/www/<span class="red">example.com</span>
# composer create-project laravel/laravel /var/www/<span class="red">example.com</span> 8.5.* --no-dev
# chown -R <span class="red">rockhopuser</span>:<span class="red">rockhopuser</span> /var/www/<span class="red">example.com</span>
# cd /var/www/<span class="red">example.com</span>
# composer update
# php artisan key:generate
# chown -R www-data:www-data storage bootstrap/cache resources/views database app/Models
# php artisan cache:clear
# composer require laravel/fortify
# composer update
# composer install --optimize-autoloader --no-dev
# nano .env</pre>

            <p>While editing Laravel's .env file, enter your domain name for the APP_URL, and database connection info:</p>
<pre>APP_URL=<span class="red">https://example.com</span>

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newdatabasename
DB_USERNAME=root
DB_PASSWORD=<span class="red">strongpassword</span></pre>
            <p>Finally just clear the cache...</p>
<pre># php artisan config:clear
# COMPOSER_MEMORY_LIMIT=-1 composer require rockhopsoft/survloop
# nano composer.json</pre>
            <p>From your Laravel installation's root directory, update `composer.json` to require and easily reference Survloop:</p>
<pre>...
"autoload": {
    ...
    "psr-4": {
        ...
        "RockHopSoft\\Survloop\\": "vendor/rockhopsoft/survloop/src/",
    }
    ...
}, ...</pre>
            <p><br /></p>
            <p>It seems we also still need to manually edit `config/app.php`:</p>
<pre># nano config/app.php</pre>
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
            <p>
                If installing on a server, you might also need to
                fix some permissions before the following steps...
            </p>
<pre># chown -R www-data:33 storage database app/Models</pre>
            <p>Clear caches and publish the package migrations...</p>
<pre># php artisan config:clear
# php artisan route:clear
# php artisan view:clear
# echo "0" | php artisan vendor:publish --force
# composer dump-autoload</pre>
            <p><br /></p>

            <h5 class="slBlueDark">Seed Survloop Database</h5>
            <p>
                With certain databases (like some managed by DigitalOcean),
                you may need to tweak the Laravel migration:
            </p>
<pre>% nano database/migrations/2014_10_12_100000_create_password_resets_table.php
% nano database/migrations/2019_08_19_000000_create_failed_jobs_table.php</pre>
            <p>Add this line before the "Schema::create" line in each file:</p>
<pre>\Illuminate\Support\Facades\DB::statement('SET SESSION sql_require_primary_key=0');</pre>
            <p>Then initialize the database:</p>
<pre>$ php artisan migrate
$ php artisan db:seed --class=SurvloopSeeder
$ php artisan db:seed --class=ZipCodeSeeder
$ php artisan db:seed --class=ZipCodeSeeder2
$ php artisan db:seed --class=ZipCodeSeeder3
$ php artisan db:seed --class=ZipCodeSeeder4</pre>
            <p><br /></p>


            <h5 class="slBlueDark">Install SSL Certificate (Recommended)</h5>
            <p>
                If you plan to use a domain name, it is easiest to connect it to
                your server before installing the SSL Certificate.
            </p>
            <p>
                Thanks to the
                <a href="https://www.eff.org/" target="_blank" rel="noopener">EFF</a>'s
                <a href="https://certbot.eff.org/" target="_blank" rel="noopener">Certbot</a>,
                you can now
                <a href="https://certbot.eff.org/lets-encrypt/ubuntufocal-nginx"
                    target="_blank">get this step down quickly and easily</a>...
                for free!! Just run these commands:
            </p>
<pre># apt-get update
# snap install --classic certbot
# certbot --nginx</pre>
            <p>Not sure this should be needed, but it helped my problems:<br></p>
<pre># ufw allow 'Nginx Full'
# ufw delete allow 'Nginx HTTP'
# nginx -t
# systemctl reload nginx
# ufw status verbose</pre>
            <p><br /></p>

            <h5 class="slBlueDark">Initialize Survloop Installation</h5>
            <p>
                Then browsing to the home page should prompt you to
                create the first admin user account:<br />
                http://<span class="red">example.com</span>
            </p>
            <p>
                If everything looks janky, then
                manually load the style sheets, etc:<br />
                http://<span class="red">example.com</span>/css-reload
            </p>
            <p>
                After logging in as an admin, this link
                rebuilds many supporting files:<br />
                http://<span class="red">example.com</span>/dashboard/settings?refresh=2
            </p>
            <p><br /></p>

            <p><br /></p>

            <h5 class="slBlueDark">Install Advanced Intrusion Detection Environment (Optional)</h5>
            <p>
                <a href="https://aide.github.io/" target="_blank"
                    >Advanced Intrusion Detection Environment (AIDE)</a>
                might be worth installing too:
<pre># echo "Y \n" | apt install aide
# aideinit
# cp /var/lib/aide/aide.db.new /var/lib/aide/aide.db
# cp /var/lib/aide/aide.conf.autogenerated /etc/aide/aide.conf</pre>
            <p><br /></p>

        </div>
    </div>

</div>

<p><br /></p>
