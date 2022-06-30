<!-- resources/views/vendor/survlooporg/nodes/3163-instruct-install-survloop.blade.php -->

<h3>Install Survloop</h3>
<p>As your super user, enter 'sudo su' mode:</p>
<pre>$ sudo su</pre>
<p><br /></p>

{!! $GLOBALS["SL"]->printToggleTabs([
    [
        "title" => 'Auto-Install Scripts',
        "body"  => view(
            'vendor.survlooporg.nodes.3163-instruct-install-survloop-scripts'
        )->render()
    ], [
        "title" => 'All Commands, One-by-One',
        "body"  => view(
            'vendor.survlooporg.nodes.3163-instruct-install-survloop-commands'
        )->render()
    ]
]) !!}

<p><br /></p>
