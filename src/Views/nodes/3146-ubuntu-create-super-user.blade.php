<!-- resources/views/vendor/survlooporg/nodes/3146-ubuntu-create-super-user.blade.php -->

<h5 class="slBlueDark">Create Super User, Disable Root</h5>
<p>
    For these instructions, the new user is named
    <span class="red">rockhopuser</span>, but you can call it anything.
</p>
<p>
    Instead of 22, we will select a SSH Port to connect to (between 23 and 1023).
    The custom SSH port here will be <span class="red">123</span>.
</p>
<p>
    For these instructions, the Server IP Address will be
    <span class="red">123.45.67.890</span>. We will setup SSH access restricted
    to your fixed IP Adress — hopefully this is your VPN's IP Address —
    here it will be <span class="red">98.76.54.321</span>.
</p>
<pre>% ssh root@<span class="red">server.ip.address</span></pre>
<div class="m0"><i>e.g.</i></div>
<pre>% ssh root@<span class="red">123.45.67.890</span></pre>
<p><br /></p>


<div class="w100 round10 brdRed p15">
    <h5 class="slRedDark">
        <i class="fa fa-bug" aria-hidden="true"></i> Temporary Bug Workaround
    </h5>
    <p>
        Recently, fresh DigitalOcean Droplets have been giving errors when 'apt upgrade' is run.
        <a href="https://askubuntu.com/questions/1266543/do-release-upgrade-stuck-configuring-openssh-server"
            target="_blank">A post</a> helped me through this [temporary] problem...
    </p>
    <p>
    <b>Before running the main installation steps below, run the first three commands manually:</b>
    </p>
<pre>$ apt-add-repository universe
$ apt update
$ echo "Y" | apt upgrade</pre>
    <p>
        If the 'apt upgrade' command hangs on a sshd_config screen,
        close your terminal tab and reconnect to the server in a fresh terminal.
        Then get a list of locked processed:
    </p>
    <pre>sudo lsof /var/cache/apt/archives/lock</pre>
    <p>
        Hopefully, this provides some results including a line like this:
    </p>
<pre>focal   <span class="red">14627</span> root   66u   REG  259,3        0 12328392 /var/cache/apt/archives/lock</pre>
    <p>
        Use those results to identify the process number to kill:
    </p>
<pre>sudo kill <span class="red">14627</span>  # focal upgrade process</pre>
    <p>
        If this workaround works, you should now hopefully be
        able to continue the installation process as intended below.
    </p>
</div>
<p><br /></p>
<p><br /></p>

{!! $GLOBALS["SL"]->printToggleTabs([
    [
        "title" => 'Auto-Install Scripts',
        "body"  => view(
            'vendor.survlooporg.nodes.3146-ubuntu-create-super-user-scripts'
        )->render()
    ], [
        "title" => 'All Commands, One-by-One',
        "body"  => view(
            'vendor.survlooporg.nodes.3146-ubuntu-create-super-user-commands'
        )->render()
    ]
]) !!}

<p><br /></p>

<p>Give the server a minute or two to reboot...</p>
<pre># reboot</pre>
<p>Then log back into the server with your new super user.</p>
<pre>% ssh <span class="red">super_user</span>@<span class="red">server.ip.address</span> -p <span class="red">custom_ssh_port</span></pre>
<div class="m0"><i>e.g.</i></div>
<pre>% ssh <span class="red">rockhopuser</span>@<span class="red">123.45.67.890</span> -p <span class="red">123</span></pre>
<p><br /></p>

