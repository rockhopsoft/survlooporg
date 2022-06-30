<!-- resources/views/vendor/survlooporg/inc-instruct-survloop-initialize.blade.php -->

<h5 class="slBlueDark">Initialize Survloop Installation</h5>
<p>
    If everything went well, this script should preload the system CSS
    before you open your first page in the browser, and just returns a smiley face:
</p>
<pre>% curl http://<span class="red">survproject</span>.local/css-reload</pre>
<p>
    Browse to the home page, and it should prompt
    you to create the first admin user account:<br />
    <a href="http://survproject.local" target="_blank">http://<span class="red">survproject</span>.local</a>
</p>
<p>
    If everything looks janky, then
    manually load the style sheets, etc:<br />
    <a href="http://survproject.local/css-reload" target="_blank"
        >http://<span class="red">survproject</span>.local/css-reload</a>
</p>
<p>
    After logging in as an admin, this link
    rebuilds many supporting files:<br />
    <a href="http://survproject.local/dashboard/settings?refresh=2"
        target="_blank"
        >http://<span class="red">survproject</span>.local/dashboard/settings?refresh=2</a>
</p>
<p><br /></p>
<p>
    Then you should be able to open the home page, and log in.<br />
    <a href="http://survproject.local" target="_blank"
        >http://<span class="red">survproject</span>.local</a>
</p>


<p><br /></p>
