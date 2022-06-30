<!-- resources/views/vendor/survlooporg/nodes/3072-instruct-install-homestead.blade.php -->

<div class="pT15"></div>
<h5 class="slBlueDark">Install Laravel's Homestead</h5>
<p>
    Survloop is built atop the
    <a href="https://laravel.com/" traget="_blanK">Laravel PHP framework</a>.
</p>
<p>
    <a href="https://laravel.com/docs/8.x/homestead" target="_blank"
    >"Laravel strives to make the entire PHP development experience delightful,
    including your local development environment. <b>Laravel Homestead</b> is an official,
    pre-packaged Vagrant box that provides you a wonderful development environment
    without requiring you to install PHP, a web server, and any other server
    software on your local machine."</a>
</p>
<p><b>
    While working through these instructions, replace all references to
    "<span class="red">survproject</span>" with another short directory name for your own project.
</b></p>

{!! $GLOBALS["SL"]->printToggleTabs([
    [
        "title" => 'Install on Mac',
        "body"  => view(
            'vendor.survlooporg.nodes.3072-instruct-install-homestead-mac'
        )->render()
    ], [
        "title" => 'No Windows & Linux Yet',
        "body"  => view(
            'vendor.survlooporg.nodes.3072-instruct-install-homestead-windows'
        )->render()
    ]
]) !!}

<p><br /></p>
