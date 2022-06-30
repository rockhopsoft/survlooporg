<!-- resources/views/vendor/survlooporg/nodes/3146-ubuntu-create-super-user-commands.blade.php -->

<p>
    This is a summary of
    <a href="https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-20-04"
        target="_blank">Digital Ocean's Initial Server Setup with Ubuntu 20.04</a>.
    The last line copies your SSH Key from your root user to your new one.
</p>
<pre>$ apt-add-repository universe
$ apt update
$ echo "Y" | apt upgrade
$ adduser <span class="red">rockhopuser</span>
$ usermod -aG sudo <span class="red">rockhopuser</span>
$ rsync --archive --chown=<span class="red">rockhopuser</span>:<span class="red">rockhopuser</span> ~/.ssh /home/<span class="red">rockhopuser</span></pre>
<p></p>
<hr>
<h5 class="slBlueDark">If you have a Yubikey...</h5>
<p>
    You will need the first 12 characters of your Yubikey,
    e.g. <span class="red">cccccfghjcff</span>:
</p>
<pre>$ apt install libpam-yubico -y
$ echo "<span class="red">rockhopuser</span>:<span class="red">cccccfghjcff</span>" &gt;&gt; /etc/yubico
$ sed -i 's/&#64;include common-auth/auth required pam_yubico.so id=16 debug authfile=\/etc\/yubico/g' /etc/pam.d/sshd
$ sed -i 's/ChallengeResponseAuthentication no/ChallengeResponseAuthentication yes/g' /etc/ssh/sshd_config
$ sed -i 's/# Authentication:/AuthenticationMethods publickey,keyboard-interactive/g' /etc/ssh/sshd_config
$ sed -i 's/UsePAM no/UsePAM yes/g' /etc/ssh/sshd_config
$ systemctl restart sshd</pre>

<h5>If you do not have a Yubikey...</h5>
<pre>$ sed -i 's/UsePAM yes/UsePAM no/g' /etc/ssh/sshd_config
$ systemctl restart sshd</pre>
<p><br /></p>

<h5 class="slBlueDark">
    Edit Port and User IP in Uncomplicated Firewall (UFW)
</h5>
<p>
    Instead of 22, what SSH PORT will you connect to, between 23 and 1023?
    e.g. <span class="red">123</span>
</p>
<p>
    This will also restrict SSH access to your VPN's IP,
    e.g. <span class="red">98.76.54.321</span>
</p>
<pre>$ sed -i "s/#Port 22/Port <span class="red">123</span>/g" /etc/ssh/sshd_config
$ sed -i 's/PermitRootLogin yes/PermitRootLogin no/g' /etc/ssh/sshd_config
$ sed -i 's/#LogLevel INFO/LogLevel VERBOSE/g' /etc/ssh/sshd_config
$ ufw default deny incoming
$ ufw default allow outgoing
$ ufw limit from <span class="red">98.76.54.321</span> to any port <span class="red">123</span>
$ echo "y" | ufw enable
$ systemctl restart sshd</pre>
<p>Disabling various over~networking</p>
<pre>$ sed -i 's/#net.ipv4.conf.default.rp_filter=1/net.ipv4.conf.default.rp_filter=1/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv4.conf.all.rp_filter=1/net.ipv4.conf.all.rp_filter=1/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv4.conf.all.accept_redirects = 0/net.ipv4.conf.all.accept_redirects = 0/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv6.conf.all.accept_redirects = 0/net.ipv6.conf.all.accept_redirects = 0/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv4.conf.all.send_redirects = 0/net.ipv4.conf.all.send_redirects = 0/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv4.conf.all.accept_source_route = 0/net.ipv4.conf.all.accept_source_route = 0/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv6.conf.all.accept_source_route = 0/net.ipv6.conf.all.accept_source_route = 0/g' /etc/sysctl.conf
$ sed -i 's/#net.ipv4.conf.all.log_martians = 1/net.ipv4.conf.all.log_martians = 1/g' /etc/sysctl.conf
$ sysctl -p</pre>
<p><br /></p>

<h5 class="slBlueDark">Install Fail2ban</h5>
<p>Include exception for your VPN's IP address:</p>
<pre>$ apt update
$ apt upgrade
$ add-apt-repository universe
$ echo "Y" | apt install fail2ban
$ systemctl start fail2ban
$ systemctl enable fail2ban
$ cp /etc/fail2ban/jail.conf /etc/fail2ban/jail.local
$ sed -i "s/#ignoreip = 127.0.0.1\/8 ::1/ignoreip = <span class="red">98.76.54.321</span>/g" /etc/fail2ban/jail.local
$ sed -i 's/bantime  = 10m/bantime  = 30m/g' /etc/fail2ban/jail.local
$ sed -i 's/maxretry = 5/maxretry = 3/g' /etc/fail2ban/jail.local
$ sed -i 's/enabled = false/enabled = true/g' /etc/fail2ban/jail.local
$ systemctl enable fail2ban
$ systemctl status fail2ban.service
$ fail2ban-client status sshd</pre>
