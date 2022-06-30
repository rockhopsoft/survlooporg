<!-- resources/views/vendor/survlooporg/nodes/494-instruct-install-homestead-survloop.blade.php -->

<h5 class="slBlueDark">Install Survloop</h5>

{!! $GLOBALS["SL"]->printToggleTabs([
    [
        "title" => 'Auto-Install Scripts',
        "body"  => view(
            'vendor.survlooporg.nodes.494-instruct-install-homestead-survloop-scripts'
        )->render()
    ], [
        "title" => 'All Commands, One-by-One',
        "body"  => view(
            'vendor.survlooporg.nodes.494-instruct-install-homestead-survloop-commands'
        )->render()
    ]
]) !!}

<p><br /></p>

{!! view('vendor.survlooporg.inc-instruct-survloop-initialize')->render() !!}
