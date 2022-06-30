<!-- resources/views/vendor/survlooporg/nodes/3118-ubuntu-create-database.blade.php -->

<h3>Associate A Domain Name</h3>
<p>
    This is a good time to associate your domain with the server, which is described in
    <a href="https://www.digitalocean.com/community/tutorials/how-to-install-linux-nginx-mysql-php-lemp-stack-ubuntu-18-04#step-3-%E2%80%93-installing-php-and-configuring-nginx-to-use-the-php-processor"
        target="_blank">Step 3 of the DigitalOcean tutorial</a>.
</p>
<p><br /></p>
<p><br /></p>


<h3>Create A Database</h3>

{!! $GLOBALS["SL"]->printToggleTabs([
    [
        "title" => 'Use DigitalOcean Managed DB',
        "body"  => view(
            'vendor.survlooporg.nodes.3118-ubuntu-create-database-do'
        )->render()
    ], [
        "title" => 'Install MYSQL DB on Droplet',
        "body"  => view(
            'vendor.survlooporg.nodes.3118-ubuntu-create-database-manual'
        )->render()
    ]
]) !!}

<p><br /></p>
<p><br /></p>
