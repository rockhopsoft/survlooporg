<!-- resources/views/vendor/survlooporg/nodes/3118-ubuntu-create-database-manual.blade.php -->

<h5>Installing MYSQL Server</h5>
<p>
    Only do this is you are not using another Managed Database, like the ones
    DigitalOcean offers.  When you create a MYSQL password, be sure to copy
    and securely save it.
</p>
<pre># apt install mysql-server
# mysql_secure_installation</pre>
<p>During the MYSQL install, I choose to...</p>
<ul>
    <li><b>n</b> - No thanks, password plugin</li>
    <li><b>strong-password</b> - Needs to be copied and saved somewhere safe</li>
    <li><b>y</b> - Remove anonymous user</li>
    <li><b>y</b> - Disallow root login remotely</li>
    <li><b>y</b> - Remove test database</li>
    <li><b>y</b> - Reload privelege tables</li>
</ul>
<p>&nbsp;</p>
<pre># mysql</pre>
<pre>mysql> ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY '<span class="red">super_strong_password</span>';
mysql> FLUSH PRIVILEGES;
mysql> exit</pre>
<p><b>
    Enable Remote MYSQL Connection (&gt;=v5.7)
</b></p>
<pre># nano /etc/mysql/mysql.conf.d/mysqld.cnf</pre>
<p>
    Comment out the line for bind-address, set it to 0.0.0.0,
    or increase security with your own IP address.
</p>

<div class="row">
    <div class="col-md-7">
        <p>
            You might want a GUI to play with your databases. I've enjoyed
            <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>.
        </p>
        <p>
            Give your new SSH connection an appropriate name, and use your Droplet's IP address for
            the hosts. Copy the MYSQL root password you created while installing the core packages above.
        </p>
        <p>
            Finally, link your SSH Key in your operating system, "~/.ssh/id_rsa.pub".
            This can sometimes be challenging since this is a hidden folder which you may need to
            <a href="https://www.lifewire.com/display-hidden-files-in-os-x-153332"
                target="_blank" rel="noopener">work to reveal</a>.
        </p>
        <p>
            Once you are connected, use the drop-down in the top-left corner to "Add Database...".
            Give your database an appropriate name, and write it down for later.
        </p>
    </div>
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-06.png">
    </div>
</div>