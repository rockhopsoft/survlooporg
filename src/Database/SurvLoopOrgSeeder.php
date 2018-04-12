<?php 
// generated from /resources/views/vendor/survloop/admin/db/export-laravel-gen-seeder.blade.php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SurvLoopOrgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return  void
     */
    public function run()
    {
    	DB::table('SL_Databases')->insert([
			'DbID' => 1,
			'DbUser' => '1',
			'DbPrefix' => 'SLI_',
			'DbName' => 'SurvLoop Installs',
			'DbDesc' => 'Who\'s Using SurvLoop?',
			'DbTables' => '2',
			'DbFields' => '17'
		]);
		
		DB::table('SL_Tables')->insert([
			'TblID' => 29,
			'TblDatabase' => '1',
			'TblAbbr' => 'Inst',
			'TblName' => 'Installations',
			'TblEng' => 'SurvLoop Installations',
			'TblDesc' => 'This represents each website or system which is currently powered by SurvLoop.',
			'TblNumFields' => '10',
			'TblNumForeignKeys' => '1'
		]);
		DB::table('SL_Tables')->insert([
			'TblID' => 30,
			'TblDatabase' => '1',
			'TblName' => 'users',
			'TblEng' => 'Users',
			'TblDesc' => 'This represents the Laravel Users table, but will not actually be implemented by SurvLoop as part of the database installation.',
			'TblGroup' => 'DrugStory Users',
			'TblOrd' => '15',
			'TblNumForeignIn' => '1'
		]);
		
		DB::table('SL_Definitions')->insert([
			'DefID' => 1,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'cust-abbr',
			'DefDescription' => 'SurvLoopOrg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 4,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'site-name',
			'DefDescription' => 'SurvLoop.org'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 5,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-title',
			'DefDescription' => 'SurvLoop - All Our Data Are Belong'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 6,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-desc',
			'DefDescription' => 'Empower you to design your complex databases, collect data with an easy user experience, and create an API to share the data with the world!'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 7,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-keywords',
			'DefDescription' => 'SurvLoop, WikiWorldOrder, app, application, survey, database, data, database design, user experience, xml,'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 8,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'meta-img',
			'DefDescription' => '/survloop/uploads/survloop-meta-img.jpg'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 9,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-lrg',
			'DefDescription' => '/survloop/uploads/survloop.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 10,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-md',
			'DefDescription' => '/survloop/uploads/survloop.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 11,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'logo-img-sm',
			'DefDescription' => '/survloop/uploads/survloop.png'
		]);
		DB::table('SL_Definitions')->insert([
			'DefID' => 12,
			'DefDatabase' => '1',
			'DefSet' => 'System Settings',
			'DefSubset' => 'shortcut-icon',
			'DefDescription' => '/survloop/uploads/survloop-ico.png'
		]);
		
		DB::table('SL_Tree')->insert([
			'TreeID' => 1,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeName' => 'SurvLoop Installs',
			'TreeDesc' => 'Record of all websites and systems powered by the SurvLoop open data engine.',
			'TreeSlug' => 'survloop-installs',
			'TreeOpts' => '1',
			'TreeRoot' => '13',
			'TreeFirstPage' => '-3',
			'TreeLastPage' => '-3',
			'TreeCoreTable' => '29'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 2,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Primary Public XML',
			'TreeName' => 'SurvLoop Installs',
			'TreeSlug' => 'survloop-installs',
			'TreeOpts' => '1',
			'TreeRoot' => '12',
			'TreeFirstPage' => '-3',
			'TreeLastPage' => '-3',
			'TreeCoreTable' => '29'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 6,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'Admin Dashboard',
			'TreeSlug' => 'dashboard',
			'TreeOpts' => '21',
			'TreeRoot' => '26',
			'TreeFirstPage' => '26',
			'TreeLastPage' => '26',
			'TreeOpts' => '21'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 7,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'My Profile',
			'TreeSlug' => 'my-profile',
			'TreeOpts' => '23',
			'TreeRoot' => '28',
			'TreeOpts' => '23'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 8,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install SurvLoop',
			'TreeSlug' => 'how-to-install-survloop',
			'TreeOpts' => '1',
			'TreeRoot' => '44',
			'TreeFirstPage' => '44',
			'TreeLastPage' => '44'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 9,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install Laravel Locally On A Mac',
			'TreeSlug' => 'how-to-install-laravel-locally-on-a-mac',
			'TreeOpts' => '1',
			'TreeRoot' => '52',
			'TreeFirstPage' => '52',
			'TreeLastPage' => '52'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 10,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Page',
			'TreeName' => 'How To Install Laravel On A Digital Ocean Server',
			'TreeSlug' => 'how-to-install-laravel-on-a-digital-ocean-server',
			'TreeOpts' => '1',
			'TreeRoot' => '60',
			'TreeFirstPage' => '60',
			'TreeLastPage' => '60'
		]);
		DB::table('SL_Tree')->insert([
			'TreeID' => 11,
			'TreeDatabase' => '1',
			'TreeUser' => '1',
			'TreeType' => 'Redirect',
			'TreeName' => 'https://github.com/wikiworldorder/survloop',
			'TreeSlug' => 'github',
			'TreeOpts' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 7,
			'NodeTree' => '3',
			'NodeType' => 'Branch Title',
			'NodePromptText' => 'Database Designer'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 9,
			'NodeTree' => '3',
			'NodeParentID' => '11',
			'NodeType' => 'Text',
			'NodePromptText' => '<h2 class="slBlueDark">Welcome</h2>What kind of cool data do you want to collect and share?'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 10,
			'NodeTree' => '4',
			'NodeType' => 'Text',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 11,
			'NodeTree' => '3',
			'NodeParentID' => '7',
			'NodeType' => 'Page',
			'NodePromptText' => 'Welcome To Database Designer',
			'NodePromptNotes' => 'welcome'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 12,
			'NodeTree' => '2',
			'NodeType' => 'XML',
			'NodePromptText' => 'Installations',
			'NodePromptNotes' => '29'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 13,
			'NodeTree' => '1',
			'NodeType' => 'Data Manip: New',
			'NodeDataBranch' => 'Installations'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 14,
			'NodeTree' => '4',
			'NodeType' => 'XML',
			'NodePromptText' => 'DesignTweaks',
			'NodePromptNotes' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 15,
			'NodeTree' => '5',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'home',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 16,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p>SurvLoop is a Laravel-based engine for websites dominated by the collection and publication of open data. This is a database design and survey generation system, though it will increasingly be a flexible tool to solve many web-based problems.</p>
<p>It is currently in continued, heavy development, with much happening here in early 2018, almost ready to go live. I plan to provide more documentation in the coming weeks. Thank you for your interest and patience!</p>
<p>This was originally developed to build the <a href="https://github.com/flexyourrights/openpolice">Open Police</a> system. So until the SurvLoop installation processes automates everything, plus the bell &amp; whistle options, please check out the Open Police package for an heavy example of how to extend SurvLoop for your custom needs. (Lighter examples coming online soon!-)</p>
<p>The upcoming Open Police web app is the best live <strong>beta demo</strong> of the engine\'s end results, and feedback on that project and the SurvLoop user experience can be via the end of the submission process:<br /> <a href="http://openpolice.org/test">http://openpolice.org/test</a><br /> <br />The resulting database designed using the engine, as well as the branching tree which specifies the user\'s experience: <a href="https://openpolice.org/db/OP">/db/OP</a><br /> <a href="https://openpolice.org/tree/complaint">/tree/complaint</a><br /><br /> Among other methods, the resulting data can also be provided as XML included an automatically generated schema, eg.<br /> <a href="https://openpolice.org/complaint-xml-schema">/complaint-xml-schema</a><br /> <a href="https://openpolice.org/complaint-xml-example">/complaint-xml-example</a><br /> <a href="https://openpolice.org/complaint-xml-all">/complaint-xml-all</a></p>
<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 17,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '3',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><a href="https://openpolice.org" target="_blank"><img src="/survlooporg/uploads/openpolicecomplaints.png" border=0 width=75% ></a></p>
<p>&nbsp;</p>',
			'NodeResponseSet' => 'Default',
			'NodeDefault' => '#000;;#FFF;;#FFF;;;;w100;;N;;center;;auto',
			'NodeOpts' => '71'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 18,
			'NodeTree' => '5',
			'NodeParentID' => '22',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h2 class="slBlueDark">SurvLoop is an open data engine used to create, fill, and share complex databases.</h2>
<p>Back in the day we created database tables, queries, forms, reports, and pages with Microsoft Access<sup style="font-size: 8pt;">TM</sup> (and probably today, but who would). This is a full content management system that can generate mobile-friendly forms as complex as TurboTax<sup style="font-size: 8pt;">TM</sup>.</p>
<p>Translating each data field\'s meaning (in English) as you build your database, means computer-friendly API data listings and schema can be auto-generated once you start collecting data. In this way, these have ample documentation for human researchers worldwide.</p>
<p>Because the tools to create complex forms continue to become more useful, it was a logical next step to reuse them to generate complex pages for the rest of a website\'s main content. The basics needs are just about complete!</p>
<p>Another round of bells and whistles will be completed by ealry 2018. And the goal is to significantly improve all the admin editing tools by the end of 2018.</p>
<p>And hopefully by the end of 2019, almost all of the admin tools will be replaced with SurvLoop-generated forms, to also approach the status of a being self~replicating GUI!</p>
<p><em>A theme is branching trees, in many directions. Fractals are fun.</em></p>
<p><em>&nbsp;</em></p>
<p><em>&nbsp;</em></p>',
			'NodeOpts' => '67'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 19,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeParentOrder' => '1',
			'NodeType' => 'Big Button',
			'NodeResponseSet' => 'Default',
			'NodeDefault' => '<i class="fa fa-github mR5" aria-hidden="true"></i> github.com/wikiworldorder/survloop',
			'NodeDataStore' => 'window.open(\'https://github.com/wikiworldorder/survloop\');'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 20,
			'NodeTree' => '5',
			'NodeParentID' => '42',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>',
			'NodeOpts' => '67'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 21,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '2'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 22,
			'NodeTree' => '5',
			'NodeParentID' => '21',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 23,
			'NodeTree' => '5',
			'NodeParentID' => '21',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 24,
			'NodeTree' => '5',
			'NodeParentID' => '23',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p><img src="/survloop/uploads/survloop-logo-x800.jpg" border=0 width=100% ></p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 25,
			'NodeTree' => '5',
			'NodeParentID' => '21',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 26,
			'NodeTree' => '6',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'dashboard',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 27,
			'NodeTree' => '6',
			'NodeParentID' => '26',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<h2>Welcome to Admin Dashboard.</h2>
<p>Edit this node to fill in your page! This node could be your entire page, or just one little component.</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 28,
			'NodeTree' => '7',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'my-profile'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 29,
			'NodeTree' => '7',
			'NodeParentID' => '28',
			'NodeType' => 'Member Profile Basics'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 30,
			'NodeTree' => '7',
			'NodeParentID' => '28',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Row'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 31,
			'NodeTree' => '7',
			'NodeParentID' => '30',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '7'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 32,
			'NodeTree' => '7',
			'NodeParentID' => '30',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 33,
			'NodeTree' => '7',
			'NodeParentID' => '30',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '4'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 34,
			'NodeTree' => '7',
			'NodeParentID' => '31',
			'NodeType' => 'Search Results',
			'NodePromptText' => '<h2>Your Participation</h2>',
			'NodeResponseSet' => '1',
			'NodeDataBranch' => 'users'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 35,
			'NodeTree' => '7',
			'NodeParentID' => '33',
			'NodeType' => 'Incomplete Sess Check',
			'NodeResponseSet' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 36,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '4',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><a href="http://cannabispowerscore.org" target="_blank" rel="noopener"><img src="/survlooporg/uploads/PowerScoreLogo-.jpg" width="70%" border="0" /></a></p>
<p>&nbsp;</p>
<p>&nbsp;</p>',
			'NodeDefault' => '#FFF;;#666;;#416CBD;;;;w100;;N;;center;;auto',
			'NodeOpts' => '71'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 37,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '5',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><a href="https://drugstory.me" target="_blank"><img src="/survlooporg/uploads/drugstory.png" border=0 width=50% ></a></p>
<p>&nbsp;</p>',
			'NodeDefault' => '#000;;#DDD;;#FFF;;;;w100;;N;;center;;auto',
			'NodeOpts' => '71'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 38,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '2',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<center><p><i>Other Sites Currently Running SurvLoop:</i></p></center>
<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 39,
			'NodeTree' => '5',
			'NodeParentID' => '15',
			'NodeParentOrder' => '6',
			'NodeType' => 'Layout Row',
			'NodeCharLimit' => '3'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 40,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '6'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 41,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeParentOrder' => '1',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 42,
			'NodeTree' => '5',
			'NodeParentID' => '39',
			'NodeParentOrder' => '2',
			'NodeType' => 'Layout Column',
			'NodeCharLimit' => '5'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 43,
			'NodeTree' => '5',
			'NodeParentID' => '40',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<p><iframe width="560" height="315" src="https://www.youtube.com/embed/DcooFRrepBA" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></p>
<p>&nbsp;</p>
<h3>Start Helping With Code</h3>
<p>Here are some resources to help get you off the ground in helping this effort!</p>
<ul><li><a href="/how-to-install-survloop">How to install SurvLoop (on top of Laravel)</a></li>
<li><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally on a Mac</a></li>
<li><a href="/how-to-install-laravel-on-a-digital-ocean-server">How to install Laravel on a Digital Ocean server</a></li></ul>
<p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 44,
			'NodeTree' => '8',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-survloop',
			'NodePromptAfter' => 'How To Install SurvLoop::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 51,
			'NodeTree' => '8',
			'NodeParentID' => '44',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<div class="row">
<div class="col-md-5">
<h1>How To Install SurvLoop</h1>
<i>After You\'ve Installed Laravel</i>
</div><div class="col-md-1"></div><div class="col-md-6">
<div class="jumbotron"><ul>
<li><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally <nobr>on a Mac</nobr></a></li>
<li><a href="/how-to-install-laravel-on-a-digital-ocean-server">How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</a></li>
</ul></div>
</div></div>
<p>&nbsp;</p>
<p>Install Laravel\'s default user authentication, notifications, and SurvLoop:</p>
<pre>
$ php artisan make:auth
$ php artisan vendor:publish --tag=laravel-notifications
</pre>
<p>&nbsp;</p>
<p>Update `composer.json` to add requirements and an easier SurvLoop reference:</p>
<pre>
$ nano composer.json
</pre>
<pre>...
"require": {
	...
    "wikiworldorder/survloop": "0.*",
    "matthiasmullie/minify": "~1.3",
	...
},
...
"autoload": {
	...
	"psr-4": {
		...
		"SurvLoop\\": "vendor/wikiworldorder/survloop/src/",
		"MatthiasMullie\\Minify\\": "vendor/matthiasmullie/minify/src/",
		"MatthiasMullie\\PathConverter\\": "vendor/matthiasmullie/path-converter/src/",
	}
	...
}, ...
</pre>
<pre>
$ composer update
</pre>
<p>&nbsp;</p>
<p>Add the package to your application service providers in `config/app.php`.</p>
<pre>
$ nano config/app.php
</pre>
<pre>...
    \'name\' => \'SurvLoop\',
...
\'providers\' => [
	...
	SurvLoop\SurvLoopServiceProvider::class,
	...
],
...
\'aliases\' => [
	...
	\'SurvLoop\'	=> \'WikiWorldOrder\SurvLoop\SurvLoopFacade\',
	...
], ...
</pre>
<p>&nbsp;</p>
<p>Swap out the SurvLoop user model in `config/auth.php`.</p>
<pre>
$ nano config/auth.php
</pre>
<pre>...
\'model\' => App\Models\User::class,
...</pre>
<p>&nbsp;</p>
<p>Update composer, publish the package migrations, etc...</p>
<pre>
$ php artisan vendor:publish --force
$ php artisan migrate
$ composer dump-autoload
$ php artisan db:seed --class=SurvLoopSeeder
</pre>
<p>&nbsp;</p>
<p>For now, to apply database design changes to the same installation you are working in, depending on your server, 
you might also need something like this...</p>
<pre>
$ chown -R www-data:33 app/Models
$ chown -R www-data:33 database
</pre>
<p>&nbsp;</p>
<p>Browse to load the style sheets, etc.. /dashboard/css-reload</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 52,
			'NodeTree' => '9',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-laravel-locally-on-a-mac',
			'NodePromptAfter' => 'How To Install Laravel Locally On A Mac::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 53,
			'NodeTree' => '9',
			'NodeParentID' => '52',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h1>How To Install Laravel Locally On A Mac</h1>
<i>So You Can Install SurvLoop</i>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-7">
I have only been learning <a href="https://laravel.com/" target="_blank" rel="noopener">Laravel</a> for a year, but below is the Homestead install process which has worked best for me. Homestead is Laravel\'s own development environment, powered by Vagrant.</p>
<p><b>Replace all references to "ProjectName" with a short name for your own project.</b></p>
</div><div class="col-md-1"></div><div class="col-md-4">
<div class="jumbotron"><ul><li><a href="/how-to-install-survloop">How to install SurvLoop <span class="fPerc80"><nobr>(after installing Laravel)</nobr></span></a></li>
<li><a href="/how-to-install-laravel-on-a-digital-ocean-server">How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</a></li></ul></div>
</div></div>
<ol>
 	<li>Install XCode from the App Store. Open it, and accept the user agreement.<p>&nbsp;</p></li>
 	<li>Install VirtualBox: <a href="https://www.virtualbox.org/wiki/Downloads" target="_blank" rel="noopener">https://www.virtualbox.org/wiki/Downloads</a><p>&nbsp;</p></li>
 	<li>Install Vagrant: <a href="https://www.vagrantup.com/downloads.html" target="_blank" rel="noopener">https://www.vagrantup.com/downloads.html</a><p>&nbsp;</p></li>
 	<li>To the command line (Mac OS Terminal, or <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>)! Create local ssh key, if you haven\'t on this computer before:
<pre>$ ssh-keygen -t rsa -C "your@emailaddress.com"</pre>
<p>&nbsp;</p>
</li>
 	<li>Install Composer, Homestead, and initialize:
<pre>$ curl -sS https://getcomposer.org/installer | sudo php -- --install-dir=/usr/local/bin --filename=composer  
$ mkdir ~/web
$ mkdir ~/web/sites
$ mkdir ~/web/sites/ProjectName
$ cd ~/web
$ git clone https://github.com/laravel/homestead.git Homestead
$ cd Homestead
$ bash init.sh</pre>
<p>&nbsp;</p>
</li>
 	<li>Edit paths in Homestead.yaml:
<pre>$ nano ~/.homestead/Homestead.yaml</pre>
<em>Change this chunk of code:</em>
<pre>folders: 
	- map: ~/Code
	  to: /home/vagrant/Code
sites:
    - map: homestead.app
      to: /home/vagrant/Code/Laravel/public</pre>
<em>To this chunk of code:</em>
<pre>folders: 
	- map: ~/web/sites/ProjectName
	  to: /home/vagrant/Code
sites:
    - map: homestead.app
      to: /home/vagrant/Code/ProjectName/public</pre>
<p>&nbsp;</p>
</li>
 	<li>Edit the hosts file:
<pre>$ sudo nano /etc/hosts</pre>
Add one line to the bottom:
<pre>192.168.10.10   homestead.app</pre>
<p>&nbsp;</p>
</li>
 	<li>Launch your local server ("vagrant up"), log into it, and install Laravel!...
<pre>$ cd ~/web/Homestead
$ vagrant up
$ vagrant ssh
$ cd /home/vagrant/Code
$ composer global require "laravel/installer"
$ composer create-project laravel/laravel ProjectName "5.3.*"
</pre>
</li>
</ol>
<p>&nbsp;</p>
<p>Now you should be able to confirm your successful installation by pulling up http://homestead.app/ in your browser!</p>
<ul>
 	<li>If you like, you can now connect to your server\'s database with something like <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>, and the following default login info.... Host: 127.0.0.1 , Username: homestead , Password: secret , Port: 33060 , Database: homestead .</li>
</ul>
<p>&nbsp;</p>
And you\'re ready to start installing more Laravel packages and building your own world. Here, inside your virtual vagrant server via SSH, you can enter your new project\'s main composer directory (/home/vagrant/Code/ProjectName), which displays in your actual machine\'s file system in ~/web/sites/ProjectName/ProjectName (that\'s within your main user account folder alongside Documents, Pictures, etc).
<pre>$ cd ProjectName</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
You could do things like install Laravel\'s out-of-the-box user authentication tools:
<pre>$ php artisan make:auth</pre>
<p>Or install the SurvLoop software I\'ve started: <a href="https://packagist.org/packages/wikiworldorder/survloop" target="_blank" rel="noopener">https://packagist.org/packages/wikiworldorder/survloop</a></p>
<p>Or anything else you can imagine: <a href="https://laravel.com/docs/5.3" target="_blank" rel="noopener">https://laravel.com/docs/5.3</a></p>
<p>&nbsp;</p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
</p>&nbsp;</p>'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 60,
			'NodeTree' => '10',
			'NodeType' => 'Page',
			'NodePromptNotes' => 'how-to-install-laravel-on-a-digital-ocean-server',
			'NodePromptAfter' => 'How To Install Laravel On A Digital Ocean Server::M::::M::::M::',
			'NodeCharLimit' => '-1'
		]);
		DB::table('SL_Node')->insert([
			'NodeID' => 61,
			'NodeTree' => '10',
			'NodeParentID' => '60',
			'NodeParentOrder' => '1',
			'NodeType' => 'Instructions',
			'NodePromptText' => '<p>&nbsp;</p>
<h1>How To Install Laravel On A <nobr>Digital Ocean</nobr> Server</h1>
<i>So You Can Install SurvLoop</i>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-7">
<h3>Create Your SSH Key, If You Haven\'t Already</h3>
<p>From the macOS Terminal (Applications -&gt; Utilities) — or alternatives like <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a> — run this command</p>
<pre>ssh-keygen -t rsa</pre>
<p>Press the ENTER key to accept the default location, then enter a passphrase twice. This creates new files in your Mac User\'s folder at "~/.ssh/id_rsa.pub" and "~/.ssh/id_rsa". Run the following command to copy your key to your clipboard, for the next step:</p>
<pre>pbcopy &lt; ~/.ssh/id_rsa.pub</pre>
</div><div class="col-md-1"></div><div class="col-md-4">
<div class="jumbotron"><ul><li><a href="/how-to-install-survloop">How to install SurvLoop <span class="fPerc80"><nobr>(after installing Laravel)</nobr></span></a></li>
<li><a href="/how-to-install-laravel-locally-on-a-mac">How to install Laravel locally <nobr>on a Mac</nobr></a></li></ul></div>
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Log Into Your <a href="https://www.digitalocean.com/" target="_blank" rel="noopener">Digital Ocean</a> Account.<br /><br />
Create a new Droplet, with a recent version of Ubuntu.</h3>
<p>The minimal memory size of 1GB is sufficient to get off the ground.</p>
<p>If you have already setup your SSH Key with Digital Ocean before, select it. Otherwise, click the "New SSH Key" button and paste the contents of your key which was copied to your clipboard above.</p>
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-01.png" alt="" />
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<p>&nbsp;</p>
After it is created, open up your Droplet in the website, go to the "Access" tab, and click the button to "Reset Root Password".This will quickly reboot the server while resetting the root password, then send it to your account\'s email address.

It sometimes take around 10 minutes to receive, in my limited experience.</div><div class="col-md-1"></div><div class="col-md-7"><img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-02.png" /></div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<h3>Link The Domain (optional)</h3>
<p>Go to your <a href="https://canvashost.com/" target="_blank" rel="noopener">domain registrar</a> and setup Custom DNS Servers to...</p>
<ul>
 	<li>ns1.digitalocean.com</li>
 	<li>ns2.digitalocean.com</li>
 	<li>ns3.digitalocean.com</li>
</ul>
<p>Then return to Digital Ocean and go to the Networking area, where you can "Add a domain":</p>
</div><div class="col-md-1"></div><div class="col-md-7">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-03.png" />
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row">
<div class="col-md-4">
<p>&nbsp;</p>
<p>This will bring you to the domain\'s details, where you should add DNS Records. Add two "A Records" pointing to your newly created Droplet, one for hostname "@" and one for hostname "www"...</p>
</div><div class="col-md-1"></div><div class="col-md-7">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-04.png" />
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h2>Setup Your Server</h2>
<div class="row"><div class="col-md-7">
<p>Once you receive your server\'s reset root password via email, you can log into your server via SSH. You can use Digital Ocean\'s button to "Launch Console", but other command line terminals (e.g. <a href="https://www.iterm2.com/" target="_blank" rel="noopener">iTerm</a>) will allow you to copy and paste things like your most secure passwords.</p>
<p>If your domain linkage has already propagated, you can SSH connect using your domain name instead of your server\'s IP address in this command:</p>
<pre>ssh root@12.34.56.78</pre>
<p>This will prompt you for the temporary password you were emailed as "(current) UNIX password." Then you should enter a new, <a href="https://strongpasswordgenerator.com/" target="_blank" rel="noopener">strong password</a> twice when the server prompts you.</p>
</div><div class="col-md-1"></div><div class="col-md-4">
<div class="jumbotron"><h3>DON\'T FORGET TO COPY AND SAVE YOUR PASSWORD SOMEWHERE SECURE.</h3></div>
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install Core Web Packages (Apache version)</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key. When you create a MYSQL password, be sure to copy and securely save it.</p>
<pre>$ apt-get update
$ apt-get install tasksel
$ tasksel install lamp-server
$ apt-get install php-mbstring
$ apt-get install php-zip
$ apt-get install phpunit</pre>
<p>Now edit this Apache file:</p>
<pre>nano /etc/apache2/mods-enabled/dir.conf</pre>
<p>...and move index.php to the front of the list there:</p>
<pre>DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm</pre>
<p>Save a file in the \'nano\' editor by clicking Control-X, "Save modified buffer?" type "Y" for Yes, then press enter to confirm overwriting the file with the same filename. Then restart Apache:</p>
<pre>service apache2 restart</pre>
<p>&nbsp;</p>
<h4>Test That PHP Is Running (optional)</h4>
<p>Create a new file in the default public root:</p>
<pre>nano /var/www/html/index.php</pre>
<p>Type this, "&lt;?php phpinfo(); ?&gt;", into the empty file, and save it. If things are working, you should be able to type your IP address (or propagated domain name) into your browser, and <a href="https://s14-eu5.ixquick.com/cgi-bin/serveimage?url=https:%2F%2Fassets.digitalocean.com%2Farticles%2Fphp_edit%2Fphpinfo.png&amp;sp=65cea842f80f5dedbeba0cc83ec9851d" target="_blank" rel="noopener">see a bunch of details</a> about your PHP installation.</p>
<p>&nbsp;</p>
<h4>Install Pear &amp; Composer</h4>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ wget http://pear.php.net/go-pear.phar
$ php go-pear.phar
$ apt-get install curl
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
$ service apache2 restart</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<div class="row"><div class="col-md-4">
<h3>Create A Database</h3>
<p>Down the line, you might want a GUI to play with your databases. I\'ve enjoyed <a href="https://www.sequelpro.com/" target="_blank" rel="noopener">Sequel Pro</a>.</p>
<p>Give your new SSH connection an appropriate name, and use your Droplet\'s IP address for the hosts. Copy the MYSQL root password you created while installing the core packages above.</p>
<p>Finally, link your SSH Key in your operating system, "~/.ssh/id_rsa.pub". This can sometimes be challenging since this is a hidden folder which you may need to <a href="https://www.lifewire.com/display-hidden-files-in-os-x-153332" target="_blank" rel="noopener">work to reveal</a>.</p>
</div><div class="col-md-4"></div><div class="col-md-4">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-05.png" />
</div></div>
<p>&nbsp;</p>
<div class="row"><div class="col-md-4">
<p>Once you are connected, use the drop-down in the top-left corner to "Add Database...". Give your database an appropriate name, and write it down for later.</p>
</div><div class="col-md-2"></div><div class="col-md-6">
<img class="w100" src="/survlooporg/uploads/laravel-digital-ocean-06.png" />
</div></div>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install Laravel</h3>
<p>Run this series of commands, accepting defaults, and confirmations by pressing the Enter key:</p>
<pre>$ rm /var/www/html/index.html
$ composer create-project laravel/laravel /var/www/laravel 5.3.*
$ rm /var/www/laravel/vendor/compiled.php
$ cd /var/www/laravel
$ composer update
$ php artisan key:generate
$ chown -R www-data:33 /var/www/laravel/storage
$ chmod -R gu+w /var/www/laravel/storage
$ nano .env</pre>
<p>While editing Laravel\'s .env file, enter your domain name for the APP_URL, and database connection info:</p>
<pre>APP_URL=https://example.com

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=newdatabasename
DB_USERNAME=root
DB_PASSWORD=strongpassword</pre>
<p>Finally just clear the cache...</p>
<pre>php artisan cache:clear</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Setup Server\'s Domain</h3>
<pre>$ cd /etc/apache2/sites-available
$ cp 000-default.conf example.com.conf
$ nano /etc/apache2/sites-available/example.com.conf</pre>
<p>Edit this file to replace "DocumentRoot /var/www/html" with:</p>
<pre>DocumentRoot /var/www/laravel/public</pre>
<p>Open up one more file to edit:</p>
<pre>nano /etc/apache2/apache2.conf</pre>
<p>Edit the bottom of this new file, to replace these two default lines for the public directory settings (/var/www) with...</p>
<pre>Directory /var/www/laravel/public
        AllowOverride All</pre>
<p>Run a few more commands to finish this step:</p>
<pre>$ a2dissite 000-default &amp;&amp; sudo a2ensite example.com
$ a2enmod rewrite
$ /etc/init.d/apache2 restart</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h3>Install SSL Certificate</h3>
<p>Thanks to the <a href="https://www.eff.org/" target="_blank" rel="noopener">EFF</a>\'s <a href="https://certbot.eff.org/" target="_blank" rel="noopener">Certbot</a>, you can now get this step down quickly and easily... for free!! Just run these commands:</p>
<pre>$ apt-get install software-properties-common
$ add-apt-repository ppa:certbot/certbot
$ apt-get update
$ apt-get install python-certbot-apache
$ certbot --apache
$ certbot renew</pre>
<p>&nbsp;</p>
<hr>
<p>&nbsp;</p>
<h2>Start Using Laravel or Install SurvLoop</h2>
<p>You should now have a functioning server with basic, common security measures installed! From here, you can <a href="https://github.com/wikiworldorder/survloop#getting-started">install SurvLoop</a>, any other Laravel-based projects, or start building your own. You should now see the basic Laravel page when you browse to your IP address or domain name.</p>
</p>&nbsp;</p>
<h3><a href="/how-to-install-survloop"><i class="fa fa-arrow-circle-right" aria-hidden="true"></i> How to install SurvLoop <nobr>(after installing Laravel)</nobr></a></h3>
</p>&nbsp;</p>'
		]);
	
    }
}
