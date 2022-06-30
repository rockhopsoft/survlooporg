<!-- resources/views/vendor/survlooporg/nodes/3072-instruct-install-homestead-mac.blade.php -->

<p></p><p></p>
<ol>
    <li>
        Install <a href="https://apps.apple.com/us/app/xcode/id497799835" target="_blank"
            >XCode from the App Store</a>. Open it, and accept the user agreement.
    </li>
    <li>
        Install VirtualBox:
        <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank" rel="noopener"
            >https://www.virtualbox.org/wiki/Downloads</a>
    </li>
    <li>
        Install Vagrant:
        <a href="https://www.vagrantup.com/downloads.html" target="_blank" rel="noopener"
            >https://www.vagrantup.com/downloads.html</a>
    </li>
    <li>
        To the command line (Mac OS Terminal, or
        <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>)!
        Create local ssh key, if you haven't on this computer before:
<pre>% ssh-keygen -t rsa -C "your@emailaddress.com"</pre>
    </li>
    <li>
        Install Composer, Homestead, and initialize. For this example, the
        work area's directory is "~/homestead", but you can adjust it as needed:<br>
<pre>% vagrant box add laravel/homestead
% curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer
% cd ~/
% git clone https://github.com/laravel/homestead.git homestead
% cd homestead
% git checkout release
% bash init.sh</pre>
        <p>&nbsp;</p>
    </li>
    <li>
        Edit paths in Homestead.yaml:
<pre>% nano Homestead.yaml</pre>
        <p>Change the folders and sites, and setup your database:</p>
<pre>folders:
- map: ~/homestead/code
to: /home/vagrant/code

sites:
- map: <span class="red">survproject</span>.local
to: /home/vagrant/code/<span class="red">survproject</span>/public

databases:
- <span class="red">survproject</span></pre>
        <p>&nbsp;</p>
    </li>
    <li>
        Auto-add project(s) to the the /etc/hosts file,
        and start up your new virtual server:<br />
<pre>% vagrant plugin install vagrant-hostsupdater
% vagrant up</pre>
        <p><br></p>
    </li>
</ol>
