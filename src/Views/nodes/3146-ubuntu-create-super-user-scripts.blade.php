<!-- resources/views/vendor/survlooporg/nodes/3146-ubuntu-create-super-user-scripts.blade.php -->

<p>
    In your new server, first pull down a copy of
    <a href="https://github.com/rockhopsoft/install-scripts" target="_blank"
        >the Survloop installation scripts</a>. Then run the
    <a href="https://github.com/rockhopsoft/install-scripts/blob/master/src/ubuntu20/create-super-user.sh"
        target="_blank">Create Super User script</a> to create a super user to be used instead
        of the root account. This will restrict SSH access to your IP, or that of
    <a href="https://www.digitalocean.com/community/tutorials/how-to-set-up-and-configure-an-openvpn-server-on-ubuntu-20-04"
        target="_blank">your VPN tunnel</a>. This script includes an
    <a href="https://sysadminjournal.com/how-to-install-fail2ban-on-ubuntu-20-04/" target="_blank"
        >installation of Fail2ban</a>, and disables some unneeded networking tools.
</p>
<p>
    When prompted, enter your new super user's strong password —
    and copy it somewhere super duper safe, like a password manager.
    This first installation script will configure your SSH access to a
    custom port number. Be sure to securely copy this port number too.
</p>
<p>
    <b>If you have a YubiKey</b>, then you can optionally enter your token for UFA.
    Press your YubiKey USB button, and delete all but the first 12 characters for this token.
    (<a href="https://medium.com/@ismailyenigul/ssh-public-key-mfa-with-yubikey-on-centos-8-ubuntu-20-4-lts-8fb368133690"
        target="_blank">SSH Public key+MFA with Yubikey on Ubuntu 20.04 LTS</a>)
</p>
<p><br /></p>
<pre>$ git clone http://github.com/rockhopsoft/install-scripts
$ bash install-scripts/src/ubuntu20/survloop/01-create-user.sh</pre>